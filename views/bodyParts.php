<?php
?>
<!DOCTYPE html>
 <?php require 'connection.php';
 if (isset($_POST['submit'])){
     $id= $_POST['id'];
     $part=$_POST['part'];
 }
?>
<div>
    <?php require 'pages/header.php' ?>
    <form>
        <div>
            <label for="id">id</label>
            <input type="number" name="id" id="id">
        </div>
        <div>
            <label for="body-part">body part</label>
            <input name="part">
        </div>
        <button name="submit">Submit</button>
    </form>
</div>
