<?php
  include 'defaults.php';

  $highScoreArray = [];
  $id = $_POST['club'];

  $highScoreQuery = mysqli_query($conn,"SELECT * FROM `trainingen` WHERE `club_id` = $id");

  while($row = mysqli_fetch_assoc($highScoreQuery))
  {
    $highScoreArray[] = $row;
  }

  echo json_encode($highScoreArray);
?>
