<?php
  
  include('connection.php');
   
    $bid=$_POST['bid'];
    $query = $db->prepare('SELECT * FROM blog  WHERE bid  = ?');
    $data=array($bid);   
    $query->execute($data);

   while($datarow=$query->fetch()){ ?>

    <div class="main">
      <div class="blog-heading" ><h1><?php echo $datarow['title']?></h1></div>
      <div class="details">
       <div class="author"><p>-by <?php echo $datarow['sname']?></p></div>
       <div class="date"><p>Posted on : <?php echo substr($datarow['date'],0,10);?></p></div>
      </div>
    <div class="blog-content" ><p><?php echo $datarow['content']?></p></div>

<?php
   } ?>


