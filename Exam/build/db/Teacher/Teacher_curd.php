<?php
include '../../../build/db/connection.php';
extract($_POST);

if (isset($_POST['add'])) {
  AddTeacher($_POST,$conn);
} else if (isset($_POST['update'])) {
  EditTeacher($_POST,$conn);
} else if (isset($_POST['all'])) {
  AllSubjects($_POST, $conn);
} else if (isset($_POST['delete'])) {
  DeleteTeacher($_POST, $conn);
} else if (isset($_POST['search'])) {
  SearchPaper($_POST, $conn);
}
function AddTeacher($post,$conn)
{
  extract($post);
  if (
    isset($_POST['name']) &&
    isset($_POST['nic']) &&
    isset($_POST['address']) &&
    isset($_POST['gender']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['email']) &&
    isset($_POST['mobileNo'])&&
    isset($_POST['qualifications'])
  ) {
    $hash = password_hash($password,
      PASSWORD_DEFAULT);
    $sql = "INSERT INTO teacher (`name`, `nic`, `address`, `gender`, `username`, `password`, `email`, `mobileNo`,`qualifications`) VALUES
        ('$name', '$nic', '$address', '$gender', '$username', '$hash', '$email', '$mobileNo','$qualifications');";
    $result = mysqli_query($conn, $sql);
    if ($result == null) {
      $res = [
        'code' => 999,
        'message' => $sql
      ];
    }
    if ($result == 1) {
      $res = [
        'code' => 220,
        'message' => 'added'
      ];

    } else {
      $res = [
        'code' => 520,
        'message' => 'have Some Error'
      ];
    }
    echo json_encode($res);
  } else {
    $res = [
      'code' => 420,
      'message' => 'All fields are mandatory'
    ];
    echo json_encode($res);
  }
}

function EditTeacher($post, $conn)
{
  extract($post);
  if (
    isset($_POST['id']) &&
    isset($_POST['name']) &&
    isset($_POST['nic']) &&
    isset($_POST['address']) &&
    isset($_POST['gender']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['email']) &&
    isset($_POST['mobileNo'])&&
    isset($_POST['qualifications'])
  ) {
    $hash = password_hash($password,
      PASSWORD_DEFAULT);
    $sql = "UPDATE teacher SET `name`='$name', `nic`='$nic', `address`='$address', `gender`='$gender',`username`='$username', `password`='$hash', `email`='$email', `mobileNo`='$mobileNo', `qualifications`='$qualifications' WHERE  `id`='$id';";
    $result = mysqli_query($conn, $sql);
    if ($result == null) {
      $res = [
        'code' => 999,
        'message' => $sql
      ];
    }
    if ($result == 1) {
      $res = [
        'code' => 220,
        'message' => 'Updated'
      ];

    } else {
      $res = [
        'code' => 520,
        'message' => 'have Some Error'
      ];
    }
    echo json_encode($res);
  } else {
    $res = [
      'code' => 420,
      'message' => 'All fields are mandatory'
    ];
    echo json_encode($res);
  }

}

function DeleteTeacher($post, $conn)
{
  extract($post);
  $sql = "DELETE FROM teacher WHERE  id= '$id';";
  $result = mysqli_query($conn, $sql);
  if ($result == 1) {
    $res = [
      'code' => 220,
      'message' => $sql
    ];
    echo json_encode($res);
  } else {
    $res = [
      'code' => 520,
      'message' => 'have Some Error'
    ];
    echo json_encode($res);
  }
}

function AllTeachers($conn)
{
  include '../connection.php';
  $sql = "Select * from teacher;";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $row[''];

  }
  echo json_encode($row);
}

function SearchTeacher($id, $conn)
{
  $sql = "select * from teacher where id= '$id'";
  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);
  return $data;

}

?>
