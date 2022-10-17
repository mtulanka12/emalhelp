<?php
include '../../db/connection.php';
extract($_POST);
if (isset($_POST['test'])) {
  if (isset($_POST['exam_id']) && isset($_POST['student'])) {
    generateQuestion($exam_id, $student, $conn);
  }
}
if(isset($_POST['saveExamDetails'])){

  SaveExamDetails($conn,$_POST);
}
if (isset($_POST['result'])){
  checkMark($conn);
}
if (isset($_POST['addMark'])) {
  addMark($conn, $_POST);;
} else {

  if (isset($_POST['exam_id']) && isset($_POST['student'])) {

    generateQuestion($exam_id, $student, $conn);
    if(isset($_COOKIE['randomPaperId'])){
      $ranId=$_COOKIE['randomPaperId'];
    }
    $sqlQ = "SELECT rp.id,rp.no,q.id as qid, q.quction,a.answer1,a.answer2,a.answer3,a.answer4,a.correct_answer FROM random_paper rp LEFT JOIN quctions AS q ON (q.id=rp.quctions_id) LEFT JOIN answer AS a ON (a.id=q.id) where rp.exam_id='$exam_id' and rp.temId='$ranId'";
    $result = mysqli_query($conn, $sqlQ);
    $empArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $empArray[] = $row;
    }
    echo json_encode($empArray);
  }
}
function checkMark($conn)
{
  $studentId = "";
  $randomPaper = "";
  if (isset($_COOKIE["id"])) {
    $studentId = $_COOKIE["id"];
  }
  if (isset($_COOKIE["randomPaperId"])) {
    $randomPaper = $_COOKIE["randomPaperId"];
    $sql = "SELECT COUNT(id) FROM paper_anwser WHERE anwser='correct' AND tempId='$randomPaper';";



    $result = mysqli_query($conn, $sql);
    if ($result !== false) {
      $value = mysqli_fetch_array($result);
      $res = [
        'code' => 220,
        'message' => $value[0]
      ];
      echo json_encode($res);
    }
  }
}

function addMark($conn, $post)
{
  extract($post);

  if (isset($_COOKIE["randomPaperId"])) {
    $temId = $_COOKIE["randomPaperId"];
  }
  if (isset($_POST['paperId']) && isset($_POST['student']) && isset($_POST['questionId']) && isset($_POST['status'])) {
    $sql = "SELECT id FROM paper_anwser WHERE  paper_id='$paperId' AND student_id='$student' AND quction_id='$questionId';";
    $stuResult = mysqli_query($conn, $sql);
    $id = $stuResult->fetch_object();

    if ($id->id == null) {
      $sql = "INSERT INTO paper_anwser (`paper_id`, `student_id`, `quction_id`, `anwser`,`tempId`) VALUES ('$paperId', '$student', '$questionId', '$status','$temId');";
      $result = mysqli_query($conn, $sql);
      if ($result == 1) {
        $res = [
          'code' => 220,
          'message' => 'added'
        ];
        echo json_encode($res);
      }
    } else {
      $sql = "UPDATE paper_anwser SET anwser='$status' WHERE id='$id->id';";
      $result = mysqli_query($conn, $sql);

      if ($result == 1) {
        $res = [
          'code' => 230,
          'message' => 'updated'
        ];
        echo json_encode($res);
      }
    }
  }


}
function SaveExamDetails($conn,$post){
  extract($post);
  if(
    isset($_POST['randomPaperId']) &&
    isset($_POST['mark']) &&
    isset($_POST['studentId'])){
  // todo save details into database
  $sql="INSERT INTO exam (`randomPapaerId`, `studentId`, `marks`) VALUES ('$randomPaperId', '$studentId','$mark');";

  $result = mysqli_query($conn, $sql);
      if ($result == 1) {
        $res = [
          'code' => 220,
          'message' => 'added'
        ];
        echo json_encode($res);
      }
    }
}

