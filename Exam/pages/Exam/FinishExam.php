<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Time out</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h1><span >  </span> Your final mark hear</h1>
      <!-- <img src="../../dist/img/img.png" alt="timeOut"/> -->
      <button class="btn btn-success" onclick="ViewResult()">Check Result</button>
      <br/>
      <form method="post" action="../../pages/Student_dashboard/" target="_self">
        <br/>
        <input type="text" style="font-size: 45px; font-weight: bold" id="mark"  disabled>
        <br/>
       <input class="btn btn-danger" style="margin-top: 15px;" type="submit" value="Exit">
      </form>
    
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {


  })
function ViewResult() {

  $.ajax({
    url: "../../build/db/exam/exam_curd.php",
    type: 'POST',
    data: {
      result: true
    },
    success: function (response) {
      console.log('response' + response);
      var res = $.parseJSON(response);
      if (res.code == 220) {
        const result = Math.round((res.message / 40) * 100)
        $("#mark").val(result+"%");

      } else if (res.code == 520) {
        console.log(res.message);
      } else if (res.code == 420) {
        console.log(res.message);
      }
    }
  })
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
</script>
</body>
</html>
