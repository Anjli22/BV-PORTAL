<?php
    include ('./connection.php');

  include('connection.php');
   
    $status="paccept";
    $query = $db->prepare('SELECT * FROM gatepassinfo  WHERE sstatus  = ?');
    $data=array($status);   
    $query->execute($data);

    if($datarow=$query->fetch()>0) 
    {
        $query->execute($data);

        while($datarow=$query->fetch()){ ?>

            <table>
                <tr>
                    <td>Request No. : </td>
                    <td id="gid"><?php echo $datarow['gid'];?></td>
                </tr>
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
            <div class="acc-dec-btn">
                <button class="accept-btn" value="Aaccept" id="accept" onclick="accept();">Accept</button>
                <button class="decline-btn" value="Adecline" id="decline" onclick="decline();">Decline</button>
                            
            </div>
            
            <?php
            }
        }
        else
        { ?>
            <div class="table" style=" background:white; text-align:center;"><h3><span style="color:red;">**</span>No Current Request</h3></div>

        <?php
        }?>
               
            
            
          
    