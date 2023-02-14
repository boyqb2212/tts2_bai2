<form action="{{route('luubaitapnop')}}" method="post" enctype="multipart/form-data">
    @csrf
    #
    <br>
    <input type="text" name="id_giaobaitap" value="{{$giaobaitap->id}}">
    <br>
    Ten bai tap
    <br>
    <input type="text" name="ten_giaobaitap" value="{{$giaobaitap->tenbaitap}}">
    <br>
    File bai tap
    <br>
    <input type="file" name="filebaitap">
    <br>
    <br>
    <button>Nop</button>
</form>
