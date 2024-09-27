<html>
<head>
    <title>Student index</title>
</head>
<body>
<div>Student index</div>
<div>
    <h1>Student List</h1>
    <h3>{{ $title }}</h3>
    <ul>
        @foreach ($students as $student)
        <li>{{ $student }}</li>
        @endforeach
    </ul>
</div>
<style>
    table,tr,td{
        border: 1px solid black;
    }
</style>
</body>
</html>