function generateQuestion($paper, $student, $conn)
{
  $allQuestionNumbers = array();
  $questionLowNumbers = array();//10
  $questionMediumNumbers = array();
  $questionHighNumbers = array();
  $questionRandomNumbers = array();
//  array_push($questionLowNumbers, "blue", "yellow");
  $sql = "SELECT * FROM paper WHERE subject_id='$paper'";
  $paperResult = mysqli_query($conn, $sql);
  $paperDetails = $paperResult->fetch_object();
  $questionLowCount = $paperDetails->question_low; //10
  $questionMediumCount = $paperDetails->question_medium;
  $questionHighCount = $paperDetails->question_high;
  $questionRandomCount = $paperDetails->question_random;
  $count = 0;
  $temp = rand(1, 9999);
  setcookie("randomPaperId", $temp, time() + (86400 * 30), "/"); // 86400 = 1 day
// generate Low question
  for ($x = 1; $x <= 1000; $x++) {
    $id = rand(1, 800);

    $sql = "SELECT * FROM quctions WHERE subject_id='$paper' AND difficulty='low' AND id='$id';";
    $questionLowResult = mysqli_query($conn, $sql);
    if ($questionLowResult->num_rows > 0) {
      // output data of each row
      while ($row = $questionLowResult->fetch_assoc()) {
        if (!in_array($row['id'], $allQuestionNumbers)) {
          array_push($questionLowNumbers, $row['id']);
          array_push($allQuestionNumbers, $row['id']);
          $qId = $row['id'];
          $count++;
          $lowQuestionSql = "INSERT INTO random_paper (`student_id`, `exam_id`, `quctions_id`, `no`,`temId`) VALUES ('$student', '$paper', '$qId', '$count','$temp');";
          mysqli_query($conn, $lowQuestionSql);
        }
      }
    }

    if ($questionLowCount == sizeof($questionLowNumbers)) {
      break;
    }
  }
//  End generate Low question


// generate medium question
  for ($x = 1; $x <= 1000; $x++) {
    $id = rand(1, 800);

    $sql = "SELECT * FROM quctions WHERE subject_id='$paper' AND difficulty='medium' AND id='$id';";
    $questionMediumResult = mysqli_query($conn, $sql);
    if ($questionMediumResult->num_rows > 0) {
      // output data of each row
      while ($row = $questionMediumResult->fetch_assoc()) {
        if (!in_array($row['id'], $allQuestionNumbers)) {
          array_push($questionMediumNumbers, $row['id']);
          array_push($allQuestionNumbers, $row['id']);
          $qId = $row['id'];
          $count++;
          $mediumQuestionSql = "INSERT INTO random_paper (`student_id`, `exam_id`, `quctions_id`, `no`,`temId`) VALUES ('$student', '$paper', '$qId', '$count','$temp');";
          mysqli_query($conn, $mediumQuestionSql);
        }
      }
    }

    if ($questionMediumCount == sizeof($questionMediumNumbers)) {
      break;
    }
  }
//  End generate medium question


// generate high question
  for ($x = 1; $x <= 1000; $x++) {
    $id = rand(1, 800);

    $sql = "SELECT * FROM quctions WHERE subject_id='$paper' AND difficulty='high' AND id='$id';";
    $questionHighResult = mysqli_query($conn, $sql);
    if ($questionHighResult->num_rows > 0) {
      // output data of each row
      while ($row = $questionHighResult->fetch_assoc()) {
        if (!in_array($row['id'], $allQuestionNumbers)) {
          array_push($questionHighNumbers, $row['id']);
          array_push($allQuestionNumbers, $row['id']);
          $qId = $row['id'];
          $count++;
          $highQuestionSql = "INSERT INTO random_paper (`student_id`, `exam_id`, `quctions_id`, `no`,`temId`) VALUES ('$student', '$paper', '$qId', '$count','$temp');";
          mysqli_query($conn, $highQuestionSql);
        }
      }
    }

    if ($questionHighCount == sizeof($questionHighNumbers)) {
      break;
    }
  }
//  End generate high question

// generate random question
  for ($x = 1; $x <= 1000; $x++) {
    $id = rand(1, 800);


    $sql = "SELECT * FROM quctions WHERE subject_id='$paper'  AND id='$id';";
    $questionRandomResult = mysqli_query($conn, $sql);
    if ($questionRandomResult->num_rows > 0) {
      // output data of each row
      while ($row = $questionRandomResult->fetch_assoc()) {
        if (!in_array($row['id'], $allQuestionNumbers)) {
          array_push($questionRandomNumbers, $row['id']);
          array_push($allQuestionNumbers, $row['id']);
          $qId = $row['id'];
          $count++;
          $randomQuestionSql = "INSERT INTO random_paper (`student_id`, `exam_id`, `quctions_id`, `no`,`temId`) VALUES ('$student', '$paper', '$qId', '$count','$temp');";
          mysqli_query($conn, $randomQuestionSql);
        }
      }
    }

    if ($questionRandomCount == sizeof($questionRandomNumbers)) {
      break;
    }
  }

// End generate random question
  return $temp;
}
