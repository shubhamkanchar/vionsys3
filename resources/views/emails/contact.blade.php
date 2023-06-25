<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
  
    <p>name : {{ $mailData['name'] }}</p>
    <p>email : {{ $mailData['email'] }}</p>
    <p>phone : {{ $mailData['phone'] }}</p>
    <p>subject : {{ $mailData['subject'] }}</p>
    <p>message : {{ $mailData['message'] }}</p>
     
    <p>Thank you</p>
</body>
</html>