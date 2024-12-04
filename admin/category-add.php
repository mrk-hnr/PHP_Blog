<?php
include "partials/header.php";

// RETAINS INPUTS AFTER FAIELD ATTEMPT
$title = $_SESSION["add-category-data"]["title"] ?? null;
$description = $_SESSION["add-category-data"]["description"] ?? null;

unset($_SESSION["add-category-data"]);
?>

<main>

    <!-- START OF CATEGORY POST -->
    <section class="form__section" enctype="multipart/form-data">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            
            <?php if (isset($_SESSION["add-category"])) : ?>
                <div class="alert__message error">
                <p>
                    <?= $_SESSION["add-category"];
                    unset($_SESSION["add-category"]); ?>
                </p>
                </div>



                <?php endif ?>
            <form action="<?= ROOT_URL?>admin/category-add-logic.php" method="POST">
                <input type="text" name="title" placeholder="Title" value="<?= $title ?>">
                <textarea rows="4" name="description" placeholder="Description" value="<?= $description ?>"></textarea>
                <button type="submit" name="submit" class="button">Add Category</button>
            </form>
        </div>
    </section>
    <!-- END OF SIGN UP -->
     
</main>
    
<?php
include "../partials/footer.php";
?>