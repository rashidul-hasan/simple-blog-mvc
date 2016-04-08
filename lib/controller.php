<?php


 /**
  * redirects to addess
  * @param string $address
  * @return redirects
  */
 function redirect_to($address)
 {
   header('location:'.'/'.$address);
	 exit;
 }


 /**
  * creates warning msg used for errors.
  * @param string $msg
  * @return bool
  */
 function flash_warning($msg)
 {
	  if(!$msg) { return false; }
	   $_SESSION['flash']['warning'] = $msg;
		return true;
 }


  /**
  * creates notice msg used for success
  * @param string $msg
  * @return bool
  */
 function flash_notice($msg)
 {
	  if(!$msg) { return false; }
	   $_SESSION['flash']['notice'] = $msg;
		return true;
 }



?>
