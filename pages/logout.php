<?php
session_start();
session_unset("MEMBER");
session_destroy();
header("Location: ../index.php");
