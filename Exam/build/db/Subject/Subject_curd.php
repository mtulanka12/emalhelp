<?php
include '../../../build/db/connection.php';
extract($_POST);

if (isset($_POST['add'])) {
  AddSubject($_POST, $conn);
} else if (isset($_POST['update'])) {
  EditSubject($_POST, $conn);
} else if (isset($_POST['all'])) {
  AllSubject($_POST, $conn);
} else if (isset($_POST['delete'])) {
  DeleteSubject($_POST, $conn);
} else if (isset($_POST['search'])) {
  SearchSubject($_POST, $conn);
}
function AddSubject($post, $conn)
{
  extract($post);
  if (
    isset($_POST['name']) &&
    isset($_POST['description']) &&
    isset($_POST['grade'])
  ) {

    $sql = "INSERT INTO subject (`name`, `description`, `grade`) VALUES ('$name', '$description', '$grade');";
    $result = mysqli_query($conn, $sql);
    if ($result == null) {
      $res = [
        'code' => 999,
        'message' => $sql
      ];
      echo json_encode($res);
    }
    if ($result == 1) {
      $res = [
        'code' => 220,
        'message' => 'added'
      ];
      echo json_encode($res);

    } else {
      $res = [
        'code' => 520,
        'message' => 'have Some Error'
      ];
      echo json_encode($res);
    }

  } else {
    $res = [
      'code' => 420,
      'message' => 'All fields are mandatory'
    ];
    echo json_encode($res);
  }
}

function EditSubject($post, $conn)
{
  extract($post);
  if (
    isset($_POST['id']) &&
    isset($_POST['name']) &&
    isset($_POST['description']) &&
    isset($_POST['grade'])
  ) {

    $sql = "UPDATE subject SET `name`='$name', `description`='$description', `grade`='$grade' WHERE  `id`='$id';";
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

function DeleteSubject($post, $conn)
{
  extract($post);
  $sql = "DELETE FROM subject WHERE  id= '$id';";
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

function AllSubject($conn)
{
  include '../connection.php';
  $sql = "Select * from subject;";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $row[''];

  }
  echo json_encode($row);
}

function SearchSubject($id, $conn)
{
  $sql = "select * from subject where id= '$id'";
  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);
  return $data;

}

?>
