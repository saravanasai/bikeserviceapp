<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>

        @foreach ($users as $user)
        <h2>{{$user->email}}</h2>
        @foreach ($user->bookings as $booking )
        <li>{{$booking->complaint}}</li><span>{{$booking->service_on_date}}-{{$booking->status->status}}</span>
        @endforeach
        @endforeach
    </ul>

</body>
</html>
