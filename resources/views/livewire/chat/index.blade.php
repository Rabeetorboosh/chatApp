<div class="live-dev">

        <h3> famiplace Family </h3>
        <img class="mainheader" src="{{url('images/mainheader.png')}}" alt="">
        <img class="copy-button" src="{{url('images/copy_button.png')}}" alt="">
        <div class="masseges">
            <img src="{{url('images/chatcenter.png')}}" alt="">
            <div class ="chat" >
            @foreach($masseges as $msg)

                @if($msg->user_id==session('userid'))
            <div class="massege me">
            @else
        <div class="massege">
            @endif
        <h6> {{$msg->user->name}}</h6>
        <p>{{$msg->messageText}}</p>
        <span> {{$msg->created_at->format('g:i a')}}</span>
        </div>

@endforeach

            </div>
        </div>

        <div class="sender">



            <form
                x-data ="{body:@entangle('body')}"
                x-data ="{group:@entangle('group')}"
                @submit.prevent="$wire.sendmassege"
                action="#" method="POST"

                >
                @csrf

                <input
                    class="textbox"
                    x-model="body"
                    type="text" name="massege"

                    >


                <button

                    type="submit" > >> </button>
            </form>
            <img src="{{url('images/sender.png')}}" alt="">

        </div>



</div>

    <script>


        $input= document.querySelector('button');
        $textbox= document.querySelector('.textbox');
        $masseges= document.querySelector('.chat');

       $input.onclick=function (){


           $masseges.scrollTop =$masseges.scrollHeight;

           $textbox.value='';

        };
       window.addEventListener('load',function (){
           $masseges.scrollTop =$masseges.scrollHeight;
           setInterval( function (){

               Livewire.dispatch('refreshComponent');

           },2000)


       });
    </script>

