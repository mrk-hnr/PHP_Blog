<?php
include "partials/header.php";
?>

<main>
    
    <!-- START OF POST EDIT -->
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit Post</h2>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">Nature</option>
                    <option value="1">Career</option>
                    <option value="1">Fitness</option>
                    <option value="1">Dating</option>
                    <option value="1">Travel</option>
                    <option value="1">Technology</option>
                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_featured">Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="button">Update Post</button>
            </form>
        </div>
    </section>
    <!-- END OF POST EDIT -->

</main>

<?php
include "../partials/footer.php";
?>