<?php
  
  include('connection.php');
   
    $id=$_POST['id'];
    $query = $db->prepare('SELECT * FROM gatepassinfo  WHERE ssid  = ?');
    $data=array($id);   
    $query->execute($data);

   while($datarow=$query->fetch()){ ?>

    <table>
            <tr>
                <td>Date and Time :</td>
                <td><?php echo $datarow['date'];?></td>
            </tr>
            <tr>
                <td>Student Name :</td>
                <td><?php echo $datarow['sname'];?></td>
            </tr>
            <tr>
                <td>Id :</td>
                <td><?php echo $datarow['ssid'];?></td>
            </tr>
            <tr>
                <td>Class:</td>
                <td><?php echo $datarow['class'];?></td>
            </tr>
            <tr>
                <td>Guardian name:</td>
                <td><?php echo $datarow['pname'];?></td>
            </tr>
            <tr>
                <td>Reason : </td>
                <td><?php echo $datarow['reason'];?></td>
            </tr>
            <tr>
                <td>Date of going :</td>
                <td><?php echo $datarow['dateOfGoingOnLeave'];?></td>
            </tr>
            <tr>
                <td>Date of coming :</td>
                <td><?php echo $datarow['returningDate'];?></td>
            </tr>
            <tr>
                <td>Going Alone :</td>
                <td><?php echo $datarow['goingAlone'];?></td>
            </tr>
        </table>

<?php
   } ?>


