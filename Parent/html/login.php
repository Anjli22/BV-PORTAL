<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginp.css">

    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css">
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
</head>
<body>
    <div class="main">
        <div class="heading"><p>BANASTHALI PORTAL</p></div>
        
        <div class="toggle">
            <div class="toggle-btn">
                <button id="parent-btn" onclick="showparent();">Parent</button>
            </div> 
        </div>
            
    
        <div class="log-form">
            
<!-- parent form -->

            <div class="form" id="parent-form">
                <form>  
                    <div>
                    <div style="text-align:center; font-weight:bold; ">'Parent Panel'</div>
                        <label>EMAIL: <span style="color:red">*</span></label><br>
                        <input type="email" id="emailP" name="emailP" placeholder="Enter your email" class="form-control" required>
                    </div>  
                    <div>
                        <label >PASSWORD: <span style="color:red">*</span></label><br>
                        <input type="password" id="passwordP" name="passwordP" placeholder="Enter password" class="form-control" required>           
                    </div>
                    <div class="btn2">
                    <input type="submit" id="submitP" name="submitP" onclick="getParentData();" class="submit" value="login" >      
                    </div>  
                </form>

            </div>

        </div>

            
    </div>
</body>

    <script type="text/javascript">
        
        function getParentData()
        {
            var emailP=document.getElementById('emailP').value;
            var passwordP=document.getElementById('passwordP').value;
            
            $.ajax({
                type:"POST",
                url:"./../ajax/getParent.php",
                data: {emailP:emailP,passwordP:passwordP},
                success: function(data){
                    if(data==0)
                        window.location.href="./homeP.php";

                    else if (data==1)
                        alert ("Incorrect Password ");
                    else

                        alert(data);

                }
            });
        }
        
    </script>

    

    <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
    });
    </script>
</html>