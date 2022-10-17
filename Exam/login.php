<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exams | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>Exams</b> LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <div id="loginForm">
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <select class="form-control select2" style="width: 100%;margin-bottom: 5px;color: grey" name="account"
                    id="account" data-placeholder="Select Account Type">
              <option value="-1" style="color: grey;">Select Account Type</option>
              <option value="1" style="color: grey;">Admin</option>
              <option value="2" style="color: grey;">Teacher</option>
              <option value="3" style="color: grey;">Student</option>

            </select>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-12"><label id="error_message"
                                       style="color: red;font-style: italic;margin-left: 10px;display: none">username or
                password invalid !</label></div>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12">
            <button onclick="Login()" class="btn btn-success btn-block" style="margin-top: 20px;"> Login</button>
          </div>
        </div>
      </div>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  function Login() {
    var username = $('#email').val();
    var Upassword = $('#password').val();
    var UaccountType = $('#account').val();

    if (username != '' && Upassword != '') {
      errorMessage(false, '');
      $.ajax({
        url: "build/db/auth/auth.php",
        type: 'POST',
        data: {
          email: username,
          password: Upassword,
          accountType: UaccountType
        },
        success: function (response) {
          console.log('response' + response);
          var res = $.parseJSON(response);
          if (res.code == 200) {
           setCookie('user',username)
           setCookie('type',UaccountType)
           setCookie('id',res.id)
            if (UaccountType==3){
              window.location = "pages/Student_dashboard/index.php";
            }else{
              window.location = "index.php";
            }



          } else if (res.code == 498) {
            errorMessage(true,'account Not Fount')
          } else if (res.code == 420) {
            errorMessage(true,'invalid username or password, try again')
          }
        }

      })
      if (UaccountType == 0) {
        errorMessage(true, 'Select Account type');
      } else {
        errorMessage(false, '');
      }
    } else {
      errorMessage(true, 'Enter username and password');
    }
  }
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }

    return "";
  }
  function setCookie(cname, cvalue) {
    const d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  function errorMessage($show, $message) {
    var Error = $('#error_message');
    Error.text($message)
    if ($show) {
      Error.css("display", "");
    } else {
      Error.css("display", "none");
    }
  }
  document.addEventListener("DOMContentLoaded", function () {
    if (getCookie('user')!=''){
      window.location='index.php';
    }
  });

</script>
</body>
</html>
