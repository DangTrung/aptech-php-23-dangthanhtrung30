<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content:space-between;">
        <button>Sign in</button>
        <h1>Laravel CRUD Project</h1>
        <a href="">Home</a>
    </div>
    <table style="border-style:solid ">
        <thead style="border-style:solid">
       <tr style="border-style:solid">
       <th style="border-style:solid">ID</th>
        <th style="border-style:solid">Name</th>
        <th style="border-style:solid">Email</th>
        <th style="border-style:solid">Password</th>
        <th style="border-style:solid">Action</th>
        </tr>
        </thead>
        <tbody style="border-style:solid">
            @foreach($users as $user)
            <tr style="border-style:solid">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td> 
                    <form action="{{route('users.show',$user->id)}}" method="GET">
                        <button>Show</button>
                    </form>
                    <form action="" method="GET">
                        <button>Edit</button>
                    </form>
                    <form action="" method="POST">
                        <button>Delete</button>
                    </form>
            </td>
          </tr></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
