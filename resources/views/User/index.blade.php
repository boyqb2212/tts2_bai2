<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}
    </style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b>Menu</b></h3>
    </div>
    <div class="w3-bar-block">
        <a href="{{route('taobaitap')}}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tạo bài tập</a>
        <a href="{{route('xembaitap')}}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Danh sách bài tập</a>
        <a href="{{route('taotrochoi')}}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tạo câu đố</a>
        <a href="{{route('xemtrochoi')}}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Danh sách câu đố</a>


</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Họ và tên: {{session()->get('hoten')}}</b></h1>
        <h1 class="w3-xxxlarge w3-text-red"><b>Vai trò :
                @if(session()->get('level')==1)
                    Giao Vien
                @else
                    Sinh Vien
                @endif</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <!-- Photo grid (modal) -->
    <div class="w3-row-padding">
        <div class="w3-half">

        </div>

        <div class="w3-half">

        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
        </div>
    </div>


    </h2>
    <a href="{{route('suacanhan')}}">Sửa thông tin cá nhân</a>
    <br>
    <a href="{{route('indexhopthuden')}}">Hộp thư đến</a>
    <h3><a href="{{route('logout')}}">Logout</a></h3>
    <table border="1" width="100%" >
        <tr>
            <th>#</th>
            <th>Họ và tên</th>
            <th>Xem thông tin</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->hoten}}</td>
                <td><a href="{{route('xemchitiet',$user)}}">Xem</a></td>
                <td><a href="{{route('sua',$user)}}">Sửa</a></td>
                <td>
                    <form action="{{route('xoa',$user)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Xóa</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>

</div>






}
</script>

</body>
</html>
