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
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">MH</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="signin.html">Sign_In</a></li>


                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/default_avatar.png" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Log Out</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-button">
                <i class="uil uil-bars"></i>
            </button>
            <button id="close__nav-button">
                <i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>
    <main>

        <!-- START OF POST EDIT -->

        <section class="form__section">
            <div class="container form__section-container">
                <h2>Edit Post</h2>

                <form action="" enctype="multipart/form-data">

                    <input type="text" placeholder="Title">
                    <select>
                        <option value="1">Nature</option>
                        <option value="1">Career</option>
                        <option value="1">Fitness</option>
                        <option value="1">Dating</option>
                        <option value="1">Travel</option>
                        <option value="1">Technology</option>
                    </select>
                    <textarea rows="10" placeholder="Body"></textarea>

                    <div class="form__control inline">
                        <input type="checkbox" id="is_featured" checked>
                        <label for="is_featured">Featured</label>
                    </div>

                    <div class="form__control">
                        <label for="thumbnail">Change Thumbnail</label>
                        <input type="file" id="thumbnail">
                    </div>

                    <button type="submit" class="button">Update Post</button>

                </form>
            </div>
        </section>

        <!-- END OF POST EDIT -->




    </main>
    <!-- START OF FOOTER -->


    <footer>
        <div class="footer__socials">
            <a href="#" target="_blank">
                <i class="uil uil-github"></i>
            </a>
            <a href="#" target="_blank">
                <i class="uil uil-linkedin"></i>
            </a>
            <a href="#" target="_blank">
                <i class="uil uil-twitter"></i>
            </a>
            <a href=" #" target="_blank">
                <i class="uil uil-instagram"></i>
            </a>
        </div>

        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Dating</a></li>
                    <li><a href="#">Travel</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Online Support</a></li>
                    <li><a href="#">Phone Support</a></li>
                    <li><a href="#">Email Support</a></li>
                    <li><a href="#">Social Supports</a></li>

                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Trending</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">Oldest</a></li>

                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy 2024 MH Enterprise</small>
        </div>

    </footer>







    <script src="main.js"></script>
</body>

</html>