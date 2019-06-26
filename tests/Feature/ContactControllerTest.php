<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactControllerTest extends TestCase
{

    public function test_post_contact_route () {

        $data =
            '{
                "email": "haydencallum4@gmail.com",
                "name": "Callum",
                "message": "Hey! This is just a test message to ensure it works. Cheers, Callum"
            }';

        $response = $this->json('POST', 'api/contact',[
                $data
            ]);

            dd($response);
        $response->assertStatus(200);

    }


    public function test_empty_contact_form () {

        $data =

            '{
                "email": "",
                "name": "",
                "message": ""
            }';

        $response = $this->json('POST', 'api/contact',[
                $data
            ]);

        $response->assertStatus(422);
    }
}
