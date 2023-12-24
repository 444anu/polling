<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="">
</head>

<body>
<h1> Polling System </h1>
<form action="{{route('user.store')}}" method="post">
    @csrf
    <h2> User Register Form</h2>

    @if(session('message'))
        <h3>{{ session('message') }}</h3>
    @endif

    <div class="input-container">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name">
        @error('name')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

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
    <div class="submit">
        <input type="submit" value="Register">
    </div>
    <div class="login">
{{--       --}}

    </div>
    <p>Already Register ?<a href="{{route('login.form')}}">Login</a> </p>
</form>

</body>

</html>
