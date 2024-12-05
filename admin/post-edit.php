<?php
include "partials/header.php";

$category_query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $category_query);

// RETRIEVES DATA FROM DB IF ID IS SET

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header("Location: " . ROOT_URL . "admin/");
    die();
}


?>

<main>
    
    <!-- START OF POST EDIT -->
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit Post</h2>
            <form action="<?= ROOT_URL ?>admin/post-edit-logic.php" enctype="multipart/form-data" method="POST">
                <input type="hidden" value="<?= $post['id']?>" name="id">
                <input type="hidden" value="<?= $post['thumbnail']?>" name="prev_thumbnail">
                <input type="text" value="<?= $post['title']?>" placeholder="Title" name="title">
                <select name="category">
                    
                    <?php while ($category = mysqli_fetch_assoc($categories)) : ?>

                    <option value="<?= $category["id"] ?>"><?= $category["title"] ?></option>
                  

                    <?php endwhile ?>
                </select>
                <textarea rows="10" placeholder="Body" name="body"><?= $post['body']?></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" value="1" name="is_featured" checked>
                    <label for="is_featured">Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>
                <button type="submit" name="submit" class="button">Update Post</button>
            </form>
        </div>
    </section>
    <!-- END OF POST EDIT -->

</main>

<?php
include "../partials/footer.php";
?>