<?php
include "partials/header.php";

$post_query = "SELECT * FROM posts ORDER BY date_time DESC";
$posts = mysqli_query($connection, $post_query);

$all_categories = "SELECT * FROM categories";
$categories_result = mysqli_query($connection, $all_categories);
?>



<main>
    <!-- START OF SEARCH BAR -->
    <section class="search__bar">
        <form class="container search__bar-container" action="">
            <div>
                <p class="icon__search">⌕</p>
                <input type="search" name="search" placeholder="Search">
            </div>
            <button type="submit" class="button">Search</button>
        </form>
    </section>
    <!-- END OF SEARCH BAR -->

    <!-- START OF GENERAL POST -->
    <section class="post <?= $featured ? '' : 'section__extra-margin' ?>">
            <div class="container post__container">
                <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                <article class="post">
                    <div class="post__thumbnail">
                        <!-- <img src="/images/blog-2.jpg"> -->
                        <img src="./images/posts_image/<?= $post["thumbnail"] ?>">
                    </div>
                    <div class="post__info">

                    <?php
                    $category_id = $post["category_id"];
                    $category_query = "SELECT * FROM categories WHERE id = $category_id";
                    $category_result = mysqli_query($connection, $category_query);
                    $category = mysqli_fetch_assoc($category_result);


                    ?>
                        <a href="<?= ROOT_URL ?>category-post.php?id=<?= $category["id"] ?>" class="category__button"><?= $category["title"] ?></a>
                        <h2 class="post__title">
                            <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post["title"] ?></a>
                        </h2>
                        <p class="post__body"><?= substr($post["body"], 0, 100) ?>...</p>
                        <div class="post__author">

                        <?php 
                        $author_id = $post["author_id"];
                        $author_query = "SELECT * FROM users WHERE id = $author_id";
                        $author_result = mysqli_query($connection, $author_query);
                        $author = mysqli_fetch_assoc($author_result);

                        ?>
                            <div class="post__author-avatar">
                            <img src="./images/users/<?= $author['avatar']?>">
                            </div>
                            <div class="post__author-info">
                                <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                                <small><?= date("M d, Y - H:i (D)", strtotime($post['date_time'])) ?></small>
                            </div>
                        </div>
                    </div>
                </article>

                <?php endwhile ?>

           


            </div>
    <!-- END OF GENERAL POST -->
     
    <!-- START OF CATEGORY SECTIONS -->
    <section class="category__buttons">
            <div class="container category__buttons-container">

            <?php while ($categories = mysqli_fetch_assoc($categories_result)) : ?>
                <a href="<?= ROOT_URL ?>category-post.php?id=<?= $categories["id"] ?>" class="category__button">
                    <?= $categories["title"] ?></a>

                <?php endwhile ?>
            </div>
        </section>
    <!-- END OF CATEGORY SECTIONS -->
</main>

<?php
include "partials/footer.php";
?>