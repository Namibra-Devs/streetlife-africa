<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/admin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Oswald:wght@300;600;700&family=Raleway:wght@300;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Source+Serif+Pro:wght@300;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin | login</title>
</head>
<body>
    <div class="login-container">
        <div class="loginbox">
            <div class="login-wrap">
                <h1>Admin Login</h1>
                <p>Access to our dashboard</p>
            </div>

            <form action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Password:</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group submit">
                    <!-- <input class="login-submit" type="submit" name="email" id="email"> -->
                    <a href="./dashboard.php" class="login-submit">Login</a>
                </div>
                <div class="form-group align-right">
                    <a class="forgot-password" href="#">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>