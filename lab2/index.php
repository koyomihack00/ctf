<?php
// session_start();
// if(!$_SESSION['userlevel']){
//     echo '<script>alert("เข้าสู่ระบบก่อน สิ");</script>';
//     echo '<script>window.location.href = "../../index.php";</script>';
//     // header("Location: ../index.php");
// }else if($_SESSION['userlevel'] != 'member'){
//     echo '<script>alert("คุณเป็น Admin มาทำไมตรงนี้ครัชช!!!!");</script>';
//     echo '<script>window.location.href = "../../admin/index.php";</script>';
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CyberSecurityAttack</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icon.png" />
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
    <link href="../../css/styles_member_ctf.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/zoom.css">
    <!-- <link rel="stylesheet" href="css/loader.css"> -->
    <!-- <link rel="stylesheet" href="css/text-FX.css"> -->
    <link rel="stylesheet" href="../../css/button.css">





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
        src: url("../../admin/backend/fonts/THSarabunNew.ttf") format('truetype');
    }

    @font-face {
        font-family: 'GARA';
        font-style: normal;
        font-weight: normal;
        src: url("../../assets/fonts/garamond/GARA.TTF") format('truetype');
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
            <a href="#page-top"><img class="img-fluid" src="../../assets/logo2.png" data-aos="fade-right" alt=""
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
                                    <li align="center" class="m-2"><a href="../../line-notify/index.php"
                                            align="center"><img src="../../assets/img/img2/ling.png" alt=""
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
                        <h1 class="mx-auto my-0 text-uppercase">SQL Injection</h1>
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
                <div class="col-lg-12">
                    <h2 class="text-white mb-4" style="font-family: 'THSarabunNew';font-size: 50px;"
                        data-aos="fade-down">ทดสอบความรู้เกี่ยวกับ Cybersecurity</h2>
                    <p class="text-white re" data-aos="fade-up">
                        เป็นการทดสอบแบบ CTF ย่อมาจากคำว่า Capture The Flag เป็นเกมการแข่งขันชิงธง (Flag)
                        ซึ่งการได้มาของธงในแต่ละการแข่งขันจะแตกต่างกันไป แล้วแต่รูปแบบการแข่งขัน โดยธงในทาง
                        Cybersecurity หมายถึงข้อความลับหรือคำตอบที่ต้องไปชิงมาเพื่อเปลี่ยนธงเป็นคะแนน
                    </p>
                    <br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="text-white" style="font-size: 24px">Learning</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-dark text-white">
                                    <h4>SQL Injection คืออะไร มีหลักการอย่างไร (Part 1 Bypass Login )</h4>
                                    <p>SQL Injection เป็นเทคนิค หรือ รูปแบบ การโจมตีของ hacker
                                        โดยอาศัยช่องโหว่ของโปรแกรม
                                        ทำให้สามารถ แอบใส่ คำสั่ง SQL เข้าไปทาง Input (Unvalidated Input (Injection))
                                        ทั้งหลายบน UI เพื่อที่จะสามารถดึงข้อมูล ออกมาจากฐานข้อมูลได้
                                        หรือแม้กระทั้ง ใช้คำสั่ง INSERT, UPDATE, DELETE, DROP
                                        อะไรก็แล้วแต่ที่กระทำกับฐานข้อมูลได้ </p>
                                    <p>ดังนั้นบน เว็บ ที่มี form input ทั้งหลาย ถ้าหากไม่ตรวจสอบข้อมูล ก่อน post
                                        แล้วล่ะก็ ก็อาจจะโดนได้

                                        เช่น ตัวอย่างแบบง่ายๆ เพื่อเห็นภาพ
                                        SQL ที่เราใช้ในการ ตรวจสอบสำหรับการ Login</p>
                                    <p style="color:red;">SELECT UserID
                                        FROM User
                                        WHERE UserName = '$userName'
                                        AND Password = '$password'</p>
                                    <p>โดยปกติ $userName และ $password ก็จะถูก POST มาจากหน้าฟอร์ม จาก input tag ของ
                                        Username และ Password
                                        ในการเข้าสู่ระบบ ถ้าข้อมูลถูกต้องก็จะสามารถเข้าสู่ระบบได้ตามปกติไป
                                    </p>
                                    <p>แต่ถ้า โดนยัด SQL Injection เข้ามา การ Post ข้อมูลมาจากหน้าฟอร์ม จาก input tag
                                        จะเป็นในลักษณะ แฝงเงื่อนไขของ WHERE CLAUSE มา เช่น</p>
                                    <p style="color:red;">User name: 1'OR'1'='1
                                        Password: 1'OR'1'='1</p>
                                    <p>เวลาโปรแกรมทำงาน ผลลัพธ์ ของ SQL จะเป็นดังนี้</p>
                                    <p style="color:red;">SELECT UserID
                                        FROM User
                                        WHERE UserName = '1'OR'1'='1'
                                        AND Password = '1'OR'1'='1'</p>
                                    <p>ทำให้เงื่อนไขเป็นจริงเสมอ ในกรณีนี้อาจได้ข้อมูลของ User ทุกคนในระบบ หรือ
                                        ถ้าเขียนโปรแกรมไม่ดี อาจจะทำให้ Login ผ่านฉลุย</p>



                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="text-white" style="font-size: 24px">Lab.</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-dark text-white">
                                    <div class="container">

                                        <div class="col-12">
                                            <br>
                                            <pre><a href="login.php" target="_blank">> Start Hacking <</a></pre>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="col-12">
                                            <pre>Flag</pre>
                                            <form action="" method="post">
                                                <input type="text" name="flag" id="" class="form-control"
                                                    placeholder="flag{xxxxxxxxxxxxxxxxxxxxxxxx}">
                                                <input type="submit" name="sub" value="Submit"
                                                    class="btn btn-success mt-3">
                                                <?php

                                                    if(isset($_POST['sub'])){
                                                        $flag = $_POST['flag'];
                                                        if($flag == 'flag{sql_injection_how_to_win}'){
                                                            include('../server/config.php');
                                                            $user_id = $_SESSION['userid'];
                                                            $sql = "INSERT INTO ctf_up_user`(user_id`, lab_id ,`status_lab`) VALUES ($user_id,'2','1')";
                                                            if (mysqli_query($conn, $sql)) {
                                                            echo '<script>
                                                                Swal.fire({
                                                                    icon: "success",
                                                                    title: "You has been flag corrected.",
                                                                    showConfirmButton: false,
                                                                    timerProgressBar: true,
                                                                    timer: 3000
                                                                }).then((result) => {
                                                                    if (result.isDismissed) {
                                                                    window.location.href = "../index.php";
                                                                    }
                                                                });
                                                                </script>';
                                                              } else {
                                                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                              }
                                                              
                                                              mysqli_close($conn);
                                                
                                                        }else{
                                                            echo "<script>
                                                            Swal.fire({
                                                                icon: 'error',
                                                                title: 'Answer Incorrect.',
                                                                showConfirmButton: false,
                                                                timerProgressBar: true,
                                                                timer: 3000
                                                              });
                                                                </script>";
                                                        }
                                                    }
                                                ?>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>




    <!-- Contact-->
    <section class="contact-section bg-black">

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
    <script src="../../js/scripts.js"></script>

    <script src="../../js/scrollfade.js"></script>


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