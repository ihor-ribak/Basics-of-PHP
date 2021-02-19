<?php

$dbc =
    mysqli_connect('localhost', 'igor', 'Password3', 'website_db')
    OR die(mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');