<?php
session_start();
if(!$_SESSION['userlevel']){
    echo '<script>alert("เข้าสู่ระบบก่อน สิ");</script>';
    echo '<script>window.location.href = "../index.php";</script>';
    // header("Location: ../index.php");
}else if($_SESSION['userlevel'] != 'member'){
    echo '<script>alert("คุณเป็น Admin มาทำไมตรงนี้ครัชช!!!!");</script>';
    echo '<script>window.location.href = "../admin/index.php";</script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CyberSecurityAttack</title>
    <link rel="icon" type="image/x-icon" href="../assets/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <!-- <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script> -->
    <script src="../js/all.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="../css/styles_member_ctf.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/zoom.css">
    <!-- <link rel="stylesheet" href="css/loader.css"> -->
    <!-- <link rel="stylesheet" href="css/text-FX.css"> -->
    <link rel="stylesheet" href="../css/button.css">





    <style>
    iframe {
        border: 2px solid #008B8B;
        padding: 10px;
        border-radius: 50px 20px;
    }

    body {
        font-family: 'GARA';
        font-size: 20px;
        background-color: black;
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("../admin/backend/fonts/THSarabunNew.ttf") format('truetype');
    }

    @font-face {
        font-family: 'GARA';
        font-style: normal;
        font-weight: normal;
        src: url("../assets/fonts/garamond/GARA.TTF") format('truetype');
    }

    a {
        color: #0ff;
    }

    p.re {
        text-indent: 2em;
        text-align: justify;
        font-family: 'THSarabunNew';
        font-size: 28px;
        color: black;
        margin: 0;
    }

    p.rr {
        font-family: 'THSarabunNew';
        font-size: 23px;
    }

    li {
        text-align: center;
    }

    div#google_translate_element div.goog-te-gadget-simple {
        background-color: black;
    }

    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
        color: #0ff
    }

    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
        color: #fff
    }
    </style>

</head>

