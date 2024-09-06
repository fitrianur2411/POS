<html>
<body>
    <h2>Ini Halaman Product Beauty Health Web POS </h2>
    <h3>Daftar beauty health: </h3>
    <ul>
        @foreach($beauty as $beautys)
            <li>{{ $beautys }}</li>
        @endforeach
    </ul>
</body>
</html>
