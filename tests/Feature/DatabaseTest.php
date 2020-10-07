<?php

namespace Tests\Feature;

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
        //Contact::create(['fullname'=>'Gordon H','email'=>'g@example.com','phone'=>'555-1212','message'=>'Test mess']);
        $contact = Contact::create(['fullname'=>'Gordon H','email'=>'g@example.com','phone'=>'555-1212','message'=>'Test mess']);
        $this->assertTrue($contact->fullname=='Gordon H');
    }
}
