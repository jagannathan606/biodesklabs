 <?php
   $name=$_REQUEST['name'];
   $phone=$_REQUEST['phone'];
   $business_email=$_REQUEST['email'];
	$research=$_REQUEST['research'];
	
	
	if($_REQUEST['submit'])
	{
	    
	
    if (($name=="")||($business_email=="")||($phone==""))
        {
		echo "All fields are required, please fill <a href='index.html' >the form</a> again.";
	    }
    else{
   
        
	    $from="From: ".$name." having email ID ".$business_email;
        $subjects="Message sent using your Popup form";
		$message="Name: ".$name."
		Phone: ".$phone."
		Email Id :".$business_email."
		Field of Research: ".$research;
		mail("info@biodeskindia.com", $subjects, $message, $from);
	   echo "
            <script type=\"text/javascript\">
            window.location.href = 'https://biodeskindia.com/popup.html';
            </script>
        ";
	    }
		}
    
?>