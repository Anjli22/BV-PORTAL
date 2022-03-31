<?php 
    session_start();
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
    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>

        <div class="content-div">
            <div class="form">
                    <form id="form">
                        <label>Author:</label>
                        <input type="text" id="author" name="author" placeholder="Enter your name" class="form-control " required>
                        <label>Title:</label>
                        <input type="text" id="title" name="title" placeholder="Enter the Title" class="form-control " required>
                        <label >Content:</label>
                        <textarea name="content" id="content" ></textarea>
                        
                        <div class="submit-btn">                
                            <input type="submit" id="submit" name="submit" class=" submit" required onclick="input()">
                        </div>                
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="../../common/home.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
<!-- 
        // $.fn.modal.Constructor.prototype.enforceFocus = function() {
        //     modal_this = this
        //     $(document).on('shown.bs.modal', function (e) {
        //         if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
        //         modal_this.$element.focus()
        //         }
        //     })
        //     }; -->
        
 </script> -->
<script type="text/javascript">
        function input(){
            var form=document.getElementById('form');
            var data=new FormData(form); //object
            
            
            $.ajax(
                {
                type:"POST",
                url:"../ajax/insertBlog.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    alert(data);
                    // console.log(data);
                    
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