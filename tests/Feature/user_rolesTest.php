<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class user_rolesTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function testRoles()
    {
        $user = User::factory()->create();

        $this->assertEquals(UserRole::USER, $user->role);
    }
}
