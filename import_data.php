<?php

	// include database connectivity 

    include_once('config.php');

    // Import file in php

    if (isset($_POST['import'])) {
    	
    	$fileName = $_FILES["file"]["tmp_name"];

    	if ($_FILES['file']['size'] > 0) {

    		$file = fopen($fileName, "r");

            while (($importData = fgetcsv($file, 10000, ",")) !== FALSE) {

                $Emp_Id = "";
                if (isset($importData[0])) {
                    $Emp_Id = mysqli_real_escape_string($con, $importData[0]);
                }
                $Gender = "";
                if (isset($importData[1])) {
                    $Gender = mysqli_real_escape_string($con, $importData[1]);
                }

                $Email = "";
                if (isset($importData[2])) {
                    $Email = mysqli_real_escape_string($con, $importData[2]);
                }
                $Age = "";
                if (isset($importData[3])) {
                    $Age = mysqli_real_escape_string($con, $importData[3]);
                }
                $User_Name = "";
                if (isset($importData[4])) {
                    $User_Name = mysqli_real_escape_string($con, $importData[4]);
                }
               
                $Password = "";
                if (isset($importData[5])) {
                    $Password = mysqli_real_escape_string($con, $importData[5]);
                }

                $query = "INSERT INTO users (S_no,Emp_Id, Gender, Email, Age, User_Name, Password) 
                VALUES('".$S_no."','".$Emp_Id."','".$Gender."','".$Email."','".$Age."','".$User_Name."',md5('".$Password."'))";
                
                $result = mysqli_query($con, $query);

                if (!isset($result)) {
                    echo "<script type=\"text/javascript\">
                              alert(\"Invalid File:Please Upload CSV File.\");
                              window.location = \"index.php\"
                          </script>";
                }else{
                    echo "<script type=\"text/javascript\">
                              alert(\"CSV File has been successfully Imported.\");
                              window.location = \"index.php\"
                          </script>";
                }
            }
            fclose($file);
        }
    }

?>