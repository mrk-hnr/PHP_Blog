<?php
include "partials/header.php";

// FETCH CATEGORIES

$query = "SELECT * FROM categories ORDER BY title DESC";
$categories = mysqli_query($connection, $query);
?>

<!-- START OF CATEGORY MANAGEMENT -->
<section class="dashboard">

    <?php if (isset($_SESSION["add-category-success"])) : ?> <!-- Add User messsage -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["add-category-success"];
                unset($_SESSION["add-category-success"]);
                ?>
            </p>
        </div>

    <?php elseif (isset($_SESSION["add-category"])) : ?> <!-- Add User messsage -->
        <div class="alert__message error container">
            <p>
                <?= $_SESSION["add-category"];
                unset($_SESSION["add-category"]);
                ?>
            </p>
        </div>

    <?php endif ?>

    <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-button">
            <img src="<?= ROOT_URL ?>images/right.svg" class="icons__manage sidebar__icons">
        </button>
        <button class="sidebar__toggle" id="hide__sidebar-button">
            <img src="<?= ROOT_URL ?>images/left.svg" class="icons__manage sidebar__icons">
        </button>
        <aside>
            <ul>
                <li>
                    <a href=" post-add.php">
                        <img src="<?= ROOT_URL ?>images/assets/plus.svg" class="icons__manage">
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <img src="<?= ROOT_URL ?>images/assets/manage-post.svg" class="icons__manage">
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <?php if (isset($_SESSION["user_is_admin"])) : ?> 




                
                    <li>
                        <a href="users-add.php">
                            <img src="<?= ROOT_URL ?>images/assets/user-add.svg" alt="" class="icons__manage">
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php">
                            <img src="<?= ROOT_URL ?>images/assets/user-manage.svg" alt="" class="icons__manage">
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="category-add.php">
                            <img src="<?= ROOT_URL ?>images/assets/edit.svg" class="icons__manage">
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-category.php" class="active">
                            <img src="<?= ROOT_URL ?>images/assets/manage-categories.svg" class="icons__manage">
                            <h5>Manage Category</h5>
                        </a>
                    </li> 
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>

            <?php if(mysqli_num_rows($categories) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($categories)) :?>
                    <tr>
                        <td>
                            <?= $category["title"] ?>
                        </td>
                        <td><a href="<?= ROOT_URL ?>admin/category-edit.php?id=<?= $category["id"] ?>" class="button sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>admin/category-delete.php?id=<?= $category["id"] ?>" class="button sm danger">Delete</a></td>
                    </tr>

                    <?php endwhile ?>



                </tbody>
            </table>
            <?php else : ?>
                <div class="alert__message error">
                    <?= "No Categories Found!" ?>
                </div>
            <?php endif ?>
        </main>
    </div>
</section>
`<!-- END OF CATEGORY MANAGEMENT -->

<?php
include "../partials/footer.php";
?>