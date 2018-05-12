<?php
include 'header.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title> CourseNotes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="./images/logo.ico">
        <link rel="Stylesheet" type="text/css" href="./styles/styles.css">
    </head>

    <body>
        <section class="image-bg topics ">
            <div class="container ">
                <div class="content ">
                    <div class="banner ">
                        <div class="col-12 t-content ">
                            <h1>PHP</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="php " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>Introduction</h2>
                    <h3>PHP : Hypertext Processor</h3>
                    <p>&emsp;&emsp;A general purpose scripting language use for web development and can be embedded into HTML. Its a dynamic programming language that can connect to the databases</p>
                    <p><i>Sample php in html file</i></p>
                    <p class="code med "><code>
                    &lt;!DOCTYPE HTML&gt;<br>
                    &lt;html&gt;<br>
                    &emsp;&emsp;&lt;head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;title&gt;Sample&lt;/title&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;/head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;body&gt;<br>
                    <br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;?php<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo "Hi! ";<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;?&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;/body&gt;<br>
                    &lt;/html&gt;

                </code></p>
                    <p class="center">The opening tag for php is &lt;?php to be close by the ?&gt; tag while echo tag is used to output data on screen.</p><br><br>
                    <ol type="I">
                        <li><strong>COMMENT</strong></li>
                        <ul class="no-style">
                            <li>
                                <div class="code">
                                    <p><code>//This is a one line comment<br><br>
                                <br>/*<br>&emsp;&emsp;&emsp;&emsp;This is a<br>&emsp;&emsp;&emsp;&emsp;block comment */</code></p>
                                </div>
                            </li>
                        </ul>
                        <li><strong>SYNTAX</strong></li>
                        <ul class="no-style">
                            <li>
                                <p>PHP commands ends with a <b>semicolon</b>.</p>
                            </li>
                            <li>
                                <div class="code center">
                                    <p class="center"><code>echo “Hello World”;</code></p>
                                </div>
                            </li>
                            <li>Without the semicolon, PHP will interpret the other lines as a whole statement which would lead to errors.</li><br>
                            <li><b>&#36;</b> - PHP uses the dollar sign for all variables that will be declared.</li>
                            <li>
                                <p class="code med "><code>
                            &emsp;&emsp;&lt;?php<br>
                            &emsp;&emsp; &emsp;&emsp;$_name = “Web Technologies”;   //this is a string<br>
                            &emsp;&emsp; &emsp;&emsp;Echo $_name;<br>
                            &emsp;&emsp;?&gt; <br>
                            </code></p>
                            </li>
                        </ul>
                        <li><strong>VARIABLES</strong></li>
                        <ul class="no-style">
                            <li>To declare a <i>string variable </i>you need first the dollar sign&#40;&#36;&#41; and the variable name like : &#36;user and after that the string should be placed on a quotation marks.</li>
                            <li>
                                <div class="code center">
                                    <p class="center"><code>&#36;_user = “Mary Ann”;</code></p>
                                </div>
                            </li>
                            <li>
                                <p>Also, you can declare a variable with another variable</p>
                                <ul class="no-style">
                                    <li><b>Numeric Variable</b><br>
                                        <ul class="no-style">
                                            <li>&#36;_integer = 15;</li>
                                            <li>&#36;_float = 15.5;</li>
                                        </ul>
                                    </li>
                                    <li><strong>Rules for naming a variable:</strong><br>
                                        <ol type="1">
                                            <li>A variable must start with a letter of the alphabet or the underscore “<b>_</b>”.<br>
                                                <ul class="no-style">
                                                    <li>$hello //correct</li>
                                                    <li>$12hello //wrong</li>
                                                    <li>$_hello //correct</li>
                                                </ul>
                                            </li>
                                            <li>A variable can only contain the symbol underscore. Other symbols are not recommended.<br>
                                                <ul class="no-style">
                                                    <li>$*hello //wrong</li>
                                                    <li>$_12hello //correct</li>
                                                </ul>
                                            </li>
                                            <li>When a variable composes of two words, do no use whitespace rather use an underscore.<br>
                                                <ul class="no-style">
                                                    <li>$_hello world //wrong</li>
                                                    <li>$_hello_world //correct</li>
                                                </ul>
                                            </li>
                                            <li>Variables in PHP are case-sensitive. $name is different from $Name.</li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <li><strong>ARRAYS</strong><br>
                            <p>Declaring an array:</p><br>
                            <p class="code med "><code>
                        $members = array(“one”, “two”, “three”);<br>
	                    <br>
	                    Accessing an array per index: <br>
	                    $members[1]; //returns the string “one” <br>
	                    <br>
	                    Declaring a two-dimensional array<br>
	                    $group = array(array(“one”, “two”, “three”),<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;array(“a”, “b”, “c”),<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;array(1, 2, 3)<br>
                            );<br><br></code></p>
                            <p>Accessing a two-dimensional array:</p>
                            <div class="code">
                                <p><code>$group[0][0]; //returns “one”<br>$group[2][1]; //returns 2</code></p>
                            </div>
                        </li>
                        <li><strong>STRING</strong><br>
                            <p>In php, a period “<b>.</b>” is used to concatenate a String.</p>
                            <p class="code med "><code>
                        &lt;?php<br>
                        &emsp;&emsp;&emsp;&emsp;&36;=$_hello = “hello”;<br>
	                    &emsp;&emsp;&emsp;&emsp;echo &36;=$_hello . ” world”; <br>
                        ?&gt;
                        </code></p>
                            <p class="center">OUPTPUT: <b>helloworld</b></p><br>
                            <p><b>Two types of String:</b></p>
                            <ul class="no-style">
                                <li>Single quotation mark &#40;<b>' '</b>&#41;<br></li>
                                <li>
                                    <p class="code med "><code>
                                &lt;?php<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_hello = "hello";<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_world = "world"; <br>
                                &emsp;&emsp;&emsp;&emsp;echo '&36;=$_hello &36;=$_world'; <br>
                                ?&gt;
                                </code></p>
                                </li>
                                <li class="center">OUTPUT: <b>$_hello $_world</b></li><br>
                                <li>Double quotation mark &#40;“ “&#41;</li>
                                <li>
                                    <p class="code med "><code>
                                 &lt;?php<br >
                                 &emsp;&emsp;&emsp;&emsp;&36;=$_hello = "hello";<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_world = "world";<br>
                                &emsp;&emsp;&emsp;&emsp;echo "&36;=$_hello &36;=$_world";<br>
                                ?&gt;<br>
                                </code></p>
                                </li>
                                <li class="center">OUTPUT: <b>hello world</b></li><br>
                            </ul>
                        </li>

                        </ul>
                        </ul>
                    </ol>

                </div>
            </div>
        </section>

        <section id="hypertext" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>PHP : Hypertext Processor</h2>
                    <p>&emsp;&emsp;A general purpose scripting language use for web development and can be embedded into HTML. Its a dynamic programming language that can connect to the databases</p>
                    <p><i>Sample php in html file</i></p>
                    <p class="code med "><code>
                    &lt;!DOCTYPE HTML&gt;<br>
                    &lt;html&gt;<br>
                    &emsp;&emsp;&lt;head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;title&gt;Sample&lt;/title&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;/head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;body&gt;<br>
                    <br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;?php<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo "Hi! ";<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;?&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;/body&gt;<br>
                    &lt;/html&gt;
                </code></p><br><br>
                </div>
            </div>
        </section>

        <section id="variable " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>Variable Naming rules</h2>
                    <h3>There are Four rules in naming PHP variables</h3>
                    <ol type="1">
                        <li>The names of the variables must start with alphabets or the underscore character ( _ ).</li>
                        <li>The variables names should only have the alphabets (including the capital and and lowercase letters) and numbers (0-9), and the underscore character (_).</li>
                        <li>In naming variable names, it may not contain spaces. It should be compromise of one word. If naming a variable with two words is should be seperated by an underscore character ( _ ) (ex: $web_systems_and_technology)</li>
                        <li>This variable name $webtech is not the same as $WEBTECH. In other words it is case-sensitive</li>
                    </ol><br>
                    <h3>Operators</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;consist of mathematical, string, comparison, and logical commands (+, -, *, / ).</p>
                    <h3>Arithmetic Operators</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;This operators are used to perform mathematics</p>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Description</b></th>
                        </tr>
                        <tr>
                            <td>&#43;</td>
                            <td>Addition</td>
                        </tr>
                        <tr>
                            <td>&#45;</td>
                            <td>Subtraction</td>
                        </tr>
                        <tr>
                            <td>&#42;</td>
                            <td>Multiplication</td>
                        </tr>
                        <tr>
                            <td>/</td>
                            <td>Division</td>
                        </tr>
                        <tr>
                            <td>&#37;</td>
                            <td>Modulus &#40;Diviion remainder&#41;</td>
                        </tr>
                        <tr>
                            <td>&#43;&#43;</td>
                            <td>Increment</td>
                        </tr>
                        <tr>
                            <td>&#43;&#45;</td>
                            <td>Decrement</td>
                        </tr>
                    </table>
                    <h3>Assignment Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These Operators are used to assign values to the variables</li>
                        <li>-&emsp;the dot or period (.) is a string operator and this concatenate string </li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Example</b></th>
                            <th><b>Equivalent to</b></th>
                        </tr>
                        <tr>
                            <td>&#61;</td>
                            <td>&36;=$j = 15</td>
                            <td>&36;=$j = 15</td>
                        </tr>
                        <tr>
                            <td>&#43;&#61;</td>
                            <td>&36;=$j += 5</td>
                            <td>&36;=$j = &36;=$j + 5</td>
                        </tr>
                        <tr>
                            <td>&#45;&#61;</td>
                            <td>&36;=$j -= 2</td>
                            <td>&36;=$j = &36;=$j - 2</td>
                        </tr>
                        <tr>
                            <td>&#42;&#61;</td>
                            <td>&36;=$j *= 6</td>
                            <td>&36;=$j = &36;=$j * 6</td>
                        </tr>
                        <tr>
                            <td>/&#61;</td>
                            <td>&36;=$j /= 9</td>
                            <td>&36;=$j = &36;=$j / 9</td>
                        </tr>
                        <tr>
                            <td>.&#61;</td>
                            <td>&36;=$j .= $p</td>
                            <td>&36;=$j = &36;=$j . &36;=$p</td>
                        </tr>
                        <tr>
                            <td>&#37;</td>
                            <td>&36;=$j %= 12</td>
                            <td>$j = $j % 12</td>
                        </tr>
                    </table>
                    <h3>Comparison Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These operators are used on a construct like if statements in which you need to compare two items.</li>
                        <li>-&emsp;The = and == is different. = is an assignment operator and == is a comparison operator which compares if the two values or items are equal.</li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Description</b></th>
                        </tr>
                        <tr>
                            <td>==</td>
                            <td>is equal to</td>
                        </tr>
                        <tr>
                            <td>!=</td>
                            <td>Is not equal to</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Is greater than</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Is lesser than</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Is greater than equal to</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Is lesser than equal to</td>
                        </tr>
                    </table>
                    <h3>Logical Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These operators are used to combine the results of the comparison operators</li>
                        <li>-&emsp;It takes an input of TRUE or FALSE and give a result of TRUE or FALSE</li><br>
                        <table id="http-tables">
                            <tr>
                                <th><b>Operator</b></th>
                                <th><b>Description</b></th>
                                <th><b>Example</b></th>
                            </tr>
                            <tr>
                                <td>&amp;&amp;</td>
                                <td>And</td>
                                <td>$j == 3 &amp;&amp; $p == 6</td>
                            </tr>
                            <tr>
                                <td>and</td>
                                <td>Low-precedence and</td>
                                <td>$j == 3 and $p == 6</td>
                            </tr>
                            <tr>
                                <td>&#124;&#124;</td>
                                <td>or</td>
                                <td>$j > 2 &#124;&#124; $p > 4</td>
                            </tr>
                            <tr>
                                <td>or</td>
                                <td>Low-precedence or</td>
                                <td>$j > 2 or $p > 4</td>
                            </tr>
                            <tr>
                                <td>!</td>
                                <td>not</td>
                                <td>!&#40;$j == $p&#41;</td>
                            </tr>
                            <tr>
                                <td>xor</td>
                                <td>Exclusive or
                                </td>
                                <td>$j xor $p</td>
                            </tr>
                        </table><br>
                        <li>-&emsp;Using the &amp;&amp; and || and their precedence is usually interchangeable. Is some cases to use the low-precedence of or and and, you might need a parenthesis to force the precedence.</li>
                    </ul>
                    <h3>Variable Assignment</h3>
                    <ul class="no-style">
                        <li>-&emsp;The syntax in assigning a value to a variable is Variable = value (ex $num = 3)</li>
                        <li>-&emsp;In reassigning the value to another variable the syntax will be variable = variable.</li>
                    </ul>
                    <h3>String concatenations</h3>
                    <ul class="no-style">
                        <li>-&emsp;In string concatenation uses the period</li>
                    </ul>
                    <h3>String types</h3>
                    <ul class="no-style">
                        <li>-&emsp;PHP supports of two types of strings. It is either be denoted by a quotation marks “ “ or single quotation mark or also known as the apostrophe ‘ ‘</li>
                        <li>-&emsp;Difference of double quotation and apostrophe<br>
                            <ul>
                                <li><b>apostrophe</b> preserves the exact contents
                                    <ul class="no-style">
                                        <li><i>Ex: </i>$txt = ‘assign variables with $ like $number’;</li>
                                        <li>&emsp;Echo $txt //output: assign variables with $ like $number</li>
                                    </ul>
                                </li>
                                <li><b>Double Quotation</b> its used if you want to include the value of the variable inside a string<br>
                                    <ul class="no-style">
                                        <li><i>Ex: </i>echo “You have $count friends request” // You have 2 friends request </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Variable typing</h3>
                    <ul class="no-style">
                        <li>-&emsp;PHP is very loosely typed language, this means that the variables doesn’t have to be declared.</li>
                        <li>-&emsp;PHP always converts variables to the type required when it is accessed.</li>
                    </ul>
                    <h3>Constants</h3>
                    <ul class="no-style">
                        <li>-&emsp;It also holds information that will be accessed, but they maintain it constant.</li>
                        <li>-&emsp;Once defined, the value is will not be altered<br>
                            <h4>Predefined Constants</h4>
                            <ul class="no-style">
                                <li>-&emsp;PHP has dozens of predefined constants.</li>
                                <li>-&emsp;PHP has also magic constants that has two underscores, one at the beginning and one at the end.</li>
                                <li><i>Here are some examples of magic constants.</i>
                                    <ul class="no-style">
                                        <li>_LINE_ - the current number of the file</li>
                                        <li>_FILE_ - the full path and the filename of the file</li>
                                        <li>_DIR_ - The directory of the file</li>
                                        <li>_FUNCTION_ the function name</li>
                                        <li>_CLASS_ - the class name</li>
                                        <li>_METHOD_ - the class method name</li>
                                        <li>_NAMESPACE_ - the name of the current namespace</li>
                                    </ul>
                                </li>
                                <li>-&emsp;These constants will become handy when it also comes in debugging.</li>
                            </ul>
                        </li>
                    </ul>
                    <h3>ECHO vs PRINT</h3>
                    <p>&emsp;&emsp;Echo and print is similar, they are used to perform some output.</p>
                    <h4>Echo</h4>
                    <ul class="no-style">
                        <li>-&emsp;purely PHP language construct</li>
                        <li>-&emsp;outputs faster that print in general text</li>
                        <li>-&emsp;doesn’t return value</li>
                        <li>-&emsp;cannot be used on more complex expressions</li>
                    </ul>
                    <h4>Print</h4>
                    <ul class="no-style">
                        <li>-&emsp;it can be use to output complex expressions</li>
                    </ul>
                    <h4>Function</h4>
                    <ul class="no-style">
                        <li>-&emsp;Are used to separate out sections in the code to perform particular tasks.</li>
                        <li>-&emsp;Placing codes in functions shortens the source code and it will make the source code more readable</li>
                    </ul>
                    <h3>Variable Scope</h3>
                    <p>it is created within the function and can only be accessed by the function.</p>
                    <p><b>Sample Code</b></p>
                    <img src="../images/localvariable.PNG">
                    <p class="center"><i>Output:</i> <b>The local variable which is the number is: 50</b></p><br>
                    <p>But when a local variable will be echo outside the function it will return an error.</p>
                    <p><b>Sample Code</b></p>
                    <img src="../images/localVariableWithError.PNG">
                    <p class="center"><i>Output:</i></p>
                    <div class="output">
                        <p>The local variable which is the number is: 50</p>
                        <p><b>Notice:</b> Undefined variable: number in <b>C:\xampp\hdocs\sample.php</b> on line <b>12</b></p>
                        <p>The local variable when used outsode the function is:</p>
                    </div>
                    <h3>Global Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;global variables are variables that can be accessed by the whole code even inside the function.</li>
                        <li>-&emsp;to declare the global variable it should be declared with the keyword global </li>
                    </ul>
                    <p><b>Sample Code</b></p>
                    <img src="../images/Global%20Variable.PNG">
                    <p class="center"><i>Output:</i> <b>1000</b></p>
                    <h3>Static Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;The value of the variable will be deleted when the program executed successfully</li>
                    </ul>
                    <p><b>Sample Code</b></p>
                    <img src="../images/static%20variable%20na%20di%20static%20panay%200%20display.PNG">
                    <div class="center">
                        <p><i>Output:</i></p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                    </div>
                    <p>To keep track on how many times the function is called, you need to declare the static variable</p>
                    <img src="../images/static%20variable%20na%20talaga.PNG">
                    <div class="center">
                        <p><i>Output:</i></p>
                        <p>0</p>
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                        <p>4</p>
                    </div>
                    <h3>The Superglobal Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;Superglobal variables are provided with PHP environment</li>
                        <li>-&emsp;It can be accessible everywhere</li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>SUPERGLOBAL NAME</b></th>
                            <th><b>Constants</b></th>
                        </tr>
                        <tr>
                            <td>&36;=$GLOBALS</td>
                            <td>All variables that are currently defined in the global scope of the script. The variable names are the keys of the array</td>
                        </tr>
                        <tr>
                            <td>&36;=$_SERVER</td>
                            <td>Information such as headers, paths, and script locations. The entities in this array are created by the web server, and there is no guarantee that every web server will provide any of all these.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_GET</td>
                            <td>Variables passed to the current script via the HTTP Get method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_FILES</td>
                            <td>Items uploaded to the current script via the HTTP Post method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_POST</td>
                            <td>Variables passed to the current script via the HTTP Post method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_COOKIE</td>
                            <td>Variables passed to the current script via HTTP cookies.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_SESSION</td>
                            <td>Session variables available to the current script.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_REQUEST</td>
                            <td>Contents of information passed from the browser; by default, &36;=$_GET, &36;=$_POST, and &36;=$_COOKIE</td>
                        </tr>
                        <tr>
                            <td>&36;=$_ENV</td>
                            <td>Variables passed to the current script via the environment method.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section id="accessing-sql" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>ACCESSING MySQL USING PHP</h2>
                    <h3>The Process</h3>
                    <p>The following process of using MySQL with PHP is as follows</p>
                    <ol type="1">
                        <li>Connect to MySQL and select the database to use</li>
                        <li>Build a query string</li>
                        <li>Perform the query</li>
                        <li>Retrieve the results and output them to a web page</li>
                        <li>Repeat steps 2 to 4 until all desired data has been retrieved</li>
                        <li>Disconnect from MySQL</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="login-file " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>CREATING A LOGIN FILE</h2>
                    <ul class="no-style">
                        <li>-&emsp;Most websites that are developed in PHP has a multiple program that will access to MySQL that will need the login and password details.</li>
                        <li>-&emsp;- It is required a separate file to store the information. Example:</li>
                        <li>
                            <p class="code med "><code>
                            &lt;?php //connectDB.php<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$lc = ‘localhost’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$db = ‘quiz’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$un = ‘username’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$pw = ‘password’;<br>
                            ?&gt;
                            </code></p>
                        </li>
                    </ul>
                    <p>You can replace the username and the password, depending on your MySQL. </p>
                </div>
            </div>
        </section>

        <section id="connecting-sql " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>CONNECTING TO MYSQL DATABASE</h2>
                    <p>&emsp;&emsp;When the connectDB.php has been created. You can include it to any PHP file that needs accessing the database.</p>
                    <p class="code med "><code>
                    &lt;?php<br>
                    &emsp; &emsp; &emsp; &emsp;require_once ‘connectDB’;<br>
                    &emsp; &emsp; &emsp; &emsp;&36;=$conn = new mysqli(&36;=$lc, &36;=$db, &36;=$un, &36;=$pw); <br>
                    &emsp; &emsp; &emsp; &emsp;if (&36;=$conn->connect_error) die (&36;=$conn->connect_error);<br>
                </code></p>
                    <p>&emsp;&emsp;Why use require_once over
                        <pre>include </pre>include and
                        <pre>require</pre>require? require_once will generate a fatal error if the file is not found. Also, the file will be in read only when it has not previously been included, which prevent wasteful duplicate disk access.</p>
                    <p><i>Sample database</i></p>
                    <img src="../images/sample%20database.PNG">
                    <p class="code med "><code>
                    Username:  12345<br>
                    Name: adSF SDFSAF<br>
                    Account: sp<br>
                    Username: 2<br>
                    Account :  sp<br>
                    Username: 4565454<br>
                    Name: Tangalin asdf<br>
                    Account: sp<br>
                    Username: dfdasfddf<br>
                    Account: sp<br>
                    Username: ersafsdaf<br>
                    Name: asdsdsadas<br>
                    Account: sp<br>
                </code></p>
                </div>
            </div>
        </section>

        <section id="cookies" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>COOKIES</h2>
                    <p>&emsp;&emsp;<strong>Cookie</strong> is is an item of data that a web server saves to your computer’s hard disk via a web browser.It contains almost alphanumeric information and can be retrieved from your computer and return to the server. The common uses of cookie are session tracking, maintaining data across multiple visits.</p>
                    <p>&emsp;&emsp;<strong>Third-party cookies</strong> are multiple elements on a web page can be embedded form multiple domains, each of which can issue its own cookies. These are created by advertising companies in order to track users across multiple websites.</p>
                </div>
            </div>
        </section>

        <section id="anatomy-cookie" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <p>&emsp;&emsp;The cookie from PHP might look something like this: </p>
                    <img src="../images/anatomy%20of%20cookie1.PNG">
                    <p>&emsp;&emsp;The Set-Cookie header contains the name and the value, it also contains the date, path and the domain. It also contains when it will expires. If the browser is set to store cookies, it will keep the information of the cookie until it expires. </p>
                    <p>&emsp;&emsp;If the user go to other pages in the browser and matches the path and domain cookie, it will resent the cookie to the server. In the browser header might also look something like this:</p>
                    <img src="../images/browser%20header%20cookie2.PNG">
                    <h3>Setting Cookies with PHP</h3>
                    <p>&emsp;&emsp;PHP has provided a function <code>setcookie()</code>.</p>
                    <div class="code center">
                        <p class="center"><code>setcookie(name, value, expire, path, domain, security);</code></p>
                    </div>
                    <ul class="no-style">
                        <li><b>name</b>- sets the name of the cookie and it will be stored to HTTP_COOKIE_VARS, an environment variable</li>
                        <li><b>value</b>-sets the value of the named variable.</li>
                        <li><b>Expiry</b> – if it is time seconds the expiry of cookies is 00:00:00 GMT on day Month Year. the cookie will automatically expires when the web browser is closed.</li>
                        <li><b>Path</b>- specifies the directories</li>
                        <li><b>Domain</b> – used to specify the domain name</li>
                        <li><b>Security</b> – it can be set to 1 to tell that the cookie should only be sent by secure transmission (HTTPS). It can be set to 0 if it is HTTP</li>
                    </ul>
                    <p>&emsp;&emsp;In setting cookies with PHP, it creates a temporary directory of the file on the server where registered session variables are being stored. Temporary file is determined setting the session.save_path in the php.ini. PHP automatically retrieve session string identifier from the PHPSESSID cookie. The session ends if the user leaves the site, then the server will automatically terminate the session after predetermined period of time.</p>
                    <h3>Starting a PHP Session</h3>
                    <p>&emsp;&emsp;The PHP session start by starting or calling the function of session_start(). It is recommended to start the function at the beginning of the page. The &36;=$_SESSION[] this is an associative array where session variables are stored. Use the isset() function in checking if the session variable is set or not.</p>
                    <h3>Destroying a PHP Session</h3>
                    <ul class="no-style">
                        <li>-&emsp;to destroy a session in PHP use the funciton session_destroy().</li>
                        <li>-&emsp;the session_destroy() does’t need any arguments, one call can destroy all session variables.</li>
                        <li>-&emsp;to destroy a specific session variable use unsetI() function</li>
                    </ul>
                    <h3>Auto Session</h3>
                    <p>&emsp;&emsp;To automatically start the session use set session.auto_start variable to 1 in the php.ini file.</p>
                </div>
            </div>
        </section>
        <!--
    <div class="container">
        <div class="content">
            <div class=side>
                <nav>
                    <ul id="subNavi">
                        <li class="active"><a href="#js">Introduction</a></li>
                        <li><a href="#jss">WWW</a></li>
                        <li>
                            <a href="#jsss">Components of the Web</a></li>
                        <li><a href=" #www-how ">How The Web Works</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    -->
        <section class="image-bg topics ">
            <div class="container ">
                <div class="content ">
                    <div class="banner ">
                        <div class="col-12 t-content ">
                            <h1>PHP</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="php " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>Introduction</h2>
                    <h3>PHP : Hypertext Processor</h3>
                    <p>&emsp;&emsp;A general purpose scripting language use for web development and can be embedded into HTML. Its a dynamic programming language that can connect to the databases</p>
                    <p><i>Sample php in html file</i></p>
                    <p class="code med "><code>
                    &lt;!DOCTYPE HTML&gt;<br>
                    &lt;html&gt;<br>
                    &emsp;&emsp;&lt;head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;title&gt;Sample&lt;/title&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;/head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;body&gt;<br>
                    <br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;?php<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo "Hi! ";<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;?&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;/body&gt;<br>
                    &lt;/html&gt;

                </code></p>
                    <p class="center">The opening tag for php is &lt;?php to be close by the ?&gt; tag while echo tag is used to output data on screen.</p><br><br>
                    <ol type="I">
                        <li><strong>COMMENT</strong></li>
                        <ul class="no-style">
                            <li>
                                <div class="code">
                                    <p><code>//This is a one line comment<br><br>
                                <br>/*<br>&emsp;&emsp;&emsp;&emsp;This is a<br>&emsp;&emsp;&emsp;&emsp;block comment */</code></p>
                                </div>
                            </li>
                        </ul>
                        <li><strong>SYNTAX</strong></li>
                        <ul class="no-style">
                            <li>
                                <p>PHP commands ends with a <b>semicolon</b>.</p>
                            </li>
                            <li>
                                <div class="code center">
                                    <p class="center"><code>echo “Hello World”;</code></p>
                                </div>
                            </li>
                            <li>Without the semicolon, PHP will interpret the other lines as a whole statement which would lead to errors.</li><br>
                            <li><b>&#36;</b> - PHP uses the dollar sign for all variables that will be declared.</li>
                            <li>
                                <p class="code med "><code>
                            &emsp;&emsp;&lt;?php<br>
                            &emsp;&emsp; &emsp;&emsp;$_name = “Web Technologies”;   //this is a string<br>
                            &emsp;&emsp; &emsp;&emsp;Echo $_name;<br>
                            &emsp;&emsp;?&gt; <br>
                            </code></p>
                            </li>
                        </ul>
                        <li><strong>VARIABLES</strong></li>
                        <ul class="no-style">
                            <li>To declare a <i>string variable </i>you need first the dollar sign&#40;&#36;&#41; and the variable name like : &#36;user and after that the string should be placed on a quotation marks.</li>
                            <li>
                                <div class="code center">
                                    <p class="center"><code>&#36;_user = “Mary Ann”;</code></p>
                                </div>
                            </li>
                            <li>
                                <p>Also, you can declare a variable with another variable</p>
                                <ul class="no-style">
                                    <li><b>Numeric Variable</b><br>
                                        <ul class="no-style">
                                            <li>&#36;_integer = 15;</li>
                                            <li>&#36;_float = 15.5;</li>
                                        </ul>
                                    </li>
                                    <li><strong>Rules for naming a variable:</strong><br>
                                        <ol type="1">
                                            <li>A variable must start with a letter of the alphabet or the underscore “<b>_</b>”.<br>
                                                <ul class="no-style">
                                                    <li>$hello //correct</li>
                                                    <li>$12hello //wrong</li>
                                                    <li>$_hello //correct</li>
                                                </ul>
                                            </li>
                                            <li>A variable can only contain the symbol underscore. Other symbols are not recommended.<br>
                                                <ul class="no-style">
                                                    <li>$*hello //wrong</li>
                                                    <li>$_12hello //correct</li>
                                                </ul>
                                            </li>
                                            <li>When a variable composes of two words, do no use whitespace rather use an underscore.<br>
                                                <ul class="no-style">
                                                    <li>$_hello world //wrong</li>
                                                    <li>$_hello_world //correct</li>
                                                </ul>
                                            </li>
                                            <li>Variables in PHP are case-sensitive. $name is different from $Name.</li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <li><strong>ARRAYS</strong><br>
                            <p>Declaring an array:</p><br>
                            <p class="code med "><code>
                        $members = array(“one”, “two”, “three”);<br>
	                    <br>
	                    Accessing an array per index: <br>
	                    $members[1]; //returns the string “one” <br>
	                    <br>
	                    Declaring a two-dimensional array<br>
	                    $group = array(array(“one”, “two”, “three”),<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;array(“a”, “b”, “c”),<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;array(1, 2, 3)<br>
                            );<br><br></code></p>
                            <p>Accessing a two-dimensional array:</p>
                            <div class="code">
                                <p><code>$group[0][0]; //returns “one”<br>$group[2][1]; //returns 2</code></p>
                            </div>
                        </li>
                        <li><strong>STRING</strong><br>
                            <p>In php, a period “<b>.</b>” is used to concatenate a String.</p>
                            <p class="code med "><code>
                        &lt;?php<br>
                        &emsp;&emsp;&emsp;&emsp;&36;=$_hello = “hello”;<br>
	                    &emsp;&emsp;&emsp;&emsp;echo &36;=$_hello . ” world”; <br>
                        ?&gt;
                        </code></p>
                            <p class="center">OUPTPUT: <b>helloworld</b></p><br>
                            <p><b>Two types of String:</b></p>
                            <ul class="no-style">
                                <li>Single quotation mark &#40;<b>' '</b>&#41;<br></li>
                                <li>
                                    <p class="code med "><code>
                                &lt;?php<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_hello = "hello";<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_world = "world"; <br>
                                &emsp;&emsp;&emsp;&emsp;echo '&36;=$_hello &36;=$_world'; <br>
                                ?&gt;
                                </code></p>
                                </li>
                                <li class="center">OUTPUT: <b>$_hello $_world</b></li><br>
                                <li>Double quotation mark &#40;“ “&#41;</li>
                                <li>
                                    <p class="code med "><code>
                                 &lt;?php<br >
                                 &emsp;&emsp;&emsp;&emsp;&36;=$_hello = "hello";<br>
                                &emsp;&emsp;&emsp;&emsp;&36;=$_world = "world";<br>
                                &emsp;&emsp;&emsp;&emsp;echo "&36;=$_hello &36;=$_world";<br>
                                ?&gt;<br>
                                </code></p>
                                </li>
                                <li class="center">OUTPUT: <b>hello world</b></li><br>
                            </ul>
                        </li>

                        </ul>
                        </ul>
                    </ol>

                </div>
            </div>
        </section>

        <section id="jss " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>Introduction</h2>
                    <h3>PHP : Hypertext Processor</h3>
                    <p>&emsp;&emsp;A general purpose scripting language use for web development and can be embedded into HTML. Its a dynamic programming language that can connect to the databases</p>
                    <p><i>Sample php in html file</i></p>
                    <p class="code med "><code>
                    &lt;!DOCTYPE HTML&gt;<br>
                    &lt;html&gt;<br>
                    &emsp;&emsp;&lt;head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;title&gt;Sample&lt;/title&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;/head&gt;<br>
                    &emsp;&emsp;&emsp;&emsp;&lt;body&gt;<br>
                    <br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&lt;?php<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo "Hi! ";<br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;?&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;/body&gt;<br>
                    &lt;/html&gt;
                </code></p><br><br>
                </div>
            </div>
        </section>

        <section id="variable " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>Variable Naming rules</h2>
                    <h3>There are Four rules in naming PHP variables</h3>
                    <ol type="1">
                        <li>The names of the variables must start with alphabets or the underscore character ( _ ).</li>
                        <li>The variables names should only have the alphabets (including the capital and and lowercase letters) and numbers (0-9), and the underscore character (_).</li>
                        <li>In naming variable names, it may not contain spaces. It should be compromise of one word. If naming a variable with two words is should be seperated by an underscore character ( _ ) (ex: $web_systems_and_technology)</li>
                        <li>This variable name $webtech is not the same as $WEBTECH. In other words it is case-sensitive</li>
                    </ol><br>
                    <h3>Operators</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;consist of mathematical, string, comparison, and logical commands (+, -, *, / ).</p>
                    <h3>Arithmetic Operators</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;This operators are used to perform mathematics</p>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Description</b></th>
                        </tr>
                        <tr>
                            <td>&#43;</td>
                            <td>Addition</td>
                        </tr>
                        <tr>
                            <td>&#45;</td>
                            <td>Subtraction</td>
                        </tr>
                        <tr>
                            <td>&#42;</td>
                            <td>Multiplication</td>
                        </tr>
                        <tr>
                            <td>/</td>
                            <td>Division</td>
                        </tr>
                        <tr>
                            <td>&#37;</td>
                            <td>Modulus &#40;Diviion remainder&#41;</td>
                        </tr>
                        <tr>
                            <td>&#43;&#43;</td>
                            <td>Increment</td>
                        </tr>
                        <tr>
                            <td>&#43;&#45;</td>
                            <td>Decrement</td>
                        </tr>
                    </table>
                    <h3>Assignment Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These Operators are used to assign values to the variables</li>
                        <li>-&emsp;the dot or period (.) is a string operator and this concatenate string </li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Example</b></th>
                            <th><b>Equivalent to</b></th>
                        </tr>
                        <tr>
                            <td>&#61;</td>
                            <td>&36;=$j = 15</td>
                            <td>&36;=$j = 15</td>
                        </tr>
                        <tr>
                            <td>&#43;&#61;</td>
                            <td>&36;=$j += 5</td>
                            <td>&36;=$j = &36;=$j + 5</td>
                        </tr>
                        <tr>
                            <td>&#45;&#61;</td>
                            <td>&36;=$j -= 2</td>
                            <td>&36;=$j = &36;=$j - 2</td>
                        </tr>
                        <tr>
                            <td>&#42;&#61;</td>
                            <td>&36;=$j *= 6</td>
                            <td>&36;=$j = &36;=$j * 6</td>
                        </tr>
                        <tr>
                            <td>/&#61;</td>
                            <td>&36;=$j /= 9</td>
                            <td>&36;=$j = &36;=$j / 9</td>
                        </tr>
                        <tr>
                            <td>.&#61;</td>
                            <td>&36;=$j .= $p</td>
                            <td>&36;=$j = &36;=$j . &36;=$p</td>
                        </tr>
                        <tr>
                            <td>&#37;</td>
                            <td>&36;=$j %= 12</td>
                            <td>$j = $j % 12</td>
                        </tr>
                    </table>
                    <h3>Comparison Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These operators are used on a construct like if statements in which you need to compare two items.</li>
                        <li>-&emsp;The = and == is different. = is an assignment operator and == is a comparison operator which compares if the two values or items are equal.</li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>Operator</b></th>
                            <th><b>Description</b></th>
                        </tr>
                        <tr>
                            <td>==</td>
                            <td>is equal to</td>
                        </tr>
                        <tr>
                            <td>!=</td>
                            <td>Is not equal to</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Is greater than</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Is lesser than</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Is greater than equal to</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Is lesser than equal to</td>
                        </tr>
                    </table>
                    <h3>Logical Operators</h3>
                    <ul class="no-style">
                        <li>-&emsp;These operators are used to combine the results of the comparison operators</li>
                        <li>-&emsp;It takes an input of TRUE or FALSE and give a result of TRUE or FALSE</li><br>
                        <table id="http-tables">
                            <tr>
                                <th><b>Operator</b></th>
                                <th><b>Description</b></th>
                                <th><b>Example</b></th>
                            </tr>
                            <tr>
                                <td>&amp;&amp;</td>
                                <td>And</td>
                                <td>$j == 3 &amp;&amp; $p == 6</td>
                            </tr>
                            <tr>
                                <td>and</td>
                                <td>Low-precedence and</td>
                                <td>$j == 3 and $p == 6</td>
                            </tr>
                            <tr>
                                <td>&#124;&#124;</td>
                                <td>or</td>
                                <td>$j > 2 &#124;&#124; $p > 4</td>
                            </tr>
                            <tr>
                                <td>or</td>
                                <td>Low-precedence or</td>
                                <td>$j > 2 or $p > 4</td>
                            </tr>
                            <tr>
                                <td>!</td>
                                <td>not</td>
                                <td>!&#40;$j == $p&#41;</td>
                            </tr>
                            <tr>
                                <td>xor</td>
                                <td>Exclusive or
                                </td>
                                <td>$j xor $p</td>
                            </tr>
                        </table><br>
                        <li>-&emsp;Using the &amp;&amp; and || and their precedence is usually interchangeable. Is some cases to use the low-precedence of or and and, you might need a parenthesis to force the precedence.</li>
                    </ul>
                    <h3>Variable Assignment</h3>
                    <ul class="no-style">
                        <li>-&emsp;The syntax in assigning a value to a variable is Variable = value (ex $num = 3)</li>
                        <li>-&emsp;In reassigning the value to another variable the syntax will be variable = variable.</li>
                    </ul>
                    <h3>String concatenations</h3>
                    <ul class="no-style">
                        <li>-&emsp;In string concatenation uses the period</li>
                    </ul>
                    <h3>String types</h3>
                    <ul class="no-style">
                        <li>-&emsp;PHP supports of two types of strings. It is either be denoted by a quotation marks “ “ or single quotation mark or also known as the apostrophe ‘ ‘</li>
                        <li>-&emsp;Difference of double quotation and apostrophe<br>
                            <ul>
                                <li><b>apostrophe</b> preserves the exact contents
                                    <ul class="no-style">
                                        <li><i>Ex: </i>$txt = ‘assign variables with $ like $number’;</li>
                                        <li>&emsp;Echo $txt //output: assign variables with $ like $number</li>
                                    </ul>
                                </li>
                                <li><b>Double Quotation</b> its used if you want to include the value of the variable inside a string<br>
                                    <ul class="no-style">
                                        <li><i>Ex: </i>echo “You have $count friends request” // You have 2 friends request </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Variable typing</h3>
                    <ul class="no-style">
                        <li>-&emsp;PHP is very loosely typed language, this means that the variables doesn’t have to be declared.</li>
                        <li>-&emsp;PHP always converts variables to the type required when it is accessed.</li>
                    </ul>
                    <h3>Constants</h3>
                    <ul class="no-style">
                        <li>-&emsp;It also holds information that will be accessed, but they maintain it constant.</li>
                        <li>-&emsp;Once defined, the value is will not be altered<br>
                            <h4>Predefined Constants</h4>
                            <ul class="no-style">
                                <li>-&emsp;PHP has dozens of predefined constants.</li>
                                <li>-&emsp;PHP has also magic constants that has two underscores, one at the beginning and one at the end.</li>
                                <li><i>Here are some examples of magic constants.</i>
                                    <ul class="no-style">
                                        <li>_LINE_ - the current number of the file</li>
                                        <li>_FILE_ - the full path and the filename of the file</li>
                                        <li>_DIR_ - The directory of the file</li>
                                        <li>_FUNCTION_ the function name</li>
                                        <li>_CLASS_ - the class name</li>
                                        <li>_METHOD_ - the class method name</li>
                                        <li>_NAMESPACE_ - the name of the current namespace</li>
                                    </ul>
                                </li>
                                <li>-&emsp;These constants will become handy when it also comes in debugging.</li>
                            </ul>
                        </li>
                    </ul>
                    <h3>ECHO vs PRINT</h3>
                    <p>&emsp;&emsp;Echo and print is similar, they are used to perform some output.</p>
                    <h4>Echo</h4>
                    <ul class="no-style">
                        <li>-&emsp;purely PHP language construct</li>
                        <li>-&emsp;outputs faster that print in general text</li>
                        <li>-&emsp;doesn’t return value</li>
                        <li>-&emsp;cannot be used on more complex expressions</li>
                    </ul>
                    <h4>Print</h4>
                    <ul class="no-style">
                        <li>-&emsp;it can be use to output complex expressions</li>
                    </ul>
                    <h4>Function</h4>
                    <ul class="no-style">
                        <li>-&emsp;Are used to separate out sections in the code to perform particular tasks.</li>
                        <li>-&emsp;Placing codes in functions shortens the source code and it will make the source code more readable</li>
                    </ul>
                    <h3>Variable Scope</h3>
                    <p>it is created within the function and can only be accessed by the function.</p>
                    <p><b>Sample Code</b></p>
                    <img src="../images/localvariable.PNG">
                    <p class="center"><i>Output:</i> <b>The local variable which is the number is: 50</b></p><br>
                    <p>But when a local variable will be echo outside the function it will return an error.</p>
                    <p><b>Sample Code</b></p>
                    <img src="../images/localVariableWithError.PNG">
                    <p class="center"><i>Output:</i></p>
                    <div class="output">
                        <p>The local variable which is the number is: 50</p>
                        <p><b>Notice:</b> Undefined variable: number in <b>C:\xampp\hdocs\sample.php</b> on line <b>12</b></p>
                        <p>The local variable when used outsode the function is:</p>
                    </div>
                    <h3>Global Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;global variables are variables that can be accessed by the whole code even inside the function.</li>
                        <li>-&emsp;to declare the global variable it should be declared with the keyword global </li>
                    </ul>
                    <p><b>Sample Code</b></p>
                    <img src="../images/Global%20Variable.PNG">
                    <p class="center"><i>Output:</i> <b>1000</b></p>
                    <h3>Static Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;The value of the variable will be deleted when the program executed successfully</li>
                    </ul>
                    <p><b>Sample Code</b></p>
                    <img src="../images/static%20variable%20na%20di%20static%20panay%200%20display.PNG">
                    <div class="center">
                        <p><i>Output:</i></p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                        <p>0</p>
                    </div>
                    <p>To keep track on how many times the function is called, you need to declare the static variable</p>
                    <img src="../images/static%20variable%20na%20talaga.PNG">
                    <div class="center">
                        <p><i>Output:</i></p>
                        <p>0</p>
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                        <p>4</p>
                    </div>
                    <h3>The Superglobal Variables</h3>
                    <ul class="no-style">
                        <li>-&emsp;Superglobal variables are provided with PHP environment</li>
                        <li>-&emsp;It can be accessible everywhere</li>
                    </ul>
                    <table id="http-tables">
                        <tr>
                            <th><b>SUPERGLOBAL NAME</b></th>
                            <th><b>Constants</b></th>
                        </tr>
                        <tr>
                            <td>&36;=$GLOBALS</td>
                            <td>All variables that are currently defined in the global scope of the script. The variable names are the keys of the array</td>
                        </tr>
                        <tr>
                            <td>&36;=$_SERVER</td>
                            <td>Information such as headers, paths, and script locations. The entities in this array are created by the web server, and there is no guarantee that every web server will provide any of all these.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_GET</td>
                            <td>Variables passed to the current script via the HTTP Get method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_FILES</td>
                            <td>Items uploaded to the current script via the HTTP Post method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_POST</td>
                            <td>Variables passed to the current script via the HTTP Post method</td>
                        </tr>
                        <tr>
                            <td>&36;=$_COOKIE</td>
                            <td>Variables passed to the current script via HTTP cookies.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_SESSION</td>
                            <td>Session variables available to the current script.</td>
                        </tr>
                        <tr>
                            <td>&36;=$_REQUEST</td>
                            <td>Contents of information passed from the browser; by default, &36;=$_GET, &36;=$_POST, and &36;=$_COOKIE</td>
                        </tr>
                        <tr>
                            <td>&36;=$_ENV</td>
                            <td>Variables passed to the current script via the environment method.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section id="accessing-sql" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>ACCESSING MySQL USING PHP</h2>
                    <h3>The Process</h3>
                    <p>The following process of using MySQL with PHP is as follows</p>
                    <ol type="1">
                        <li>Connect to MySQL and select the database to use</li>
                        <li>Build a query string</li>
                        <li>Perform the query</li>
                        <li>Retrieve the results and output them to a web page</li>
                        <li>Repeat steps 2 to 4 until all desired data has been retrieved</li>
                        <li>Disconnect from MySQL</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="login-file " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>CREATING A LOGIN FILE</h2>
                    <ul class="no-style">
                        <li>-&emsp;Most websites that are developed in PHP has a multiple program that will access to MySQL that will need the login and password details.</li>
                        <li>-&emsp;- It is required a separate file to store the information. Example:</li>
                        <li>
                            <p class="code med "><code>
                            &lt;?php //connectDB.php<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$lc = ‘localhost’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$db = ‘quiz’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$un = ‘username’;<br>
                            &emsp; &emsp; &emsp; &emsp;&36;=$pw = ‘password’;<br>
                            ?&gt;
                            </code></p>
                        </li>
                    </ul>
                    <p>You can replace the username and the password, depending on your MySQL. </p>
                </div>
            </div>
        </section>

        <section id="connecting-sql " class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>CONNECTING TO MYSQL DATABASE</h2>
                    <p>&emsp;&emsp;When the connectDB.php has been created. You can include it to any PHP file that needs accessing the database.</p>
                    <p class="code med "><code>
                    &lt;?php<br>
                    &emsp; &emsp; &emsp; &emsp;require_once ‘connectDB’;<br>
                    &emsp; &emsp; &emsp; &emsp;&36;=$conn = new mysqli(&36;=$lc, &36;=$db, &36;=$un, &36;=$pw); <br>
                    &emsp; &emsp; &emsp; &emsp;if (&36;=$conn->connect_error) die (&36;=$conn->connect_error);<br>
                </code></p>
                    <p>&emsp;&emsp;Why use require_once over
                        <pre>include </pre>include and
                        <pre>require</pre>require? require_once will generate a fatal error if the file is not found. Also, the file will be in read only when it has not previously been included, which prevent wasteful duplicate disk access.</p>
                    <p><i>Sample database</i></p>
                    <img src="../images/sample%20database.PNG">
                    <p class="code med "><code>
                    Username:  12345<br>
                    Name: adSF SDFSAF<br>
                    Account: sp<br>
                    Username: 2<br>
                    Account :  sp<br>
                    Username: 4565454<br>
                    Name: Tangalin asdf<br>
                    Account: sp<br>
                    Username: dfdasfddf<br>
                    Account: sp<br>
                    Username: ersafsdaf<br>
                    Name: asdsdsadas<br>
                    Account: sp<br>
                </code></p>
                </div>
            </div>
        </section>

        <section id="cookies" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <h2>COOKIES</h2>
                    <p>&emsp;&emsp;<strong>Cookie</strong> is is an item of data that a web server saves to your computer’s hard disk via a web browser.It contains almost alphanumeric information and can be retrieved from your computer and return to the server. The common uses of cookie are session tracking, maintaining data across multiple visits.</p>
                    <p>&emsp;&emsp;<strong>Third-party cookies</strong> are multiple elements on a web page can be embedded form multiple domains, each of which can issue its own cookies. These are created by advertising companies in order to track users across multiple websites.</p>
                </div>
            </div>
        </section>

        <section id="anatomy-cookie" class="size spacing ">
            <div class="container ">
                <div class="content ">
                    <p>&emsp;&emsp;The cookie from PHP might look something like this: </p>
                    <img src="../images/anatomy%20of%20cookie1.PNG">
                    <p>&emsp;&emsp;The Set-Cookie header contains the name and the value, it also contains the date, path and the domain. It also contains when it will expires. If the browser is set to store cookies, it will keep the information of the cookie until it expires. </p>
                    <p>&emsp;&emsp;If the user go to other pages in the browser and matches the path and domain cookie, it will resent the cookie to the server. In the browser header might also look something like this:</p>
                    <img src="../images/browser%20header%20cookie2.PNG">
                    <h3>Setting Cookies with PHP</h3>
                    <p>&emsp;&emsp;PHP has provided a function <code>setcookie()</code>.</p>
                    <div class="code center">
                        <p class="center"><code>setcookie(name, value, expire, path, domain, security);</code></p>
                    </div>
                    <ul class="no-style">
                        <li><b>name</b>- sets the name of the cookie and it will be stored to HTTP_COOKIE_VARS, an environment variable</li>
                        <li><b>value</b>-sets the value of the named variable.</li>
                        <li><b>Expiry</b> – if it is time seconds the expiry of cookies is 00:00:00 GMT on day Month Year. the cookie will automatically expires when the web browser is closed.</li>
                        <li><b>Path</b>- specifies the directories</li>
                        <li><b>Domain</b> – used to specify the domain name</li>
                        <li><b>Security</b> – it can be set to 1 to tell that the cookie should only be sent by secure transmission (HTTPS). It can be set to 0 if it is HTTP</li>
                    </ul>
                    <p>&emsp;&emsp;In setting cookies with PHP, it creates a temporary directory of the file on the server where registered session variables are being stored. Temporary file is determined setting the session.save_path in the php.ini. PHP automatically retrieve session string identifier from the PHPSESSID cookie. The session ends if the user leaves the site, then the server will automatically terminate the session after predetermined period of time.</p>
                    <h3>Starting a PHP Session</h3>
                    <p>&emsp;&emsp;The PHP session start by starting or calling the function of session_start(). It is recommended to start the function at the beginning of the page. The &36;=$_SESSION[] this is an associative array where session variables are stored. Use the isset() function in checking if the session variable is set or not.</p>
                    <h3>Destroying a PHP Session</h3>
                    <ul class="no-style">
                        <li>-&emsp;to destroy a session in PHP use the funciton session_destroy().</li>
                        <li>-&emsp;the session_destroy() does’t need any arguments, one call can destroy all session variables.</li>
                        <li>-&emsp;to destroy a specific session variable use unsetI() function</li>
                    </ul>
                    <h3>Auto Session</h3>
                    <p>&emsp;&emsp;To automatically start the session use set session.auto_start variable to 1 in the php.ini file.</p>
                </div>
            </div>
        </section>
        </div>
        <script src="../script/script.js" async></script>
    </body>

    <?php
include 'footer.php';
?>
