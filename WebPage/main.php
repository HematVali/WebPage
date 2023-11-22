<?php
    session_start();
?>

<html>

<head>
    <title>Hemat Vali</title>
    <link rel="stylesheet" href="./css/reset.css">
    <style><?php include './css/main.css';?></style>
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

    <section class="middle">
        <figure>
            <img class="img2" src="IMG/1.png">
        </figure>
        <h2>Welcome to my portafolio</h2>
        <?php
        if(!isset($_SESSION['user'])){
        echo '<a href="login.html">';
        echo   '<button class="button">Login</button>';
        echo '</a>';}
        ?>
    </section>

    <article class="img_mix">
        <figure>
            <a href="https://www.instagram.com/hemat.v11/">
                <img class="logo" src="IMG/instagram-logo.png"></a>
        </figure>
        <figure>
            <a href="https://www.linkedin.com/in/hemat-vali">
                <img class="logo" src="IMG/linkedin.png"></a>
        </figure>
        <figure>
            <a href="https://www.google.com">
                <img class="logo" src="IMG/viber.png"></a>
        </figure>
        <figure>
            <a href="https://mailto:hemat-vali@hotmail.com">
                <img class="logo" src="IMG/email.png">
            </a>
        </figure>
    </article>

</div>

</body>

</html>