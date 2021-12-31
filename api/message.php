<?php

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}


 if (isset($_POST['contact_email'])) {
    $_SESSION['error_message'] = "Form submission success.";
    header("Location: http://$_SERVER[HTTP_HOST]/contact");
session_regenerate_id(true);

    die();
    session_write_close();
} else {
    $_SESSION['error_message'] = "Form Submission Failure";
    header("Location: http://$_SERVER[HTTP_HOST]/contact");
session_regenerate_id(true);
session_destroy();
    die();
    session_write_close();
}