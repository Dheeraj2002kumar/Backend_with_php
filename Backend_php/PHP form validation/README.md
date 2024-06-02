The PHP superglobals $_GET and $_POST are used to collect form-data.

<h4>PHP - A Simple HTML Form<h4>
The example below displays a simple HTML form with two input fields and a submit button:
  <br>
--><a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/PHP%20form%20validation/form.html"> form.html</a>
<br>
<br>

When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables.

The "welcome1.php" looks like this:
<br>
<a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/PHP%20form%20validation/welcome1.php">Welcome1.php</a>
<br>
<br>

The output could be something like this:
<br>
Welcome Dheeraj kumar<br>
Your email address is: dheerajkumar@gmail.com
<br>

The same result could also be achieved using the HTTP GET method:
<h4>Example<h4>
Same example, but the method is set to GET instead of POST:
--> <a href="">welcome_get.html</a>
<br>and "welcome_get.php" looks like this:<br>
--> <a href="">welcome_get.php</a>
