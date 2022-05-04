<?php
    include('connection.php');
    $query = $db->prepare('SELECT * from Announcement ORDER BY date desc');
    $data=array();
    $query->execute($data);

    
    while($datarow=$query->fetch())
    {
        $lines=explode("\n", $datarow['content']);
?> 
        
    <div class="content">
        <div id="aid" style="display:none;" ><?php echo $datarow['aid']; ?></div>
        <div class="title" id="content" ><?php echo $lines['0'];?></div>
        <div><a href="../html/singlenotice.php?aid=<?php echo $datarow['aid'];?>">Read more</a></div>
        <div class="date"><?php echo $datarow['date']; ?></div>
        
    </div>

<?php } ?>
 
