<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <h1>Array</h1>
    <?php
      $coworkers = array('홍길동', '미어캣', '철수', '민수');
      echo $coworkers[1].'<br>';
      array_push($coworkers, '준성');
      echo $coworkers[4].'<br>';
      var_dump(count($coworkers));
    ?>
  </body>
</html>
