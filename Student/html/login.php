<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
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
                <button id="student-btn" class="active" onclick="showstudent();">Student</button>
            </div>
            <div class="toggle-btn">
                <button id="teacher-btn" onclick="showteacher();">Teacher</button>
            </div>
               
        </div>
        <div class="log-form">
            <div class="form" id="student-form">
                <form>  
                    <div>
                        <div style="text-align:center; font-weight:bold; ">'Welcome Student'</div>
                        <label>EMAIL: <span style="color:red">*</span></label><br>
                        <input type="email" id="emailS" name="emailS" placeholder="Enter your email" class="form-control" required>
                    </div>  
                    <div>
                        <label >PASSWORD: <span style="color:red">*</span></label><br>
                        <input type="password" id="passwordS" name="passwordS" placeholder="Enter password" class="form-control" required>           
                    </div>
                    <div class="btn2">
                    <input type="submit" id="submitS" name="submitS" onclick="getstudent();" class="submit"   >      
                    </div>  
                </form>

            </div>

            <div class="form" id="teacher-form" style="display:none;">
                <form>  
                    <div>
                    <div style="text-align:center; font-weight:bold; ">'Welcome Teacher'</div>
                        <label>EMAIL: <span style="color:red">*</span></label><br>
                        <input type="email" id="emailT" name="emailT" placeholder="Enter your email" class="form-control" required>
                    </div>  
                    <div>
                        <label >PASSWORD: <span style="color:red">*</span></label><br>
                        <input type="password" id="passwordT" name="passwordT" placeholder="Enter password" class="form-control" required>           
                    </div>
                    <div class="btn2">
                    <input type="submit" id="submitT" name="submitT" onclick="getteacher();" class="submit"   >      
                    </div>  
                </form>

            </div>



        </div>

            
    </div>
</body>

    <script type="text/javascript">
        
        var studentform=document.getElementById('student-form');
        var teacherform=document.getElementById('teacher-form');
        var studentbtn = document.getElementById('student-btn');
        var teacherbtn = document.getElementById('teacher-btn');

        function showstudent()
        {
            studentform.style.display = "block";
            teacherform.style.display = "none";
            studentbtn.classList.toggle("active");   
            teacherbtn.classList.toggle("active");       
        }   
        function showteacher()
        {
            studentform.style.display = "none";
            teacherform.style.display = "block";
            studentbtn.classList.toggle("active");   
            teacherbtn.classList.toggle("active");          
        }  
        
    </script>

    <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
    });
    </script>
</html>