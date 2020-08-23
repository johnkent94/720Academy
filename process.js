const processPayment = document.getElementById('wrapped');
		
		
processPayment.addEventListener("submit",
function(e) {
    e.preventDefault();

    var name = document.getElementById("applicant_name").value;
    var email = document.getElementById("applicant_email").value;
    var phone = document.getElementById("applicant_phone").value;
    var courseCohort = document.getElementById("course_cohort").value;
    var trainingMode = document.getElementById("training_mode").value

    var courseName = document.getElementsByName("course_name").value;
    

    var btn_action = "process";
    
        jQuery.post("send_mail.php",
                {							
                    btn_action:btn_action, 
                    name:name, 
                    email:email, 
                    phone:phone, 
                    course_cohort:courseCohort,
                    training_mode:trainingMode,
                    course_name:courseName
                },
                function(data, status){
                    //console.log(data);
                    
                    if (status == "success") {
                        window.location = "success.html";
                    }			
                }, "json");
    
});