<form action="{{route('updatebaitap',$giaobaitap)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Ten bai tap
    <br>
    <input type="text" name="tenbaitap" value="{{$giaobaitap->tenbaitap}}" >
    <br>
    File bai tap
    <br>
    <input type="file" name="filebaitap" >



    <br>
    <button>Update</button>
</form>
