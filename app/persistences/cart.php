<?php
echo 'cart';

session_start();

require('../ressources/views/layouts/header.tpl.php');

var_dump($_SESSION);
require('../ressources/views/layouts/footer.tpl.php');