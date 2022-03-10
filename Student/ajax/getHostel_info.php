<?php
include('connection.php');
$id=$_POST['id'];

$query = $db->prepare('SELECT * FROM edu_hostel_info  WHERE id  = ?');
$data=array($id);   
$query->execute($data);
?>
<table >
        <tr>
            <th colspan="2" class="table-heading">Hostel Details</th>
        </tr>
        <?php
    if($query->rowcount()>0)
    {
        while($datarow=$query->fetch())
        {?>

            <tr>
                <th>Hostel Name</th>
                <td id="uname"><?php echo $datarow['hostel_name'];?></td>
            </tr>
            <tr>
                <th>Room Number</th>
                <td id="DOB"><?php echo $datarow['room_no'];?></td>
            </tr>
            
           
        
            <?php }} ?>  
        </table>
