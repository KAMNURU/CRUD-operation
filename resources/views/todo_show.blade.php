<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 70%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>
</head>
<body>
    <div>
        <a href="todo_create">Add Record</a><br><br>
        {{session('msg')}}
            <table border="1" id="customers">
                <h1>List of Customers</h1>
<tr>
    <td>
        Id
    </td>
    <td>
        Name
    </td>
    <td>
        Created at
    </td>
    <td>
    Action
    </td>

</tr>
@foreach ($todoArr as $todo)
<tr>
    <td>
      {{$todo->id}}
    </td>
    <td>
       {{$todo->name}}
    </td>
    <td>
        {{$todo->created_at}}
    </td>
    <td>
        <a href="todo_delete/{{$todo->id}}">Delete</a>
        <a href="todo_edit/{{$todo->id}}">edit</a>

    </td>


</tr>

@endforeach
            </table>
    </div>

</body>
</html>
