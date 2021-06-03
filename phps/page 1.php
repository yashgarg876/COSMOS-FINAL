<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(D:/website/phps/123.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Gruppo', cursive;
        }

        .title h1 {
            color: white;
            font-size: 50px;
            font-family: 'Cormorant Garamond', serif;
        }

        .button {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn {
            border: 0px solid #fff;
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
            font-family: 'Quicksand', sans-serif;
            font-size: large;
        }

        .btn:hover {
            background-color: white;
            color: black;
        }
    </style>
    <header>
        <div class="title">
            <h1>WHAT'S BEYOND THE SKY?</h1>
        </div>
        <div class="button">
            <a href="#" class="btn">ENTER SPACE</a>
        </div>
    </header>
</body>

</html>