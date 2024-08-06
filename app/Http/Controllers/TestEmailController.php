<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class TestEmailController extends Controller
{
    public function sendTestEmail()
    {
        $details = [
            'title' => 'Test Email from Imas Medical',
            'body' => 'This is a test email to verify SMTP configuration.'
        ];

        Mail::to('s.u.shah68@gmail.com')->send(new TestEmail($details));

        return 'Email sent successfully!';
    }
}
