<form action="{{route('update',$user)}}" method="post">
    @csrf
    @method('PUT')
    user
    <br>
    <input type="text" name="user" value="{{$user->user}}" >
    <br>
    password
    <br>
    <input type="text" name="password" value="{{$user->password}}">
    <br>
    hoten
    <br>
    <input type="text" name="hoten" value="{{$user->hoten}}">
    <br>
    email
    <br>
    <input type="email" name="email" value="{{$user->email}}">
    <br>
    phone
    <br>
    <input type="text" name="phone" value="{{$user->phone}}">
    <br>
    <br>
    <button>Update</button>
</form>
