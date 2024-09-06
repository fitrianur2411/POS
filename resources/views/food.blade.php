<html>
<body>
    <h2>Ini Halaman Product Food Beverage Web POS</h2>
    <h3>Daftar makanan & minuman: </h3>
    <ul>
        @foreach($foods as $food)
          <li>{{ $food }}</li>
        @endforeach
    </ul>
</body>
</html>

