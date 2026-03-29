
<?php

function allSubscriber($conn)
{
	$data="";
	$sql="SELECT * FROM `subscribe`";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$count=1;
    	  while($row = $result->fetch_assoc())
    	  {
    	  	 $data.="<tr><td>".$count."</td><td>".$row['email']." </td></tr>";
    	  	 $count++;	
    	  }
    	}
    	else
    	{
    		$data.="<tr><td colspan='4'> No subscribe Exist.</td></tr>";
    	}

    	return $data;
}

function addSubscribe($conn,$email)
{
        $date=date('Y-m-d');
        $time=date('h:m:s');
        $sql="INSERT INTO `subscribe`( `email`, `added_date`, `added_time`) VALUES ('$email','$date','$time')";
        if ($conn->query($sql) === TRUE)
         {
            $last_id = $conn->insert_id;
            return "1";
         }
         else
         {
            return "0";
         }
}

?>