<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Group;
use App\Models\User;
use App\Models\UserGroup;

class GroupsController extends Controller
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
    public function create(User $user)
    {


  
       $users =User::all();
    
     return view('gropu_add',['user'=>$user ,'users'=>$users]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->all();


       //@dd($data);

        $group = new Group ;

        $admingroup = new UserGroup ;

        $group->name=$data['group_name'];
        $group->save();

        $groupId=$group->id;

    
    
    $admingroup->groupId=$groupId;
    $admingroup->userid=$data["admin"];
    $admingroup->isAdmin=1;
    $admingroup->save();



    
return to_route('home.index',[$data["admin"],$groupId=$group->id]);

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
