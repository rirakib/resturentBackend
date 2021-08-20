

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Home page</h1>
       <div class="mydiv">
        @if (Route::has('login'))
                
        @auth
            <a href="{{ url('/dashboard') }}" class="profile_btn  underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="profile_btn underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="profile_btn underline">Register</a>
            @endif
        @endauth
    
@endif
       </div>
    </div>
</body>
</html>