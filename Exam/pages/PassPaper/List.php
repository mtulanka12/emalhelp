<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exams | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!--  <div class="preloader flex-column justify-content-center align-items-center">-->
  <!--    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
  <!--  </div>-->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
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
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
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
            <a href="../../index.php" class="nav-link  " id="dashboard">
              <i class="far fas fa-tachometer-alt"></i>
              <p>Dashboard </p>
            </a>
          </li>

          <li class="nav-header" id="adminArea">Admin area</li>
          <li class="nav-item  " id="ManageStudent">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-graduate "></i>
              <p>
                Manage Student
                <i class="nav-icon fas "></i>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Student/StudentList.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Student/AddStudent.php" id="studentAdd" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Student/StudentEdit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item " id="ManageStudent">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Teachers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../teacher/TeacherList.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../teacher/AddTeacher.php" id="studentAdd" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../teacher/TeacherEdit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header" id="examArea">Exam area</li>
          <li class="nav-item  " id="manageSubject">
            <a href="#" class="nav-link ">
              <i class="fas fa-book"></i>

              <p>
                Manage Subject
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../subject/List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../subject/Add.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../subject/Edit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="managePapers">
            <a href="#" class="nav-link ">
              <i class="far fa-newspaper"></i>
              <p>
                Manage Papers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="List.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Add.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Edit.php" class="nav-link ">
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
                <a href="../Questions/List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Questions/Add.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Questions/Edit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open " id="managePassPapers">
            <a href="#" class="nav-link active">
              <i class="fas fa-book"></i>
              <p>
                Manage Pass Paper
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="List.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Add.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Edit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="logout">
            <a onclick="Logout()" href="../../login.php" class="nav-link  " style=" background: #c12c2c;color: white;"
               id="logout">
              <i class="far fas fa-tachometer-alt"></i>
              <p>Log Out </p>
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
            <h1 class="m-0">PaperList</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">PaperList</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Paper List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Paper_id</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Name</th>
                <th>Time duration</th>
                <th>Grade</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
              include '../../build/db/connection.php';
              $sql = "
SELECT p.id,t.name AS teacher,s.name AS subject,p.type,p.question_low,p.question_medium,p.question_high,p.question_random,p.time_duration,p.grade
FROM paper AS p
LEFT JOIN teacher AS t ON (t.id=p.teacher_id)
LEFT JOIN subject AS s ON(s.id=p.subject_id)
WHERE p.question_low=0 AND p.question_medium=0 AND p.question_high=0 AND  p.question_random=0;";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                foreach ($result

                         as $Paper) {
                  ?>

                  <tr>
                    <td><?= $Paper['id'] ?></td>
                    <td><?= $Paper['teacher'] ?></td>
                    <td><?= $Paper['subject'] ?></td>
                    <td><?= $Paper['type'] ?></td>
                    <td><?= $Paper['time_duration'] ?></td>
                    <td><?= $Paper['grade'] ?></td>
                    <td>
                      <form method="post" action="Edit.php">
                        <input name="id" value="<?= $Paper['id'] ?>" style="display: none">
                        <input name="search" value="<?= true ?>" style="display: none">
                        <button class="btn btn-warning editStudent" type="submit"><i
                            style="color: white; " class="nav-icon fas  fa-user-edit"></i></button>
                        <button type="button" class="btn btn-danger deletePaper" value="<?= $Paper['id'] ?>"><i
                            style="color: white"
                            class="nav-icon fas fa-trash-alt"></i>
                        </button>
                      </form>

                    </td>

                  </tr>
                  <?php
                }
              }
              ?>
              </tbody>
              <tfoot>
              <tr>
                <th>Paper_id</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Name</th>

                <th>Time duration</th>
                <th>Grade</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </section>
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
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- Page specific script -->
<script>

  $(document).on('click', '.deletePaper', function () {
    if (confirm("Are you sure want delete?")) {
      var paper_Id = $(this).val();
      console.log(paper_Id)
      $.ajax({
        url: "../../build/db/Paper/Paper_curd.php",
        type: 'POST',
        data: {
          id: paper_Id,
          delete: true

        },
        success: function (response) {
          var res = $.parseJSON(response);
          if (res.code == 220) {
            console.log(res.message);
            $("#example1").load("List.php #example1");
            alert(' Deleted');

          } else if (res.code == 520) {
            console.log(res.message);
          }
        }

      })
    } else {
      //  No Delete
    }
  })


  function LoadData() {
    $.ajax({
      url: "../Paper/Edit.php",
      type: 'POST',
      data: {
        search: true
      },
      success: function (response) {
        var res = $.parseJSON(response);
        if (res.code == 220) {
          console.log(res.message);
          alert(name + ' is added into Sytem');
          document.getElementById("saveStudent").reset();

        } else if (res.code == 520) {
          console.log(res.message);
        } else if (res.code == 420) {
          console.log(res.message);
        }
      }

    })
  }


  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="../../plugins/auth/auth.js"></script>
</body>
</html>
