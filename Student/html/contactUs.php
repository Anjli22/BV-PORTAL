<?php 
    session_start();
    if($_SESSION['id'] == "") 
    {
        header("Location:./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link rel="stylesheet" href="../css/contactUs.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>

        <div class="content-div">
            <div class="main">
                <div class="heading">
                    <h1>Contact US</h1>
                </div>
                <!-- 1  -->
                <table>
                    <tr>
                        <th>Name of Department</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>Vice-Chancellor</td>
                        <td>01438-228787</td>
                        <td><a href="mailto:inashastri@banasthali.in"><br>inashastri@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Dean Administration</td>
                        <td>01438-228456</td>
                        <td><a href="mailto:vc@banasthali.ac.in">vc@banasthali.ac.in</a></td>
                    </tr>
                    <tr>
                        <td>Addl. Registrar, Academic Section</td>
                        <td>01438- 228950, 228989</td>
                        <td><a href="mailto:mittal_hl@yahoo.co.in">mittal_hl@yahoo.co.in</a></td>
                    </tr>
                    <tr>
                        <td>Examination Section</td>
                        <td>01438-228524</td>
                        <td><a href="mailto:exam@banasthali.in">exam@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Results Section</td>
                        <td>01438-228950</td>
                        <td><a href="mailto:results@banasthali.in">results@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Finance & Accounts</td>
                        <td>01438-228546, 228644  </td>
                        <td><a href="mailto:lekhavibhag@banasthali.in">lekhavibhag@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Karmik Anubhag</td>
                        <td>01438-228376</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Research Section</td>
                        <td>01438-228989</td>
                        <td><a href="mailto:researchbanasthali@banasthali.in.in">researchbanasthali@banasthali.in</a></td>
                    </tr>
                    
                </table>
            <!-- 2 -->

                <table>
                    <tr>
                        <th>Placemenofie(s)</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>Computer Science and Engineering</td>
                        <td>9352141479</td>
                        <td><a href="mailto:campusplacement@banasthali.in">campusplacement@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Management</td>
                        <td>9410111228</td>
                        <td><a href="mailto:iic@banasthali.in">iic@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Design</td>
                        <td>--</td>
                        <td><a href="mailto:placements@banasthali.in.in">placements@banasthali.in</a></td>
                    </tr>
                    <tr>
                        <td>Life-sciences, Pharmacy, Chemical & all other programmes</td>
                        <td>9352879809, 9783774453</td>
                        <td><a href="mailto:campusplacement@banasthali.in">campusplacement@banasthali.in</a></td>
                    </tr>
                </table>

                <!-- 3rd table -->
                <table>
                    <tr>
                        <th>School Section</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                            <td>Primary School (Saraswati Mandir)</td>
                            <td>01438-228479</td>
                            <td><a href="mailto:pschool@banasthali.ac.in">pschool@banasthali.ac.in</a></td>
                        
                    </tr>
                    <tr>
                        <td>Senior Secondary School (Sharda Mandir)</td>
                        <td>01438-228383</td>
                        <td><a href="mailto:school@banasthali.ac.in">campusplacement@banasthali.in</a></td>
                    </tr>
                    
                </table>

                <table>
                    <tr>
                        <th>Guest house</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>Guest house</td>
                        <td>01438-228913</td>
                        <td>-</td>
                        
                    </tr>
                    
                </table>

                <table>
                    <tr>
                        <th>Fax</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                            <td>Banasthali Campus</td>
                            <td>01438-228365/228587</td>
                            <td>---</td>
                        
                    </tr>
                    <tr>
                        <td>Apaji Institute</td>
                        <td>01438-228649</td>
                        <td>---</td>
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>

</body>

<script src="../../common/home.js"></script>
</html>