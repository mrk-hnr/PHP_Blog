<?php
include "partials/header.php";
?>

<main>

    <!-- START OF CATEGORY POST -->
    <section class="form__section" enctype="multipart/form-data">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            <div class="alert__message error">
                <p>This is an error message!</p>
            </div>
            <form action="<?= ROOT_URL?>admin/category-add-logic.php" method="POST">
                <input type="text" name="title" placeholder="Title">
                <textarea rows="4" name="description" placeholder="Description"></textarea>
                <button type="submit" name="submit" class="button">Add Category</button>
            </form>
        </div>
    </section>
    <!-- END OF SIGN UP -->
     
</main>
    
<?php
include "../partials/footer.php";
?>