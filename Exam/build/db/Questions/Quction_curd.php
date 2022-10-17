<?php
include '../../../build/db/connection.php';
extract($_POST);

if (isset($_POST['add'])) {
  AddQuestion($_POST, $conn);
} else if (isset($_POST['update'])) {
  EditPaper($_POST, $conn);
} else if (isset($_POST['all'])) {
  AllSubjects($_POST, $conn);
} else if (isset($_POST['delete'])) {
  DeletePaper($_POST, $conn);
} else if (isset($_POST['search'])) {
  SearchPaper($_POST, $conn);
}
function AddQuestion($post, $conn)
{
  extract($post);
  if (
    isset($_POST['paper']) &&
    isset($_POST['subject']) &&
    isset($_POST['difficulty']) &&
    isset($_POST['question']) &&
    isset($_POST['anwser1']) &&
    isset($_POST['correctAnswer'])) {

    $sql = "INSERT INTO answer (`answer1`, `answer2`, `answer3`, `answer4`, `correct_answer`) VALUES ('$anwser1', '$anwser2', '$anwser3', '$anwser4', '$correctAnswer');";
    $result = null;
    $last_id = "";
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      $sql2 = "INSERT INTO quctions (`paper_id`,`difficulty`, `subject_id`, `anwser_id`, `quction`) VALUES ('$paper','$difficulty', '$subject', '$last_id', '$correctAnswer');";
      $result = mysqli_query($conn, $sql2);
    }
    if ($result == null) {
      $res = [
        'code' => 999,
        'message' => $last_id
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
