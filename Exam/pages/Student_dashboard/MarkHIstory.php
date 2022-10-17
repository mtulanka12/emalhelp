<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exam History</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <style>
    .body {
      height: 100vh;
    }

    .column-wrapper {
      height: inherit;
      display: flex;
      flex-flow: row wrap;
      justify-content: space-around;
    }

    .column {
      background: #0080ff;
      padding: 5px;
      width: 200px;
      height: 150px;
      margin-top: 10px;
      border-radius: 25px;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 13px;
      text-align: center;
    }

    .column:hover {
      background: #011562;
      padding: 5px;
      width: 200px;
      height: 150px;
      margin-top: 10px;

      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 15px;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h1>Exam history</h1>

    </div>
    <div class="col-sm-4"></div>
    <div class="row">
      <div class="col-sm-12">
        <?php
        include '../../build/db/connection.php';
        if (isset($_COOKIE['id'])) {
          $id = $_COOKIE['id'];
        }
        $sql = "Select * from exam where studentId='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          foreach ($result

                   as $res) {
            ?>
            <h2><?= $res['marks'] ?>%</h2>
            <?php
          }
        }
        ?>
      </div>
      <div class="row">
        <div class="col-md-8">
          <!-- Bar chart -->
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Result Chart
              </h3>

            </div>
            <div class="card-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.card-body-->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/flot/jquery.flot.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="../../plugins/auth/auth.js"></script>
<script>
  $( document ).ready(function() {
    pro();
  })
  /*
   * BAR CHART
   * ---------
   */
  function pro() {
    var paper1 = 45
    var paper2 = 99
    var paper3 = 28
    var paper4 = 98
    // var subject = $("#subject").val();
    // var paper1 = $('#mark1').val();
    // var paper2 = $('#mark2').val();
    // var paper3 = $('#mark3').val();
    // var paper4 = $('#mark4').val();
    // var term1 = $('#termTest1').val();
    // var term2 = $('#termTest2').val();
    // var term3 = $('#termTest3').val();
    // var studyHours = $('#studyHours').val();
    var nextResult = 25;






    var bar_data = {
      data: [
        [1, paper1],
        [2, paper2],
        [3, paper3],
        [4, paper4],
        [5, nextResult]
      ],
      bars: {
        show: true
      }
    }
    $.plot('#bar-chart', [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center',
        },
      },
      colors: ['#e80808'],
      xaxis: {
        ticks: [
          [1, 'Paper 1'],
          [2, 'Paper 2'],
          [3, 'Paper 3'],
          [4, 'Paper 4'],
          [5, 'Next Result']
        ]
      }
    })

  }
</script>
</body>
</html>

