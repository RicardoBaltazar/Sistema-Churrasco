<?php 

require_once 'Class/Delete.php';
$id = $_GET['id'];  
$delete = new Delete;
$delete->deleteUser($id);