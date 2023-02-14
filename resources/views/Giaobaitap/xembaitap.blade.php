<h1> Danh sách bài tập :</h1>
<table border="1" width="100%" >
    <tr>
        <th>Tên bài tập</th>
        <th>File</th>
        <th>Sửa</th>
        <th>Xóa</th>
        <th>Nộp bài</th>
        <th>Danh sách nộp bài</th>
    </tr>
    @foreach($giaobaitaps as $giaobaitap)
        <tr>
            <td>{{$giaobaitap->tenbaitap}}</td>
            <td><a href="{{route('download',$giaobaitap)}}">{{$giaobaitap->filebaitap}}</a></td>
            <td><a href="{{route('suabaitap',$giaobaitap)}}">Sửa</a></td>
            <td>
                <form action="{{route('xoabaitap',$giaobaitap)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Xóa</button>
                </form>
            </td>
            <td><a href="{{route('taobaitapnop',$giaobaitap)}}">Nộp</a></td>
            <td><a href="{{route('xembaitapnop',$giaobaitap)}}">Xem</a></td>
        </tr>

    @endforeach
</table>
<a href="{{route('index')}}">Back</a>
