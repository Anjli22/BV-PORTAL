<?php
  
  include('connection.php');
   
    $aid=$_POST['aid'];
    $query = $db->prepare('SELECT * FROM Announcement  WHERE aid  = ?');
    $data=array($aid);   
    $query->execute($data);

   while($datarow=$query->fetch()){ ?>
    <div class="notice"><p><?php echo $datarow['content']?></p></div>

<?php
   } ?>
