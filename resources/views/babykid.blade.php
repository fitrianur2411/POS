<html>
<body>
    <h2>Ini Halaman Product Baby Kid Web POS </h2>
    <h3>Daftar baby kid: </h3>
    <ul>
        @foreach($babykid as $babykids)
          <li>{{ $babykids }}</li>
        @endforeach
    </ul>
</body>
</html>
