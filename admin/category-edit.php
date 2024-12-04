<?php
include "partials/header.php";

$firstname = $_SESSION["add-user-data"]["firstname"] ?? null;
$lastname = $_SESSION["add-user-data"]["lastname"] ?? null;
$username = $_SESSION["add-user-data"]["username"] ?? null;
$email = $_SESSION["add-user-data"]["email"] ?? null;
$createpassword = $_SESSION["add-user-data"]["createpassword"] ?? null;
$confirmpassword = $_SESSION["add-user-data"]["confirmpassword"] ?? null;

unset($_SESSION["add-user-data"]);

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

    // FETCHS DATA FROM DB
    $query = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $category = mysqli_fetch_assoc($result);
    }
} else {
    header("Location :" . ROOT_URL . "admin/manage-category.php");
    die();
}
?>

<main>

<!-- START OF EDIT CATEGORY -->
    <section class="form__section" enctype="multipart/form-data">
        <div class="container form__section-container">
            <h2>Edit Category</h2>
            <form action="<?= ROOT_URL ?>admin/category-edit-logic.php" method="POST">
                <input type="hidden" name="id" value="<?= $category['id']?>">
                <input type="text" placeholder="Title" name="title" value="<?= $category['title']?>">
                <textarea rows="4" placeholder="Description" name="description"><?= $category['description']?></textarea>
                <button type="submit" name="submit" class="button">Update Category</button>
            </form>
        </div>
    </section>
    <!-- END OF EDIT CATEGORY -->
     
</main>



<?php
include "../partials/footer.php";
?>