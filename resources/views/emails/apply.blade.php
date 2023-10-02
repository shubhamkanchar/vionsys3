<!DOCTYPE html>
<html>
<head>
    <title>vionsys</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
  
    <p>Name : {{ $mailData['name'] }}</p>
    <p>Email : {{ $mailData['email'] }}</p>
    <p>Phone : {{ $mailData['phone'] }}</p>
    <p>Experience : {{ $mailData['experience'] }} months</p>
    <p>opening : {{ $mailData['job'] }}</p>
    <p>Please find attachment</p>
     
    <p>Thank you</p>
</body>
</html>