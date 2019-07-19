<?php

use App\Model\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUser()
    {

        $id = 1;
        $user = User::getInstance($id);
        $this->assertEquals($user->data()->id, $id);

    }


    public function testUserFail()
    {

        $id = 19999;
        $user = User::getInstance($id);
        $this->assertNull($user);

    }

}