<html>
    <head>
        <title>Cari Database</title>
    </head>
    <body>
        <h1>Searching Buku Tamu untuk database MySQL</h1>
        <form action="searchbt.php" method="post">
        <select name="kolom">
            <option value="nama">nama</option>
            <option value="email">email</option>
        </select>
        Masukan kata yang anda cari  
        <input type="text" type="text" name="cari">
        <input type="submit"value="cari">
    </form>
    </body>
</html>