<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
       Laravel Backend - OK
        <br/>
        <br/>
        <div>
            <a href="/tasks">See /tasks API response</a>
        </div>

        <ul>
            @for($i = 1; $i < 5; $i++)
                <li>
                    <a href="/tasks/{{$i}}"> /tasks/{{$i}} </a>
                </li>
                <br/>
            @endfor
       </ul>
    </body>
</html>
