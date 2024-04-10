<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PusherController extends Controller
{
    public function index()
    {
        return view('live-chat.index');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('live-chat.broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return view('live-chat.receive', ['message' => $request->get('message')]);
    }
}
