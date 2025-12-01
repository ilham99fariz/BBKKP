<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(20);
        $unreadCount = ContactMessage::where('is_read', false)->count();
        return view('admin.messages.index', compact('messages', 'unreadCount'));
    }

    public function show(ContactMessage $message)
    {
        if (! $message->is_read) {
            $message->is_read = true;
            $message->save();
        }

        return view('admin.messages.show', compact('message'));
    }

    public function markRead(ContactMessage $message)
    {
        $message->is_read = true;
        $message->save();

        return redirect()->route('admin.messages.show', $message)->with('success', 'Pesan ditandai sudah dibaca.');
    }

    public function reply(Request $request, ContactMessage $message)
    {
        $request->validate([
            'reply_message' => 'required|string|max:4000',
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to($message->email)
                ->send(new \App\Mail\AdminReplyMail($message, $request->input('reply_message')));

            return redirect()->route('admin.messages.show', $message)->with('success', 'Balasan berhasil dikirim.');
        } catch (\Throwable $e) {
            return redirect()->route('admin.messages.show', $message)->with('error', 'Gagal mengirim balasan: ' . $e->getMessage());
        }
    }
}
