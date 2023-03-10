<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:50'],
            'firstname'=>['required', 'string', 'max:50'],
            'lastname'=>['required', 'string', 'max:50'],
            'mobile'=>['required', 'numeric', 'digits:10'],
            'fix'=>['required', 'numeric', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'firstname' => $input['firstname'],
            'mobile' => $input['mobile'],
            'step' => 1,
            'fix' => $input['fix'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
