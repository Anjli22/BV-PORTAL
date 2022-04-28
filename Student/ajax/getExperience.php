
<?php
    include('connection.php');
    $query = $db->prepare('SELECT * from blog ORDER BY date desc');
    $data=array();
    $query->execute($data);
    ?>
        
    <?php
    while($datarow=$query->fetch())
    {
        $lines=explode("\n", $datarow['content']);
    ?> 
        <div class="experience-block">
            <div class="blog-title"><h3><?php echo $datarow['title'];?></h3></div>
            <div class="blog-content">
                <span id="content"><?php echo $lines['0'];?></span>
                <span><a href="../html/singleBlog.php?bid=<?php echo $datarow['bid']?>">Read more</a></span>
            </div>
            
        </div>

<?php } ?>

      





