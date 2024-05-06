# Backend_with_php
<h4>Php Variables</h4>
<p>In this tutorial, we will learn thoroughly about the PHP variables, their use, and how they can help us make our PHP websites better. We learned what PHP is; we discussed and familiarized ourselves with Visual Studio Code, XAMPP. We also learned about using frameworks such as Bootstrap 5. Moreover, we also learned about the syntax of PHP and its components. Before getting started with today's lecture, I would recommend watching the necessary lectures to understand the concept of PHP variables better.</p>
<h4>What are Variables?</h4>
<p>
A variable in the field of programming can be best defined as follows,<br>

“A variable is a container that holds information or data which can change with time depending upon the conditions, information, or data passed to the program aptly. Characteristically, a program comprises commands or instructions for the computer, which instructs the machine to process information that the program utilizes when running.”<br>

Let us understand the concept of variables step-by-step. We assign variables for a specific value that can be changed with time when required. For example, if you want to write a program to add 2 numbers, you can create 2 variables and change them. doing this will make your program work for any number in general. Here variables can be created to hold these numbers. In order to use PHP variables, we should first learn how they work and what their use is in complex programs. A variable is fundamentally a compartment that holds data or information that can change with time, based on the circumstances. Various conditions depend upon the user’s need for data or information that the program requires at a given time. Variables help the programmer change the value of a container at any time, giving him the flexibility to generalize the program. Typically, a program contains directions or guidelines for the PC that instructs the PC to perform various operations on data whenever a program is running on the computer. To make this data changeable, we need variables.
</p>
<h4>Why do we use Variables?</h4>
<p>Let’s talk about the use of variables. When we are learning a concept, we should know why are we learning it? What is the goal? And how will it make our lives easy? Suppose you are working on a huge site, and with time you always have to update information on your website (say color, title, logo, etc.). In that case, you cannot just go through the whole website, change everything one by one, etc. That would be very tedious. Variables will protect you from such hardships, and in case of updating your sites in the future, you will have to change the value of the variable, not the whole script of your website.</p>
<h4>How to create a variable</h4>
<ol>
  <li>Put a “$” sign before the variable and declare it</li>
  <li>Assign the value to the variable during declaration or later sometime in the script.</li>
</ol>
<h6>Example</h6>
<pre>
$name = "Dheeraj"; // Variable 1: 
$income = 600;   // Variable 2: 
</pre>
<p>Now, we can use the echo command in the following way,</p>
<pre>echo "This guy's is $name and his income is Rs $income";</pre>

<h6>Important Notes:</h6>
<ol>
  <li>Never forget to put a semicolon ( ; ) at the end of a command in PHP as it is a must to terminate it.</li>
  <li>Moreover, unlike PHP commands such as echo, which can be written in upper case letters while assigning variables, keep this thing in your mind that even a single lower-case letter can change the variable, and you may end up getting an error.</li>
  <li>If you have any questions or queries regarding this tutorial, please post that question on the Question and Answers section.</li>
  <li>Make sure Apache is running in your XAMPP while you attempt the aforementioned procedures.</li>
</ol>
<h6>You can check out the code:-</h6>
--><a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/1_Variable.php">code of Variable</a>
<h4>Rules for Creating Variables in PHP</h4>
<p>
In the previous tutorials, we started to learn about various concepts of PHP, and we thoroughly understood the concept of variables. We talked about its uses, and we saw how variables could make our websites more efficient and easy to maintain. Now is the time to actually learn how to use it properly and how to move towards achieving expertise in creating and forming variables in PHP. For your ease, I would like to recommend using the Bootstrap framework to reduce your efforts on the writing frontend. You can copy and paste the content available there, such as you can copy and paste the navbar component for your website from <a href="https://getbootstrap.com/">Bootstrap</a>.<br>
As we discussed earlier, a variable is essentially a compartment that holds data or information that can change with time, based on the program's conditions, data, or information. We allot variables for a particular task which can be changed with time whenever required. 
</p>

<h4>What are the rules for creating a PHP variable?</h4>
<p>Following are the rules of creating a PHP variable,</p>
<ol>
  <li>A variable in PHP always starts with a dollar sign.</li>
  <li>It cannot start with a number.</li>
  <li>A variable can either start with a letter or an underscore</li>
  <li>It can only hold alphanumeric characters or underscore.</li>
  <li>You can use an alphanumeric character while assigning the name of a variable. For example, using symbols such as “&” or “%” in variable names will produce an error.</li>
  <li>Variables in PHP are case-sensitive. It means “$_NAME” and “$_name” are two different variables.</li>
</ol>

<h4>Important Notes:</h4>
<ol>
  <li>If you have any questions or queries regarding this tutorial, feel free to post that question on the Question and Answers section.</li>
  <li>Make sure Apache is running in your XAMPP control panel while you attempt the aforementioned procedures.</li>
</ol>
--> <a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/2_more_variables.php">You can check the code</a>

<h4>Data Types in Php</h4>
<p>we should know the data types PHP variables support and work with. I will go to my Visual Studio Code on my computer and make a new page named “07_data_types.php”. After that, I will be running my XAMPP simultaneously because we need the Apache local server to serve PHP from our local computer. So yes - do not forget to run XAMPP and start the APACHE server in the background.</p>

<h4>What Kind of data types are supported in PHP?</h4>
<p>Php has built-in support for the following data types,</p>
<ul>
  <li>String</li>
  <li>Integer</li>
  <li>Float</li>
  <li>Boolean</li>
  <li>Object</li>
  <li>Array</li>
  <li>Null</li>  
