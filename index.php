<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portal Page</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1><a href="index.php">Welcome to my IT261 Portal Page</a></h1>
<h2>The navigation below represents our BIG Assignmets. </h2>
<div id="wrapper">
<nav>
<ul>
<li><a href="website/daily.php">Switch</a><li>
<li><a href="">Troubleshoot</a><li>
<li><a href="">Calculator</a><li>
<li><a href="">Email</a><li>
<li><a href="">Database</a><li>
<li><a href="">Gallery</a><li>
</ul>

</nav>
<main>
<h2>About Me</h2>
<img class="center" src="images/my_picture.jpg" alt="Me">
<p>My name is Aymen khaleefa, I am a web design student at Seattle Central College. I have loved sketching and creating art since I was a kid. This passion made me choose web design, 
    where I can create designs that make a difference.Web design is fun because I get to use my creativity and technology together.
    I enjoy making websites that are both nice to look at and easy to use.</p>
<p>I love soccer,playing and watching it.Soccer brings people together, just like good design doe.
    I’m excited to keep learning and create designs that connect with others!</p>

<h2>MAMP Setup Screenshot</h2>


<img src="images/mamp1.jpg" alt="mamp">



<h2>PHP Errors Screenshot</h2>

<img src="images/test_screenshot.jpg" alt="test">

</main>


 
<aside>
    <h2> Class Exercises</h2>
    <h3>Week2</h3>
    <ol>
    <li><a href="weeks/week2/var.php">var.php</a></li>
    <li><a href="weeks/week2/var2.php">var2.php</a></li>
    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
    <li><a href="weeks/week2/currency.php">currency.php</a></li>
    <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>

     </ol>

    <h3>Week3</h3>
    <ol>
    <li><a href="weeks/week3/if.php">if.php</a></li>
    <li><a href="weeks/week3/date.php">date.php</a></li>
    <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
    <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
    <li><a href="weeks/week3/switch.php">switch.php</a></li>
    </ol>

   <h3>Week4</h3>
   <ol>
    <li><a href="weeks/week4/form1.php">form1.php</a></li>
   <li><a href="weeks/week4/form2.php">form2.php</a></li>
   <li><a href="weeks/week4/form3.php">form3.php</a></li>
   <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
   <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
   </ol>


</aside>
</div>


  
<!--close wrapper-->


<footer>
    <ul>
        <li>Copyright &copy;
            2024</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Aymen</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

</footer>

</body>
</html>