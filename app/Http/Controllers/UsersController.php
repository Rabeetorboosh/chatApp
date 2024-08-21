<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\UserGroup;

class UsersController extends Controller
{
    public function index()
    {

        $usergroup= UserGroup::all();
    
       return  view('users',["UserGroup"=>$usergroup]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return  view('adduser');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user= new User ;

        $user->name=$request['name'];
        $user->password=$request['password'];
        $user->email=$request['email'];
        $user->save();
       if($user != null){

       $request->session()->put('username',$user->name);
       $request->session()->put('userid',$user->id);

    return to_route('home.index',[$user->id,0]);


}else{

    return;
}




       
    }
    public function addusertogroup($group)
    {

        $thisgroup =Group::find($group);

      
       return  view('addtogroup',['group'=>$thisgroup]);
        
    }


    public function usertogroupstore(Request $request)
    {
   $user=User::where('name',$request['name'])->first();
   if($user==null){


    return "there is no user in thst name";
   }
   else{

   

    $usergroup = new UserGroup ;
    
    $usergroup->groupId=$request['group'];
    $usergroup->userid=$user->id;
    $usergroup->isAdmin=0;
    $usergroup->save();

    return to_route('home.index',[ session()->get('userid'),$request['group']]);

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
    public function signin(){

return view('signcheck');
    }


    public function signcheck(Request $request){

     
        $user=User::where('email',$request['email'])->where('password',$request['password'])->first();
if($user!=null){

    $request->session()->put('username',$user->name);
    $request->session()->put('userid',$user->id);
    return to_route('home.index',[ session()->get('userid'),0]);
}else{
    return "no";
}

    
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
