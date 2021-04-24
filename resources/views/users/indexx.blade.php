<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>name</th>
        <th>Email</th>
        <th>password</th>
        <th>age</th>
        <th>action</th>
    </tr>
    @foreach($users as $save)
        <tr>
            <td>{{$save->nom}}</td>
            <td>{{$save->email}}</td>
            <td>{{$save->password}}</td>
            <td>{{$save->age}}</td>
            <td>
                <form action="{{ url('userss/'.$save->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">supp</button>
                </from>
            </td>
        </tr>


    @endforeach
</table>
    
</body>
</html>