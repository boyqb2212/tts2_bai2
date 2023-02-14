<h1>Day la danh sach tin nhan :</h1>
<table border="1" width="100%" >
    <tr>
        <th>Nguoi gui</th>
        <th>Nguoi nhan</th>
        <th>Tin nhan</th>

    </tr>
    @foreach($messages as $message)
        <tr>
            <td>{{$message->user_nguoigui}}</td>
            <td>{{$message->user_nguoinhan}}</td>
            <td>{{$message->tinnhan}}</td>

        </tr>

    @endforeach
</table>
<button><a href="{{route('index')}}">Back</a></button>
