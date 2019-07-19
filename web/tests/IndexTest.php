<?php

use App\Utility\Flash;
use App\Utility\Hash;
use App\Utility\Input;
use App\Utility\Redirect;
use App\Utility\Session;
use App\Utility\Token;
use App\Utility\Validate;
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{

    public function setUp()
    {
        @session_start();
        parent::setUp();
    }

    public function testGetName()
    {

        $this->assertFalse(Input::exists('get'));
        $this->assertFalse(Input::exists());
        $_POST['test'] = 'test';
        $_POST['csrf_token'] = Token::generate();
        $this->assertEquals(Input::post('test'), 'test');

        $this->assertNull(Flash::warning());
        $this->assertNull(Flash::danger());
        $this->assertNull(Flash::info());
        $this->assertNull(Flash::success());
        $this->assertNull(Flash::session('1111'));

        $this->assertEquals(Flash::session('123213'), Session::get('123213'));

    }


    public function testRedirectFail()
    {

        $this->assertFalse(Redirect::to());

    }

    /**
     * @runInSeparateProcess
     */
    public function testRedirect()
    {

        $this->assertContains(
            Redirect::to('/'), xdebug_get_headers()
        );

    }


    public function testSessionDeleteSuccess()
    {

        Session::put('test', '123');
        $this->assertTrue(Session::delete('test'));


    }

    public function testSessionDeleteFail()
    {

        $this->assertFalse(Session::delete('test123'));

    }


    public function testValidateRulesSuccess()
    {

        $Validate = new Validate(['email' => '4324231@1.com', 'password' => 'adminadmin', 'password_repeat' => 'adminadmin']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true,
                'unique' => 'users'
            ],
            'password' => [
                'min_characters' => 6,
                'max_characters' => 16,
                'required' => true
            ],
            'password_repeat' => [
                'matches' => 'password',
                'required' => true
            ],
        ]);
        $this->assertTrue($validation->passed());

    }

    public function testValidateRulesFail()
    {

        $Validate = new Validate(['email' => '1@1.com', 'password' => 'admi', 'password_repeat' => '1minsdaf']);
        $validation = $Validate->check([
            'email' => [
                'filter' => 'email',
                'required' => true,
                'unique' => 'users'
            ],
            'password' => [
                'min_characters' => 6,
                'max_characters' => 16,
                'required' => true
            ],
            'password_repeat' => [
                'matches' => 'password',
                'max_characters' => 3,
                'required' => true
            ],
            'test' => [
                'required' => true
            ],
        ]);
        $this->assertFalse($validation->passed());

    }

    public function testTockenCheck()
    {

        $this->assertNotNull(Token::check('token'));

    }

    public function testHashGenerate()
    {

        $test = hash('sha256', 'test123');
        $this->assertEquals($test, Hash::generate('test', '123'));

    }

    public function testHashGenerateSalt()
    {

        $this->assertEquals(32, strlen(Hash::generateSalt(32)));

    }

    public function testGenerateUnique()
    {

        $this->assertNotNull(Hash::generateUnique());

    }


}