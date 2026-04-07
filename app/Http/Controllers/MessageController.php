<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Http\Requests\StoreMessageRequest;

class MessageController extends Controller
{
    //
    public function index() {
        return view('/admin/messages.index', ['messages' => ContactMessage::all()]);
    }

    public function destroy(ContactMessage $message) {
        $message->delete();
        return redirect('/admin/messages');
    }


}
