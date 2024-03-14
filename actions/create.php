<?php

include("../classes/user.php");

$user = new User;

$user->create($_POST);