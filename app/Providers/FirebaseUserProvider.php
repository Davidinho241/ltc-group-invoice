<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Kreait\Firebase\Factory;

class FirebaseUserProvider implements UserProvider
{
    protected $hasher;
    protected $model;
    protected $auth;
    public function __construct(HasherContract $hasher, $model) {
        $this->model = $model;
        $this->hasher = $hasher;
        $factory = (new Factory)->withServiceAccount(public_path('firebase-config.json'))
            ->withDatabaseUri('https://ltc-group-invoice-default-rtdb.firebaseio.com');

        $this->auth = $factory->createAuth();
    }
    public function retrieveById($identifier): User
    {
        $firebaseUser = $this->auth->getUser($identifier);
        $user = new User([
            'localId' => $firebaseUser->uid,
            'email' => $firebaseUser->email,
            'displayName' => $firebaseUser->displayName
        ]);
        return $user;
    }
    public function retrieveByToken($identifier, $token) {}
    public function updateRememberToken(UserContract $user, $token) {}
    public function retrieveByCredentials(array $credentials) {}
    public function validateCredentials(UserContract $user, array $credentials) {}
}
