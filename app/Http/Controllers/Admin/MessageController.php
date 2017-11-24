<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    const DEFAULT_ROW = 20;

    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(self::DEFAULT_ROW);

        return view('admin.message.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name', '');
        $email = $request->input('email', '');
        $phone = $request->input('phone', '');
        $content = $request->input('content', '');
        
        Message::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'content' => $content
        ]);

        return response(['status' => 'success'], 200);
    }
}
