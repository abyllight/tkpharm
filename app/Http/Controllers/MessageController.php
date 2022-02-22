<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('admin.messages.list', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return response()->json([
            'status' => true,
            'message' => 'Ваше сообщение отправлено'
        ]);
    }

    public function show($id)
    {
        $message = Message::find($id);

        if (!$message) {
            return response()->json([
                'status' => false,
                'message' => 'Message not found'
            ]);
        }

        $message->is_read = true;
        $message->save();

        return view('admin.messages.show', ['message' => $message]);
    }
}
