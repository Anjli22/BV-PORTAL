<?php
  
  include('connection.php');
   
    $id=$_POST['id'];
    $query = $db->prepare('SELECT * FROM gatepassinfo  WHERE ssid  = ?');
    $data=array($id);   
    $query->execute($data);

    if($datarow=$query->fetch()>0) 
    {
        $query->execute($data);

        while($datarow=$query->fetch()){ ?>

            <table>
                    
                    <tr>
                        <td>Request No. : </td>
                        <td id="gp"><?php echo $datarow['gid'];?></td>
                    </tr>
                    <tr>
                        <td>Date and Time : </td>
                        <td><?php echo $datarow['date'];?></td>
                    </tr>
                    <tr>
                        <td>Student Name : </td>
                        <td><?php echo $datarow['sname'];?></td>
                    </tr>
                    <tr>
                        <td>Id : </td>
                        <td><?php echo $datarow['ssid'];?></td>
                    </tr>
                    <tr>
                        <td>Class : </td>
                        <td><?php echo $datarow['class'];?></td>
                    </tr>
                    <tr>
                        <td>Guardian name : </td>
                        <td><?php echo $datarow['pname'];?></td>
                    </tr>
                    <tr>
                        <td>Reason : </td>
                        <td><?php echo $datarow['reason'];?></td>
                    </tr>
                    <tr>
                        <td>Date of going : </td>
                        <td><?php echo $datarow['dateOfGoingOnLeave'];?></td>
                    </tr>
                    <tr>
                        <td>Date of coming : </td>
                        <td><?php echo $datarow['returningDate'];?></td>
                    </tr>
                    <tr>
                        <td>Going Alone : </td>
                        <td><?php echo $datarow['goingAlone'];?></td>
                    </tr>

                    <tr>
                        <td  class="delete-btn" onclick="getdelete();"><i class='bx bxs-trash-alt' ></i></td>
                    </tr>
                </table>

                <?php if($datarow['sstatus'] == "initiated"){  ?>
                <div style="text-align: center; color:red;">
                    <p><?php echo 'No response by Parent Yet';?></p>
                </div>
                <?php }

                else if($datarow['sstatus'] == "paccept"){  ?>
                <div style="text-align: center; color:red;">
                    <p><?php echo 'Parent have Accepted, waiting for Admin';?></p>
                </div>
                <?php } 

                else if($datarow['sstatus'] == "pdecline"){  ?>
                <div style="text-align: center; color:red;">
                    <p><?php echo 'Parent have Declined the Request';?></p>
                </div>
                <?php }

                elseif($datarow['sstatus'] == "Aaccept"){  ?>
                <div style="text-align: center; color:red;">
                    <p><?php echo 'Your Gate pass have been Generated';?></p>
                </div>
                <?php }
                
            if($datarow['sstatus'] == "Adecline"){  ?>
                <div style="text-align: center; color:red;">
                    <p><?php echo 'Your Request for Gate pass have been denied by Admin';?></p>
                </div>
                <?php }
        }
    }

    else{
     ?>
         <div class="table" style=" background:white; text-align:center;"><h3><span style="color:red;">*</span>No Current Request</h3></div>
 
     <?php
    }
 ?>
 
 


