<form action="{{route('checktraloi')}}" method="post" >
    @csrf
    Đáp án
    <br>
    <input type="text" name="dapan">

    <button>Submit</button>
</form>

