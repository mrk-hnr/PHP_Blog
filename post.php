<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/single-post.css">
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
    <!-- END OF NAV -->
    <main>

        <!-- START OF SINGLE POST -->

        <section class="single-post">
            <div class="container single-post__container">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, aut.</h2>

                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="/images/profile-1.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Smith</h5>
                        <small>November, 25, 2024 - 11:18 AM</small>
                    </div>
                </div>
                <div class="single-post__thumbnail">
                    <img src="/images/blog-1.jpg">
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci exercitationem tempore quasi
                    explicabo modi? Alias cumque non esse nostrum deleniti totam expedita at enim! Dolores soluta
                    laboriosam vero. Voluptas quasi repellat quis tempore nam, perspiciatis ad consequuntur aperiam
                    excepturi praesentium.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta deleniti eum nobis?
                    Veritatis fugit saepe culpa dolores, maxime rerum adipisci eum a nihil, soluta voluptate explicabo
                    commodi illo alias eos nulla fuga necessitatibus ab?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laborum, nisi atque nam porro
                    illum provident magnam dolorum fugiat, error voluptatem ipsa. Animi sint dolorum iure? Minus
                    veritatis eum atque hic quod incidunt eveniet perspiciatis impedit asperiores quidem doloribus harum
                    corporis nulla explicabo ducimus, deserunt fugit. Ipsam enim veniam porro.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque aliquam provident in obcaecati
                    facilis officia quidem enim mollitia? Incidunt, ex. Consequatur placeat repudiandae impedit odio
                    excepturi necessitatibus suscipit pariatur esse at, quasi porro repellat illo iusto eveniet! Iure
                    quas aliquid beatae excepturi reiciendis nihil facilis?
                </p>
            </div>
        </section>

        <!-- END OF SINGLE POST -->






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