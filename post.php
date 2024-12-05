<?php
require "partials/header.php";

// RETRIEVES DATA FROM DB IF ID S SET

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT  * FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);

}
 else {
    header("Location: ".  ROOT_URL . "blog.php");
    die();
}
?>

<main>

    <!-- START OF SINGLE POST -->
    <section class="single-post">
        <div class="container single-post__container">
            <h2><?= $post["title"] ?></h2>
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
            <div class="single-post__thumbnail">
                <img src="./images/posts_image/<?= $post["thumbnail"] ?>">
            </div>
            <p>
            <?= $post["body"] ?>
            </p>
        </div>
    </section>
    <!-- END OF SINGLE POST -->

</main>
<?php
require "partials/footer.php";
?>