<?php
include('connection.php');
$id=$_POST['id'];

$query = $db->prepare('SELECT * FROM edu_hostel_info  WHERE id  = ?');
$data=array($id);   
$query->execute($data);
?>
<table >
        <tr>
            <th colspan="2" class="table-heading">Educational Information</th>
        </tr>
        <?php
    if($query->rowcount()>0)
    {
        while($datarow=$query->fetch())
        {?>

            <tr>
                <th>Applied Degree</th>
                <td id="uname"><?php echo $datarow['applied_degree'];?></td>
            </tr>
            <tr>
                <th>Educational Qualification</th>
                <td id="DOB"><?php echo $datarow['educational_qualification'];?></td>
            </tr>
            <tr>
                <th>Branch/Group studied</th>
                <td id=gender><?php echo $datarow['branch'];?></td>
            </tr>
            <tr>
                <th>school Name</th>
                <td id="native"><?php echo $datarow['school_name'];?></td>
            </tr>
            <tr>
                <th>Medium Of Study</th>
                <td id="blood_group"><?php echo $datarow['medium'];?></td>
            </tr>
            <tr>
                <th>Board/university</th>
                <td id="challenged" ><?php echo $datarow['board'];?></td>
            </tr>
            <tr>
                <th>Register Number</th>
                <td id="caste"><?php echo $datarow['registration_no'];?></td>
            </tr>
            <tr>
                <th>Class obtained</th>
                <td id="religion"><?php echo $datarow['class_obtained'];?></td>
            </tr>
            <tr>
                <th>Year of passing / passed</th>
                <td id="nationality" ><?php echo $datarow['year_of_passing'];?></td>
            </tr>
            <tr>
                <th>Month Of passing / passed</th>
                <td id="aadhar"><?php echo $datarow['month_of_passing'];?></td>
            </tr>  
     

       </table>
       <table>
            <tr>
                <th colspan="2" class="table-heading">School/College Information</th>
            </tr>
            <tr>
                <th>Area Name</th>
                <td><?php echo $datarow['area_name'];?></td>
            </tr>
            <tr>
                <th>City/District Name</th>
                <td><?php echo $datarow['city'];?></td>
            </tr>
            <tr>
                <th>State Name</th>
                <td><?php echo $datarow['states'];?></td>
            </tr>
            <tr>
                <th>Pincode/zipcode</th>
                <td><?php echo $datarow['pincode'];?></td>
            </tr>
            
       
            <tr>
                <th>Phone Number</th>
                <td><?php echo $datarow['phone_no'];?></td>
            </tr>
            <tr>
                <th>Break in study</th>
                <td><?php echo $datarow['break_in_study'];?></td>
            </tr>
            <tr>
                <th>Reason</th>
                <td><?php echo $datarow['reason'];?></td>
            </tr> 
            <?php }} ?>  
        </table>
