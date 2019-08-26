<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="http://localhost/theatershow/admin">Go back</a>';