<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <article>
            <h1>Login</h1>
        </article>
        <article>
            <h2>Login Form</h2>
            <form action="../task4.php" method="post">
            <li>Username: <input type = "text" name="Username"></li>
            <li>Email: <input type = "text" name = "Email"></li>
            <li>Password: <input type = "password" name="Password"></li>
            <input type = "submit" value = "Sign up">
            <p>Already have an account? <a href="./">Login here instead</a></p>
            <?php include "../task4.php" ?>
        </article>
    </section>
</body>
</html>