<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header >
        <h1 class="header-title text-center mb-74">Register form</h1>
    </header>

    <main class="container">
        <form class="register-form col-3 m-auto" action="">
            <label class="message w-100" role="alert"></label>
            <div class="mb-3">
                <label for="form-first-name" class="form-label">First-name</label>
                <input type="text" class="form-control" id="form-first-name" name="firstName" required>
            </div>

            <div class="mb-3">
                <label for="form-last-name" class="form-label">Last-name</label>
                <input type="text" class="form-control" id="form-last-name" name="lastName" required>
            </div>

            <div class="mb-3">
                <label for="form-email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="form-email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="form-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="form-password" name="password" >
            </div>

            <div class="mb-3">
                <label for="form-password-repeat" class="form-label">Repeat your password</label>
                <input type="password" class="form-control" id="form-password-repeat" name="confirmPassword" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="assets/script.js"></script>

</body>
</html>