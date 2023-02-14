<form action="{{route('luutrochoi')}}" method="post" enctype="multipart/form-data">
    @csrf
    Tên câu đố
    <br>
    <input type="text" name="tencauhoi">
    <br>
    Gợi ý
    <br>
    <input type="text" name="goiy">
    <br>
    File đáp án(chi tải lên file .txt)
    <br>
    <input type="file" name="filebaitap">
    <br>
    <br>
    <button>Tao</button>
</form>
