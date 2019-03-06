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
        .no-line-break {
            white-space: nowrap;
        }

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
            max-width: 480px;
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

        .intro-button-container:hover>.intro-button {
            color: black;
            opacity: 0.7;
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
            max-width: 400px;
            transition: 3s;
        }

        .about-me.active {
            opacity: 1;
            text-align: center;
            color: black;
            max-width: 400px;
        }

        .profile-pic img {
            opacity: 0;
            transition: 3s
        }

        .profile-pic.active img {
            opacity: 1;
            box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2);
        }

        .skill-title {
            color: white;
            margin-left: 50px;
            transition: 2s;
        }

        .skill-title.active {
            color: black;
            margin-left: 0;
            text-align: center;
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




        .mobile-display+.md {
            margin-right: 100px;
            opacity: 0;
            transition: 2s;
        }

        .mobile-display.active+.md {
            margin-right: 0;
            opacity: 1;
        }

        #mobile-proxialert {
            align-content: center;
        }

        #mobile-proxialert img {
            max-width: 300px;
        }

        /*
        #mobile-proxialert {
            margin: 0 50vh;
        }

        #proxi-desc {
            margin: 0 50vh 300px;
            width: 500px;
        }
*/


        #mobile-cchl img {
            max-width: 300px;
        }

        /*

        #mobile-cchl {
            margin: 0 55vh;
        }

        #cchl-desc {
            margin: 0 150vh 300px;
            width: 500px;
        }
*/

    </style>
</head>

<body>
    <section id="intro" class="parallax-scrolling">
        <div class="parallax-tint">
            <div class="intro-box">
                <div class="intro">
                    Hello, my name is <a class="text-blue no-line-break">David Durrant</a>.
                    <br> I'm a Software Engineer.
                </div>
                <div onclick="introBtn('about')" class="intro-button-container">
                    <div class="intro-button">View my work</div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-spacer">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active" onclick="introBtn('intro')"><a>Home</a></li>
                    <li onclick="introBtn('about')"><a>About</a></li>
                    <li onclick="introBtn('skills')"><a>Skills</a></li>
                    <li onclick="introBtn('projects')"><a>Projects</a></li>
                    <!--                    <li onclick="introBtn('contact')"><a>Contact</a></li>-->
                    <li><a href="Views/resume.pdf">Resume</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div id="profilepic" class="col-sm-6 profile-pic">
                    <img class="center-block" src="../media/images/profile.jpg">
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
        <div class="container">
            <div id="proxi" class="mobile-display"></div>
            <div class="row md">
                <div id="mobile-proxialert" class="col-sm-6">
                    <img class="center-block" src="../media/images/proxialert-mobile.png">
                </div>
                <div id="proxi-desc" class="col-sm-6 align-middle section-spacer">
                    <h1>ProxiAlert</h1>
                    <p>ProxiAlert is an android app designed to notify the user when they approach a specified location. It was created for a small busness owner who makes visits to apartment offices; needing a way to remind him when he is in the area.
                        features include: Local storage, geofencing, gmaps directions, gmaps display of all locations, recorded voice for hands free, due date.</p>
                </div>
            </div>
            <div id="cchl" class="mobile-display"></div>
            <div class="row md">
                <div class="col-sm-2"></div>
                <div id="cchl-desc" class="col-sm-4 align-middle">
                    <h1>CCHL</h1>
                    <p>This app was designed to improve productivity at my current job. It helps my team keep track of 1700 different lights.
                        features include: Data sorting and editing, API, google users </p>
                </div>
                <div id="mobile-cchl" class="col-sm-6">
                    <img class="center-block" src="../media/images/cchl-mobile.png">
                </div>
            </div>
        </div>
    </section>
    <section id="contact">

    </section>
    <script>
        function introBtn(id) {
            document.getElementById(id).scrollIntoView({
                block: 'start',
                behavior: 'smooth'
            });
        }

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
        var proxi = document.getElementById('proxi');
        var cchl = document.getElementById('cchl');

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
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, cpp), 0);
                } else {
                    makeActive(cpp);
                }
            }

            if (isInViewport(java)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, java), 250);
                } else {
                    makeActive(java);
                }
            }

            if (isInViewport(html)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, html), 500);
                } else {
                    makeActive(html);
                }
            }

            if (isInViewport(css)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, css), 750);
                } else {
                    makeActive(css);
                }
            }

            if (isInViewport(js)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, js), 0);
                } else {
                    makeActive(js);
                }
            }

            if (isInViewport(php)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, php), 250);
                } else {
                    makeActive(php);
                }
            }

            if (isInViewport(sql)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, sql), 500);
                } else {
                    makeActive(sql);
                }
            }

            if (isInViewport(git)) {
                if (window.innerWidth > 767) {
                    setTimeout(makeActive.bind(null, git), 750);
                } else {
                    makeActive(git);
                }
            }

            if (isInViewport(proxi)) {
                makeActive(proxi);
            }

            if (isInViewport(cchl)) {
                makeActive(cchl);
            }

        }, false);

    </script>
</body>

</html>
