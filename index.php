<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="sendMail.php">
        <label for="">Nama :</label><br>
        <input type="text" name="nama">
        <br><br>
        <label for="">Email :</label><br>
        <input type="email" name="email">
        <br><br>
        <label for="">Subjek :</label><br>
        <input type="text" name="subjek">
        <br><br>
        <label for="">Pesan :</label><br>
        <textarea name="pesan" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Kirim">
    </form>

</body>
</html>