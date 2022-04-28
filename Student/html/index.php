
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/weather.css">
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <link rel="stylesheet" href="../css/index.css" >
 </head>
<body>
    <p class="title">'Welcome to Banasthali Vidhyapith Portal'</p>
    <div class="main-box">
        <div class="box student">
          <a href="./login.php">As a Student/Admin</a>
        </div>
        <div class="box parent">
          <a href="../../Parent/html/login.php">As a Parent</a>
        </div>
    </div>
    <div id="weather"></div>
     
    
    
</body>



<script type="text/javascript">
  $.ajax({
      type:"POST",
      url:"../ajax/weather.php",
      data:{},
      success: function(data){
        $('#weather').html(data);

          }
      });

</script>
</html>