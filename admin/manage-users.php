<?php
include "partials/header.php";

// FETCH DATA FROM DB EXCEPT FOR WHOEVER IS LOGGED IN

$current_admin = $_SESSION["user-id"];
$query = "SELECT * FROM users WHERE NOT id = $current_admin";
$users = mysqli_query($connection, $query);

?>


    <!-- START OF CATEGORY MANAGEMENT -->

    <section class="dashboard">

    <?php if (isset($_SESSION["add-user-success"])) : ?> <!-- SUCCESS MESSAGE for ADD USER -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["add-user-success"];
                unset($_SESSION["add-user-success"]);
                ?>
            </p>
        </div>

    <?php elseif (isset($_SESSION["add-user"])) : ?> <!-- ERROR MESSAGE for ADD USER -->
        <div class="alert__message error container">
            <p>
                <?= $_SESSION["add-user"];
                unset($_SESSION["add-user"]);
                ?>
            </p>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION["edit-user-success"])) : ?> <!-- ERROR MESSAGE for EDIT USER -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["edit-user-success"];
                unset($_SESSION["edit-user-success"]);
                ?>
            </p>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION["delete-user-success"])) : ?> <!-- SUCCESS MESSAGE for DELETE USER -->
        <div class="alert__message success container">
            <p>
                <?= $_SESSION["delete-user-success"];
                unset($_SESSION["delete-user-success"]);
                ?>
            </p>
        </div>

    <?php elseif (isset($_SESSION["delete-user"])) : ?> <!-- ERROR MESSAGE for DELETE USER -->
        <div class="alert__message error container">
            <p>
                <?= $_SESSION["delete-user"];
                unset($_SESSION["delete-user"]);
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
                            <a href="manage-users.php" class="active">
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
                        
                            <a href="manage-category.php">
                                <img src="<?= ROOT_URL ?>images/assets/manage-categories.svg" class="icons__manage">
                                <h5>Manage Category</h5>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </aside>
            <main>

                <h2>Manage Users</h2>
                <?php if (mysqli_num_rows($users) > 0) : ?>
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
                        <?php while($user = mysqli_fetch_assoc($users)) : ?>
                        <tr>
                            <td><?= "{$user['firstname']} {$user['lastname']}" ?></td>
                            <td><?= "{$user['username']}" ?></td>
                            <td><a href="<?= ROOT_URL?>admin/users-edit.php?id=<?= $user['id'] ?>" class="button sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL?>admin/user-delete.php?id=<?= $user['id'] ?>" class="button sm danger">Delete</a></td>
                            <td><?=  $user['is_admin'] ? 'Yes' : 'No'
                            ?></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <?php else : ?>
                    <div class="alert__message error">
                        <?= "No Users Found!" ?>
                    </div>
                <?php endif ?>

            </main>
        </div>
    </section>





    <!-- END OF CATEGORY MANAGEMENT -->

<?php
include "../partials/footer.php";
?>