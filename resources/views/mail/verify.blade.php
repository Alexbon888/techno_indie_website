<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <p>
        Halo <b>{{ $details['nama'] }}</b>
    </p>
    <br>
    <p>
        Berikut ini adalah data anda :
    </p>
    <table>
        <tr>
            <td>Full name</td>
            <td>:</td>
            <td>{{ $details['nama'] }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>{{ $details['role'] }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{ $details['website'] }}</td>
        </tr>
        <tr>
            <td>Tanggal registrasi</td>
            <td>:</td>
            <td>{{ $details['date_time'] }}</td>
        </tr>
        <br><br><br>
        <center>
            <h3>Klik di bawah ini untuk verifikasi akun anda :</h3>
            <a href="{{ $details['url'] }}" style="text-decoration: none; color: aliceblue; padding: 9px; background-color: #1a4861; font: bold; border-radius: 10%;">Verifikasi</a>
        </center>
        <br><br><br>
        <p>
            Copyright @ 2024 | Techno Indie
        </p>
    </table>
</body>
</html>