<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #000000;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 4px 0 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #001F3F;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #00008b;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
    <script>
        function validateForm(event) {
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let errorMessage = '';

            if (username.trim() === '') {
                errorMessage = 'Username is required.';
            } else if (password.trim() === '') {
                errorMessage = 'Password is required.';
            }

            if (errorMessage) {
                event.preventDefault();
                document.querySelector('.error-message').innerText = errorMessage;
            }
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <p class="error-message"></p>
        <form action="<?= site_url('login/authenticate') ?>" method="post" onsubmit="validateForm(event)">
            <?= csrf_field() ?>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
