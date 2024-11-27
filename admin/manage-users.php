<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/dashboard.css">
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


    <!-- START OF CATEGORY MANAGEMENT -->

    <section class="dashboard">
        <div class="container dashboard__container">
            <button class="sidebar__toggle" id="show__sidebar-button">
                <img src="images/right.svg" class="icons__manage sidebar__icons">
            </button>
            <button class="sidebar__toggle" id="hide__sidebar-button">
                <img src="images/left.svg" class="icons__manage sidebar__icons">
            </button>
            <aside>
                <ul>
                    <li>
                        <a href=" post-add.html">
                            <img src="images/plus.svg" class="icons__manage">
                            <h5>Add Post</h5>
                        </a>

                    </li>
                    <li>
                        <a href="dashboard.html">
                            <img src="/images/manage-post.svg" class="icons__manage">
                            <h5>Manage Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="users-add.html">
                            <img src="images/user-add.svg" alt="" class="icons__manage">
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.html" class="active">
                            <img src="images/user-manage.svg" alt="" class="icons__manage">
                            <h5>Manage Users</h5>
                        </a>

                    </li>
                    <li>
                        <a href="category-add.html">
                            <img src="/images/edit.svg" class="icons__manage">
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>

                        <a href="manage-category.html">
                            <img src="/images/manage-categories.svg" class="icons__manage">
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe</td>
                            <td><a href="users-edit.html" class="button sm">Edit</a></td>
                            <td><a href="delete-category.html" class="button sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>janesmith</td>
                            <td><a href="users-edit.html" class="button sm">Edit</a></td>
                            <td><a href="delete-category.html" class="button sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>




                        </tr>
                    </tbody>
                </table>

            </main>
        </div>
    </section>





    <!-- END OF CATEGORY MANAGEMENT -->


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