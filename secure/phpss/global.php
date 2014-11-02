<?php
// load phpSecureSite
require("../secure/phpss/phpss.php");
// define a phpss_validate() wrapper function
function authwrapper() {
// call phpss_validate()
$status = phpss_validate();
// check the return value
switch($status) {
case "phpss_validate_allow":
break; // access is allowed, do nothing
case "phpss_validate_nosession":
header("Location: login.php"); // redirect to login form if not logged in
exit();
break;
case "phpss_validate_acl_deny":
exit("You do not have permission to view this page");
break;
case "phpss_validate_hijack_fail":
exit("Your IP address has changed");
break;
case "phpss_validate_ipaccess_deny":
exit("Access is not allowed from your IP address");
break;
case "phpss_validate_timeout_fail":
exit("You session has timed out, please log in again");

break;
default:
exit("Unknown return code when authorizing session");
}
}
?>