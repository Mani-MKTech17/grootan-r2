<?php

    // Include database connectivity 

    include_once('config.php');

    // Export file in php

    if (isset($_POST['export'])) {
    	$query  = "SELECT * FROM users";
    	$result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
          	$output  = "";
          	$output .= "<table class='table table-striped'>
		             <thead>
			       <tr>
			         <th>S.No</th>
					 <th>Emp_Id</th>

					 <th>Gender</th>
				 <th>Email</th>
				 <th>Age</th>

			         <th>User_Name</th>
			         <th>Password</th>
			       </tr>
			    </thead>";
            while ($data = mysqli_fetch_assoc($result)) {
            $output .=	"<tr>
			    <td>".$data['S.No']."</td>
				<td>".$data['Emp_ID']."</td>
				<td>".$data['Gender']."</td>
			    <td>".$data['Email']."</td>
				<td>".$data['Age']."</td>
			    <td>".$data['User_Name']."</td>
			    <td>".$data['Password']."</td>
			</tr>";
            }

            $output .="</table>";

            header('Content-Type: application/xls');
  	    header('Content-Disposition: attachment; filename=download.xls'); 

            echo $output;
        }else{
        	echo "No record found";
        }
    }

?>
