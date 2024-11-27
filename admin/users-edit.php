<?php
include "partials/header.php";
?>

<main>
    <!-- START OF EDIT USERS -->
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit User</h2>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <select>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="button">Update User</button>
            </form>
        </div>
    </section>
    <!-- END OF EDIT USERS -->
</main>

<?php
include "../partials/footer.php";
?>