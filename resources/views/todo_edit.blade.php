<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>
<a href="todo_show">Back</a><br><br>
<form action="{{route('todo.update',[$todoArr->id])}}" method="POST">
{{ csrf_field() }}
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{$todoArr->name}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>
