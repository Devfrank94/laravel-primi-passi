<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>

        nav{
            display: flex;
            justify-content: center;
        }

        li{
            list-style: none;
            display: inline;
            margin: .5rem;
        }

        li a{
            color: white;
            font-size: 1.5rem;
        }

    </style>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contatti</a></li>
            </ul>
        </nav>
    </header>

</body>
</html>
