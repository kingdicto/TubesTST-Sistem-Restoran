<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            height: 100%;
            position: relative;
            background: #1B1D16;
        }

        .background-img {
            width: 100%;
            height: auto;
            position: absolute;
        }

        .main-text {
            width: 80%;
            position: absolute;
            color: #CFD2C6;
            font-size: 4vw;
            font-family: Clash Display;
            font-weight: 700;
            line-height: 1.2;
            word-wrap: break-word;
            left: 5%;
            top: 20%;
            padding-top: 30%;
            
        }

        @media (max-width: 1280px) {
            .main-text,
            .nav-container {
                width: 90%;
            }
        }

        @media (max-width: 720px) {
            .main-text,
            .nav-container {
                width: 95%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="background-img" src="background.jpg" alt="Background Image" />
        <div class="main-text">Made by Italians.<br/> Enjoyed by Everyone.</div>
    </div>
</body>

</html>
