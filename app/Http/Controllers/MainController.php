<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Group;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\Massege;
class MainController extends Controller
{


    public function dashboard()
    {

        $usergroups =UserGroup::where('userid',Auth::user()->id)->get();
        $groups=[];
        foreach($usergroups as $gr)
        {
            $grp =Group::find($gr->groupId);


            $groups=Arr::prepend($groups,"name",  $grp->name."-".($grp->id));

        }

        return view('dashboard',['groups'=>$groups]);
    }
    public function index( $user , $group)
    {


        if($user ==session('userid')){

        
            $usergroups =UserGroup::where('userid',$user)->get();
            $groups=[];
            foreach($usergroups as $gr)
            {
                $grp =Group::find($gr->groupId);
                $groups=Arr::prepend($groups,"name",  $grp->name."-".($grp->id));

            }


            $groupusers =UserGroup::where('groupId',$group)->get();
             $users=[];
            foreach($groupusers as $usr )
            {

                $us=User::find($usr->userid);
                $users=Arr::prepend($users ,"name",$us->name.'-'.($us->id));

            }

            $masseges =Massege::where('group_id',$group)->get();

              session(['group'=>$group]);
            
            return view('welcome',['groups'=>$groups,'users'=>$users ,'group'=>$group,'masseges'=>$masseges]);

        }

    }

        public function login(){

            
        return view('login');

        }






        public function sendUsers(Group $group){


        }
}
