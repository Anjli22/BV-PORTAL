<?php
  
  include('connection.php');
   
    $bid=$_POST['bid'];
    $query = $db->prepare('SELECT * FROM blog  WHERE bid  = ?');
    $data=array($bid);   
    $query->execute($data);

   while($datarow=$query->fetch()){ ?>

    <div >
      <div class="blog-heading" ><h1><?php echo $datarow['title']?></h1></div>
      <div>
        <div class="like-btn">
          <i class='bx bx-heart'></i>
        </div>
        <div class="tooltip">Like</div>
        </div>
    </div>
    <div class="blog-content" ><p><?php echo $datarow['content']?></p></div>

<?php
   } ?>


