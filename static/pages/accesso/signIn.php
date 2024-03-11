<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarPu - Sign In</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #00509D;
            color: #FFD500;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #003F88;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #FFD500;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #FDC500;
            color: #00296B;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #FFD500;
        }

        a {
            color: #FFD500;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <form action="process/login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="log in">
    </form>

    <a href="signUp.php">Don't have an account? Sign Up</a>
</body>

</html>