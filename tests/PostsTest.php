<?php

namespace App\Tests;

use App\Entity\Posts;
use PHPUnit\Framework\TestCase;

class PostsTest extends TestCase
{
    public function testTitle(): void
    {
        $post=new Posts();
        $post->setTitle('fadhel is here for testing.....');
        $this->assertTrue($post->getTitle()=="fadhel is here for testing.....");
    }
    public function testContent(): void
    {
        $post=new Posts();
        $post->setTitle('content here');
        $this->assertTrue($post->getTitle()=="content here");
    }
}
