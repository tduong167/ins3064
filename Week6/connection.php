<?php
//creating a database connection - $link is a variable use for just connection class
$link=mysqli_connect("localhost","root","123456") or die(mysqli_error($link));
mysqli_select_db($link,"LoginReg") or die(mysqli_error($link));

