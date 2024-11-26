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
                        <a href="manage-users.php" class="active">
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

                        <a href="manage-category.php">
                            <img src="<?= ROOT_URL ?>images/manage-categories.svg" class="icons__manage">
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe</td>
                            <td><a href="users-edit.php" class="button sm">Edit</a></td>
                            <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>janesmith</td>
                            <td><a href="users-edit.php" class="button sm">Edit</a></td>
                            <td><a href="delete-category.php" class="button sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>


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