<?php
session_start();
$conn = mysqli_connect('localhost','root','','pathology') or die('Connection Failed') ;