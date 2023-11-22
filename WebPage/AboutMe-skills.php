<?php
    session_start();
?>


<html>

<head>
    <title>Hemat Vali</title>
    <link rel="stylesheet" href="./css/reset.css">
    <style><?php include './css/AboutMe-skills.css';?></style>
</head>

<body>

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

    <article class="flexbox-container">
        <div class="myself">
            <h6>About Me</h6>
            <p1 class="p1">My name is Hemat Vali and I am a undergraduate student within the School of Electronic Engineering and Computer Science at Queen May university of London. I finished highschool and sixth form at Avanti House School. I am born in Germany, have Afghan ethnicity and Dutch nationality. I am quadlingal being fluent in; English, German, Pasto and Dutch. My biggest hobbies are football and gaming and also did them semi-pro for some time</p1>
        </div>
        <div>
            <figure>
                <img class="img2" src="IMG/HematVali.png">
            </figure>
        </div>

    </article>

    <section class="skills">
        <h2>My Skills</h2>
        <table>
            <tr>
                <th>Intermidiate</th>
                <th>Advanced</th>
                <th>Expert</th>
            </tr>
            <tr>
                <td>Football</td>
                <td>HTML</td>
                <td>Python</td>
            </tr>
            <tr>
                <td>Time-Managment</td>
                <td>CSS</td>
                <td>Java</td>
            </tr>
            <tr>
                <td>Team-work</td>
                <td>JavaScript</td>
                <td>Public speaking</td>
            </tr>
            <tr>
                <td>Interpersonal skills</td>
                <td>Biased for action</td>
                <td>Football</td>
            </tr>
            <tr>
                <td>Creativity</td>
                <td>Interpersonal skills</td>
                <td>problem-solving</td>
            </tr>
        </table>
    </section>



    


</div>

</body>
