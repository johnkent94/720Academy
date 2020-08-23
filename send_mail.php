<?php
 include('database_connection.php');

    if(isset($_POST['btn_action'])){
        if($_POST['btn_action'] == "process"){
            $name = $_POST['name'];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $courseCohort = $_POST["course_cohort"];
            $trainingMode = $_POST["training_mode"];
            $courseName = $_POST["course_name"];


            $to = "space@720degreehub.com";
            $subject = "CO-working space Order";
            $headers = "From: Booking space order <space@720degreehub.com>";

            $message  = "PRESENTATION\n";
            $message .= "\nFirst and Last Name: " . $name;
            $message .= "\nEmail: " . $email;
            $message .= "\nTelephone: " . $phone;
            $message .= "\Course Cohort: " . $courseCohort;
            $message .= "\nTraining Mode: ". $paymentPlan;
            $message .= "\nCourse Name: " . $courseName;
            
        
                                    
            //Receive Variable
           mail($to,$subject,$message,$headers);
                            
           
           //Confirmation page
            $user = $email;
            $userSubject = "Thank You";
            $userHeaders = "Thank you booking a space with us <space@720degreehub.com>";
            /*$usermessage = "Thank you booking a space with us. Your request is successfully! Do well to check in soon.\n"; WITHOUT SUMMARY*/
                            
            //Confirmation page WITH  SUMMARY
            $userMessage = "Thank you booking a space with us. Your request is successful! Do well to check in soon.\n\nBELOW A SUMMARY\n\n$message"; 
            mail($user,$userSubject,$userMessage,$userHeaders);



                    $query = "
                        INSERT INTO students (name, email, course_name, phone, training_mode, course_cohort)
                        VALUES ('$name', '$email', '$courseName', '$phone', '$trainigMode', '$courseCohort')
                        ";
                

            $statement = $connect->prepare($query);
           $statement->execute();
           echo json_encode(array("status" => "Sent", "Inserted" => $statement));


    }else{
        echo "Not Process";
    }
}else{
    echo "Error";
}
?>