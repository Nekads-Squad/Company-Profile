<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Consulting Form Submission</h1>
    <p><strong>Name:</strong> {{ $consulting->name }}</p>
    <p><strong>Email:</strong> {{ $consulting->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $consulting->message }}</p>
</body>
</html>