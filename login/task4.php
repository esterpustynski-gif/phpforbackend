<?php
$signup_email = test_input($_REQUEST['Email']);
print("You have signed up with the email: $signup_email");
if ($_REQUEST['form']) {
    print("Log in below:");
    print ("<a href=\"./index.php?form=signup\">Sign up</a>");
}