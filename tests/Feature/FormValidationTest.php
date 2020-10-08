<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormValidationTest extends TestCase
{
    /**
     * Validate Fullname form field has a value 
     *
     * @return void
     */
    public function testFormValidationNameNotNullTest()
    {
        $response = $this->post('contacts/store', 
            [
            'fullname'   => '', // Must be non-null
            'email'      => 'name@example.com',
            'phone'      => '(541) 555-1212',
            'message'    => 'Lorem ipsum',
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['fullname']);
    }
    public function testFormValidationEmailNotNullTest()
    {
        $response = $this->post('contacts/store', 
            [
            'fullname'   => 'Gordon Hennesy', 
            'email'      => '', // Must be non-null
            'phone'      => '(541) 555-1212',
            'message'    => 'Lorem ipsum',
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['email']);
    }
    public function testFormValidationMessageNotNullTest()
    {
        $response = $this->post('contacts/store', 
            [
            'fullname'   => 'Gordon Hennesy',
            'email'      => 'name@example.com',
            'phone'      => '(541) 555-1212',
            'message'    => '', // Must be non-null
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['message']);
    }
}
