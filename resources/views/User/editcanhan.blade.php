<form action="{{route('updatecanhan')}}" method="post">
    @csrf
    @method('PUT')
    <br>
    password
    <br>
    <input type="text" name="password" value="{{session()->get('password')}}">
    <br>
    email
    <br>
    <input type="email" name="email" value="{{session()->get('email')}}">
    <br>
    phone
    <br>
    <input type="text" name="phone" value="{{session()->get('phone')}}">
    <br>


    <br>
    <button>Update</button>
</form>
