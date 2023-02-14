<h1> Danh sách câu hỏi :</h1>
<table border="1" width="100%" >
    <tr>
        <th>Tên câu hỏi</th>
        <th>Gợi ý</th>
        <th>Trả lời</th>
    </tr>
    @foreach($trochois as $trochoi)
        <tr>
            <td>{{$trochoi->tencauhoi}}</td>
            <td>{{$trochoi->goiy}}</td>
            <td><a href="{{route('traloi')}}">Trả lời</a></td>

        </tr>

    @endforeach
</table>
<a href="{{route('index')}}">Back</a>