<body>


    <div id="page-top"></div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
        <div class="container-flued px-4 px-lg-5">
            <a href="#page-top"><img class="img-fluid" src="../assets/logo2.png" data-aos="fade-right" alt=""
                    width="350px"></a>
        </div>

        <!-- Translation Code here -->
        <span class="text-center" data-aos="fade-down">
            <div class="translate" id="google_translate_element"></div>
            <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }
            </script>
            <script type="text/javascript"
                src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </span>
        <!-- Translation Code End here -->

        <div class="container px-4 px-lg-5  ">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto" data-aos="fade-left">
                    <li class="nav-item"><a class="nav-link" href="../login/index.php">Home</a></li>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav" data-aos="fade-left">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php if (isset($_SESSION['username'])) : ?>
                                    <b>คุณ </b><?php echo $_SESSION['username']; ?>
                                    <?php endif ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <!-- <li><a class="dropdown-item" href="./change_pass.php">จัดการข้อมูลส่วนตัว</a></li> -->
                                    <li><a class="dropdown-item" href="?logout=ok">ออกจากระบบ</a></li>
                                    <li align="center" class="m-2"><a href="../line-notify/index.php"
                                            align="center"><img src="../assets/img/img2/ling.png" alt=""
                                                width="60px"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container-fluid px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="col-lg">
                <div class="d-flex justify-content-center">
                    <div class="text-center" data-aos="fade-down">
                        <h1 class="mx-auto my-0 text-uppercase">learn to win</h1>
                        <h2 class="text-white mx-auto mt-2 mb-5">Developer by <a
                                href="https://www.facebook.com/OffensiveMyHaven" target="_blank"
                                rel="noopener noreferrer">KOYOMI</a>.</h2>
                        <!-- <a class="btn btn-primary" href="#about">Get Started</a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- logout -->
    <?php
                                if(isset($_GET['logout']) && $_GET['logout'] == 'ok'){
                                    session_destroy();
                                    unset($_SESSION['username']);
                                    echo '  
                                    <script>
                                        Swal.fire({
                                            icon: "success",
                                            title: "ออกจากระบบ",
                                            showConfirmButton: false,
                                            timerProgressBar: true,
                                            timer: 1000
                                        }).then((result) => {
                                            if (result.isDismissed) {
                                            window.location.href = "../index.php";
                                            }
                                        });
                                    </script>
                                    ';  
                                }
                            ?>




    <!-- About-->
    <section class="about-section text-center">
        <div id="about" style="opacity: 0.0;">about</div>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4" style="font-family: 'THSarabunNew';font-size: 50px;"
                        data-aos="fade-down">ทดสอบความรู้เกี่ยวกับ Cybersecurity</h2>
                    <p class="text-white re" data-aos="fade-up">
                        เป็นการทดสอบแบบ CTF ย่อมาจากคำว่า Capture The Flag เป็นเกมการแข่งขันชิงธง (Flag)
                        ซึ่งการได้มาของธงในแต่ละการแข่งขันจะแตกต่างกันไป แล้วแต่รูปแบบการแข่งขัน โดยธงในทาง
                        Cybersecurity หมายถึงข้อความลับหรือคำตอบที่ต้องไปชิงมาเพื่อเปลี่ยนธงเป็นคะแนน
                    </p>
                    <br>
                    <p class="text-white re" data-aos="fade-up">
                        คุณจะได้เรียนรู้และทดสอบความสามารถ ทักษะเกี่ยวกับ Cybersecurity ของคุณว่ามีมากน้อยเพียงใด ได้ใน
                        Lab CTF นี้ ถ้ามีข้อสงสัยสามารถติดต่อ <a href="https://www.facebook.com/OffensiveMyHaven"
                            target="_blank" rel="noopener noreferrer">KOYOMI</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- บทความ-->
    <section class="projects bg-black">
        <div class="container">
            <div class="row">
                <hr style="color:antiquewhite">
                <div class="col-12 text-white" align="center" data-aos="fade-up">
                    <h1>The knowledge you have to get the answers.</h1>
                    <hr style="color:antiquewhite">
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                    <a href="lab1/index.php">
                    <div class="hover10">
                    <figure><img src="img/linuxfu.jpg" class="card-img-top" alt="..." height="170px"></figure>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Basic Linux.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                        <a href="lab2/index.php">
                        <div class="hover10">
                        <figure><img src="img/syringe1.jpg" class="card-img-top" alt="..." height="170px"></figure>
                            </div>
                            </a>
                        <div class="card-body">
                            <p class="card-text">SQL Injection Authentication Bypass.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                    <a href="lab3/index.php">
                    <div class="hover10">
                    <figure><img src="img/XSS.jpg" class="card-img-top" alt="..."></figure>
                            </div>
                            </a>
                        <div class="card-body">
                            <p class="card-text">XSS Cross-site Scripting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                    <a href="lab4/index.php">
                    <div class="hover10">
                    <figure><img src="img/0_w4eq4bz5o4sreh9o.jpg" class="card-img-top" alt="..."></figure>
                    </div>       </a>
                        <div class="card-body">
                            <p class="card-text">Broken Access Control.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                    <a href="lab5/index.php">
                    <div class="hover10">
                    <figure><img src="img/cryptography-concept-with-lock-and-binary-code-vector-19948104.jpg" class="card-img-top" alt="..." height="170px"></figure>
                    </div>
                    </a>
                        <div class="card-body">
                            <p class="card-text">Cryptography (Base64).</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-white" align="center" data-aos="fade-up">
                    <br>
                    <div class="card" style="width: 18rem;">
                    <h5 style="color:red">(ยังไม่ผ่าน)</h5>
                    <a href="lab6/index.php">
                        <div class="hover10">
                        <figure><img src="img/security-misconfigurations.png" class="card-img-top" alt="..." height="150px" ></figure>
                        </div>
                            </a>
                        <div class="card-body">
                            <p class="card-text">Security Misconfiguration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- Contact-->
    <section class="contact-section bg-black">

        <div class="social d-flex justify-content-center" data-aos="fade-up">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/OffensiveMyHaven" target="_blank"
                rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/koyomihack00" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-github"></i></a>
        </div>

        <!-- Footer -->
        <div id="about" style="opacity: 0.0;">
            <h1>about</h1>
        </div>
        <div class="container px-4 px-lg-5">
            <p style="color: white;" align="center"> Copyright &copy; <a
                    href="https://www.facebook.com/OffensiveMyHaven" target="_blank"
                    rel="noopener noreferrer">KOYOMI</a> 2022.</p>
        </div>

        <div id="about" style="opacity: 0.0;">
            <h1>about</h1>
        </div>



    </section>





    <!-- Footer
        <footer class="footer bg-black small text-center text-white-50">
            
        </footer> -->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <script src="../js/scrollfade.js"></script>


    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
    offset: 100, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000 // values from 0 to 3000, with step 50ms
});
</script>


</html>