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
        Message::create($request->all());

        return response(['status' => 'success'], 200);
    }
}
