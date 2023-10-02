<?php
include 'lib/database.php';
$database = new database();
if ($_POST['type'] == 'add_student') {
  $add_name = $_POST['add_name'];
  // echo $add_name;
  $add_roll = $_POST['add_roll'];
  if ($add_name == '' || $add_roll == '') {
    $arr = array('status' => 'error', 'msg' => 'Field Can Not Be Blank And Avoid Previous Name.');
  } else {
    $sql_Student = "INSERT INTO `students`(`name`, `roll`) VALUES ('$add_name','$add_roll')";
    $insertResult = $database->insert($sql_Student);
    $sql_Roll = "INSERT INTO `students_attendenc`(`roll`) VALUES ('$add_roll')";
    $insertResult = $database->insert($sql_Roll);
    if ($insertResult) {
      $arr = array('status' => 'success', 'msg' => 'Added Successfully.');
    } else {
      $arr = array('status' => 'error', 'msg' => 'Could Not Added.');
    }
  }
  echo json_encode($arr);
}
if ($_POST['type'] == 'addAttendenc') {
  $attend = $_POST['attend'];
  if ($attend == '') {
    $arr = array('status' => 'error', 'msg' => 'Field Can Not Be Blank And Avoid Previous Name.');
  } else {
    $sql_Attend = "INSERT INTO `students_attendenc`(`attend`) VALUES ('$attend')";
    $insertResultAttend = $database->insert($sql_Attend);
    if ($insertResultAttend) {
      $arr = array('status' => 'success', 'msg' => 'Added Successfully.');
    } else {
      $arr = array('status' => 'error', 'msg' => 'Could Not Added.');
    }
  }
  echo json_encode($arr);
}
