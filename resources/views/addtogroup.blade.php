<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>add user</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{url('css/normalize.css')}}" rel="stylesheet" />

        <link href="{{url('css/index.css')}}" rel="stylesheet" />

      
    
    </head>
<body>
    


<section class="group-add">



<form action="{{route('usertogroup.store')}}" method="POST">

@csrf

<label > add user to group :{{$group->name}}</label>
<label for="name"> Name:</label>
<input type="text" name="name" palceholder ="user name">
<input type="hidden" name="group" value ="{{$group->id}}">



<input type="submit" value="save">
</form>

</section>

</body>
</html>