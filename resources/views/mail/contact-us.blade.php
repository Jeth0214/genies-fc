<html>

<head>
    <title>New Contact Us Message</title>
</head>

<body style="font-family: 'Arial'">
    <h3>New message received from Contact Us form:</h3>
    <hr />

    <div style="margin-bottom: 10px">
        <label>From: <strong>{{$data['fullname']}}</strong></label>
    </div>
    <div style="margin-bottom: 10px">
        <label>Email Address: <strong>{{$data['email']}}</strong></label>
    </div>
    <div style="margin-bottom: 10px">
        <label>Phone Number: <strong>{{$data['phone']}}</strong></label>
    </div>
    <div style="margin-bottom: 10px">
        <label>Message: <strong>{{$data['message']}}</strong></label>
    </div>
</body>

</html>