<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>XI MIPA 5 - Home</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/653a309332.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
            <nav class="navbar fixed-top" id="nvbr">
                <a class="image" href="#course"><img src="logobadag.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa-solid fa-xmark x-menu" onclick="hidemenu()"></i>
                    <ul>
                        <li><a href="{{ url('/struktur') }}">STRUKTUR KELAS</a></li>
                        <li><a href="{{ url('/mapel') }}">JADWAL PELAJARAN</a></li>
                        <li><a href="{{ url('/piket') }}">JADWAL PIKET</a></li>
                        <li><a href="{{ url('/list') }}">LIST SISWA</a></li>
                    </ul>
                </div>
                <i class="fa-solid fa-bars x-mark" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <h1>XI MIPA 5</h1>
                <p>Website yang berisi tentang XI MIPA 5 MAN 1 CIREBON.</p>
            </div>
        </section>
        <section id="course" class="course">
            <!----------Course---------------->
                <h1>Karakteristik XI MIPA 5</h1>
                <p></p>
                <div class="row"> 
                    <div class="course-col">
                        <h3>Disiplin</h3>
                        <p>XI MIPA 5 adalah Salah satu kelas yang termasuk Disiplin dalam berbagai aspek</p>
                    </div>
                    <div class="course-col">
                        <h3>Kecerdasan</h3>
                        <p>Me</p>
                    </div>
                    <div class="course-col">
                        <h3>acumalaka</h3>
                        <p>cina setan</p>
                    </div>
                </div>
        </section>
        <!-------- campus -------->
        <section class="campus">
            <h1>Our Class XI MIPA 5</h1>
            <p>At your service! Let me be your sun to shine your day! Ehe!</p>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L18.5,138.7C36.9,117,74,75,111,96C147.7,117,185,203,222,224C258.5,245,295,203,332,170.7C369.2,139,406,117,443,128C480,139,517,181,554,197.3C590.8,213,628,203,665,197.3C701.5,192,738,192,775,160C812.3,128,849,64,886,80C923.1,96,960,192,997,197.3C1033.8,203,1071,117,1108,117.3C1144.6,117,1182,203,1218,197.3C1255.4,192,1292,96,1329,74.7C1366.2,53,1403,107,1422,133.3L1440,160L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
        <footer>
            <h5>©2022 Codetech. All rights reserved</h2>
        </footer>
        <!---------JavaScript for Toogle Menu------>
        <script>
        window.onscroll = function() {myFunction()};
        function myFunction() {
            if (document.documentElement.scrollTop > 700) {
                document.getElementById("nvbr").style.backgroundColor = "#0099ff";
            } else {
                document.getElementById("nvbr").style.backgroundColor = "transparent";
            }
            }

            var navLinks = document.getElementById("navLinks");
            function showmenu(){
                navLinks.style.right = "0";
            }
            function hidemenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>