<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks</h1>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="/tasks/{{ $task->id }}">
                        {{ $task->body }}</li>
                    </a>
            @endforeach
        </ul>
    </body>
</html>
