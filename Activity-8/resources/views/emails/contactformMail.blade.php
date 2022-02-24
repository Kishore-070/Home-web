<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact message</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>FirstName : {{$contents['firstname']}}</p>
    <p>LastName : {{$contents['lastname']}}</p>
    <p>Email ID : {{$contents['Email']}}</p>
    <p>Phone Number : {{$contents['phonenumber']}}</p>
    <p>Subject : {{$contents['Subject']}}</p>
    <p>Comments : {{$contents['Comment']}}</p>
</body>
</html>