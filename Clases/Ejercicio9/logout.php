<?php
    session_start();
    unset($_SESSION["user"]); // o usar session_destroy()
    header("Location: login.html");