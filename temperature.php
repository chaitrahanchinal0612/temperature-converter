<!DOCTYPE html>
<html>
<head>
<title>
TEMPERATURE CONVERSION APP
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<h3 class="p-5 text-center">TEMPERATURE CONVERSION APP<h3>

  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-s-10 p-2 text-center mx-5 p-3 mb-5 bg-body rounded">
          <img src="images/temp1.jpg" width="300px" height="300px">
        </div>
        <div class="col-md-5 col-s-10 p-5 pt-5 mx-4   shadow-lg p-3 mb-5 bg-body rounded text-center">
          <form method="post">
            <div class="input-group input-group-lg py-4">
            <input type="text" name="num" class="form-control" placeholder="Enter value" aria-label="Username" aria-describedby="basic-addon1">
          </div>
            <div class="select">

            <span class="mx-4">  <label class=>Celcius</label><input class="mx-2"type="radio" name="p1" value="cel">
          </span>   <label>Fehrenheit</label><input class="mx-2" type="radio" name="p1" value="fer">
            </div>
            <button class="mt-4 btn btn-outline-primary btn-lg" type="submit" name="submit" >Convert</button>
            </form>
            <?php
            if(isset($_POST['submit'])){
              $num=$_POST['num'];
              $select=$_POST['p1'];
              if($select=='cel'){
              $result=  ($num-32)*5/9;
              echo"The temperature in celcius is $result";
              }
              else{
                $result=($num*9/5)+32;
                    echo"The temperature in farenheit is $result";
              }

            }
            ?>
        </div>
      </div >

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
