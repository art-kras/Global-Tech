<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #163F53;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-form {
            border-radius: 10px;
            background-color: #09232F;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            align-content: center;
            border: 1px solid cyan;
            padding: 20px;
            width: 450px;
            height: 400px;
            color: white;
        }
        input {
            background-color: #163F53;
            border-radius: 5px;
            display: block;
            width: 250px;
            height: 40px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 25px;
            font-size: 1em;
            background-color: #163F53;
            color: gray;
            border: 2px solid gray;
            cursor: pointer;
            font-family: 'a Astro Space', sans-serif;
        }

        button:hover{
            background-color: cyan;
            color: #163F53;
            transition: .4s;
        }

        span{
            display: block;
            margin: 30px 20px;
            text-align:center;
            font-size: 1.2em;
            color:gray;
        }

    </style>
</head>
<body>
    <div class="container">
        <form class="register-form" id="register-form">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>

        <span>Don't have an account ? <a href="../Register/register.php">Register here</a>.</span>
    </div>

    <script>
        document.getElementById('register-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            let emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email');
                return;
            }


            let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert('Password should be at least 8 characters and include at least one letter and one number');
                return;
            }


            alert('Form submitted successfully');
        });
    </script>
</body>
</html>