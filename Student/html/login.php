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
                <button id="teacher-btn" onclick="showteacher();">Admin</button>
            </div>
<!-- 
            <div class="toggle-btn">
                <button id="parent-btn" onclick="showparent();">Parent</button>
            </div> -->
               
        </div>
        <div class="log-form">
            <div class="form" id="student-form">
                <form>  
                    <div>
                        <div style="text-align:center; font-weight:bold; ">'Student Panel'</div>
                        <label>EMAIL: <span style="color:red">*</span></label><br>
                        <input type="email" id="emailS" name="emailS" placeholder="Enter your email" class="form-control" required>
                    </div>  
                    <div>
                        <label >PASSWORD: <span style="color:red">*</span></label><br>
                        <input type="password" id="passwordS" name="passwordS" placeholder="Enter password" class="form-control" required>           
                    </div>
                    <div class="btn2">
                    <input type="submit" id="submitS" name="submitS" onclick="getStudentData();" class="submit"   >      
                    </div>  
                </form>

            </div>

            <div class="form" id="teacher-form" style="display:none;">
                <form>  
                    <div>
                    <div style="text-align:center; font-weight:bold; ">'Admin Panel'</div>
                        <label>EMAIL: <span style="color:red">*</span></label><br>
                        <input type="email" id="emailA" name="emailA" placeholder="Enter your email" class="form-control" required>
                    </div>  
                    <div>
                        <label >PASSWORD: <span style="color:red">*</span></label><br>
                        <input type="password" id="passwordA" name="passwordA" placeholder="Enter password" class="form-control" required>           
                    </div>
                    <div class="btn2">
                    <input type="submit" id="submitA" name="submitA" onclick="getAdminData();" class="submit"   >      
                    </div>  
                </form>

            </div>
<!-- parent form -->

            <div class="form" id="parent-form" style="display:none;">
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
                    <input type="submit" id="submitP" name="submitP" onclick="getParentData();" class="submit"   >      
                    </div>  
                </form>

            </div>

        </div>

            
    </div>
</body>

    <script type="text/javascript">
        
        var studentform=document.getElementById('student-form');
        var teacherform=document.getElementById('teacher-form');
        var parentform=document.getElementById('parent-form');
        var studentbtn = document.getElementById('student-btn');
        var teacherbtn = document.getElementById('teacher-btn');
        var parentbtn = document.getElementById('parent-btn');

        

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


        function showparent()
        {
            studentform.style.display = "none";
            teacherform.style.display = "block";
            studentbtn.classList.toggle("active");   
            teacherbtn.classList.toggle("active");          
        }  


        function getStudentData()
        {
        var emailS=document.getElementById('emailS').value;
        var passwordS=document.getElementById('passwordS').value;

        $.ajax({
            type:"POST",
            url:"../ajax/getStudent.php",
            data: {emailS:emailS,passwordS:passwordS},
            success: function(data){
                if(data==0)
                
                    window.location.href="./homeS.php";

                else if (data==1)
                    alert ("incorrect  password ");
                else
                    console.log(data);

                }
            });
        }


        function getAdminData()
        {
        var emailA=document.getElementById('emailA').value;
        var passwordA=document.getElementById('passwordA').value;

        $.ajax({
            type:"POST",
            url:"./../../Admin/ajax/getAdmin.php",
            data: {emailA:emailA,passwordA:passwordA},
            success: function(data){
                if(data==0)
                    window.location.href="./../../Admin/html/homeA.php";

                else if (data==1)
                    alert ("Incorrect Password ");
                else

                    console.log(data);

                }
            });
        }
        

        function getParentData()
        {
        var emailP=document.getElementById('emailP').value;
        var passwordP=document.getElementById('passwordP').value;

        $.ajax({
            type:"POST",
            url:"./../../Admin/ajax/getParent.php",
            data: {emailP:emailP,passwordP:passwordP},
            success: function(data){
                if(data==0)
                    window.location.href="./../../Admin/html/homeP.php";

                else if (data==1)
                    alert ("Incorrect Password ");
                else

                    console.log(data);

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