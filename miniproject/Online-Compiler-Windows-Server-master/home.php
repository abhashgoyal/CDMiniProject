<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>COMPILER DESIGN lab</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <!-- <link rel="stylesheet" href="css/main.css"> -->
  <link rel="stylesheet" href="css/style.css">

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>








</head>

<body>
  <div class="main">

    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-inverse navbar-fixed-top nbar">
          <div class="navbar-header">
            <a class="navbar-brand lspace" href="home.php">COMPILER DESIGN LAB</a>
          </div>


        </nav>
      </div>
    </div>


    <div class="row log">
      <div class="col-sm-10">
        <div class="">
          <h3 style="text-align:center;">Online Compiler</h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>




    <div class="row cspace">
      <div class="col-sm-8">
        <div class="form-group">
          <form action="compile.php" id="form" name="f2" method="POST">
            <label for="lang">Choose Language</label>

            <select class="form-control" name="language">

              <option value="cpp">C++</option>

              <option value="java">Java</option>


            </select><br><br>

            <label for="ta">Write Your Code</label>
            <textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
            <label for="in">Enter Your Input</label>
            <textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
            <input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


          </form>


          <script>

            $(document).ready(function () {

              $('form').on('submit', function (e) {

                e.preventDefault();


                $.ajax({
                  type: "POST",
                  cache: false,
                  url: "compile.php",
                  datatype: "html",
                  data: $('form').serialize(),
                  success: function (result) {


                    $('#div').html(result);
                  }
                });
              });
            });
          </script>

          <label for="out">Output</label>
          <textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>




        </div>
      </div>

      <div class="col-sm-4">


      </div>
    </div>
  </div>
  <br><br><br>
  <div class="area">
    <div class="well foot">
      <div class="row area">
        <div class="col-sm-3">




        </div>

        <div class="col-sm-5">


          <div class="fm">

            <b>MINI GROUP PROJECT-2024</b><br>


          </div>
        </div>



      </div>
    </div>
  </div>
</body>

</html>