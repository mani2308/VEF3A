<?php

$session_user = $_SESSION['username'];
if(isset($session_user))
{
    echo "<script>alert('hello world!')</script>";
}
