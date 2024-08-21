<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>add group</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{url('css/normalize.css')}}" rel="stylesheet" />

        <link href="{{url('css/index.css')}}" rel="stylesheet" />

      
    
    </head>
<body>
    


<section class="group-add">



<form action="{{route('group.stor')}}" method="POST">

@csrf
<label >admin is :<strong>{{$user->name}}</strong> </label>
<input type="hidden" name="admin" value= "{{$user->id }}">

<input type="text" name="group_name" palceholder ="group name">




<input type="submit" value="save">
</form>

</section>

</body>
</html>