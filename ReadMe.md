# Registration/Login - PHP

PHP CRUD project. It's a blog site utilizing MySQL as the database.

<hr>

### How It's Made:

**HTML/CSS**

- Styling implemented, no framework used.

**JavaScript**

- Created script to make a functional burger menu
- Created script for Dashboard side "nav" on tablet/mobile view

**PHP**

- Created table in MySQL
- Basic connection between PHP with MySQL (database.php).
- Registration
  - Created PHP that when the input box are filled, it is saved into MySQL when submit is clicked.
  - validator file makes sure all fields are filled with respective error messages.
  - Password is hashed.
- Logging In
  - validator validates that username and password are exist in MySQL.
- Index
  - Displays blog post, category, and author from their respective tables.
  - Non-admin users prevented access to admin pages.
- Update
  - Allows admins to change other user's names and access level

**GENERAL**

- Dynamically show number of blog post
- Dynamically show categories
- Dynamically shows user name, thumbnail, and date time

Quickstart MySQL Query:

```
CREATE TABLE `blog`.`users` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`firstname` VARCHAR(50) NOT NULL ,
`lastname` VARCHAR(50) NOT NULL ,
`username` VARCHAR(50) NOT NULL ,
`email` VARCHAR(100) NOT NULL ,
`password` VARCHAR(255) NOT NULL ,
`avatar` VARCHAR(255) NOT NULL ,
`is_admin` TINYINT(1) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;
```

```
CREATE TABLE `blog`.`categories` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `title` VARCHAR(50) NOT NULL , `description` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

```
CREATE TABLE `blog`.`posts` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `body` TEXT NOT NULL , `thumbnail` VARCHAR(255) NOT NULL , `date_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `category_id` INT(11) UNSIGNED NULL , `author_id` INT(11) UNSIGNED NOT NULL , `is_featured` TINYINT(1) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

```
ALTER TABLE posts ADD CONSTRAINT FK_blog_category FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE SET NULL;
```

```
ALTER TABLE posts ADD CONSTRAINT FK_blog_author FOREIGN KEY (author_id) REFERENCES users (id) ON DELETE CASCADE;
```

<hr>

## Tech used:

![HTML5](https://img.shields.io/badge/-HTML5-1d1f21?style=flat&logo=HTML5)
![CSS3](https://img.shields.io/badge/-CSS3-1d1f21?style=flat&logo=CSS3)
![JavaScript](https://img.shields.io/badge/-JavaScript-1d1f21?style=flat&logo=javascript)
![PHP](https://img.shields.io/badge/PHP-1d1f21?&logo=php)
![MySQL](https://img.shields.io/badge/-MySQL-1d1f21?style=flat&logo=MySQL)
