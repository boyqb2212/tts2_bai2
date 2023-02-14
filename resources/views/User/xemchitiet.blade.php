<form >

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
    level:
    @if($user->level==1)
        Giao Vien
    @else
        Sinh Vien
    @endif


    <br>
    <button><a href="{{route('index')}}">Quay Lai</a></button>
    <button><a href="{{route('inbox',$user)}}">Inbox</a></button>
    <button><a href="{{route('indexinbox',$user)}}">Danh sach tin nhan da gui</a></button>
</form>
