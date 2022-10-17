<?php
//Best practice is to create a separate file for handling connection to database
try {
//  // Creating a new connection.
//  // Replace your-hostname, your-db, your-username, your-password according to your database
//  $link = new \PDO(   'mysql:host=your-hostname;dbname=exam;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
//    'root', //'root',
//    '', //'',
//    array(
//      \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//      \PDO::ATTR_PERSISTENT => false
//    )
//  );
//   $result = mysqli_query($conn, $sql);
//        if (mysqli_num_rows($result) > 0) {
//          foreach ($result
//
//                   as $res) {

  include '../../../Exam/build/db/connection.php';
  $dataPoints = array();
//
//  $handle = $conn->prepare("SELECT e.randomPapaerId as x,e.marks as y FROM exam e where studentId='31';");
//  $handle->execute();
//  $result = $handle->fetchAll();
  $sql = "SELECT (SELECT p.`type` FROM random_paper r LEFT JOIN paper p ON (p.id=r.exam_id)  WHERE r.temId= e.randomPapaerId LIMIT 1) AS x, e.marks AS y FROM  exam e  where studentId='31';";
  $result = mysqli_query($conn, $sql);
  $try=1;
  foreach ($result as $row) {

    $dataPoints[] = array("y" => $row['y'], "label" => $row['x']);
    $try++;
  }
  $link = null;
} catch (\PDOException $ex) {
  print($ex->getMessage());
}

?>

<!DOCTYPE HTML>
<html>
<head>
  <script>
    window.onload = function() {

      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
          text: "Exam Results"
        },
        axisY: {
          title: "Marks (%)"
        },
        data: [{
          type: "column",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();

    }
  </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
