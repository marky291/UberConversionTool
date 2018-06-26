<?php

    /**
     * The password has secure encryption methods.
     *
     * @param string $username
     * @param string $password
     * @return string
     */
    function XileroPasswordGenerator(string $username, string $password)
    {
        return md5($password . strtolower($username) . config('hashing.cipher_key'));
    }

    /**
     * Return the account information.
     *
     * @return App\Account|\Illuminate\Contracts\Auth\Authenticatable
     */
    function account()
    {
        return auth()->user();
    }