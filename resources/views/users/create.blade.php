<!-- On veut créer un formulaitre -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
            float: right;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 alert alert-success" role="alert">
                {{ session('update') }}
            </div> 
    <form action="{{ url('users') }}" method="post">
    @csrf
        <table>
            <tr>
                <td>
                    <label for="name">Name</label>
                </td>
                <td>
                    <input type="text" name="nom" id="name" placeholder="Enter your name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="text" name="email" id="email" placeholder="Enter your email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Enter your Password">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <button type="submit" class="btn">Save</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>