<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>XI MIPA 5 - Struktur</title>
        <link rel="stylesheet" href="css/struktur.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/653a309332.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
            <nav class="navbar fixed-top" id="nvbr">
                <a href="{{ url('/') }}"><img src="logobadag.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa-solid fa-xmark x-menu" onclick="hidemenu()"></i>
                    <ul>
                        <li><a href="#">STRUKTUR KELAS</a></li>
                        <li><a href="{{ url('/mapel') }}">JADWAL PELAJARAN</a></li>
                        <li><a href="{{ url('/piket') }}">JADWAL PIKET</a></li>
                        <li><a href="{{ url('/list') }}">LIST SISWA</a></li>
                    </ul>
                </div>
                <i class="fa-solid fa-bars x-mark" onclick="showmenu()"></i>
            </nav>
            <div class="text-box">
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="8bf74b99e82032f04d9ad49d262cab45.jpg">
                        </div>
                        <div class="name">
                            <span class="name">HatoVin</span>
                            <span class="division">{{ $bid }}</span>    
                        </div>
                        <a href="#" class="more"></a>
                    </div>
                </div>
            </div>
        </section> 
        <section class="ground">
            <div class="kk">
              <a class="akk">Ketua Kelas</a>
              <a class="arrow-1">
              </a>

            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.min.js" integrity="sha512-BOsvKbLb0dB1IVplOL9ptU1EYA+LuCKEluZWRUYG73hxqNBU85JBIBhPGwhQl7O633KtkjMv8lvxZcWP+N3V3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            window.onscroll = function() {myFunction()};
            function myFunction() {
                if (document.documentElement.scrollTop > 600) {
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