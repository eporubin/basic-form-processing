<?php
$email = $_POST["email"];

/*
Add code that will also display the values from the other text fields and the radio buttons. Make sure you display the values from each of the different form controls in the body of the HTML page. You will also need to make sure you have selected one of the radio buttons or you will get errors.
*/

/*
Displaying the value of the checkbox isn't very useful. Instead we want to know if the user has clicked the checkbox and agreed to the terms and conditions. Uncomment the following code that tests the checkbox.
*/

$terms = false;
if(isset($_POST["terms"])){
  $terms = true;
}

/*
In the body of the HTML page add an if statement that tests if the variable $terms is true. If $terms is true the user should receive a message stating 'You agreed to the terms and conditions.' if $terms is false they should receive a message stating 'You didn't agree to the terms and conditions.'
*/

//Expeirment with using the GET method instead of POST, make sure you understand the difference.

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Basic Form Processing</title>
</head>
<body>
<?php
echo "<p> You entered an email address of {$email}.</p>";
?>
</body>
</html>
