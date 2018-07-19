<?php

namespace Tests;

use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    use CreatesApplication;

    /**
     * Login using the test account on the database.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    protected function signIn($properties = [])
    {
        auth()->login(factory('App\User')->create($properties));

        return $this;
    }

    /**
     * Quicker factory creation.
     *
     * @param string $class
     * @param array $attributes
     * @param int $count
     * @return mixed
     */
    protected function collect(string $class, $attributes = [], int $count = 1)
    {
        return factory($class, $count)->create($attributes);
    }

    /**
     * Quicker factory creation.
     *
     * @param string $class
     * @param array $attributes
     * @param int $count
     * @return mixed
     */
    protected function model(string $class, $attributes = [])
    {
        return factory($class)->create($attributes);
    }

    /**
     * Quicker factory creation.
     *
     * @param string $class
     * @param array $attributes
     * @param int $count
     * @return mixed
     */
    protected function generate(string $class, $attributes = [], int $count = 1)
    {
        return factory($class, $count)->make($attributes);
    }

}
