<?php
include '../../../build/db/connection.php';
extract($_POST);

if (isset($_POST['add'])) {
  AddStudent($_POST);
} else if (isset($_POST['update'])) {
  EditPaper($_POST,$conn);
} else if (isset($_POST['all'])) {
  AllStudents($_POST, $conn);
} else if (isset($_POST['delete'])) {
  DeleteStudent($_POST, $conn);
} else if (isset($_POST['search'])) {
  SearchPaper($_POST, $conn);
}
function AddStudent($post)
{
  include '../connection.php';
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
    isset($_POST['grade'])
  ) {
    $hash = password_hash($password,
      PASSWORD_DEFAULT);
    $sql = "INSERT INTO student (`name`, `nic`, `address`, `gender`, `username`, `password`, `email`, `mobileNo`,`grade`) VALUES
        ('$name', '$nic', '$address', '$gender', '$username', '$hash', '$email', '$mobileNo','$grade');";
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
        'message' => $sql
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

function EditStudent($post, $conn)
{
  extract($post);
  if (
    isset($_POST['studentId']) &&
    isset($_POST['name']) &&
    isset($_POST['nic']) &&
    isset($_POST['address']) &&
    isset($_POST['gender']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['email']) &&
    isset($_POST['mobileNo'])&&
    isset($_POST['grade'])
  ) {
    $hash = password_hash($password,
      PASSWORD_DEFAULT);
    $sql = "UPDATE student SET `name`='$name', `nic`='$nic', `address`='$address', `gender`='$gender',`username`='$username', `password`='$hash', `email`='$email', `mobileNo`='$mobileNo',`grade`='$grade' WHERE  `student_id`='$studentId';";
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

function DeleteStudent($post, $conn)
{
  extract($post);
  $sql = "DELETE FROM student WHERE  student_id= '$studentId';";
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

function AllStudents($conn)
{
  include '../connection.php';
  $sql = "Select * from student;";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $row[''];

  }
  echo json_encode($row);
}

function SearchStudents($id, $conn)
{
  $sql = "select * from student where student_id= '$id'";
  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);
  return $data;

}

?>
