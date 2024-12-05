<?php
include "partials/header.php";

// FETCH CURRENT USER's POSTS ONLY
$current_user_id = $_SESSION["user-id"];
$query = "SELECT posts.id, posts.title, posts.category_id FROM posts JOIN users ON posts.author_id = users.id WHERE posts.author_ID = $current_user_id ORDER BY posts.id DESC";
$posts = mysqli_query($connection, $query);

?>

<!-- START OF CATEGORY MANAGEMENT -->
<section class="dashboard">


<?php if (isset($_SESSION["add-post-success"])) : ?> <!-- SUCCESS MESSAGE for ADD POST -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["add-post-success"];
                unset($_SESSION["add-post-success"]);
                ?>
            </p>
        </div>
<?php endif ?>

<?php if (isset($_SESSION["edit-post-success"])) : ?> <!-- SUCCESS MESSAGE for ADD POST -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["edit-post-success"];
                unset($_SESSION["edit-post-success"]);
                ?>
            </p>
        </div>
<?php endif ?>



    <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-button">
            <img src="images/right.svg" class="icons__manage sidebar__icons">
        </button>
        <button class="sidebar__toggle" id="hide__sidebar-button">
            <img src="images/left.svg" class="icons__manage sidebar__icons">
        </button>
        <aside>
            <ul>
                <li>
                    <a href=" post-add.php">
                        <img src="../images/assets/plus.svg" class="icons__manage">
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="active">
                        <img src="../images/assets/manage-post.svg" class="icons__manage">
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <?php if (isset($_SESSION["user_is_admin"])) : ?> 
                    <li>
                        <a href="users-add.php">
                            <img src="../images/assets/user-add.svg" alt="" class="icons__manage">
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php">
                            <img src="../images/assets/user-manage.svg" alt="" class="icons__manage">
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="category-add.php">
                            <img src="../images/assets/edit.svg" class="icons__manage">
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-category.php">
                            <img src="../images/assets/manage-categories.svg" class="icons__manage">
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Manage Post</h2>
            <?php if (mysqli_num_rows($posts) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($post = mysqli_fetch_assoc($posts)) : ?>
                        <!-- RETRIEVE CATEGORY TITLE FOR EACH POST from CATEGORY TABLE -->
                         <?php
                         $category_id = $post["category_id"];
                         $category_query = "SELECT title FROM categories WHERE id = $category_id";
                         $category_result = mysqli_query($connection, $category_query);
                         $category = mysqli_fetch_assoc($category_result);
                         ?>



                    <tr>
                        <td>
                            <?= $post["title"] ?>
                        </td>
                        <td>
                        <?= $category["title"] ?>
                        </td>
                        <td><a href="<?= ROOT_URL ?>admin/post-edit.php?id=<?= $post["id"]?>" class="button sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>admin/post-delete.php?id=<?= $post["id"]?>" class="button sm danger">Delete</a></td>
                    </tr>
                    <?php endwhile ?>

                </tbody>
            </table>
            <?php else : ?>
                <div class="alert__message error">
                    <?= "No Post Found" ?>
                </div>
                <?php endif ?>
        </main>
    </div>
</section>
<!-- END OF CATEGORY MANAGEMENT -->


<?php
include "../partials/footer.php";
?>