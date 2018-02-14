<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset=”utf-8” />
        <title> Martin Berton: Personal Website </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Martin Berton </h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        
        <br /><br />
        
        <div id="content">
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Python</td>
                    <td>1</td>
                </tr>
                <tr class="table-row">
                    <td>C</td>
                    <td>1</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>1</td>
                </tr>
            </table>
            
            <ul>
                <li><span class="hobby">Soccer</span>: I like to play soccer and I am a big fan of Olympique of Marseille</li>
                <li><span class="hobby">Music</span>: I play piano since I am 7 years old and I love electronic music </li>
                <li><span class="hobby">Movie</span>: I have to see a movie or an episode of series every day it's like a drug</li>
            </ul>
        </div>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336. 2018&copy; Berton<br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious.<br />
            It is used for academic purposes only.
            <br /><br />
            <img src="img/csumb.jpg" alt="csumb logo" />
            
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>