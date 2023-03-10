@php $editing = isset($user) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.select name="step" label="Statut de client">
            @php $selected = old('step', ($editing ? $user->step : '1')) @endphp
            <option value="Presnetation" {{ $selected == 'Presnetation' ? 'selected' : '' }} >1</option>
            <option value="Eligibilité" {{ $selected == 'Eligibilité' ? 'selected' : '' }} >2</option>
            <option value="Validation" {{ $selected == 'Validation' ? 'selected' : '' }} >3</option>
            <option value="Récolte des données" {{ $selected == 'Récolte des données' ? 'selected' : '' }} >4</option>
            <option value="" {{ $selected == '' ? 'selected' : '' }} >5</option>
            <option value="" {{ $selected == '' ? 'selected' : '' }} >6</option>
            <option value="" {{ $selected == '' ? 'selected' : '' }} ></option>
            <option value="" {{ $selected == '' ? 'selected' : '' }} ></option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="firstname"
            label="Pénom"
            :value="old('firstname', ($editing ? $user->firstname : ''))"
            maxlength="60"
            placeholder="votre prénom . . ."
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="lastname"
            label="Nom"
            :value="old('lastname', ($editing ? $user->lastname : ''))"
            maxlength="60"
            placeholder="votre nom . . ."
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="mobile"
            label="Mobile"
            :value="old('mobile', ($editing ? $user->mobile : ''))"
            maxlength="20"
            placeholder="07123456784"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="fix"
            label="Fix"
            :value="old('fix', ($editing ? $user->fix : ''))"
            maxlength="20"
            placeholder="0212345678"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.email
            name="email"
            label="Adresse E-mail"
            :value="old('email', ($editing ? $user->email : ''))"
            maxlength="150"
            placeholder="accessenergies@exemple.com"
            required
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.password
            name="password"
            label="Mot de passe"
            maxlength="255"
            placeholder="*****************"
            :required="!$editing"
        ></x-inputs.password>
    </x-inputs.group>
</div>
