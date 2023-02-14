<h1>Day la danh sach bai tap nop :</h1>
<table border="1" width="100%" >
    <tr>

        <th>File bai tap</th>
    </tr>
    @foreach($nopbaitaps as $nopbaitap)
        <tr>
            <td><a href="{{route('downloadnop',$nopbaitap)}}">{{$nopbaitap->filebaitap}}</a></td>

        </tr>

    @endforeach
</table>
<button><a href="{{route('index')}}">Back</a></button>
