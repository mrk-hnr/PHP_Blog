<?php
require "config/constant.php";

session_destroy();
header("Location: " . ROOT_URL);
die();