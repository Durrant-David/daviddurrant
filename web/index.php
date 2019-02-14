<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .parallax-scrolling {
            /* The image used */
            background-image: url("../media/images/backgrounds/business-code-coding-270360.jpg");

            /* Set a specific height */
            min-height: 100vh;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax-tint {
            background: rgba(0, 0, 0, 0.7);
        }

        .intro {
            background-color: white;
            font-size: 2em;
            text-align: center;
            opacity: 0.7;
            width: 480px;
            margin: auto;
            padding: 10px;
            border-radius: 15px;
        }

        .intro-box {
            padding: 40vh 0;
        }

        .intro-button {}

        .intro-button-container {
            font-size: 1.5em;
            text-align: center;
            color: white;
            width: 175px;
            margin: 20px auto;
            border: solid;
            padding: 10px;
            opacity: 0.7;
            transition: background-color 1s;
        }

        .intro-button-container:hover {
            background-color: white;
            opacity: 0.7;
        }

        .intro-button-container:hover>.intro-button,
        a:link {
            color: black;
            opacity: 0.7;
        }

        .intro-button,
        a:link {
            color: white;
            text-decoration: none;
        }

        .intro-button,
        a:visited {
            color: white;
        }

        .text-blue {
            color: blue;
        }

        .section-spacer {
            margin-bottom: 100px;
        }

        .about-me {
            opacity: 0;
            color: white;
            width: 400px;
            transition: 3s;
        }

        .about-me.active {
            opacity: 1;
            text-align: center;
            color: black;
            width: 400px;
        }

        .profile-pic img {
            opacity: 0;
            transition: 3s
        }

        .profile-pic.active img {
            opacity: 1;
            display: block;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2);
        }

        .skill-title.active {
            color: black;
            margin: 0 100vh;
        }

        .skill-image {
            height: 250px;
            padding: 25px;
            max-width: 250px;
        }

        .flip-card {
            background-color: transparent;
            width: 250px;
            height: 250px;
            perspective: 1000px;
            margin: 25px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card.active .flip-card-inner {
            transform: rotateY(180deg);
        }

        /*
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
*/

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: white;
            transform: rotateY(180deg);
            z-index: 1;
            color: black;
        }

        .flip-card-back {
            background-color: white;
            color: white;
            z-index: 2;
        }

    </style>
</head>

<body>
    <section id="intro" class="parallax-scrolling">
        <div class="parallax-tint">
            <div class="intro-box">
                <div class="intro">
                    Hello, my name is <a class="text-blue">David Durrant</a>.
                    <br> I'm a Software Engineer.
                </div>
                <div class="intro-button-container">
                    <a href="#about" class="intro-button">View my work</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div id="profilepic" class="col-sm-6 profile-pic">
                    <img src="../media/images/profile.jpg">
                </div>
                <div id="aboutme" class="col-sm-6 about-me">
                    <h1>About me</h1>
                    <p>I'm a current student of BYU Idaho. Working towards a Bachelor of Science in Software Engineering. I have a wide range of skills and a few projects that I have listed below. As any passionate programmer, I have spent late nights working on projects. I have felt the ups and downs of when there are errors and when it works. There is nothing like seeing a finished project make a difference in people’s lives.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="section-spacer">
        <h1 id="skill" class="skill-title">Skills</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div id="cpp" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/cpp_logo.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="java" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/java.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="html" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/html.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="css" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/CSS-Logo.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div id="js" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/javascript.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="php" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/php.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="sql" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/sql.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="git" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="../media/images/program_logos/git.png" alt="Avatar" class="skill-image">
                            </div>
                            <div class="flip-card-back">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="section-spacer">
        <div>
            <img src="../media/images/proxialert-mobile.png">
        </div>
        <div>
            <img src="../media/images/cchl-mobile.png">
        </div>
    </section>
    <script>
        function isInViewport(elem) {
            var bounding = elem.getBoundingClientRect();
            return (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        };

        function makeActive(elem) {
            elem.classList.add("active");
        }

        var aboutme = document.getElementById('aboutme');
        var profilepic = document.getElementById('profilepic');
        var skill = document.getElementById('skill');
        var cpp = document.getElementById('cpp');
        var java = document.getElementById('java');
        var html = document.getElementById('html');
        var css = document.getElementById('css');
        var js = document.getElementById('js');
        var php = document.getElementById('php');
        var sql = document.getElementById('sql');
        var git = document.getElementById('git');

        window.addEventListener('scroll', function(event) {
            if (isInViewport(aboutme)) {
                makeActive(aboutme);
            }

            if (isInViewport(profilepic)) {
                makeActive(profilepic);
            }

            if (isInViewport(skill)) {
                makeActive(skill);
            }

            if (isInViewport(cpp)) {
                setTimeout(makeActive.bind(null, cpp), 0);
            }

            if (isInViewport(java)) {
                setTimeout(makeActive.bind(null, java), 250);
            }

            if (isInViewport(html)) {
                setTimeout(makeActive.bind(null, html), 500);
            }

            if (isInViewport(css)) {
                setTimeout(makeActive.bind(null, css), 750);
            }

            if (isInViewport(js)) {
                setTimeout(makeActive.bind(null, js), 0);
            }

            if (isInViewport(php)) {
                setTimeout(makeActive.bind(null, php), 250);
            }

            if (isInViewport(sql)) {
                setTimeout(makeActive.bind(null, sql), 500);
            }

            if (isInViewport(git)) {
                setTimeout(makeActive.bind(null, git), 750);
            }

        }, false);

    </script>
</body>

</html>
