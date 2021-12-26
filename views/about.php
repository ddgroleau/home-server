<?php 
    $title = "About | ".$title;
    include("./partials/header.php") 
?>

    <div class="content-box">
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


<?php 
    include("./partials/footer.php") 
?>

<script type="text/javascript">
    document.getElementById("about").style="display:none";
</script>