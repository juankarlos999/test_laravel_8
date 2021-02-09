<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Http\Controllers\RoleUserController;
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
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phoneNumber' => ['required', 'string'],
            'hometown' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
        ])->validate();
        

        return User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phoneNumber' => $input['phoneNumber'],
            'hometown' => $input['hometown'],
            'nationality' => $input['nationality'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
