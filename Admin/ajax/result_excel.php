
<?php
    include('../Classes/PHPExcel.php');
    include("connection.php");
    $course=$_POST['course']; //  for eg math103
    // echo $course;
    if(!empty($_FILES["excel_file"]))
    {
       
        $file_array = explode(".",$_FILES["excel_file"]["name"]);
       
        $file_name=$file_array[0];
        $extension=$file_array[1];
        if($extension == "xls" || $extension =="xlsx" || $extension == "csv")
        {
            echo "file type accepted"." " ;
            $uploadFilePath = '../../uploads/'.basename($_FILES["excel_file"]["name"]);
            move_uploaded_file($_FILES["excel_file"]["tmp_name"], $uploadFilePath);
            $filename= $_FILES["excel_file"]["name"];
            echo $filename." ";
            $object= PHPExcel_IOFactory::load($uploadFilePath);
             foreach($object->getWorksheetIterator() as $worksheet){
                 $rowcount = $worksheet->getHighestRow();
                 for($row=2; $row<=$rowcount;$row++){
                    $ssid=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
                    $marks=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
                    $course_code=$course;
                    $query = $db->prepare('INSERT INTO result(sid,marks,course_code) Values (?,?,?)');
                    $data = array($ssid,$marks,$course_code);
                    $execute=$query->execute($data);
                    if($execute)
                    {
                        echo 0;
                    }
                 }
             }
            
        }
        else{
            echo "file type not accepted";
        }


    }
    
?>
