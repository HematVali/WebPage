<?php
    session_start();
?>

<html>

<head>
    <title>Hemat Vali</title>
    <link rel="stylesheet" href="./css/reset.css">
    <style><?php include './css/education-expernience-project.css';?></style>
</head>

<div class="container">
    <header>
        <div class="basic-div">
            <h1>Hemat Vali</h1>
        </div>
        <div class="basic-div">
            <a href="./main.php">
                <img class="img1" src="IMG/1.png">
            </a>
        </div>
        <div class="basic-div">
            <nav class="flexbox-container">
                <ul class="ul1">
                    <div>
                        <a href="./AboutMe-skills.php">About Me</a>
                    </div>
                    <div>
                        <a href="./AboutMe-skills.php">Skills</a>
                    </div>
                    <div>
                        <a href="./education-experience-project.php">Education</a>
                    </div>
                    <div>
                        <a href="./education-experience-project.php">Experience</a>
                    </div>
                    <div>
                        <a href="./education-experience-project.php">Projects</a>
                    </div>
                    <?php
                    if(isset($_SESSION['user'])){
                        echo "<div>";
                        echo "<a href='addEntry.php'>Blog</a>";
                        echo "</div>";
                        echo "<div>";
                        echo    '<a href="logout.php">Logout</a>';
                        echo "</div>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="flexbox-container">
        <article class="Experience">
            <h5>Experience</h5>
            <table>
                <tr>
                    <th>NTT Data UK Internship</th>
                    <th class="th1">Jeffrey Johnson Accounting</th>
                    <th class="th1">Part-time Tutor</th>
                </tr>
                <tr>
                    <td>My NTT Data UK Internship provided valuable exposure to diverse tech projects and a supportive work culture, enhancing my technical and interpersonal skills.</td>
                    <td class="td1">My experience at Jeffrey A Johnson Accounting firm was insightful, with opportunities to learn and apply accounting skills in a supportive and professional environment.</td>
                    <td class="td1">"My part-time tutoring experience was rewarding, allowing me to help students achieve academic success and develop my teaching and communication skills."</td>
                </tr>
            </table>
        </article>
        <article class="Projects">
            <h5>Projects</h5>
            <table>
                <tr>
                    <th>Back APP</th>
                    <th class="th1">Retro Game Hub</th>
                    <th class="th1">Websites</th>
                </tr>
                <tr>
                    <td>The bank app project developed a secure, user-friendly mobile application with features such as fund transfers, bill payments, and ATM locator.</td>
                    <td class="td1">Retro Game Hub is a platform that offers classic video games, allowing users to play and relive the nostalgia of old-school gaming.</td>
                    <td class="td1">I have created various websites for family and friends on their start up companies</td>
                </tr>
            </table>
        </article>
    </section>

    <h5>Education</h5>
    <div class="flexbox-container2">
        <div class="highschool">
            <h2>Avanti House High School</h2>
            <ul>
                <li>GCSE Maths - A*</li>
                <li>GCSE Combined Science - A*,A*</li>
                <li>GCSE Design & Technology - A*</li>
                <li>GCSE Religious Education - A*</li>
                <li>GCSE German - A*</li>
                <li>GCSE Dutch - A*</li>
                <li>GCSE History - A</li>
                <li>GCSE English Language - A</li>
                <li>GCSE English literature - A</li>
            </ul>
        </div>
        <div class="Sixth-Form">
            <h2>Avanti House Sixth Form</h2>
            <ul>
                <li>A-LEVEL Maths - A</li>
                <li>A-LEVEL Further Maths - A</li>
                <li>A-LEVEL Physics - A</li>
                <li>A-LEVEL Computer Science - A</li>
                <li>Pearson Advanced Maths - A</li>
                <li>Pearson Algebra 3 - pass</li>
            </ul>
        </div>
        <div class="University">
            <h2>Queen Mary University</h2>
            <ul>
                <li>Computer Systems and Networks - A</li>
                <li>Logic and Discrete Structures - A</li>
                <li>Procedural Programming - A </li>
                <li>Professional and Research Practice - A </ll>
                <li>Automata and Formal Languages - Pending</li>
                <li>Fundamentals of Web Technology - Pending</li>
                <li>Information Systems Analysis - Pending</li>
                <li>Object Oriented Programming - Pending</li>
            </ul>
        </div>
    </div>

