<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        Laravel Backend - OK
        <h1>Tasks</h1>
        <ul>
            @foreach($tasks as $task)
                <li>
                    <h4>{{$task->name}}</h4>    
                    <p>{{$task->description}} <span>{{$task->status ? '- done' : '- todo'}}</span><p>
                </li>
            @endforeach
        </ul>
    </body>
</html>
