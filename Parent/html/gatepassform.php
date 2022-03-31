<?php 
    session_start();
    if($_SESSION['id'] == "") 
    {
        header(location:)
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/getpassform.css">

    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebarP.php'); ?>

        <div class="content-div">
            <div class="head"> Gate Pass Form </div>
            <form>
                <div>
                    <label>ID NO<span>*</span>:</label> <br/>
                    <input type="text" name="sid" id="sid" placeholder="e.g. BTBTE1" required>
                </div>
                <div>
                    <label>STUDENT NAME<span>*</span>:</label> <br/>
                    <input type="text" name="sname" id="sname"  required>
                </div>
                <div>
                    <label>CLASS<span>*</span>:</label><br/>
                    <input  type="text" name="class" id="class" required placeholder="e.g. ELECTRONICS AND COMMUNICATION" required>
                </div>
                <div>
                    <label>GUARDIAN NAME<span>*</span>:</label><br/>
                    <input type="text" name="gname"  id ="gname" required>
                </div>
                <div>
                    <label>REASON OF APPLYING FOR LEAVE<span>*</span>:</label><br/>
                    <textarea rows="4" type="text" name="reason" id="reason" ></textarea>
                </div>
                <div>
                    <label>DATE OF GOING ON LEAVE<span>*</span>: </label><br/>
                    <div>
                        <label>TO:</label><br/>  
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div>
                        <label>FROM:</label><br/>  
                        <input type="date" name="date" id="date"  required>
                    </div>
                    
                </div>
                <div>  
                    <label>WHETHER THE STUDENT IS ALLOWED TO GO ALONE <span>*</span>:</label> <br/>
                    <label style="margin-right:2%;">Yes</label> 
                    <label>No</label> <br/>
                    <input type="radio" name="alone" id="alone" style="margin-right:3%;" required>
                    <input  type="radio" name="alone" id="not-alone"  required> <br/>
          
                </div>
                <div class="submit-btn">
                    <input type="submit" name ="submit" id="submit" class='submit'>
                </div>

            </form>
        </div>
    </div>

</body>

<script src="../../common/home.js"></script>
</html>