<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    //
    public function showForm() {
        return view('contact');
    }

    public function storeMessage(StoreMessageRequest $request) {
        
        ContactMessage::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Thanks for reaching out! We’ll get back to you soon.');
    }


}
