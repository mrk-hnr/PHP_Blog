<?php
include "partials/header.php";

// FETCHES ALL CATEGORY
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

$title = $_SESSION["add-post-data"]["title"] ?? null;
$body = $_SESSION["add-post-data"]["body"] ?? null;

// DELETE FORM DATA SESSION
unset($_SESSIOn["add-post-data"]);
?>

    <main>

        <!-- START OF POST ADD -->

        <section class="form__section">
            <div class="container form__section-container">
                <h2>Add Post</h2>
                <!-- <div class="alert__message error">
                    <p>This is an error message!</p>
                </div> -->

                <?php if (isset($_SESSION["add-post"])) : ?>
                <div class="alert__message error">
                <p>
                    <?= $_SESSION["add-post"];
                    unset($_SESSION["add-post"]); ?>
                </p>
                </div>
                <?php endif ?>


                <form action="<?= ROOT_URL ?>admin/post-add-logic.php" enctype="multipart/form-data" method="POST">

                    <input type="text" name="title" placeholder="Title" value="<?= $title ?>">
                    <select name="category">
                        <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                        <option value="<?= $category["id"]?>">
                            <?= $category["title"] ?>
                        </option>
                        <?php endwhile ?>
      
                    </select>
                    <textarea rows="10" name="body" placeholder="Body"><?= $body ?></textarea>

                    <?php if(isset($_SESSION["user_is_admin"])) : ?>

                        <div class="form__control inline">
                            <input type="checkbox" id="is_featured" value="1" name="is_featured" checked>
                            <label for="is_featured">Featured</label>
                        </div>

                    <?php endif ?>

                    <div class="form__control">
                        <label for="thumbnail" >Add Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>

                    <button type="submit" name="submit" class="button">Add Post</button>

                </form>
            </div>
        </section>

        <!-- END OF POST ADD -->




    </main>
    <!-- START OF FOOTER -->

<?php
include "../partials/footer.php";
?>