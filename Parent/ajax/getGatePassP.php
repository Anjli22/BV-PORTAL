<?php
    include ('./connection.php');

    $status="paccept";
    $pid = $_SESSION['id'];
    

    // echo $pid;
    //to get sid 

    // $query = $db->prepare('SELECT * FROM guardian WHERE pid = ?');
    // $data=array($pid);
    // $execute=$query->execute($data);
    // while($datarow=$query->fetch()){ 
        
    //     $sid = $datarow['sid'];
    // }
    // echo $pid." ".$sid;

    //to get gate pass 

    // $query = $db->prepare('SELECT * FROM `gatepassinfo` WHERE ssid=? & sstatus=?;');
    // $data=array($status, $sid);   
    // $query->execute($data);

    // while($datarow=$query->fetch()){ 
        ?>
<!-- 
<table>
    <tr>
        <td>Date and Time :</td>
        <td>22/03/2022 09:30p.m.</td>
    </tr>
    <tr>
        <td>Student Name :</td>
        <td>Test1</td>
    </tr>
    <tr>
        <td>Id :</td>
        <td>BTBTE1</td>
    </tr>
    <tr>
        <td>Class:</td>
        <td>Electronics and Communication</td>
    </tr>
    <tr>
        <td>Guardian name:</td>
        <td>Mr. Parent</td>
    </tr>
    <tr>
        <td>Reason : </td>
        <td>Due.</td>
    </tr>
    <tr>
        <td>Date of going :</td>
        <td>23/2/2029</td>
    </tr>
    <tr>
        <td>Date of coming :</td>
        <td>28/2/2030</td>
    </tr>
    <tr>
        <td>Going Alone :</td>
        <td>Yes</td>
    </tr>
</table>
<div>                    
    <button class="accept-btn" value="paccept" id="accept" onclick="accept();">Accept</button>
    <button class="decline-btn" value="pdecline" id="decline" onclick="decline();">Decline</button>
</div> -->




