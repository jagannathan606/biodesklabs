 <?php
   $name=$_REQUEST['name'];
   $phone=$_REQUEST['phone'];
   $business_email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	$subject=$_REQUEST['subject'];

	if($_REQUEST['subform'])
	{
	//	echo 'inside submit';
    if (($name=="")||($business_email=="")||($phone==""))
        {
		echo "All fields are required, please fill <a href='index.html' >the form</a> again.";
	    }
    else{
        
	    $from="From: ".$name." having email ID ".$business_email;
        $subjects="Message sent using your contact form";
		$message="Name: ".$name."
		Phone: ".$phone."
		Email Id :".$business_email."
		Subject :".$subject."
		Message: ".$message;
		mail("info@biodeskindia.com", $subjects, $message, $from);
	   echo "
            <script type=\"text/javascript\">
            window.location.href = 'popup.html';
            </script>
        ";
	    }
		}
    
?>