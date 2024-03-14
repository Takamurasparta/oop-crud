<?php

include("../classes/user.php");

$userEdit = new User;

$userEdit->update($firstname,$lastname,$email,$bdate, $id) ;

