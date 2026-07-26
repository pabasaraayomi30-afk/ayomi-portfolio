<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessage;
use App\Models\SendMsg;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMsgController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Save message in database
        $contactMessage = SendMsg::create($validated);

        // Send notification to portfolio owner's email
        Mail::to(config('mail.to.address'))
            ->send(new NewContactMessage($contactMessage));

        return redirect()
            ->to(url()->previous() . '#contact')
            ->with('success', 'Your message was sent successfully.');
    }
}