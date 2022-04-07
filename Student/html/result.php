<?php 
    session_start();
    if($_SESSION['id'] == "") 
    {
        header("Location:./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link rel="stylesheet" href="../CSS/result.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>
        <div class="content-div">
            <div id="mid-section">
                <div class="result-heading"><h1>Result</h1></div>
                <div class="select-section">
                    <div class="drop-down-heading">Select Semester</div>
                    <div class="drop-down">                           
                        <select id="sem_option" name="select" onChange="update();">
                            <option value="0">--Select--</option>
                            <option value="1">First Semester</option>
                            <option value="2">Second Semester</option>
                            <option value="3">Third Semester</option>
                            <option value="4">Fourth Semester</option>
                            <option value="5">Fifth Semester</option>
                            <option value="6">Sixth Semester</option>
                            <option value="7">Seventh Semester</option>
                            <option value="8">Eighth Semester</option>
                        </select>
                    </div>
                </div> 
                        <!-- table start***************************** -->
                <div class="table ">
                    <div class="data-list " id="data-list" style="float:left; width:100%;"></div>                        
                </div> 
            </div>
        </div>
    </div>
    <script>
        function update() {
                var id= <?php echo json_encode($_SESSION['id']); ?>;
				var select = document.getElementById('sem_option');
				var option = select.options[select.selectedIndex].value;
                if(option!=0)
                {
                    $.ajax({
                        type:"POST",
                        url:"../ajax/getResult.php",
                        data: {option:option,id:id},
                        success: function(data){
                            $('#data-list').html(data);
                            
                            
                        }
                    });
                }
                else
                    location.reload();
        }
			

		

    </script>






        </div>
       
    

</body>



<script src="../../common/home.js"></script>
</html>