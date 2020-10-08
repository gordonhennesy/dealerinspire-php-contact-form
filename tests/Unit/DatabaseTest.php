<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $contact = Contact::create(['fullname'=>'Gordon H','email'=>'g@example.com','phone'=>'555-1212','message'=>'Test mess']);
        $this->assertTrue($contact->fullname=='Gordon H');
    }
}
