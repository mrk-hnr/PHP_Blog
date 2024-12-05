<?php
require "partials/header.php";

$all_categories = "SELECT * FROM categories";
$categories_result = mysqli_query($connection, $all_categories);

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE category_id = $id ORDER BY date_time DESC";
    $posts = mysqli_query($connection, $query);

} else {
    header("Location: " . ROOT_URL . "blog.php");
    die();
}
?>

<main>
    <!-- START OF CATEGORY POST -->
    <header class="category__title">
        <h2>
            <?php
                $category_id = $id;
                $category_query = "SELECT * FROM categories WHERE id = $id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                echo $category["title"]
            ?>
        </h2>
    </header>
    <!-- END OF CATEGORY POST -->

    <!-- START OF GENERAL POST -->


    <?php if (mysqli_num_rows($posts) > 0) : ?>
        <section class="post">


            <div class="container post__container">
                <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                <article class="post">
                    <div class="post__thumbnail">
                        <!-- <img src="/images/blog-2.jpg"> -->
                        <img src="./images/posts_image/<?= $post["thumbnail"] ?>">
                    </div>
                    <div class="post__info">
                        
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
        </section>

        <?php else : ?>

            <div class="alert__message error lg">
                <p>No Post Found</p>
            </div>

            <?php endif ?>
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
require "partials/footer.php";
?>