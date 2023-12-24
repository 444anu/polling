<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<section class="grid ">

    <div class="mb-3">
        <form action="{{route('option.store')}}" method="post">
{{--            <input type="hidden" name="poll_id" value="{{ optional($questionData)->id  }}">--}}

            @csrf
            <h5>Provide options </h5>
            <label for="option1">Option 1:</label>
            <input type="text" name="option[]" >

            <label for="option2">Option 2:</label>
            <input type="text" name="option[]" >

            <label for="option3">Option 3:</label>
            <input type="text" name="option[]" >
            <button class=" my-2 my-sm-0  " type="submit">create </button>
        </form>
    </div>
</section>
</body>
</html>
