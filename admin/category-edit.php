<?php
include "partials/header.php";
?>

<main>

<!-- START OF EDIT CATEGORY -->
    <section class="form__section" enctype="multipart/form-data">
        <div class="container form__section-container">
            <h2>Edit Category</h2>
            <form action="">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button type="submit" class="button">Update Category</button>
            </form>
        </div>
    </section>
    <!-- END OF EDIT CATEGORY -->
     
</main>



<?php
include "../partials/footer.php";
?>