</ul>
<p>Let’s discuss these data types in detail for your better understanding. The first in the order is the string type data. String data is basically a sequence of characters which can be numeric characters or alphabets.
For example, let us say we have two variables, one is $name, and the other is $friend. Let’s, assign some values to these variables, i.e., $name = “Harry”; and $friend = “Rohan”; We will use the echo command below in our PHP script:</p>
<code>echo “$name has a friend named $friend”;</code>

<p>On executing this code, we will get the result as "Harry has a friend named Rohan." Here $name and $friend were data types of type string. We enclose a sequence of characters in single (') or double quotes (") to represent a string in PHP.</p>

<p>
  Second, in the list of data types are<strong> integers. An integer</strong> is a data type, which holds the numeric data such as <strong>577, -998,</strong> etc. There is also an integer range that exists in PHP.  The range of the integers totally depends upon the platform you are using. For example, the integer range in PHP for a 32-bit computer is <strong> – (231 – 1) or -2,147,483,647 to (231 – 1) or 2,147,483,647. </strong>That's all about integer data type for now.<br>

Next in the list of data types is<strong> float </strong>In the integer data type, we were unable to store decimals. To store decimals, we have another data type called float, which is capable of storing decimal values like 3.55. Other examples of the float data type are 566.89, - 989.0009, etc.<br>

Next in the list, Boolean is a data type representing only two possible states that can be either true or false. For example, $x = true; and $y = false represents boolean variables with true and false as their values respectively. The purpose of introducing the “Boolean” data type in PHP is primarily for conditional testing.<br>

“Object” is basically an instance of a class that is a template for creating such user-defined objects. We will be thoroughly discussing classes and objects in the upcoming tutorials later in the course.<br>

“Array” has the property of storing multiple values inside a single variable, allowing us to perform various tasks using them. For example,
</p>
<code>$friends = array (“Rohan”, “dheeraj”, “Shubham”, “larry”);</code>
<p>
  $friends here represents an array, and we can perform various tasks on it. If we want to inspect the content of an array variable, we will have to use the var_dump($friends) function to inspect the array variables; otherwise, it will show an error in the output.<br>

Moreover, each value stored in an array is given a specific number called index, which starts from 0. In this array, Rohan, harry, Shubham, and larry have index values of 0,1,2, and 3, respectively.<br>

Null is the data type that can only have one value, and that is “null.” A null value is used to explicitly indicate "nothing."
</p>
<h5>Note:</h5>
<ul>
  <li>Make sure Apache is running in your XAMPP while you attempt the aforementioned procedures.</li>
</ul>
<a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/3_data_type.php">Code of Data_Type</a>

<h4>String fuction </h4>
<p>
  Most of the time, we are dealing with string-type data, and hence, to manipulate it, we should have an excellent grip on string functions.<br>

As we know we have seven data types in PHP: string, integer, float, boolean, object, array, and null. In this tutorial, we will be particularly discussing the string type data. We can perform various common functions used on daily basis on string type data such as,<br>
</p>
<ul>
  <li>Length of the string (strlen).</li>
  <li>Word count (str_word_count)</li>
  <li>Reversing a string (strrev),</li>
  <li>Searching a component in a string (strpos), and</li>
  <li>Replace a string (str_replace)</li>
</ul>

<h5>Length of the string (strlen)</h5>
<p>
  This function is used to measure the length of the string. For example, we have a variable $name = “dheeraj”; in order to measure the length of this string variable, we can use the function aforementioned (strlen) by using the following method,<br>
<code>
Echo “the length of my string is”. Strlen ($name);

**result: the length of my string is 5
</code>
Always keep in mind that you will have to join two or more strings with a decimal point, commonly known as dot operator (.) Otherwise, you will end up getting an error on the result page.
</p>

<h5>Word count (str_word_count)</h5>
<p>
  This function is used to count the number of words consisted by a variable. Suppose, we have a variable $x = “harry is a good boy”; and we want to count the number of words consisted by variable $x we will use the str_word_count function described as follows,
  <code>
  Echo str_word_count($x);
  **result: 5
  </code>
</p>

<h5>Reversing a string (strrev)</h5>
<p>This function is used to reverse a string in a variable. Suppose we have the same variable as mentioned above $x = “harry is a good boy”; we can reverse this by using this method,</p>
<code>
  Echo strrev($x);

**result: yob doog a si yrrah
</code>

<h5>Searching a component in a string (strpos)</h5>
<p>This function is used to search a component in a string.</p>
<code>
Let $x = “harry is a good boy”; be our variable, then

Echo strpos ($x, “is”);

**result: 6
//It shows the result as 6 because the word is starts from the 6th letter.
</code>

<h5>Replace a string (str_replace)</h5>
<p>This function is used to replace a specific word in a variable with another word of your requirement.</p>

<code>
Syntax: str_replace (mixed $search, mixed $replace, mixed $subject [, int, $count ])

Example,

Let $x = “dheeraj is a good boy”; be our variable, then

Echo str_replace (“dheeraj”, “rohan”, $name);

**result: rohan is a good boy
</code>
<p>Repeat a string (str_repeat)

This function is used to repeat a particular string.</p>

<code>
Let $x = “dheeraj is a good boy”; be our variable, then

Echo str_repeat ( $x, 3)

**result: dheeraj is a good boy dheeraj is a good boy dheeraj is a good boy
</code>
<a href="https://github.com/Dheeraj2002kumar/Backend_with_php/blob/main/Backend_php/4_String.php">Code String</a>
