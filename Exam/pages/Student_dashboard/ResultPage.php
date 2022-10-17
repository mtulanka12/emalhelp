<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exams | Student Dashboard</title>

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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Exams </span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">

        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item" id="Dashboard">
              <a href="index.php" class="nav-link active " id="dashboard">
                <i class="far fas fa-tachometer-alt"></i>
                <p>Dashboard </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="index.php" class="nav-link  " id="StudentDashboard">
                <i class="far fas fa-tachometer-alt"></i>
                <p>Student Dashboard </p>
              </a>
            </li>
            <li class="nav-item active">
              <a href="ResultPage.php" class="nav-link active " id="StudentDashboard">
                <i class="far fas fa-tachometer-alt"></i>
                <p>My Result </p>
              </a>
            </li>
            <li class="nav-header" id="adminArea">Admin area</li>
            <li class="nav-item" id="ManageStudent">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Manage Student
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/Student/StudentList.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Student/AddStudent.php" id="studentAdd" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Student/StudentEdit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item" id="ManageTeacher">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>

                <p>
                  Manage Teachers
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/teacher/TeacherList.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/teacher/AddTeacher.php" id="studentAdd" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/teacher/TeacherEdit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header" id="examArea">Exam area</li>
            <li class="nav-item" id="manageSubject">
              <a href="#" class="nav-link">
                <i class="fas fa-book"></i>

                <p>
                  Manage Subject
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/subject/List.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/subject/Add.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/subject/Edit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item" id="managePapers">
              <a href="#" class="nav-link">
                <i class="far fa-newspaper"></i>
                <p>
                  Manage Papers
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/Paper/List.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Paper/Add.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Paper/Edit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item  " id="manageQuestion">
              <a href="#" class="nav-link ">
                <i class="fas fa-book"></i>

                <p>
                  Manage Questions
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/Questions/List.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Questions/Add.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/Questions/Edit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item  " id="managePassPapers">
              <a href="#" class="nav-link ">
                <i class="fas fa-book"></i>

                <p>
                  Manage Result Page
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/PassPaper/List.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/PassPaper/Add.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/PassPaper/Edit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item" id="logout">
              <a onclick="Logout()" href="../../login.php" class="nav-link  " style=" background: #c12c2c;color: white;" id="logout">
                <i class="far fas fa-tachometer-alt"></i>
                <p>Log Out</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Result page</h1>

              <a href="MarkHIstory.php"><button class="btn btn-success">View Results</button> </a>
            </div><!-- /.col -->
            <!-- /.col -->
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="column-wrapper">

        </div>

      </section>
      <div class="content-header" style="margin-top: 15px">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Results</h1>

            </div><!-- /.col -->

          </div>

        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="column-wrapper">
          <div class="col-md-4">
            <form id="savePaper">
              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-12"><label>Subject <span style="color: red">*</span> </label>
                    </br>
                    <select class="form-control select2" style="width: 100%;" name="subject" id="subject">
                      <option value="1">M</option><option value="2">S</option>
                    </select>
                  </div>
                  <div class="col-sm-12"><label>Mark 1 <span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="mark1" name="mark1" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Mark 2 <span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="mark2" name="mark2" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Mark 3 <span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="mark3" name="mark3" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Mark 4 <span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="mark4" name="mark4" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Term Test 1<span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="termTest1" name="termTest1" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Term Test 2<span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="termTest2" name="termTest2" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Term Test 3<span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="termTest3" name="termTest3" class="form-control" required value="" />
                  </div>
                  <div class="col-sm-12"><label>Study Hours<span style="color: red">*</span> </label>
                    </br>
                    <input type="number" id="studyHours" name="studyHours" class="form-control" required value="" />
                  </div>
                </div>

                <div class="col-sm-6">

                </div>
              </div>

              <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                  <input type="button" value="Process " onclick="pro()" class="btn btn-default align-self-center" style="background-color: green; color: white; align-content: center">

                </div>
              </div>
            </form>
          </div>
          <div class="col-md-8">
            <!-- Bar chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Resul Chart
                </h3>

                <!--              <div class="card-tools">-->
                <!--                <button type="button" class="btn btn-tool" data-card-widget="collapse">-->
                <!--                  <i class="fas fa-minus"></i>-->
                <!--                </button>-->
                <!--                <button type="button" class="btn btn-tool" data-card-widget="remove">-->
                <!--                  <i class="fas fa-times"></i>-->
                <!--                </button>-->
                <!--              </div>-->
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
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://adminlte.io">ICBT.edu</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.2
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

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
    /*
     * BAR CHART
     * ---------
     */
    function pro() {
      var subject = $("#subject").val();
      var paper1 = $('#mark1').val();
      var paper2 = $('#mark2').val();
      var paper3 = $('#mark3').val();
      var paper4 = $('#mark4').val();
      var term1 = $('#termTest1').val();
      var term2 = $('#termTest2').val();
      var term3 = $('#termTest3').val();
      var studyHours = $('#studyHours').val();
      var nextResult = 0;
      $.ajax({
        url: "http://ec2-35-78-119-230.ap-northeast-1.compute.amazonaws.com/api/predict_marks",
        type: 'POST',
        data: {
          select_id: subject,
          Class_Activity_marks_1: paper1,
          Class_Activity_marks_2: paper2,
          Class_Activity_marks_3: paper3,
          Class_Activity_marks_4: paper4,
          School_first_term_marks: term1,
          School_second_term_marks: term2,
          School_third_term_marks: term3,
          Study_hours: studyHours,
          Male: '1'

        },
        success: function(response) {


          var nextResult = response.predict_mark;


          var bar_data = {
            data: [
              [1, paper1],
              [2, paper2],
              [3, paper3],
              [4, paper4],
              [5, response.predict_marks]
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
      })

    }
  </script>
</body>

</html>
