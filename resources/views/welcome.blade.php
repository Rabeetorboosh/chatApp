<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="{{url('css/normalize.css')}}" rel="stylesheet" />
        <link href="{{url('css/index.css')}}" rel="stylesheet" />


        @livewireStyles
    </head>


    <body class="font-sans antialiased dark:bg-black dark:text-white/50">




    <div class="back">
        <img src="{{url('images/bakground.png')}}" alt="">
     </div>
    <div class="container">
        <div class="row">
            <div class="cloumn cloumn-right">
            <div class="image">
            <img src="{{url('images/right_column.png')}}" alt="">
            </div>
                <div class ="admin"></div>
                <div class="users">
                    <h3>Mempers</h3>
                    @foreach($users as $key=>$val)
                    <span>{{Str::before($key,"-")}}</span>
                    @endforeach

                </div>
                <div class="add-user">


                    <img class="mainheader" src="{{url('images/adduser.png')}}" alt="">
                    <div class="link">

                    <a href="{{route('usertogroup.add',$group)}}">Add New Memper </a>
                    </div>

                </div>
            </div>

            <div class="cloumn cloumn-center">
                <livewire:chat.index />
            </div>

            <div class="cloumn cloumn-left">

            <div class="top">
                    <img class="top-img" src="{{url('images/leftTop.png')}}" alt="">
                    <img  class="top-img" src="{{url('images/map.png')}}" alt="">

                <div class="groups">
                @foreach($groups as $key=>$val)
                        <div class="group">


                            <img class="group-pic" src="{{url('images/group.png')}}" alt="">
                            <div class="groupname">
                        <a href="{{route('home.index',[ session()->get('userid'),Str::after($key,'-')])}}">
                          <h6>{{Str::before($key,"-")}}</h6>
                         </a>
                            </div>
                        </div>

                        @endforeach



                </div>
            </div>
                    <div class="clearfix"></div>


                    <div class="add-group">
                    <a href="{{route('group.add',session()->get('userid'))}}">
                    <img class="mainheader" src="{{url('images/adduser.png')}}" alt="">
                    <div class="link">
                        Add New group
                    </div>
                    </a>
                </div>
            <div class="buttom">
                    <img class="cover" src="{{url('images/leftButtom.png')}}" alt="">
                     <div class="button-group">
                    <img class="buttons" src="{{url('images/emeregancy.png')}}" alt="">
                    <img class="buttons" src="{{url('images/toBeLate.png')}}" alt="">
                    <img class="buttons" src="{{url('images/CaalMe.png')}}" alt="">
                    </div>
                    </div>

            </div>
    </div>
</div>






           @livewireScripts


    </body>
</html>
