<form action="{{route('storeinbox')}}" method="post">
    @csrf
    id_nguoigui
    <br>
    <input type="text" name="id_nguoigui" value="{{session()->get('id')}}">
    <br>
    nguoi gui
    <br>
    <input type="text" name="user_nguoigui" value="{{session()->get('user')}}">
    <br>
    id_nguoinhan
    <br>
    <input type="text" name="id_nguoinhan" value="{{$user->id}}">
    <br>
    nguoi nhan
    <br>
    <input type="text" name="user_nguoinhan" value="{{$user->user}}">
    <br>
    tin nhan
    <br>
    <input type="text" name="tinnhan">
    <br>
    <button>Gui</button>
</form>
