<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>sign in</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{url('css/normalize.css')}}" rel="stylesheet" />

        <link href="{{url('css/index.css')}}" rel="stylesheet" />

      
    
    </head>
<body>
    


<section class="group-add">



<form action="{{route('signcheck')}}" method="POST">

@csrf



<label for="name"> email:</label>
<input type="email" name="email" >
<label for="name"> password:</label>
<input type="password" name="password" >
<input type="submit" value="save">
</form>
<a href="{{route('login')}}"> i dont have an acount</a>
</section>

</body>
</html>