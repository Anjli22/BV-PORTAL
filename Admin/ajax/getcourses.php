<?php
include ('../../student/ajax/connection.php');
 
$query=$db->prepare ('SELECT * FROM courses_of_ece ');
$data=array();
$query->execute($data);
?>
 <select id="courses" name="course">
    <option value="0">Select</option>                        
   
<?php while($datarow=$query->fetch()){
    ?>
    
    <option value="<?php echo $datarow['course_code']; ?>"><?php echo  $datarow ['course_name'];  ?></option>
<?php } ?>
</select>
