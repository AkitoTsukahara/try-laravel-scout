<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ユーザ一覧</h1>
<div style="margin:1em 0;">
    <form method="get" action="/users">
        <label for="search">検索</label>
        <input name="search" value=""/>
        <button type="submit">検索</button>
    </form>
</div>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
