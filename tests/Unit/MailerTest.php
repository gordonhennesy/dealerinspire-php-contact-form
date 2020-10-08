<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMailer;

class MailerTest extends TestCase
{
    public function testMailerTest()
    {
        Mail::to('elmer@example.com')->send(new TestMailer);

        $this->assertTrue(True);
    }
}
