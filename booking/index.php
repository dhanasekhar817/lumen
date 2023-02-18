<?php  
           $booking_id=$POST['booking_id']
           $event_id=$_POST['event_id';]
           $booked_date=$_POST['booked_date';]
           $participant_name=$_POST['participant_name';]
           $participant_email=$_POST['participant_email';]
           $participant_phone=$_POST['participant_phone';]
           
           $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $dbname="";
           $conn = new mysqli($servername , $username , $password, $dbname);  
           if($conn->connect_error)
           {
            die("Connection failed: " . $connn->connect_error);
           }
           echo "Connected successfully";
           $sql="INSERT INTO Table1() VALUES ()";
           if ($conn->query($sql)===TRUE)
           {
            echo "NEW RECORD CREATED SUCCESSFULLY";
           }
           else{
            echo "Error: " .$sql . "<br>" . $conn->error;
           }
           $conn->close();
?>   
