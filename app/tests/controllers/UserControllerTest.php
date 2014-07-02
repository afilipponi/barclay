<?php

class UserControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->mock = $this->mock('Firefly\Storage\User\UserRepositoryInterface');
    }

    public function mock($class)
    {
        $mock = Mockery::mock($class);

        $this->app->instance($class, $mock);

        return $mock;
    }

    public function testLogin()
    {
        View::shouldReceive('make')->with('user.login');
        $this->call('GET', '/login');
    }

    public function testPostLogin()
    {
        $data = ['email' => 'bla@bla.nl', 'password' => 'xxxx','remember_me' => '1'];
        Auth::shouldReceive('attempt')->once()->andReturn(true);
        $this->call('POST', '/login', $data);
    }

    public function tearDown()
    {
        Mockery::close();
    }

}