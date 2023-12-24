<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<body>
<section class="grid ">
    <div class="mb-3 ">
        <form action=" {{route('poll.store')}} " method="post" >
@csrf
<h5>Enter the question</h5>
<input type="text" name="question" id="">
<button class=" my-2 my-sm-0  " type="submit">Create</button>
</form>
</div>
<div>
    <h5>List of Questions</h5>
        <div>

            <ol>
                @foreach($questions as $list)
                <li><a href="">{{$list->question}}</a></li>
                @endforeach
            </ol>

        </div>
</div>

{{--    <form action=" {{route('option.show')}} " method="post">--}}
{{--        <button type="submit">option</button>--}}
{{--    </form>--}}

</section>
</body>
</html>
