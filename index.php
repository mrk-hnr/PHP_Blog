<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">
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
            <a href="index.php" class="nav__logo">MH</a>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signin.php">Sign_In</a></li>


                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/default_avatar.png" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Log Out</a></li>
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

        <!-- START OF FEATURED POST -->

        <section class="featured">
            <div class="container featured__container">
                <div class="post__thumbnail">
                    <img src="/images/blog-1.jpg">
                </div>
                <div class="post__info">
                    <a href="category-post.php" class="category__button">Technology</a>
                    <h2 class="post__title">
                        <a href="post.php">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, corrupti!</a>
                    </h2>
                    <p class="post__body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, laboriosam
                        soluta animi illo optio repellendus incidunt vitae consectetur cupiditate eum.</p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="/images/profile-1.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Smith</h5>
                            <small>November, 25, 2024 - 11:18 AM</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END OF FEATURED POST -->
        <!-- START OF GENERAL POST -->

        <section class="post">
            <div class="container post__container">
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-2.jpg">
                    </div>
                    <div class="post__info">
                        <a href="" class="category__button">Nature</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
                                aliquid.
                                corrupti!</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aut rem
                            doloremque harum velit, nulla ullam fugiat. Officia, incidunt voluptatem?</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-2.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Jane Doe</h5>
                                <small>February 16, 2024 - 10:34 AM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-3.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Dating</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet.
                                aliquid.
                                corrupti!</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis,
                            quibusdam quas et itaque soluta beatae.</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-3.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Samantha Hill</h5>
                                <small>February 25, 2024 - 2:16 PM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-4.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Travel</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis,
                                debitis?</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt commodi
                            enim quo eum ipsam ut dolor id distinctio voluptatum culpa.</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-4.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Jacob Nye</h5>
                                <small>March 14, 2024 - 11:27 AM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-5.jpg">
                    </div>
                    <div class="post__info">
                        <a href="manage-category.php" class="category__button">Career</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                                possimus!</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
                            doloremque? Officiis facilis quod minus facere deserunt fuga mollitia voluptate?</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-1.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: John Smith</h5>
                                <small>March 30, 2024 - 10:04 AM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-6.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Nature</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quia
                                maiores unde?</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis cumque
                            quibusdam repudiandae magni unde quisquam! Minus odit minima cumque id delectus, accusantium
                            odio dolorem quo.</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-2.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Jane Doe</h5>
                                <small>April 14, 2024 - 5:54 PM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-7.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Technology</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit.</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                            numquam unde necessitatibus molestias optio voluptates laudantium quam. At sapiente minima
                            in vitae architecto nihil vel!</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-1.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: John Smith</h5>
                                <small>April 28, 2024 - 3:27 PM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-8.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Travel</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                        </h2>
                        <p class="post__body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis
                            iusto, distinctio impedit earum ad veniam.</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-4.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Jacob Nye</h5>
                                <small>May 15, 2024 - 9:20 AM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-9.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Dating</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet.</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, earum?</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-3.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Samantha Hill</h5>
                                <small>May 17, 2024 - 12:41 PM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-010.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Fitness</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus,
                                animi?</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste similique
                            doloremque delectus, impedit exercitationem commodi laboriosam. Et fuga in facere.</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-5.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Natasha Willow</h5>
                                <small>May 23, 2024 - 2:06 PM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-011.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Nature</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, natus!</a>
                        </h2>
                        <p class="post__body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem alias
                            ipsa vitae libero dicta error repellendus, accusantium totam odio quae!</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-2.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: Jane Doe</h5>
                                <small>May 30, 2024 - 11:10 AM</small>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- --------------------------------------------------------- -->
                <!-- ------------------ ARTICLE SEPERATOR -------------------- -->
                <!-- --------------------------------------------------------- -->

                <article class="post">
                    <div class="post__thumbnail">
                        <img src="/images/blog-012.jpg">
                    </div>
                    <div class="post__info">
                        <a href="category-post.php" class="category__button">Career</a>
                        <h2 class="post__title">
                            <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                        </h2>
                        <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
                            repudiandae odit ducimus libero error eos! Facere, quia?</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="/images/profile-1.jpg">
                            </div>
                            <div class="post__author-info">
                                <h5>By: John Smith</h5>
                                <small>June 1, 2024 - 9:46 AM</small>
                            </div>
                        </div>
                    </div>
                </article>


            </div>
        </section>



        <!-- END OF GENERAL POST -->
        <!-- START OF CATEGORY SECTIONS -->

        <section class="category__buttons">
            <div class="container category__buttons-container">
                <a href="" class="category__button">Nature</a>
                <a href="" class="category__button">Career</a>
                <a href="" class="category__button">Technology</a>
                <a href="" class="category__button">Fitness</a>
                <a href="" class="category__button">Dating</a>
                <a href="" class="category__button">Travel</a>
            </div>
        </section>

        <!-- END OF CATEGORY SECTIONS -->



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







    <script src="scripts/main.js"></script>
</body>

</html>