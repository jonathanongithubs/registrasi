<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            padding: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }
    </style>
    <h2>Form Registrasi</h2>
    <form method="post" action="register_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="register" value="Daftar">
    </form>
</body>

</html>