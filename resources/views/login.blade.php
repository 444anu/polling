<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="">
</head>

<body>
<h1> Polling System </h1>
<form action="{{route('auth.user')}}" method="post">
    @csrf
    <h2>User Login Form </h2>

    {{--    @dd(session()->all())--}}
    @if(session('message'))
        <h3>{{ session('message') }}</h3>
    @endif

    <div class="input-container">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        @error('email')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="input-container">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Login">

    <p>Haven't Register ?<a href="{{route('register.form')}}">Register</a> </p>
</form>
</body>

</html>
