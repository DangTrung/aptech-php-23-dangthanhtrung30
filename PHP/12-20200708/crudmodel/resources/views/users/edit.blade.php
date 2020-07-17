<h1>Edit the user </h1>
<form action="/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="PATH">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$user->name}}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$user->email}}">

    </div>
    <div>
        <label for="password">Email</label>
        <input type="password" name="password" id="password" value="{{$user->password}}">
        
    </div>
</form>