<?php
   include('connection.php');
    $id=$_POST['id'];
    
    $query = $db->prepare('SELECT * FROM student  WHERE id  = ?');
    $data=array($id);   
    $query->execute($data);
    
    ?>

    <table >
        <tr>
            <th colspan="2" class="table-heading">Personal Information</th>
        </tr>
    <?php
    if($query->rowcount()>0)
    {
        while($datarow=$query->fetch())
        {?>
            
            <tr>
                <th>Student Name</th>
                <td id="uname"><?php echo $datarow['student_name'];?></td>
            </tr>
            <tr>
                <th>Date Of Birth</th>
                <td id="DOB"><?php echo $datarow['DOB'];?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td id=gender><?php echo $datarow['gender'];?></td>
            </tr>
            <tr>
                <th>Native Language</th>
                <td id="native"><?php echo $datarow['native_language'];?></td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td id="blood_group"><?php echo $datarow['blood_group'];?></td>
            </tr>
            <tr>
                <th>Physically Challenged</th>
                <td id="challenged" ><?php echo $datarow['physically_challenged'];?></td>
            </tr>
            <tr>
                <th>Caste</th>
                <td id="caste"><?php echo $datarow['caste'];?></td>
            </tr>
            <tr>
                <th>Religion</th>
                <td id="religion"><?php echo $datarow['religion'];?></td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td id="nationality" style="font-weight:700; text-trans form:uppercase;"><?php echo $datarow['nationality'];?></td>
            </tr>
            <tr>
                <th>Aadhar Number</th>
                <td id="aadhar"><?php echo $datarow['aadhar_number'];?></td>
            </tr>  
     

       </table>
       <table>
            <tr>
                <th colspan="2" class="table-heading">College Information</th>
            </tr>
            <tr>
                <th>Enrollment Number</th>
                <td><?php echo $datarow['enrollment_no'];?></td>
            </tr>
            <tr>
                <th>Banasthali Id</th>
                <td><?php echo $datarow['banasthali_id'];?></td>
            </tr>
            <tr>
                <th>Program</th>
                <td><?php echo $datarow['program'];?></td>
            </tr>
            <tr>
                <th>Branch</th>
                <td><?php echo $datarow['branch'];?></td>
            </tr>
            
        </table>
        <table>
            <tr>
                <th colspan="2" class="table-heading">Current Address</th>
            </tr>
            <tr>
                <th>Street Name</th>
                <td><?php echo $datarow['street_name'];?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?php echo $datarow['city'];?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $datarow['states'];?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td style="font-weight:700;"><?php echo $datarow['country'];?></td>
            </tr>
            <tr>
                <th>Pincode</th>
                <td><?php echo $datarow['pin_code'];?></td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td><?php echo $datarow['mobile_no'];?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $datarow['email'];?></td>
            </tr>
            <tr>
                <th>Parent Mobile Number</th>
                <td><?php echo $datarow['parent_mobile_no'];?></td>
            </tr>
            <?php } }?>
        </table>
