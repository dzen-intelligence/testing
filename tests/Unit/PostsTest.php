<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase {
    
    public function testCreateUser() {
        $user = null;
        $this->assertEmpty($user);
    }

    public function testDeleteUser() {
        $this->assertTrue(true);
    }

    public function testUploadAvatarImage() {
        $this->assertTrue(false);
    }
}
