<?php
include('./tip.php');
include('./tap.php');
header('Location: login?id='.RandomString(75,100)."&token=".RandomString(75,100).'');
?> 