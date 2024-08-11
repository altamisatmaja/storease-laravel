<!DOCTYPE html>
<html>

<head>
    <title>Anda mendapat saran dan kritik!</title>
</head>

<body>
    <p>Diberikan oleh {{ $details['name'] }} dengan informasi nomor hp {{ $details['nohp'] }}</p>
    <p>Email yang digunakan: {{ $details['email'] }}</p>
    <p>Subjek: {{ $details['subject'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>

</html>
