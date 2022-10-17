<?php
extract($_POST);
$paper_id = $paperId;

function load()
{
}

?>

<!DOCTYPE html>
<html lang="en">
<title>
  Exam
</title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exams | Dashboard</title>

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

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="container-fluid">
    <div class="row" style="background-color: #9f9f9f">
      <div class="col-sm-10">
        <label class="col-form-label-lg">Model Paper</label>
      </div>
      <div class="col-sm-1">
        <label style="width: 100%;
    text-align: right" class="col-form-label-lg align-self-center">Time Ramin</label>
      </div>
      <div class="col-sm-1">
        <p style="width: 80%;
    text-align: right" class="col-form-label-lg align-self-center" id="timer">88:88</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12"><span style="color: red">*</span> <label>Answer all Quotations </label></div>
    </div>


  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 " id="examPanel">
        <p id="question" style="text-align: center;font-family: 'source-code-pro';font-size: 45px ;    margin-top: 10%;"></p>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 ">
            <ul style="list-style-type: none;">
              <li><input class="form-check-input" type="radio" name="anwser" id="rAnwser1" checked><label style="font-size: 25px;" id="anwser1" class="form-check-label"></label>
              </li>
              <br>
              <li><input type="radio" class="form-check-input" name="anwser" id="rAnwser2"> <label style="font-size: 25px;" id="anwser2" class="form-check-label">s</label>
              </li>
              <br>
              <li><input type="radio" class="form-check-input" name="anwser" id="rAnwser3"> <label style="font-size: 25px;" id="anwser3" class="form-check-label">s</label><br>
              </li>
              <br>
              <li><input type="radio" class="form-check-input" name="anwser" id="rAnwser4"> <label style="font-size: 25px;" id="anwser4" class="form-check-label">s</label><br>
              </li>
              <br>
            </ul>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <button value="back" class="btn btn-warning" id="btnBack" onclick="Back()" style="color: white;font-size: 25px"><i class="fas fa-chevron-left"></i> Back
            </button>
          </div>
          <div class="col-sm-8"></div>
          <div class="col-sm-2">
            <button value="back" class="btn btn-primary" id="btnNext" onclick="Next()" style="color: white;font-size: 25px">Next <i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
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
      <!-- InputMask -->
      <script src="../../plugins/moment/moment.min.js"></script>
      <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
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
      <script src="../../plugins/auth/timer.js"></script>
      <script>
        var myArray
        var last = 0
        var isFinished = false
        document.addEventListener('DOMContentLoaded', function() {
          setCookie('paperId', <?= $paperId ?>)
          $.ajax({
            url: '../../build/db/exam/exam_curd.php',
            type: 'POST',
            data: {
              exam_id: <?= $paperId ?>,
              student: getCookie('id')
            },
            success: function(res) {
              if (res == '[]') {
                $('#question').css('display', 'none')
                $('#anwser1').css('display', 'none')
                $('#anwser2').css('display', 'none')
                $('#anwser3').css('display', 'none')
                $('#anwser4').css('display', 'none')
                $('#btnBack').css('display', 'none')
                $('#btnNext').css('display', 'none')
              } else {
                $('#question').css('display', '')
                $('#anwser1').css('display', '')
                $('#anwser2').css('display', '')
                $('#anwser3').css('display', '')
                $('#anwser4').css('display', '')
                $('#btnBack').css('display', '')
                $('#btnNext').css('display', '')
              }

              myArray = JSON.parse(res)
              if (last == 0) {

                $('#btnBack').prop('disabled', true)
                $('#question').text(myArray[0].quction)
                $('#anwser1').text(myArray[0].answer1)
                $('#anwser2').text(myArray[0].answer2)
                $('#anwser3').text(myArray[0].answer3)
                $('#anwser4').text(myArray[0].answer4)
              }

            }

          })
        })

        function Next() {
          if (!isFinished) {
            var answer = 0

            if (document.getElementById('rAnwser1').checked == true) {
              answer = 1
            }
            if (document.getElementById('rAnwser2').checked == true) {
              answer = 2
            }
            if (document.getElementById('rAnwser3').checked == true) {
              answer = 3
            }
            if (document.getElementById('rAnwser4').checked == true) {
              answer = 4
            }
            var mark = myArray[last].correct_answer === answer + ''

            if (last <= 38) {
              $.ajax({
                url: '../../build/db/exam/exam_curd.php',
                type: 'POST',
                data: {
                  addMark: true,
                  paperId: <?= $paper_id ?>,
                  student: getCookie('id'),
                  questionId: myArray[last].qid,
                  status: mark ? 'correct' : 'wrong'
                },
                success: function(res) {}

              })
            } else {
              $('#btnNext').text('Finished')
              isFinished = true


            }
            last++
            if (myArray.length > last) {
              $('#btnBack').prop('disabled', false)
              $('#question').text(myArray[last].quction)
              $('#anwser1').text(myArray[last].answer1)
              $('#anwser2').text(myArray[last].answer2)
              $('#anwser3').text(myArray[last].answer3)
              $('#anwser4').text(myArray[last].answer4)
            } else {
              // $('#btnNext').prop('disabled', true)
            }

          } else {
            // todo NEED TO add ajax for save exam details
            $.ajax({
              url: "../../build/db/exam/exam_curd.php",
              type: 'POST',
              data: {
                result: true
              },
              success: function(response) {
                console.log('response' + response);
                var res = $.parseJSON(response);
                if (res.code == 220) {
                  const result = Math.round((res.message / 40) * 100)
                  $("#mark").val(result + "%");
                  $.ajax({
                    url: '../../build/db/exam/exam_curd.php',
                    type: 'POST',
                    data: {
                      saveExamDetails: true,
                      paperId: <?= $paper_id ?>,
                      studentId: getCookie('id'),
                      randomPaperId: getCookie('randomPaperId'),
                      mark: result
                    },
                    success: function(res) {
                      window.location = "../../pages/Exam/FinishExam.php";
                      if (res.code == 220) {

                      }
                    }

                  })

                } else if (res.code == 520) {
                  console.log(res.message);
                } else if (res.code == 420) {
                  console.log(res.message);
                }
              }
            })

          }
        }

        function Back() {
          last--
          if (last > -1) {
            $('#question').text(myArray[last].quction)
            $('#anwser1').text(myArray[last].answer1)
            $('#anwser2').text(myArray[last].answer2)
            $('#anwser3').text(myArray[last].answer3)
            $('#anwser4').text(myArray[last].answer4)
          } else {
            $('#btnBack').prop('disabled', true)
          }
        }

        function getCookie(cname) {
          let name = cname + '='
          let decodedCookie = decodeURIComponent(document.cookie)
          let ca = decodedCookie.split(';')
          for (let i = 0; i < ca.length; i++) {
            let c = ca[i]
            while (c.charAt(0) == ' ') {
              c = c.substring(1)
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length)
            }
          }
          return ''
        }

        function setCookie(cname, cvalue) {

          const d = new Date()
          d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000))
          let expires = 'expires=' + d.toUTCString()
          document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/'

        }
      </script>
</body>

</html>
