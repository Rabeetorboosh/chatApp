<?php

namespace App\Livewire\Chat;

use App\Models\Massege;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class Index extends Component
{

    public  $body;

    protected $listeners = ['refreshComponent'];

    public function refreshComponent()
    {

        $this->render();
    }

public function sendmassege()
{
    $massege = new Massege();

    try {
        $massege->user_id=session('userid');
        $massege->group_id =session('group');
        $massege->messageText=$this->body;
        $massege->save();

       $this->render();
    }catch (Exception $e){

    }



}
    public function render()
    {
        $massege =Massege::where('group_id',session('group'))->get();

        return view('livewire.chat.index' ,['masseges'=>$massege]);
    }
}
