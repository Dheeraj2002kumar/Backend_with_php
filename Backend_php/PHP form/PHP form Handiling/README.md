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
Same example, but the method is set to GET instead of POST:<br>
--> <a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/PHP%20form%20validation/welcome_get.html">welcome_get.html</a>
<br>and "welcome_get.php" looks like this:<br>
--> <a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/PHP%20form%20validation/welcome_get.php">welcome_get.php</a><br>

The code above is quite simple, and it does not include any validation.

You need to validate form data to protect your script from malicious code.

<pre>
<b>Think SECURITY when processing PHP forms!</b>

This page does not contain any form validation, it just shows how you can send and retrieve form data.

However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!
</pre>

*<h3> GET vs. POST</h3>
<pre>
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.

Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.
</pre>

*<h3>When to use GET?</h3>

<pre>
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.

GET may be used for sending non-sensitive data.

Note: GET should NEVER be used for sending passwords or other sensitive information!
</pre>

*<h3>When to use POST?</h3>

<pre>
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.

Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.

However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
</pre>
**Developers prefer POST for sending form data.

