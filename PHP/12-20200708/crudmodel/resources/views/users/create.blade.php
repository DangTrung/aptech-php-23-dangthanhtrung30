<h1>Add New User</h1>
<form action="/users" method="POST">
    <input type="hidden" name="_token" id="" value="{{csrf_token()}}">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

    </div>
    <div>
        <label for="password">Email</label>
        <input type="password" name="password" id="password">
        
    </div>
    <button type="submit">Create</button>
</form>