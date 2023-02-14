<form action="{{route('inboxupdate',$message)}}" method="post">
    @csrf
    @method('PUT')
    tin nhan
    <br>
    <input type="text" name="tinnhan" value="{{$message->tinnhan}}" >
    <br>
    <button>Update</button>
</form>
