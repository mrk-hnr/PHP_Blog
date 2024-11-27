<?php
include "partials/header.php";
?>

<!-- START OF CATEGORY MANAGEMENT -->
<section class="dashboard">
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
                        <img src="<?= ROOT_URL ?>images/plus.svg" class="icons__manage">
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <img src="<?= ROOT_URL ?>images/manage-post.svg" class="icons__manage">
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <li>
                    <a href="users-add.php">
                        <img src="<?= ROOT_URL ?>images/user-add.svg" alt="" class="icons__manage">
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php">
                        <img src="<?= ROOT_URL ?>images/user-manage.svg" alt="" class="icons__manage">
                        <h5>Manage Users</h5>
                    </a>
                </li>
                <li>
                    <a href="category-add.php">
                        <img src="<?= ROOT_URL ?>images/edit.svg" class="icons__manage">
                        <h5>Add Category</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-category.php" class="active">
                        <img src="<?= ROOT_URL ?>images/manage-categories.svg" class="icons__manage">
                        <h5>Manage Category</h5>
                    </a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nature</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Career</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Technology</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Fitness</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Dating</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Travel</td>
                        <td><a href="category-edit.php" class="button sm">Edit</a></td>
                        <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>
`<!-- END OF CATEGORY MANAGEMENT -->

<?php
include "../partials/footer.php";
?>