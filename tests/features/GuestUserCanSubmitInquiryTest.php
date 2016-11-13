<?php

use App\Events\UserSubmitsAnInquiry;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class GuestUserCanSubmitInquiryTest extends TestCase
{
	use DatabaseMigrations;

    public function test_a_guest_user_can_submit_an_inquiry()
    {
    	$this->expectsEvents(UserSubmitsAnInquiry::class);
    	
    	$response = $this->post('/inquiries', [
    		'name'	=> 'John Doe',
    		'email'	=> 'john@example.com',
    		'phone'	=> '0563759865',
    		'message'	=> 'The message'
    	]);

        // dd($response);

    	$this->seeInDatabase('inquiries', [
    		'name'	=> 'John Doe',
    		'email'	=> 'john@example.com',
    		'phone'	=> '0563759865',
    		'message'	=> 'The message'
    	]);
    }
}
