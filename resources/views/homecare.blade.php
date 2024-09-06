<html>
<body>
    <h2>Ini Halaman Product Home Care Web POS </h2>
    <h3>Daftar home care: </h3>
    <ul>
        @foreach($homecare as $homecare)
          <li>{{ $homecare }}</li>
        @endforeach
    </ul>
</body>
</html>
