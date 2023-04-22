<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>

    <style>
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        p {
            margin: 0;
            line-height: 1.5;
            padding: inherit;
        }

        h2 {
            margin-top: 50px;
            font-size: 24px;
            line-height: 1.5;
        }

        a {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4c8eaf;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- <h1>hello</h1>
    <a href="{{ route('password.reset', $token) }}">Reset Password</a> -->
    <div class="container">
        <h2>Maid 4 House</h2>
        <p>Change your Password</p>
        <a href="{{ route('password.reset', $token) }}">Reset Password</a>
    </div>
</body>

</html>
