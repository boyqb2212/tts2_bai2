<h1>Day la danh sach tin nhan :</h1>
<table border="1" width="100%" >
    <tr>
        <th>Nguoi gui</th>
        <th>Nguoi nhan</th>
        <th>Tin nhan</th>
        <th>Sua</th>
        <th>Xoa</th>
    </tr>
    @foreach($messages as $message)
        <tr>
            <td>{{$message->user_nguoigui}}</td>
            <td>{{$message->user_nguoinhan}}</td>
            <td>{{$message->tinnhan}}</td>
            <td><a href="{{route('inboxsua',$message)}}">Sua</a></td>
            <td>
                <form action="{{route('xoainbox',$message)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Xoa</button>
                </form>
            </td>
        </tr>

    @endforeach
</table>
<button><a href="{{route('index')}}">Back</a></button>
