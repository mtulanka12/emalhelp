<?php

include '../../build/db/connection.php';
extract($_POST);
if ($_POST['id']==null){
  Redirect('TeacherList.php', true);
}
function Redirect($url, $permanent = false)
{
  if (headers_sent() === false)
  {
    header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
  }

  exit();
}
$gender_male = 'checked';
$gender_female = '';
if (isset($_POST['search'])) {

  $Teacher = SearchTeacher($id, $conn);
  if ($Teacher['gender'] == 'female') {
    $gender_female = 'Checked';
    $gender_male = '';
  }
}

function SearchTeacher($id, $conn)
{

  $sql = "select * from teacher where id= '$id'";
  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);


  return $data;

}

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
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Student/StudentList.php" class="nav-link">
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
              <li class="nav-item ">
                <a href="../Student/StudentEdit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open" id="ManageTeacher">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Teachers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../teacher/TeacherList.php" class="nav-link">
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
                <a href="../teacher/TeacherEdit.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header"  id="examArea">Exam area</li>
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
                <a href="../subject/List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../subject/Add.php" class="nav-link">
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
            <a href="#" class="nav-link">
              <i class="far fa-newspaper"></i>
              <p>
                Manage Papers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Paper/List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Paper/Add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Paper/Edit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li>
            </ul>
          </li><li class="nav-item  " id="manageQuestion">
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

          <li class="nav-item  " id="managePassPapers">
            <a href="#" class="nav-link ">
              <i class="fas fa-book"></i>

              <p>
                Manage Pass Papers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../PassPaper/List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../PassPaper/Add.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../PassPaper/Edit.php" class="nav-link">
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
            <h1 class="m-0"> Edit Teacher</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "> Edit Teacher</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title" style="color: white">Teacher's Details [Edit]</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <hr action="../../build/db/Student/Student_curd.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <!-- text i nput -->
                <div class="form-group">
                  <label>Teacher Id</label>
                  <input type="text" id="id" name="StudentId" class="form-control" value="<?= $Teacher['id'] ?>"
                         placeholder="Enter ..." disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <span style="color: red">*</span> </label>
                  <input type="text" name="Name" id="name" class="form-control" placeholder="Enter ..." required
                         value="<?= $Teacher['name'] ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>NIC <span style="color: red">*</span> </label>
                  <input type="number" name="nic" id="nic" value="<?= $Teacher['nic'] ?>" class="form-control"
                         placeholder="Enter ..." required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Address <span style="color: red">*</span> </label>
                  <textarea name="address" class="form-control" rows="3" placeholder="Enter ..." required
                            id="address"><?= $Teacher['address'] ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Qualifications </label>
                  <input type="text" name="qualifications" class="form-control" placeholder="Enter ..."
                         id="qualifications" value="<?= $Teacher['qualifications'] ?>">
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-sm-6">
                <!-- radio -->
                <label class="form-check-label">Gender <span style="color: red">*</span> </label>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="gender_male" <?= $gender_male ?> name="gender"
                           required>
                    <label class="form-check-label">Male</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender_female" <?= $gender_female ?>
                           required>
                    <label class="form-check-label">Female</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Username <span style="color: red">*</span> </label>
                  <input type="text" name="username" class="form-control" placeholder="Enter ..." required id="username"
                         value="<?= $Teacher['username'] ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password <span style="color: red">*</span> </label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter ..."
                         required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password <span style="color: red">*</span> </label>
                  <input type="password" id="confirmPassword" name="ConfirmPassword" class="form-control"
                         placeholder="Enter ..." required>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label style="color: grey">Contact details</label>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Email <span style="color: red">*</span> </label>
                  <input type="email" required id="email" name="email" class="form-control" placeholder="Enter ..." required
                         value="<?= $Teacher['email'] ?>"/>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Mobile No <span style="color: red">*</span> </label>
                  <input type="number" name="phoneNo" class="form-control" rows="3" placeholder="Enter ..." required
                         id="mobileNo" value="<?= $Teacher['mobileNo'] ?>"/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input type="submit" value="Save Teacher" onclick="EditStudent()"
                       class="btn btn-default align-self-center"
                       style="background-color: green; color: white; align-content: center">
                <input type="reset" value="Reset " class="btn btn-default align-self-center"
                       style="background-color: #ff0008; color: white; align-content: center">
              </div>
            </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </section>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">ICBT.edu</a>.</strong>
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

<script>
  function EditStudent() {
    var id = $('#id').val();
    var name = $('#name').val();
    var nic = $('#nic').val();
    var address = $('#address').val();
    var male = $('#gender_male').val();
    var female = $('#gender_female').val();
    var gender = 'gender';
    if (male == 'on') {
      gender = 'male';
    } else {
      gender = 'female';
    }
    if (female == 'on') {
      gender = 'female';
    } else {
      gender = 'male'
    }
    var username = $('#username').val();
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    var email = $('#email').val();
    var mobileNo = $('#mobileNo').val();
    var qualification = $('#qualifications').val();

    if (password != confirmPassword) {
      alert('password not matched')
    } else {
      $.ajax({
        url: "../../build/db/Teacher/Teacher_curd.php",
        type: 'POST',
        data: {
          id: id,
          name: name,
          nic: nic,
          address: address,
          gender: gender,
          username: username,
          password: password,
          email: email,
          mobileNo: mobileNo,
          qualifications: qualification,
          update: true
        },
        success: function (response) {
          var res = $.parseJSON(response);
          if (res.code == 220) {
            console.log(res.message);
            alert(name + ' is Updated');
            document.getElementById("saveTeacher").reset();

          } else if (res.code == 520) {
            console.log(res.message);
          } else if (res.code == 420) {
            console.log(res.message);
          }
        }

      })
    }

  }
</script>
<script src="../../plugins/auth/auth.js"></script>
</body>
</html>
