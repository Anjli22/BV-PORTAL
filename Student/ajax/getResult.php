<?php
    include('connection.php');
    $option=$_POST['option'];
    $id=$_POST['id'];
    
    $query = $db->prepare('SELECT * from courses_of_ece,result WHERE courses_of_ece.course_code=result.course_code AND result.sid=? AND courses_of_ece.semester =?');
    $data=array($id,$option);
    $query->execute($data);
    // $row=$query->fetch();
    if($datarow=$query->fetch()>0){
    
?>

    <div class="table">
        <table>
            <tr>
                <th>Nomenclature of Course(s)</th>
                <th>Credit point</th>
                <th>Grades</th>
                <th>Remarks</th>
            </tr>
     
    
    <?php
    $query->execute($data);
    while($datarow=$query->fetch())
    {
    ?> 
    
    <!-- <div>1</div> -->
    <tr>
        <td style="text-align:left;"><?php echo $datarow['course_name'] ?></td>
        <td><?php echo $datarow['credit_points'] ?></td>
        <td><?php echo $datarow['marks'] ?></td>
        <td>GOOD</td>
    </tr>

    <?php } ?>
    
    </table>
    </div>
    <div class="table">
        <table>
                <tr>
                    <th  style="text-align:left; width:80%!important;">Semester Grade Point Average (SGPA)</th>
                    <th style="text-align:center;">-</th>
                </tr>
            </table>
        </div>
        <div class="table">
        <table>
            <tr>
                <th  style="text-align:left; width:80%!important;">Cumulative Grade Point Average (CGPA) upto Fourth Semester</th>
                <th style="text-align:center;">-</th>
            </tr>
        </table>
    </div>  

<?php } 

    else{
?>
    <div class="table"><h3><span  style="color:red;">**</span>Result Not Found</h3></div>
<?php } 


?>




