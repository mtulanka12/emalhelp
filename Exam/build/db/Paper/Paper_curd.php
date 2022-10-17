<?php
include '../../../build/db/connection.php';
extract($_POST);

if (isset($_POST['add'])) {
  AddPaper($_POST, $conn);
} else if (isset($_POST['update'])) {
  EditPaper($_POST, $conn);
} else if (isset($_POST['all'])) {
  AllPapers($_POST, $conn);
} else if (isset($_POST['delete'])) {
  DeletePaper($_POST, $conn);
} else if (isset($_POST['search'])) {
  SearchPaper($_POST, $conn);
}
function AddPaper($post, $conn)
{
  extract($post);
  if (
    isset($_POST['teacher']) &&
    isset($_POST['subject']) &&
    isset($_POST['type']) &&

    isset($_POST['grade']) &&
    isset($_POST['timeDuration'])
  ) {
    $sql = "INSERT INTO paper (`teacher_id`, `subject_id`, `type`, `question_low`, `question_medium`, `question_high`, `question_random`, `time_duration`, `grade`)
VALUES ('$teacher', '$subject', '$type', '$lowCount', '$mediumCount', '$highCount', '$randomCount', '$timeDuration', '$grade');";

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

function EditPaper($post, $conn)
{
  extract($post);
  if (
    isset($_POST['id']) &&
    isset($_POST['teacher']) &&
    isset($_POST['subject']) &&
    isset($_POST['type'])
  ) {

    $sql = "UPDATE paper SET `teacher_id`='$teacher', `subject_id`='$subject', `type`='$type' WHERE  `id`=$id;";
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
        'message' => $sql
//          'have Some Error'
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

function DeletePaper($post, $conn)
{
  extract($post);
  $sql = "DELETE FROM paper WHERE  id= $id;";
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

function AllPapers($conn)
{
  include '../connection.php';
  $sql = "Select * from paper;";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $row[''];

  }
  echo json_encode($row);
}

function SearchPaper($id, $conn)
{
  $sql = "select * from paper where id= '$id'";
  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);
  return $data;

}

?>
