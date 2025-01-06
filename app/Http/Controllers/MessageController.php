<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //4時間前まで表示
        $Messages = DB::table('messages')->where('created_at', '>=', Carbon::now()->subHours(4))->get();
        //$Messages = DB::table('messages')->get();

        return response()->json(['message' => $Messages]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'content' => 'required',
            'x' => 'required',
            'y' => 'required',
        ]);

        Message::create($request->all());

        return 'create successfully';
    }



}
