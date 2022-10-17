<?php

include '../../../build/db/connection.php';
extract($_POST);

// 1. admin
// 2. teacher
// 3. student
if (
  isset($_POST['email']) &&
  isset($_POST['password']) &&
  isset($_POST['accountType'])) {
  $accountPassword = "";
  $resultCode = 200;
  $id = 0;
  if ($accountType == 1) {
    $sql = "select password,username from admin where username='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      foreach ($result
               as $admin) {
        $accountPassword = $admin['password'];
        $id = $admin['username'];

      }
    }
    $result = password_verify($password, $accountPassword);

    $res = [
      'code' => ($result) ? $resultCode : 420,
      'message' => $result,
      'id' =>$id
    ];
  } elseif ($accountType == 2) {
    $sql = "select password,id from teacher where email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      foreach ($result
               as $admin) {
        $accountPassword = $admin['password'];
        $id = $admin['id'];
      }
    }
    $result = password_verify($password, $accountPassword);

    $res = [
      'code' => ($result) ? $resultCode : 420,
      'message' => $result,
      'id' =>$id
    ];
  } elseif ($accountType == 3) {
    $sql = "select password,student_id from student where email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      foreach ($result
               as $admin) {
        $accountPassword = $admin['password'];
        $id = $admin['student_id'];
      }
    }
    $result = password_verify($password, $accountPassword);

    $res = [
      'code' => ($result) ? $resultCode : 420,
      'message' => $result,
      'id' =>$id
    ];
  } else {
    $resultCode = 498;
    $res = [
      'code' => $resultCode,
      'message' => 'account not found',
      'id' =>$id
    ];
  }

  echo json_encode($res);

}
function logout()
{
}




