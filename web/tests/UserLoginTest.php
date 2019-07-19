<?php

use App\Model\UserLogin;
use App\Utility\Token;
use App\Utility\Validate;
use PHPUnit\Framework\TestCase;

class UserLoginTest extends TestCase
{

    public function setUp()
    {
        @session_start();
        parent::setUp();
    }

    public function testUserLoginFail()
    {

        $this->assertFalse(UserLogin::login());

    }

    public function testUserLoginSuccess()
    {

        $_POST['email'] = '1@1.com';
        $_POST['password'] = 'adminadmin';
        $_POST['csrf_token'] = Token::generate();
        $this->assertTrue(UserLogin::login());

    }

    public function testUserLoginValidationFail()
    {

        $Validate = new Validate(['email' => '11.com', 'password' => 'admin']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true
            ],
            'password' => [
                'required' => true
            ]
        ]);
        $this->assertFalse($validation->passed());

    }

    public function testUserLoginValidationSuccess()
    {

        $Validate = new Validate(['email' => '1@1.com', 'password' => 'adminadmin']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true
            ],
            'password' => [
                'required' => true
            ]
        ]);
        $this->assertTrue($validation->passed());

    }

    public function testUserLoginValidationError1()
    {

        $Validate = new Validate(['email' => '11.com', 'password' => 'admin']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true
            ],
            'password' => [
                'required' => true
            ]
        ]);

        $this->assertArrayHasKey('email', $validation->errors());

    }

    public function testUserLoginValidationError2()
    {

        $Validate = new Validate(['email' => '1@1.com']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true
            ],
            'password' => [
                'required' => true
            ]
        ]);

        $this->assertArrayHasKey('password', $validation->errors());

    }


}