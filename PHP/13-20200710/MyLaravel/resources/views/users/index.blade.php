<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
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
                    <form action="" method="GET">
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