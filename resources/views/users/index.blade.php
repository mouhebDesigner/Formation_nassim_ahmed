<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
        .fa-trash{
            color: #cc3131;
            transform: scale(1.5);
        }
        .fa-user-edit{
            color: #2360bf;
            transform: scale(1.5);
        }
        .button{
            border: none;
            background: transparent;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @if(session('deleted'))
            <div class="col-md-10 offset-md-1 alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>          
            @endif
            @if(session('updated'))
            <div class="col-md-10 offset-md-1 alert alert-info" role="alert">
                {{ session('updated') }}
            </div>          
            @endif
            @if(session('update'))
            <div class="col-md-10 offset-md-1 alert alert-danger" role="alert">
                {{ session('update') }}
            </div>    
             @endif
            <div class="col-md-10 offset-md-1">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Age</th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(App\Models\User::all() as $value)
                            <tr>
                                <td>{{ $value->nom }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->password }}</td>
                                <td>{{ $value->age }}</td>
                                <!-- On va ajouter deux icons ici pour la modification et la suppression -->
                                <td>
                                    <div class="d-flex justify-content-between" style="flex-direction: column">
                                        <a href="{{ url('users/'.$value->id.'/edit') }}">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ url('users/'.$value->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="button" onclick="return confirm('Voulez-vous supprimer cette utilisateur ?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>