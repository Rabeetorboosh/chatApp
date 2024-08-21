<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Massege;

class MassegesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public $body;
     public function sendmassege(){


        dd($this->body);
     }
    public function store(Request $request)
    {
        $message= new Massege ;

        $message->userid=$request['user'];
        $message->groupId=$request['group'];
        $message->messageText=$request['massege'];
        $message->save();
       if($message != null){

       
             return to_route('home.index',[$request['user'],$request['group']]);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
