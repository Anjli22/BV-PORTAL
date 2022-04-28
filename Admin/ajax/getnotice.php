<?php
  
  include('connection.php');
   
    $aid=$_POST['aid'];
    $query = $db->prepare('SELECT * FROM Announcement  WHERE aid  = ?');
    $data=array($aid);   
    $query->execute($data);

   while($datarow=$query->fetch()){

     ?>
    <div class="notice" >
      <p><?php echo $datarow['content']?></p>
      <p style="margin: 2% 0; color:grey;"><?php echo $datarow['date']?></p>
      <div class="delete-btn" onclick="getdelete1();"><i class='bx bxs-trash-alt' ></i></div>
  </div>
   
<?php
   } ?>
