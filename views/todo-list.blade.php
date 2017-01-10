<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
</head>
<body>
    <p>Todo List</p>
  <ul>
  @foreach($todos as $todo)
       <li>{{ $todo->todo }}</li>
  @endforeach
  </ul>
</body>
</html>