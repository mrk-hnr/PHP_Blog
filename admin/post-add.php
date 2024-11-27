<?php
include "partials/header.php";
?>

    <main>

        <!-- START OF POST ADD -->

        <section class="form__section">
            <div class="container form__section-container">
                <h2>Add Post</h2>
                <div class="alert__message error">
                    <p>This is an error message!</p>
                </div>

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
                        <label for="thumbnail">Add Thumbnail</label>
                        <input type="file" id="thumbnail">
                    </div>

                    <button type="submit" class="button">Add Post</button>

                </form>
            </div>
        </section>

        <!-- END OF POST ADD -->




    </main>
    <!-- START OF FOOTER -->

<?php
include "../partials/footer.php";
?>