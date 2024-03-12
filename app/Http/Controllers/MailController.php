<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function mail()
    {
        try {
            // Ensure $data is properly initialized with required data
            $data = ['email' => 'pancaNugrahaWicaksana@gmail.com', 'name' => 'Panca Nugraha Wicaksana'];

            // Check if $data is null or not an array
            if (empty($data) || !is_array($data)) {
                throw new \Exception('$data is null or not an array');
            }

            // Check if the email address is provided in the $data array
            if (!isset($data['email']) || empty($data['email'])) {
                throw new \Exception('Email address is not provided in $data array');
            }

            Mail::send('mail', $data, function ($message) use ($data) {
                // Ensure the 'to' method argument is valid
                $message->to($data['email'], 'Recipient Name')->subject('Test Mail from Panca');
                $message->from('pancaNugrahaEmail@gmail.com', 'Panca');
            });

            return response()->json(['message' => 'Email Sent. Check your inbox.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email.', 'error' => $e->getMessage()], 500);
        }
    }
}
