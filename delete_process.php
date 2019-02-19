<?php
  // unlink('data/'.$_POST['id']);
  unlink('data/'.basename($_POST['id']));
  header('location: /index.php');
?>
