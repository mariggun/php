<?php
  // echo $_GET['title'];
  // echo "<p>title : " .$_GET['title'] ."</p>";
  // echo "<p>description : " .$_GET['description'] ."</p>";

  //data 디렉토리 안에 파일이 생김
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
?>
