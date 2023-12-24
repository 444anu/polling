<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verification form</title>
</head>
<body>
This is test email for dashboard
<a href="{{route('verifications.show',[$id, 'token' =>$token])}}">
    Click here to verify
{{--{{dd($id)}}--}}
</a>
</body>
</html>
