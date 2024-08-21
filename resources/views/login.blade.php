<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{url('css/normalize.css')}}" rel="stylesheet" />

        <link href="{{url('css/index.css')}}" rel="stylesheet" />

      
    
    </head>
<body>
    


<section class="group-add">



<form action="{{route('user.sore')}}" method="POST">

@csrf


<label for="name"> Name:</label>
<input type="text" name="name" palceholder ="user name">
<label for="name"> email:</label>
<input type="email" name="email" >
<label for="name"> password:</label>
<input type="password" name="password" >
<input type="submit" value="login">
</form>
<a href="{{route('signin')}}"> i have account</a>
</section>

</body>
</html>