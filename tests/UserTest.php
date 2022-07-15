<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testEmail(): void
    {
        $user=new User();
        $user->setEmail('alifadhel619@gmail.com');
        $this->assertTrue($user->getEmail()=="alifadhel619@gmail.com");
    }
    public function testId(): void
    {
        $user=new User();
        $user->SetId(50);
        $this->assertTrue($user->getId()==50);
    }
    public function testRoles(): void
    {
        $user=new User();
        $user->SetRoles(["ROLE_AUTHOR"]);
        $this->assertTrue($user->getRoles()==["ROLE_AUTHOR","ROLE_USER"]);
    }
    public function testPassword(): void
    {
        $user=new User();
        $user->setPassword("fadhel1416");
        $this->assertTrue($user->getPassword()=="fadhel1416");
    }
}
