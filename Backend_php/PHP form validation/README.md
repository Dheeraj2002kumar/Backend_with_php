The PHP superglobals $_GET and $_POST are used to collect form-data.

<h4>PHP - A Simple HTML Form<h4>
The example below displays a simple HTML form with two input fields and a submit button:
<pre>
<html>
<body>

<form action="welcome1.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
</pre>

When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables.

The "welcome1.php" looks like this:
<br>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>

<br>
The output could be something like this:
<br>
Welcome Dheeraj kumar
Your email address is: dheerajkumar@gmail.com
