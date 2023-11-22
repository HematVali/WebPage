<?php
    session_start();
?>

<html>

<head>
    <title>Hemat Vali</title>
    <link rel="stylesheet" href="./css/reset.css">
    <style><?php include './css/BlogWrite.css';?></style>
    <script defer src="./clear.js"></script>
</head>

<body>
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

    <article class="aside_login">
        <h1>Add Blog</h1>
        <form action="./addPost.php" method="POST" class="inputs">
            <input type="title" name="title" id="title" placeholder="Title" minlength="6" required>
            <textarea class="text" name='text' id="text" placeholder="Enter some text" cols="30" rows="10" minlength="6" required></textarea>
            <div class="flexbox-container">
                <input class ="button" type="submit" name="add">
        </form>
        <div>
            <button class ="button" value='reset' name='reset'>Reset</button>
        </div>
        <div>
            <form action="./addPost.php" method="POST" >
                <input class ="button" type="submit" name="go_blog" value='view blog'>
            </form>
        </div>
    </article>

    <div>
    </div>
</body>   

</html>