@php $editing = isset($user) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.number
            name="step"
            label="Satut de client"
            :value="old('step', ($editing ? $user->step : '1'))"
            max="255"
            placeholder="étape actuel de client"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="firstname"
            label="Prénom"
            :value="old('firstname', ($editing ? $user->firstname : ''))"
            maxlength="255"
            placeholder="votre prénom ici . . ."
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="lastname"
            label="Nom"
            :value="old('lastname', ($editing ? $user->lastname : ''))"
            maxlength="255"
            placeholder="votre nom ici . . ."
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="mobile"
            label="Mobile"
            :value="old('mobile', ($editing ? $user->mobile : ''))"
            maxlength="255"
            placeholder="07123456789"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="fix"
            label="Fix"
            :value="old('fix', ($editing ? $user->fix : ''))"
            maxlength="255"
            placeholder="02123456789"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.email
            name="email"
            label="Adress Email"
            :value="old('email', ($editing ? $user->email : ''))"
            maxlength="255"
            placeholder="accessenergies@gmail.com"
            required
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.password
            name="password"
            label="Mot de passe"
            maxlength="255"
            placeholder="***************"
            :required="!$editing"
        ></x-inputs.password>
    </x-inputs.group>
</div>
