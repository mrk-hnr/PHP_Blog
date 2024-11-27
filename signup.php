<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/forms.css">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Blog</title>
</head>

<body>

    <main>

        <!-- START OF SIGN UP -->

        <section class="form__section">
            <div class="container form__section-container">
                <h2>Sign Up</h2>
                <div class="alert__message error">
                    <p>This is an error message!</p>
                </div>

                <form action="" enctype="multipart/form-data">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="text" placeholder="Username">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">

                    <div class="form__control">
                        <label for="avatar">User avatar</label>
                        <input type="file" id="avatar">
                    </div>
                    <button type="submit" class="button">Sign Up</button>
                    <small>
                        Already have an account? <a href="signin.html">Sign In</a>
                    </small>
                </form>
            </div>
        </section>

        <!-- END OF SIGN UP -->




    </main>
    <!-- START OF FOOTER -->








    <script src="main.js"></script>
</body>

</html>