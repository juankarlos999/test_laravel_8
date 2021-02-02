<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'typeUser' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phoneNumber1' => ['required', 'string'],
            'phoneNumber2' => ['string'],
            'address' => ['required', 'string', 'max:255'],
            'neighborhood' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'typeUser' => $input['typeUser'],
            'name' => $input['name'],
            'email' => $input['email'],
            'phoneNumber1' => $input['phoneNumber1'],
            'phoneNumber2' => $input['phoneNumber1'],
            'address' => $input['address'],
            'neighborhood' => $input['neighborhood'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
