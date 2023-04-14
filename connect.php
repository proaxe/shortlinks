<?php

$conn = mysqli_connect('localhost', 'root', '', 'change_links');

if (!$conn) die("fAILED DB CONNECTION: \n" . mysqli_connect_error());