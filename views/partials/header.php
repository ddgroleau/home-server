<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/34584ec87f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/app.css">
    <?php 
        $title="Self-Hosted";
        echo "<title>$title</title>"; 
    ?>
</head>
<body>
    <header>

        <div id="navbar" class="navbar">
            <div class="social">
                <i href="https://github.com/ddgroleau" class="fab fa-github fa-2x"></i>
                <i href="https://www.linkedin.com/in/dangroleau/" class="fab fa-linkedin fa-2x"></i>
                <i href="https://twitter.com/_FullStackDan" class="fab fa-twitter fa-2x"></i>
            </div>
            <nav id="nav-header" class="nav-header">
                <a class="link nav-link" href="/">Home</a>
                <a class="link nav-link" href="/projects">Projects</a>
                <a class="link nav-link" href="/tutorials">Tutorials</a>
                <a class="link nav-link" href="/contact">Contact</a>
            </nav>
            <img id="navbar-toggler" class="navbar-toggler" src="./assets/navbar-toggler.svg" onclick="toggleNav()">
        </div>
        <div id="navbar-dropdown" class="navbar-dropdown">
                <a id="home" class="link btn" href="/">Home</a>
                <a id="projects" class="link btn" href="/projects">Projects</a>
                <a id="tutorials" class="link btn " href="/tutorials">Tutorials</a>
                <a id="about" class="link btn" href="/#about-anchor">About</a>
                <a id="contact" class="link btn" href="/contact">Contact</a>
        </div>
    </header>

<script type="text/javascript">
    let isToggled = false;
    const toggleNav = () => {
        isToggled = !isToggled;
        if (isToggled) {
            document.getElementById("navbar-dropdown").style = "display:flex;";
        } else {
            document.getElementById("navbar-dropdown").style = "display:none;";
        }
    }
</script>