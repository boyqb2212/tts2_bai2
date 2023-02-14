<form action="{{route('luubaitap')}}" method="post" enctype="multipart/form-data">
    @csrf
    Ten bai tap
    <br>
    <input type="text" name="tenbaitap">
    <br>
    File bai tap
    <br>
    <input type="file" name="filebaitap">
    <br>
    <button>Nop</button>
</form>
