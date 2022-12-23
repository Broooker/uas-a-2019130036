<!DOCTYPE html>
<html>

<head>
    <title>FOODtime.id</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            background-color: #747a6e;
            color: #ffffff;
        }
        h2{
            color: rgb(75, 197, 4);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #85e22d
        }

        th {
            background-color: #005f18;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
