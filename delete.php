<?php
  session_start();
  include "config.php";
  
  $sql="DELETE FROM articles WHERE codeArticle='{$_GET["id"]}'";
  if($con->query($sql)){
    flash('msg','User Deleted Successfully');
    header("location:liste.php");
  }else{
    flash('msg','User Deleted Failed','red');
    header("location:formulaire.php");
  }
?>