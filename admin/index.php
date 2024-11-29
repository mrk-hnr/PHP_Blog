<?php
include "partials/header.php";
?>

<!-- START OF CATEGORY MANAGEMENT -->
<section class="dashboard">
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
                    <tr>
                        <td>Lorem ipsum dolor sit.</td>
                        <td>Technology</td>
                        <td><a href="post-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                        <td>Travel</td>
                        <td><a href="post-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>
<!-- END OF CATEGORY MANAGEMENT -->


<?php
include "../partials/footer.php";
?>