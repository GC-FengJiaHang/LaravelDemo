<html>
<head>
    <title>Student List</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>用户名</td>
        <td>年龄</td>
        <td>操作</td>
    </tr>
    @foreach($students as $v)
    <tr>
        <td>{{ $v -> id }}</td>
        <td>{{ $v -> name }}</td>
        <td>{{ $v -> age }}</td>
        <td><a href="/student/detail/{{$v -> id}}">修改</a>|<a href="">删除</a><td>
    </tr>
    @endforeach
</table>
<style>
    table,tr,td{
        border: 1px solid black;
    }
</style>
</body>
</html>
