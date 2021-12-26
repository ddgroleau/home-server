<?php include("./views/partials/header.php"); ?>

        <div class="home-box">
            <div class="content-box">
                <h1>Dan Groleau</h1>
                <h3>Software Engineer</h3>
                <nav class="nav">
                    <a class="home-link btn" href="/projects">Projects</a>
                    <a class="home-link btn" href="/tutorials">Tutorials</a>
                    <a class="home-link btn" href="/about">About</a>
                </nav>
            </div>
        </div>
        <div class="about-container">
        <div class="skills-box">
                <img class="img-scale-md img-hover" href="https://dotnet.microsoft.com/en-us/" src="/assets/media/csharp.svg">
                <img class="img-scale-md img-hover" href="https://reactjs.org/" src="/assets/media/reactjs.svg">
                <img class="img-scale-lg img-hover" href="https://nodejs.org/en/" src="/assets/media/nodejs.svg">
                <img class="img-scale-md img-hover" href="https://www.typescriptlang.org/" src="/assets/media/typescript.svg">
                <img class="img-scale-md img-hover" href="https://sass-lang.com/" src="/assets/media/sass.svg">
                <img class="img-scale-lg img-hover" href="https://www.php.net/" src="/assets/media/php.svg">
        </div>
        <div class="about-box">
            <p>
                I am a software engineer specializing in Web Development. I enjoy working in C#, JavaScript, PHP, HTML, CSS and SQL. 
            I use NodeJs, React, NestJs, NextJs, Typescript, Blazor, ASP.NET and Sass/SCSS.
            </p>
            <p>
                I have experience working with MongoDb, 
            SQL Server, MySQL, and PostgreSQL. I regularly use Docker, Octopus Deploy, and Azure and Team City products. I am
            an advocate for test driven development, object-oriented programming and clean code principles.
            </p>
        </div>
        <a class="link return-home" href="/">Return to Home</a>
    </div>

<?php include("./views/partials/footer.php"); ?>
<script type="text/javascript">
    document.getElementById("nav-header").style ="display:none";
    document.getElementById("navbar").style ="justify-content:flex-end";
    document.getElementById("navbar-dropdown").className ="navbar-dropdown-home";
    document.getElementById("home").style="display:none";
</script>
