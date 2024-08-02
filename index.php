<?php
session_start();
$profileImage = isset($_SESSION['profileImage']) ? $_SESSION['profileImage'] : 'default-profile.png';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools</title>
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Circular:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comic+Sans+MS&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.5.0/math.min.js"></script>
    <script src="redirect.js"></script>

</head>

<body>
    <div class="header">
        <a href="http://localhost/PROJEK/index.php">
            <img src="foto/moleculeicon.png" alt="W3Schools.com" class="logo">
        </a>
        <div class="content">
            <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
                href="#" onclick="toggleNavItem(this, 'tutorialsContent')" title="Tutorials and References"
                role="button">
                Tutorials
                <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
                <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
            </a>
            <div id="tutorialsContent" class="nav-content">
                <h1>Tutorials</h1>
                <a1 href="https://youtu.be/NOBDVrYl39U?si=xtCU0dZJWU01LJgP" class="link1">ELECTRIC POTENTIAL</a1>
                <div class="link2">
                    <a href="https://youtu.be/NOBDVrYl39U?si=xtCU0dZJWU01LJgP" target="_blank">Learn More</a>
                </div>
                <a2 href="https://youtu.be/mBepJDLdO2Q?si=OUfcRZXFoMdqRLjn" class="link3">PARABOLIC MOTION</a2>
                <div class="link4">
                    <a href="https://youtu.be/mBepJDLdO2Q?si=OUfcRZXFoMdqRLjn" target="_blank">Learn More</a>
                </div>
                <a3 href="https://youtu.be/EGx37DE1GCE?si=EaabfY9sqaOmEoqt" class="link5">QUANTITY&UNITS</a3>
                <div class="link6">
                    <a href="https://youtu.be/EGx37DE1GCE?si=EaabfY9sqaOmEoqt" target="_blank">Learn More</a>
                </div>
                <a4 href="https://youtu.be/-vh_vqZkBiQ?si=nXu9M74Kz39H5YXo" class="link7">VECTOR</a4>
                <div class="link8">
                    <a href="https://youtu.be/-vh_vqZkBiQ?si=nXu9M74Kz39H5YXo" target="_blank">Learn More</a>
                </div>
                <a5 href="https://youtu.be/5ikiX0gv5w4?si=fDxWQZyu3a6uKSs_" class="link9">STRAIGHT MOTION</a5>
                <div class="link10">
                    <a href="https://youtu.be/5ikiX0gv5w4?si=fDxWQZyu3a6uKSs_" target="_blank">Learn More</a>
                </div>
                <a6 href="https://youtu.be/qXSFmDzYWnE?si=LiUdvz_2LSeBgOKf" class="link11">BUSINESS&ENERGY</a6>
                <div class="link12">
                    <a href="https://youtu.be/qXSFmDzYWnE?si=LiUdvz_2LSeBgOKf" target="_blank">Learn More</a>
                </div>
                <a7 href="https://youtu.be/lG6sY2ysUSE?si=QKnoMOidnLK05r4Z" class="link13">COULOMB'S LAW</a7>
                <div class="link14">
                    <a href="https://youtu.be/lG6sY2ysUSE?si=QKnoMOidnLK05r4Z" target="_blank">Learn More</a>
                </div>
                <a8 href="https://youtu.be/lG6sY2ysUSE?si=2TZyK9ipk09wFnVx" class="link15">ELECTRIC FIELD</a8>
                <div class="link16">
                    <a href="https://youtu.be/lG6sY2ysUSE?si=2TZyK9ipk09wFnVx" target="_blank">Learn More</a>
                </div>
                <a9 href="https://youtu.be/QLHuYh4sgbk?si=DtqcrJJMmr3OP6O6" class="link17">GAUSS'S LAW</a9>
                <div class="link18">
                    <a href="https://youtu.be/QLHuYh4sgbk?si=DtqcrJJMmr3OP6O6" target="_blank">Learn More</a>
                </div>
                <a10 href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="link19">RELATIVITY</a10>
                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="link20">Learn More</a>
                <div class="link21">
                    <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" target="_blank">Learn More</a>
                </div>
                <a11 href="https://youtu.be/gYZyGsojV54?si=vqpyDk1-ZSvyTOgK" class="link22">MAGNETIC FIELD</a11>
                <div class="link23">
                    <a href="https://youtu.be/gYZyGsojV54?si=vqpyDk1-ZSvyTOgK" target="_blank">Learn More</a>
                </div>
                <a12 href="https://youtu.be/np-zPJu64sU?si=P-gIty2vBS-_V01N" class="link24">COSMOLOGY</a12>
                <div class="link25">
                    <a href="https://youtu.be/np-zPJu64sU?si=P-gIty2vBS-_V01N" target="_blank">Learn More</a>
                </div>
                <a13 href="https://youtu.be/xt8Um5Z0oPA?si=Cz4hWv2sj-Ugds9S" class="link26">OHM'S LAW</a13>
                <div class="link27">
                    <a href="https://youtu.be/xt8Um5Z0oPA?si=Cz4hWv2sj-Ugds9S" target="_blank">Learn More</a>
                </div>
                <a13 href="https://youtu.be/-EXH9tyACNA?si=RpSWV5cspSH7Xq-d" class="link28">CAPACITOR</a13>
                <div class="link29">
                    <a href="https://youtu.be/-EXH9tyACNA?si=RpSWV5cspSH7Xq-d" target="_blank">Learn More</a>
                </div>
                <a14 href="https://youtu.be/DG1LcpKxBjY?si=T7k4cl9e4Qb-UKIO" class="link30">ELECTRIC CHARGE</a14>
                <div class="link31">
                    <a href="https://youtu.be/DG1LcpKxBjY?si=T7k4cl9e4Qb-UKIO" target="_blank">Learn More</a>
                </div>
                <a15 href="https://youtu.be/pQp6bmJPU_0?si=aVow_aFsXN5DUcL5" class="link32">INDUCTION</a15>
                <div class="link33">
                    <a href="https://youtu.be/pQp6bmJPU_0?si=aVow_aFsXN5DUcL5" target="_blank">Learn More</a>
                </div>
                <a16 href="https://youtu.be/0H3Ru8O2zG0?si=-Wq0Zn6bxCcF5qi6" class="link34">INDUCTANCE</a16>
                <div class="link35">
                    <a href="https://youtu.be/0H3Ru8O2zG0?si=-Wq0Zn6bxCcF5qi6" target="_blank">Learn More</a>
                </div>
                <a16 href="https://youtu.be/7v2gs8rdQzU?si=3XTv15SlRdhIL2-6" class="link36">"EM" WAVES</a16>
                <div class="link37">
                    <a href="https://youtu.be/7v2gs8rdQzU?si=3XTv15SlRdhIL2-6" target="_blank">Learn More</a>
                </div>
                <a16 href="https://youtu.be/K40lNL3KsJ4?si=_sXu_V2ZLqNtZ2PB" class="link38">MAXWELL'S EQUATION</a16>
                <div class="link39">
                    <a href="https://youtu.be/K40lNL3KsJ4?si=_sXu_V2ZLqNtZ2PB" target="_blank">Learn More</a>
                </div>
                <a16 href="https://youtu.be/eW5VGGJuWtQ?si=2kZ3HcXns_COzrPA" class="link40">DIFFRACTION</a16>
                <div class="link41">
                    <a href="https://youtu.be/eW5VGGJuWtQ?si=2kZ3HcXns_COzrPA" target="_blank">Learn More</a>
                </div>
            </div>
        </div>

        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
            href="#" onclick="toggleNavItem(this, 'profileContent')" title="The Creator" role="button">
            Creator
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="profileContent" class="nav-content" style="display: none;">
            <h1>The Creator</h1>
            <div class="profile-info">
                <img src="foto/IMG_20240504_125530_557.jpg" alt="My Photo" class="profile-photo">
                <div class="bio">
                    <p>Name : Satria Ardan Wicaksono</p>
                    <p>Email : ardansatria004@gmail.com</p>
                </div>
                <img src="foto/IMG-20240525-WA0043.jpg" alt="My Photo" class="profile-photo">
                <div class="bio">
                    <p>Name : Yovi Arian</p>
                    <p>Email : yovi.arian@gmail.com</p>
                </div>
                <img src="foto/vinka2.jpg" alt="My Photo" class="profile-photo">
                <div class="bio">
                    <p>Name : Paras Vinka Melati</p>
                    <p>Email : parasvinkam@gmail.com</p>
                </div>
                <img src="foto/azima.jpg" alt="My Photo" class="profile-photo">
                <div class="bio">
                    <p>Name : Izza Azima</p>
                    <p>Email : izzaazima79@gmail.com</p>
                </div>
                <img src="foto/nur.jpg" alt="My Photo" class="profile-photo">
                <div class="bio">
                    <p>Name : Sri Harmila</p>
                    <p>Email : tomiaharmilatomia@gmail.com</p>
                </div>
                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="linkkhusus">Learn More</a>
            </div>
        </div>
        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
            href="#" onclick="toggleNavItem(this, 'certificateContent')" title="Certificate" role="button">
            Certificate
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="certificateContent" class="nav-content" style="display: none;">
            <h1>Certificates</h1>
            <div class="certificate-grid">
                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/electric-potential" target="_blank">ELECTRIC POTENTIAL</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.open.ac.uk/courses/physics/certificates" target="_blank">PARABOLIC MOTION</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.open.ac.uk/courses/physics/certificates" target="_blank">QUANTITY & UNITS</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.udemy.com/course/vector-calculus" target="_blank">VECTOR</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.futurelearn.com/courses/straight-motion" target="_blank">STRAIGHT MOTION</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.coursera.org/specializations/business-energy" target="_blank">BUSINESS &
                        ENERGY</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/coulombs-law" target="_blank">COULOMB'S LAW</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.alison.com/course/introduction-to-electric-field" target="_blank">ELECTRIC
                        FIELD</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/gausss-law" target="_blank">GAUSS'S LAW</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.relativity.com/resources/certification/" target="_blank">RELATIVITY</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/magnetic-field" target="_blank">MAGNETIC FIELD</a>
                </div>
                <div class="certificate-item">
                    <a href="https://elearncollege.com/view-all-courses/cosmology/" target="_blank">COSMOLOGY</a>
                </div>
                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/ohms-law-certification" target="_blank">OHM'S LAW</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/capacitor-certification" target="_blank">CAPACITOR</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.edx.org/learn/electric-charge-certification" target="_blank">ELECTRIC
                        CHARGE</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.edx.org/learn/induction-certification" target="_blank">INDUCTION</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/inductance-certification" target="_blank">INDUCTANCE</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.edx.org/learn/em-waves-certification" target="_blank">EM WAVES</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.coursera.org/learn/maxwells-equations-certification" target="_blank">MAXWELL'S
                        EQUATION</a>
                </div>

                <div class="certificate-item">
                    <a href="https://www.edx.org/learn/diffraction-certification" target="_blank">DIFFRACTION</a>
                </div>

                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="linkkhususcerti">Learn More</a>
            </div>
        </div>
        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
            href="#" onclick="toggleNavItem(this, 'courseContent')" title="Courses" role="button">
            Courses
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="courseContent" class="nav-content" style="display: none;">
            <h1>Courses</h1>
            <div class="course-grid">
                <div class="course-item">
                    <a href="https://www.coursera.org/learn/electric-potential" target="_blank">Electric Potential</a>
                </div>
                <div class="course-item">
                    <a href="https://www.khanacademy.org/science/physics" target="_blank">Parabolic Motion</a>
                </div>
                <div class="course-item">
                    <a href="https://www.open.edu/openlearn/science-maths-technology/physics/quantities-units-and-units-of-measurement/content-section-0"
                        target="_blank">Quantity & Units</a>
                </div>
                <div class="course-item">
                    <a href="https://www.udemy.com/course/learn-linear-algebra/" target="_blank">Vector</a>
                </div>
                <div class="course-item">
                    <a href="https://www.futurelearn.com/courses/forces-motion" target="_blank">Straight Motion</a>
                </div>
                <div class="course-item">
                    <a href="https://www.coursera.org/specializations/energy-business-finance" target="_blank">Business
                        & Energy</a>
                </div>
                <div class="course-item">
                    <a href="https://www.coursera.org/learn/coulombs-law" target="_blank">Coulomb's Law</a>
                </div>
                <div class="course-item">
                    <a href="https://www.alison.com/course/introduction-to-electric-field" target="_blank">Electric
                        Field</a>
                </div>
                <div class="course-item">
                    <a href="https://www.coursera.org/learn/gausss-law" target="_blank">Gauss's Law</a>
                </div>
                <div class="course-item">
                    <a href="https://www.relativity.com/resources/certification/" target="_blank">Relativity</a>
                </div>
                <div class="course-item">
                    <a href="https://www.coursera.org/learn/magnetic-field" target="_blank">Magnetic Field</a>
                </div>
                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/cosmology/" target="_blank">Cosmology</a>
                </div>
                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/ohms-law/" target="_blank">Ohm's Law</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/capacitor/" target="_blank">Capacitor</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/electric-charge/" target="_blank">Electric
                        Charge</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/induction/" target="_blank">Induction</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/inductance/" target="_blank">Inductance</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/em-waves/" target="_blank">EM Waves</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/maxwells-equations/" target="_blank">Maxwell's
                        Equations</a>
                </div>

                <div class="course-item">
                    <a href="https://elearncollege.com/view-all-courses/diffraction/" target="_blank">Diffraction</a>
                </div>
                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="linkkhususcourse">Learn More</a>
            </div>
        </div>
        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
            href="#" onclick="toggleNavItem(this, 'calculation')" title="Calculation" role="button">
            Calculation
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="calculation" class="nav-content" style="display: none;">
            <h1>Calculation</h1>
            <div class="calculation-grid">
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/coloumb.html" target="_blank">Coloumb's Law</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/vektor.html" target="_blank">Vektor</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/potensial.html" target="_blank">Electric
                        Potential</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/medanlistrik.html" target="_blank">Electric
                        Field</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/geraklurus.html" target="_blank">Straight
                        Motion</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/medanmagnet.html" target="_blank">Magnetic
                        Field</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/gerakparabola.html" target="_blank">Parabolic
                        Motion</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/hukumgaus.html" target="_blank">Gauss's Law</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/hukumohm.html" target="_blank">Ohm's Law</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/kapasitor.html" target="_blank">Capacitor</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/hukumgaus.html" target="_blank">Electric
                        Charge</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/induksi.html" target="_blank">Induction</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/induktansi.html" target="_blank">Inductance</a>
                </div>
                <div class="calculation-item">
                    <a href="http://127.0.0.1:3000/calculations/induktansi.html" target="_blank">EM Waves</a>
                </div>
                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="linkcalcu">Learn More</a>
            </div>
        </div>
        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref examtest-btn"
            href="#" onclick="toggleNavItem(this, 'containerexam')" title="Exam Test" role="button">
            Exam Test
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="containerexam" class="nav-content" style="display: none;">
            <h1></h1>
            <div class="teksexam">
                <p id="typewriter-text">PhySchools Exam Test</p>
                <p1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enhance
                    Your Knowledge and Skills with
                    Our Comprehensive Physics Test Exams</p1>

                <p2>At our website, we are dedicated to helping you excel in physics through our meticulously crafted
                    test exams. These exams are designed not only to challenge your understanding but also to deepen
                    your grasp of fundamental and advanced physics concepts. Whether you are a high school student
                    preparing for your final exams, a college student tackling advanced physics courses, or simply a
                    lifelong learner with a passion for science, our test exams are tailored to meet your needs.</p2>

                <p3>Our physics test exams cover a wide range of topics, including mechanics, electromagnetism,
                    thermodynamics, optics, quantum mechanics, and more. Each test is developed by experts in the field
                    to ensure accuracy and relevance, reflecting the latest developments and standards in physics
                    education.</p3>

                <p4>By regularly taking our test exams, you can:</p4>

                <ul>
                    <li>Identify your strengths and areas for improvement.</li>
                    <li>Practice problem-solving and critical thinking skills essential for mastering physics.</li>
                    <li>Build confidence in your ability to tackle complex physics problems.</li>
                    <li>Prepare effectively for school exams, standardized tests, and college entrance exams.</li>
                </ul>
                <p5>Our user-friendly platform allows you to take tests at your own pace, track your progress over time,
                    and receive detailed feedback on your performance. With a variety of question types, from
                    multiple-choice to problem-solving exercises, our test exams simulate real exam conditions, helping
                    you become more comfortable and efficient during actual exams.</p5>

                <p6>Join thousands of learners who have benefited from our test exams and take a significant step
                    towards mastering physics. Visit our website today, and discover how our test exams can transform
                    your understanding and appreciation of physics.</p6>

                <p7>Become smarter and more confident with the physics test exams we created, and unlock your full
                    potential in the world of science!</p7>
                <a href="https://youtu.be/5ncQIM-hqsE?si=WIZNH4FTtLkm2i_g" class="linkexam">Learn More</a>
                <div class="sidebar">
                    <ul>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examparabolicmotion.html"
                                target="_blank">Parabolic
                                Motion</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examelectricpotential.html"
                                target="_blank">Electric
                                Potential</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examvector.html" target="_blank">Vector</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examstraightmotion.html"
                                target="_blank">Straight
                                Motion</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examquantityunits.html"
                                target="_blank">Quantity&Units</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/exambussines.html"
                                target="_blank">Business&Energy</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examcoloumb.html?" target="_blank">Coloumb's
                                Law</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examelectricfield.html"
                                target="_blank">Electric
                                Field</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examgauslaw.html" target="_blank">Gauss's
                                Law</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/exammagneticfield.html"
                                target="_blank">Magnetic
                                Field</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examrelativity.html"
                                target="_blank">Relativity</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examohm.html" target="_blank">Ohm's
                                Law</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examcapacitor.html"
                                target="_blank">Capacitor</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examelectriccharge.html"
                                target="_blank">Electric
                                Charge</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examinduction.html"
                                target="_blank">Induction</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examcosmology.html"
                                target="_blank">Cosmology</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examdifraction.html"
                                target="_blank">Diffraction</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examemwave.html" target="_blank">EM
                                Waves</a></li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/examinductance.html"
                                target="_blank">Inductance</a>
                        </li>
                        <li><a href="http://127.0.0.1:3000/examtestphysics/exammaxwell.html" target="_blank">Maxwell's
                                Equation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref simulation-btn"
            href="#" onclick="toggleNavItem(this, 'containersimulation')" title="Simulation" role="button">
            Simulation
            <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
            <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
        </a>
        <div id="containersimulation" class="nav-content" style="display: none;">
            <h1></h1>
            <div class="tekssimulation">
                <p id="typewriter-text1">PhySchools Simulation</p>
                <p1>Improve
                    Your
                    Knowledge and Abilities with Our Comprehensive Physics Simulations</p1>

                <p2>At our website, we are dedicated to helping you excel in physics through our meticulously crafted
                    simulations. These simulations are designed not only to challenge your understanding but also to
                    deepen your grasp of fundamental and advanced physics concepts. Whether you are a high school
                    student preparing for your final exams, a college student tackling advanced physics courses, or
                    simply a lifelong learner with a passion for science, our simulations are tailored to meet your
                    needs.</p2>

                <p3>Our physics simulations cover a wide range of topics, including mechanics, electromagnetism,
                    thermodynamics, optics, quantum mechanics, and more. Each simulation is developed by experts</p3>
            </div>
            <div class="btnstars-container">
                <button class="btnstars" type="button" onclick="redirectToCapacitorSimulation()">
                    <strong>Capacitor</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectTobusinessSimulation()">
                    <strong>Business & Energy</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectToStraightmotionSimulation()">
                    <strong>Straight Motion</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectToVectorSimulation()">
                    <strong>Vector</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectToGaussSimulation()">
                    <strong>Gauss's Law</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
            </div>
            <div class="btnstars-container1">
                <button class="btnstars" type="button" onclick="redirectToOhmSimulation()">
                    <strong>Ohm's Law</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectToInductanceSimulation()">
                    <strong>Inductance</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
                <button class="btnstars" type="button" onclick="redirectToMaxwellSimulation()">
                    <strong>Maxwell's Equation</strong>
                    <div id="container-stars">
                        <div id="stars"></div>
                    </div>

                    <div id="glow">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </button>
            </div>
        </div>
        <div class="main-container1">
            <form id="searchForm1" onsubmit="return search();">
                <div class="search-box1">
                    <input type="text" id="searchInput1" placeholder="Search our Tips, e.g." onkeyup="showSuggestions()"
                        onkeydown="search(event)">
                    <button type="submit" id="searchButton1" class="search-button1">Cari</button>
                    <div id="suggestionContainer1"></div>
                </div>
            </form>
            <div class="description-container1" id="descriptionContainer1" style="display: none; margin-top: 10px;">
                <h2 style="margin: 0; color: #333;">Deskripsi</h2>
                <div id="info"></div>
            </div>
        </div>
        <div class="containerdark">
            <button1 id="dark-mode-toggle">
                <i id="toggle-icon" class="fas fa-moon"></i>
            </button1>
        </div>
        <div class="button-container">
            <a href="#" class="btn profile-btn" style="display: none;">
                <img src="<?php echo $profileImage; ?>" class="profile-icon" id="profileIcon"
                    onclick="toggleDropdown()">
                <div id="profileDropdown" class="dropdown-content1" display="none">
                    <a href="profile.php">Edit Profile</a>
                    <a href="changepassword.php">Change Password</a>
                    <a href="logout.php">Logout</a>
                </div>
            </a>
        </div>
    </div>
    <div class="menu-bar" id="menuBar">
        <a href="#" onclick="showInfo('potensial_listrik')">ELECTRIC POTENTIAL</a>
        <a href="#" onclick="showInfo('html')">PARABOLIC MOTION</a>
        <a href="#" onclick="showInfo('javascript')">QUANTITY&UNITS</a>
        <a href="#" onclick="showInfo('vektor')">VECTOR</a>
        <a href="#" onclick="showInfo('geraklurus')">STRAIGHT MOTION</a>
        <a href="#" onclick="showInfo('usahadanenergi')">BUSINESS&ENERGY</a>
        <a href="#" onclick="showInfo('coloumb')">COLOUMB'S LAW</a>
        <a href="#" onclick="showInfo('medanlistrik')">ELECTRIC FIELD</a>
        <a href="#" onclick="showInfo('hukumgaus')">GAUSS'S LAWS</a>
        <a href="#" onclick="showInfo('relativitas')">RELATIVITY</a>
        <a href="#" onclick="showInfo('medanmagnet')">MAGNETIC FIELD</a>
        <a href="#" onclick="showInfo('kosmology')">COSMOLOGY</a>
        <a href="#" onclick="showInfo('ohm')">OHM'S LAW</a>
        <a href="#" onclick="showInfo('kapasitor')">CAPACITOR</a>
        <a href="#" onclick="showInfo('muatanlistrik')">ELECTRICAL CHARGE</a>
        <a href="#" onclick="showInfo('induksi')">INDUCTION</a>
        <a href="#" onclick="showInfo('induktansi')">INDUCTANCE</a>
        <a href="#" onclick="showInfo('gelombangem')">EM WAVES</a>
        <a href="#" onclick="showInfo('persamaanmaxwell')">MAXWELL'S EQUATION</a>
        <a href="#" onclick="showInfo('difraksi')">DIFRACTION</a>
    </div>
    <div id="container">
        <div id="info">
            <header id="info-header"></header>
            <div id="content-html" class="info-content"></div>
            <div id="content-css" class="info-content"></div>
            <div id="content-potensial-listrik" class="info-content"></div>
            <div id="content-javascript" class="info-content"></div>
            <div id="additional-info-html"></div>
            <div id="additional-info-css"></div>
            <div id="additional-info-javascript"></div>
            <div id="additional-info-potensial"></div>
        </div>
    </div>

    <body class="homepage">
        <div class="main-container">
            <h1>Learn To Physics</h1>
            <p>With our genius website</p>
            <form id="searchForm">
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search our Tips, e.g." onkeyup="search()">
                    <button type="submit">Cari</button>
                    <div id="suggestionContainer"></div>
                </div>
            </form>
            <div class="description-container" id="descriptionContainer" style="display: none;">
                <h2>Deskripsi</h2>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="foto/pexels-olly-3768126.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="foto/pexels-ron-lach-8360004.jpg" alt="Image 2"></div>
                <div class="swiper-slide"><img src="foto/pexels-ron-lach-9785587.jpg" alt="Image 3"></div>
                <div class="swiper-slide"><img src="foto/pexels-ron-lach-9785613.jpg" alt="Image 4"></div>
                <div class="swiper-slide"><img src="foto/pexels-yankrukov-8617634.jpg" alt="Image 5"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="kontentambahan">
            <h1>Physics</h1>
            <p id="translatable-text">
                Physics is a branch of natural science that studies the fundamental properties of the universe,
                including matter, energy, space, and time, and the interactions between them. It encompasses various
                sub-disciplines such as mechanics (the motion of objects and the forces acting upon them),
                thermodynamics (the relationship between heat and other forms of energy), electromagnetism (electric and
                magnetic fields and their interactions), optics (the properties and behavior of light), and quantum
                physics (the behavior of particles on the atomic and subatomic scale). The main goal of physics is to
                understand the fundamental laws that govern the universe, from the very small, like subatomic particles,
                to the very large, like galaxies and the cosmos. Physics not only aims to explain natural phenomena but
                also to predict the behavior of physical systems under various conditions.
            </p>
        </div>
        <div class="translate-buttons">
            <button id="btn-en" class="active">Eng</button>
            <button id="btn-id">Idn</button>
        </div>
        <div class="slideshow-container">
            <div class="slideshow">
                <img src="foto/fotogerak1.jpg" alt="Photo 1">
                <img src="foto/fotogerak2.jpg" alt="Photo 2">
                <img src="foto/fotogerak3.jpg" alt="Photo 3">
                <img src="foto/fotogerak4.jpg" alt="Photo 4">
                <img src="foto/fotogerak5.jpg" alt="Photo 5">
            </div>
        </div>
        <div class="learnmorelogin">
            <h1>Access More Features!</h1>
            <div class="calcpict">
                <img src="foto/ssphp.png" alt="Calculation">
                <div class="description">
                    <p>Congratulations! Now you can access the addition feature of our physics calculator. We hope it's
                        useful and makes your difficulties easier!<br><br>Please press the navigation button entitled
                        "Calculation". Enjoy!</p>
                </div>
                <div class="text-overlay">Calculation</div>
            </div>
            <div class="calcdescript">
                <h1>What is Physics Calculator?</h1>
                <div class="descriptcalc">
                    <p>Physics Calculator is a calculation system that we created for many people to make it easier for
                        them
                        to study Physics. It would be nice if what we created can be useful for users like you.</p>
                </div>
                <svg class="arrow-svg" width="600" height="300">
                    <path d="M 10 50 Q 150 0, 300 50 T 500 150" stroke="black" stroke-width="2" fill="none"
                        marker-end="url(#arrowhead)" />
                    <defs>
                        <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                            <polygon points="0 0, 10 3.5, 0 7" fill="black" />
                        </marker>
                    </defs>
                </svg>
                <div class="descriptcalc1">
                    <p>A Physics Calculator is a tool designed to perform various calculations related to physics. These
                        calculators can handle a wide range of tasks, from basic arithmetic operations in simple physics
                        problems to complex computations in advanced physics topics.
                    </p>
                </div>
            </div>
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="foto/moleculeicon.png" alt="PhySchools Logo" style="width: 80px;">
                    </div>
                    <div class="footer-content">
                        <div class="footer-section">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="footer-section">
                            <h4>Contact Us</h4>
                            <p>Email: info@physchools.com</p>
                            <p>Phone: +123 456 7890</p>
                            <p>Address: 123 Education Lane, Science City, World</p>
                        </div>
                        <div class="footer-section footer-social">
                            <h4>Follow Us</h4>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="footer-section footer-content-links">
                            <h4>Content Links</h4>
                            <ul>
                                <li><a href="#" onclick="showInfo('potensial_listrik')">Electric Potential</a></li>
                                <li><a href="#" onclick="showInfo('html')">Parabolic Motion</a></li>
                                <li><a href="#" onclick="showInfo('javascript')">Quantity & Units</a></li>
                                <li><a href="#" onclick="showInfo('vektor')">Vector</a></li>
                                <li><a href="#" onclick="showInfo('geraklurus')">Straight Motion</a></li>
                                <li><a href="#" onclick="showInfo('usahadanenergi')">Business & Energy</a></li>
                                <li><a href="#" onclick="showInfo('coloumb')">Coulomb's Law</a></li>
                                <li><a href="#" onclick="showInfo('medanlistrik')">Electric Field</a></li>
                                <li><a href="#" onclick="showInfo('hukumgaus')">Gauss's Law</a></li>
                                <li><a href="#" onclick="showInfo('relativitas')">Relativity</a></li>
                                <li><a href="#" onclick="showInfo('medanmagnet')">Magnetic Field</a></li>
                                <li><a href="#" onclick="showInfo('kosmology')">Cosmology</a></li>
                                <li><a href="#" onclick="showInfo('ohm')">Ohm's Law</a></li>
                                <li><a href="#" onclick="showInfo('kapasitor')">Capacitor</a></li>
                                <li><a href="#" onclick="showInfo('muatanlistrik')">Electric Charge</a></li>
                                <li><a href="#" onclick="showInfo('induksi')">Induction</a></li>
                                <li><a href="#" onclick="showInfo('induktansi')">Inductance</a></li>
                                <li><a href="#" onclick="showInfo('gelombangem')">EM Waves</a></li>
                                <li><a href="#" onclick="showInfo('persamaanmaxwell')">Maxwell's Equation</a></li>
                                <li><a href="#" onclick="showInfo('difraksi')">Diffraction</a></li>
                            </ul>
                        </div>
                        <div class="footer-bottom">
                            <p>&copy; 2024 PhySchools. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="additional-content-container" class="w3-row w3-padding-32 ws-light-green"
                style="margin-top:-10px;">
            </div>
            <script src="scriptai.js"></script>
            <script src="index.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>

                document.addEventListener('DOMContentLoaded', function () {
                    const textElement = document.getElementById('typewriter-text');
                    const text = textElement.textContent;
                    textElement.textContent = '';

                    let index = 0;

                    function type() {
                        if (index < text.length) {
                            textElement.textContent += text.charAt(index);
                            index++;
                            setTimeout(type, 100);
                        }
                    }

                    type();
                });


                const slideshow = document.querySelector('.slideshow');
                const images = Array.from(slideshow.querySelectorAll('img'));
                const totalImages = images.length;
                let currentIndex = 0;

                function cloneImages() {
                    images.forEach(image => {
                        const clone = image.cloneNode(true);
                        slideshow.appendChild(clone);
                    });
                }

                function startSlideshow() {
                    setInterval(() => {
                        currentIndex++;
                        if (currentIndex >= totalImages) {
                            slideshow.style.transition = 'transform 1s linear';
                            setTimeout(() => {
                                currentIndex = 1;
                                slideshow.style.transform = `translateX(-${currentIndex * 500}px)`;
                            }, 50);
                        } else {
                            slideshow.style.transition = 'transform 1s linear';
                            slideshow.style.transform = `translateX(-${currentIndex * 500}px)`;
                        }
                    }, 3000); // Sesuaikan waktu ini sesuai kecepatan yang diinginkan
                }

                cloneImages();
                startSlideshow();


                const searchData1 = {
                    "electric potential": "potensial_listrik",
                    "parabolic motion": "html",
                    "quantity & units": "javascript",
                    "vector": "vektor",
                    "straight motion": "geraklurus",
                    "business & energy": "usahadanenergi",
                    "coulomb's law": "coloumb",
                    "electric field": "medanlistrik",
                    "gauss's laws": "hukumgaus",
                    "relativity": "relativitas",
                    "magnetic field": "medanmagnet",
                    "cosmology": "kosmology",
                    "ohm's law": "ohm",
                    "capacitor": "kapasitor",
                    "electrical charge": "muatanlistrik",
                    "induction": "induksi",
                    "inductance": "induktansi",
                    "EM waves": "gelombangem",
                    "maxwell's equation": "persamaanmaxwell",
                    "difraction": "difraksi",
                };

                const searchInput1 = document.getElementById('searchInput1');
                const suggestionContainer1 = document.getElementById('suggestionContainer1');

                function showSuggestions() {
                    const input = searchInput1.value.toLowerCase();
                    const suggestions = Object.keys(searchData1).filter(key => key.toLowerCase().includes(input));

                    suggestionContainer1.innerHTML = '';

                    if (input.length > 0) {
                        suggestions.forEach(suggestion => {
                            const suggestionElement = document.createElement('div');
                            suggestionElement.textContent = suggestion;
                            suggestionElement.classList.add('suggestion');

                            suggestionElement.onclick = () => {
                                searchInput1.value = suggestion;
                                suggestionContainer1.innerHTML = '';
                                showInfo(searchData1[suggestion]);
                            };

                            suggestionContainer1.appendChild(suggestionElement);
                        });
                    }
                }

                function search() {
                    const input = searchInput1.value.toLowerCase();
                    suggestionContainer1.innerHTML = '';
                    if (input.length > 0) {
                        const suggestions = Object.keys(searchData1).filter(key => key.includes(input));
                        if (suggestions.length > 0) {
                            const ul = document.createElement('ul');
                            suggestions.forEach(suggestion => {
                                const li = document.createElement('li');
                                li.textContent = suggestion;
                                li.onmouseenter = () => {
                                    searchInput1.value = suggestion;
                                };
                                li.onclick = () => {
                                    searchInput1.value = '';
                                    suggestionContainer1.innerHTML = '';
                                    showInfo(searchData1[suggestion]);
                                };
                                ul.appendChild(li);
                            });
                            suggestionContainer1.appendChild(ul);
                        }
                    }
                }

                searchInput1.addEventListener('keydown', handleKeyDown);

                function handleKeyDown(event) {
                    if (event.key === 'Enter') {
                        search();
                        const inputText = searchInput1.value.toLowerCase();
                        if (searchData1.hasOwnProperty(inputText)) {
                            showInfo(searchData1[inputText]);
                            searchInput1.value = '';
                            window.scrollTo(0, 0); // Auto scroll to the top
                        }
                    } else if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {
                        const suggestionItems = document.querySelectorAll('#suggestionContainer1 .suggestion');
                        if (suggestionItems.length > 0) {
                            let selectedIndex = -1;
                            suggestionItems.forEach((item, index) => {
                                if (item.classList.contains('selected')) {
                                    selectedIndex = index;
                                }
                            });
                            if (selectedIndex !== -1) {
                                suggestionItems[selectedIndex].classList.remove('selected');
                            }
                            if (event.key === 'ArrowUp') {
                                selectedIndex = selectedIndex <= 0 ? suggestionItems.length - 1 : selectedIndex - 1;
                            } else if (event.key === 'ArrowDown') {
                                selectedIndex = selectedIndex >= suggestionItems.length - 1 ? 0 : selectedIndex + 1;
                            }

                            suggestionItems[selectedIndex].classList.add('selected');

                            searchInput1.value = suggestionItems[selectedIndex].textContent;
                        }
                    }
                }


                function showInfo(topic) {
                    document.getElementById('descriptionContainer1').style.display = 'block';
                    document.getElementById('info').textContent = topic;
                }

                document.getElementById('searchButton1').addEventListener('click', function () {
                    search();
                });

                document.getElementById('searchForm1').addEventListener('submit', function (event) {
                    event.preventDefault();
                    search();
                    const inputText = searchInput1.value.toLowerCase();
                    if (searchData1.hasOwnProperty(inputText)) {
                        showInfo(searchData1[inputText]);
                        searchInput1.value = '';
                    }
                });


                document.addEventListener('DOMContentLoaded', () => {
                    let body = document.body;
                    let toggleIcon = document.getElementById('toggle-icon');
                    let darkModeToggle = document.getElementById('dark-mode-toggle');

                    // Load dark mode preference from local storage
                    if (localStorage.getItem('darkMode') === 'enabled') {
                        body.classList.add('dark-mode');
                        body.classList.remove('light-mode');
                        toggleIcon.classList.remove('fa-moon');
                        toggleIcon.classList.add('fa-sun');
                    } else {
                        body.classList.add('light-mode');
                        body.classList.remove('dark-mode');
                        toggleIcon.classList.remove('fa-sun');
                        toggleIcon.classList.add('fa-moon');
                    }

                    // Toggle dark mode on button click
                    darkModeToggle.addEventListener('click', function () {
                        body.classList.toggle('dark-mode');
                        body.classList.toggle('light-mode');

                        if (body.classList.contains('dark-mode')) {
                            localStorage.setItem('darkMode', 'enabled');
                            toggleIcon.classList.remove('fa-moon');
                            toggleIcon.classList.add('fa-sun');
                        } else {
                            localStorage.setItem('darkMode', 'disabled');
                            toggleIcon.classList.remove('fa-sun');
                            toggleIcon.classList.add('fa-moon');
                        }
                    });
                });

                function toggleDropdown() {
                    var dropdown = document.getElementById("profileDropdown");
                    dropdown.classList.toggle("show");
                }

                $(document).ready(function () {
                    // Periksa status login dari localStorage
                    var isLoggedIn = localStorage.getItem('isLoggedIn');
                    if (isLoggedIn === 'true') { // Periksa dengan ketat untuk memastikan tipe data
                        $('.login-btn, .signup-btn').hide();
                        $('.profile-btn').show();

                        // Mengambil jalur gambar profil dari server
                        $.ajax({
                            url: 'get_profile_image.php',
                            method: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response.profileImage) {
                                    $('#profileIcon').attr('src', response.profileImage);
                                }
                            },
                            error: function () {
                                console.log('Error loading profile image');
                            }
                        });
                    } else {
                        $('.login-btn, .signup-btn').show();
                        $('.profile-btn').hide();
                    }
                });

                function logout() {
                    // Hapus status login dari localStorage
                    localStorage.removeItem('isLoggedIn');
                    // Redirect ke halaman login
                    window.location.href = 'login.php';
                }

                function toggleNavItem(button, contentId) {
                    var content = document.getElementById(contentId);
                    var caretDown = button.querySelector('.fa-caret-down');
                    var caretUp = button.querySelector('.fa-caret-up');
                    var menuBar = document.getElementById("menuBar");

                    var navContents = document.querySelectorAll('.nav-content');
                    navContents.forEach(function (navContent) {
                        if (navContent.id !== contentId) {
                            navContent.style.display = 'none';
                            var otherButton = document.querySelector(`[onclick="toggleNavItem(this, '${navContent.id}')"]`);
                            otherButton.querySelector('.fa-caret-down').style.display = 'inline-block';
                            otherButton.querySelector('.fa-caret-up').style.display = 'none';
                        }
                    });

                    if (content.style.display === 'none' || content.style.display === '') {
                        content.style.display = 'block';
                        menuBar.style.position = "absolute";
                        menuBar.style.zIndex = "-1";
                        button.classList.add('clicked');
                        caretDown.style.display = 'none';
                        caretUp.style.display = 'inline-block';
                    } else {
                        content.style.display = 'none';
                        menuBar.style.position = "fixed";
                        menuBar.style.zIndex = "500";
                        button.classList.remove('clicked');
                        caretDown.style.display = 'inline-block';
                        caretUp.style.display = 'none';
                    }
                }

                $(document).ready(function () {
                    $('#menuBar a').click(function () {
                        $('html, body').animate({ scrollTop: 0 }, 'fast', function () {
                            var target = $(this).attr('href');
                            $(target).show().siblings('.info-content').hide();
                        });
                    });
                });

                document.addEventListener('DOMContentLoaded', (event) => {
                    const navBtn = document.querySelector('.tnb-nav-btn');

                    navBtn.addEventListener('click', function (e) {
                        e.preventDefault();

                        if (navBtn.classList.contains('active')) {
                            navBtn.classList.remove('active');
                        } else {
                            document.querySelectorAll('.tnb-nav-btn.active').forEach(el => {
                                el.classList.remove('active');
                            });

                            navBtn.classList.add('active');
                        }
                    });
                });

                document.addEventListener('DOMContentLoaded', (event) => {
                    const menuLinks = document.querySelectorAll('.menu-bar a');

                    menuLinks.forEach(link => {
                        link.addEventListener('click', function (e) {
                            e.preventDefault();

                            menuLinks.forEach(link => link.classList.remove('active'));

                            this.classList.add('active');
                        });
                    });
                });

                const textContent = {
                    en: "Physics is a branch of natural science that studies the fundamental properties of the universe, including matter, energy, space, and time, and the interactions between them. It encompasses various sub-disciplines such as mechanics (the motion of objects and the forces acting upon them), thermodynamics (the relationship between heat and other forms of energy), electromagnetism (electric and magnetic fields and their interactions), optics (the properties and behavior of light), and quantum physics (the behavior of particles on the atomic and subatomic scale). The main goal of physics is to understand the fundamental laws that govern the universe, from the very small, like subatomic particles, to the very large, like galaxies and the cosmos. Physics not only aims to explain natural phenomena but also to predict the behavior of physical systems under various conditions.",
                    id: "Fisika adalah cabang ilmu pengetahuan alam yang mempelajari sifat dasar alam semesta, termasuk materi, energi, ruang, dan waktu, serta interaksi di antara mereka. Ini mencakup berbagai subdisiplin seperti mekanika (gerak benda dan gaya yang bekerja padanya), termodinamika (hubungan antara panas dan bentuk energi lainnya), elektromagnetisme (medan listrik dan magnet serta interaksinya), optika (sifat dan perilaku cahaya), dan fisika kuantum (perilaku partikel pada skala atom dan subatom). Tujuan utama fisika adalah memahami hukum-hukum fundamental yang mengatur alam semesta, dari yang sangat kecil seperti partikel subatomik hingga yang sangat besar seperti galaksi dan kosmos. Fisika tidak hanya bertujuan untuk menjelaskan fenomena alam tetapi juga untuk memprediksi perilaku sistem fisik dalam berbagai kondisi."
                };

                document.getElementById('btn-en').addEventListener('click', function () {
                    document.getElementById('translatable-text').innerText = textContent.en;
                    this.classList.add('active');
                    document.getElementById('btn-id').classList.remove('active');
                });

                document.getElementById('btn-id').addEventListener('click', function () {
                    document.getElementById('translatable-text').innerText = textContent.id;
                    this.classList.add('active');
                    document.getElementById('btn-en').classList.remove('active');
                });

                function toggleMenuInfo() {
                    var body = document.querySelector('body');
                    body.classList.toggle('overflow-hidden');
                }

                const searchData = {
                    "electric potential": "potensial_listrik",
                    "parabolic motion": "html",
                    "quantity & units": "javascript",
                    "vector": "vektor",
                    "straight motion": "geraklurus",
                    "business & energy": "usahadanenergi",
                    "coulomb's law": "coloumb",
                    "electric field": "medanlistrik",
                    "gauss's laws": "hukumgaus",
                    "relativity": "relativitas",
                    "magnetic field": "medanmagnet",
                    "cosmology": "kosmology",
                    "ohm's law": "ohm",
                    "capacitor": "kapasitor",
                    "electrical charge": "muatanlistrik",
                    "induction": "induksi",
                    "inductance": "induktansi",
                    "EM waves": "gelombangem",
                    "maxwell's equation": "persamaanmaxwell",
                    "difraction": "difraksi",
                };

                const searchInput = document.getElementById('searchInput');
                const suggestionContainer = document.getElementById('suggestionContainer');

                searchInput.addEventListener('input', function () {
                    const input = this.value.toLowerCase();
                    const suggestions = Object.keys(searchData).filter(key => key.toLowerCase().includes(input));

                    suggestionContainer.innerHTML = '';

                    if (input.length > 0) {
                        suggestions.forEach(suggestion => {
                            const suggestionElement = document.createElement('div');
                            suggestionElement.textContent = suggestion;
                            suggestionElement.classList.add('suggestion');

                            suggestionElement.onclick = () => {
                                searchInput.value = suggestion;
                                suggestionContainer.innerHTML = '';
                                showInfo(searchData[suggestion]);
                            };

                            suggestionContainer.appendChild(suggestionElement);
                        });
                    }
                });

                function search() {
                    const input = document.getElementById('searchInput').value.toLowerCase();
                    const suggestionContainer = document.getElementById('suggestionContainer');
                    suggestionContainer.innerHTML = '';
                    if (input.length > 0) {
                        const suggestions = Object.keys(searchData).filter(key => key.includes(input));
                        if (suggestions.length > 0) {
                            const ul = document.createElement('ul');
                            suggestions.forEach(suggestion => {
                                const li = document.createElement('li');
                                li.textContent = suggestion;
                                li.onmouseenter = () => {
                                    document.getElementById('searchInput').value = suggestion;
                                };
                                li.onclick = () => {
                                    document.getElementById('searchInput').value = '';
                                    suggestionContainer.innerHTML = '';
                                    showInfo(searchData[suggestion]);
                                };
                                ul.appendChild(li);
                            });
                            suggestionContainer.appendChild(ul);
                        }
                    }
                }

                searchInput.addEventListener('input', function () {
                    search();
                });

                searchInput.addEventListener('keydown', function (event) {
                    if (event.key === 'Enter') {
                        search();
                        const inputText = searchInput.value.toLowerCase();
                        if (searchData.hasOwnProperty(inputText)) {
                            showInfo(searchData[inputText]);
                            searchInput.value = '';
                        }
                    } else if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {
                        const suggestionItems = document.querySelectorAll('#suggestionContainer li');
                        if (suggestionItems.length > 0) {
                            let selectedIndex = -1;
                            suggestionItems.forEach((item, index) => {
                                if (item.classList.contains('selected')) {
                                    selectedIndex = index;
                                }
                            });
                            if (selectedIndex !== -1) {
                                suggestionItems[selectedIndex].classList.remove('selected');
                            }
                            if (event.key === 'ArrowUp') {
                                selectedIndex = selectedIndex <= 0 ? suggestionItems.length - 1 : selectedIndex - 1;
                            } else if
                                (event.key === 'ArrowDown') {
                                selectedIndex = selectedIndex >= suggestionItems.length - 1 ? 0 :
                                    selectedIndex + 1;
                            }

                            suggestionItems[selectedIndex].classList.add('selected');

                            searchInput.value = suggestionItems[selectedIndex].textContent;
                        }
                    }
                });

                searchForm.addEventListener('submit', function (event) {
                    event.preventDefault();
                    search();
                    const inputText = searchInput.value.toLowerCase();
                    if (searchData.hasOwnProperty(inputText)) {
                        showInfo(searchData[inputText]);
                        searchInput.value = '';
                    }
                });

                document.addEventListener("DOMContentLoaded", function () {
                    var swiper = new Swiper('.swiper-container', {
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        loop: true,
                    });
                });

                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; } slideIndex++; if
                        (slideIndex > slides.length) { slideIndex = 1 }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    } slides[slideIndex - 1].style.display = "block"; dots[slideIndex - 1].className += " active"
                        ; setTimeout(showSlides, 2000);
                } function isElementInViewport(el) {
                    var
                        rect = el.getBoundingClientRect(); return (rect.top >= 0 &&
                            rect.left >= 0 &&
                            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right
                            <= (window.innerWidth || document.documentElement.clientWidth));
                } function
                    addAnimationOnScroll() {
                    var slides = document.querySelectorAll('.swiper-slide');
                    slides.forEach(function (slide) {
                        if (isElementInViewport(slide) &&
                            slide.classList.contains('hidden')) { slide.classList.remove('hidden'); }
                    });
                }

                function showInfo(subject) {
                    const bodyElement = document.querySelector('body.homepage');
                    bodyElement.classList.add('hidden-overflow');
                    console.log("Mengklik bar dengan subjek:", subject);
                    var infoHeader = document.getElementById("info-header");
                    var infoContentHtml = document.getElementById("content-html");
                    var infoContentCss = document.getElementById("content-css");
                    var additionalInfoHtml = document.getElementById("additional-info-html");
                    var additionalInfoCss = document.getElementById("additional-info-css");
                    var additionalInfoJavaScript = document.getElementById("additional-info-javascript");
                    var additionalInfoPotensial = document.getElementById("additional-info-potensial");
                    var infoHeaderText = "";
                    var infoContentText = "";
                    1

                    // Menghapus deskripsi tambahan dari semua elemen jika ada
                    additionalInfoHtml.innerHTML = "";
                    additionalInfoCss.innerHTML = "";
                    additionalInfoJavaScript.innerHTML = "";
                    additionalInfoPotensial.innerHTML = "";
                    switch (subject) {
                        case "html":
                            infoHeaderText = "Parabolic Motion";
                            var infoContentText = `
                            V<sub>x</sub> = V<sub>0x</sub> = V<sub>0</sub> cos θ, dan X = V<sub>0x</sub> t = V<sub>0</sub> cos θ * t<br>
                            V<sub>y</sub> = V<sub>0y</sub> - g t<br>
                            Y = V<sub>0y</sub> t - ½ g t²
                        `;

                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = `
                            <p>Gerak parabola adalah salah satu jenis gerak yang terjadi ketika suatu benda dilemparkan ke udara dan bergerak di bawah pengaruh gravitasi bumi. Gerak ini merupakan hasil dari kombinasi dua gerak, yaitu gerak lurus beraturan (GLB) pada sumbu horizontal (x) dan gerak lurus berubah beraturan (GLBB) pada sumbu vertikal (y).</p>
                            <p>Pada gerak parabola, komponen horizontal (sumbu x) benda bergerak dengan kecepatan konstan karena tidak ada percepatan yang bekerja padanya. Ini disebut sebagai gerak lurus beraturan (GLB). Sementara itu, komponen vertikal (sumbu y) benda mengalami percepatan konstan akibat gravitasi bumi, yang menyebabkan gerak lurus berubah beraturan (GLBB).</p>
                            <p>Ketika sebuah benda dilemparkan dengan sudut tertentu terhadap permukaan bumi, lintasan yang dihasilkan akan membentuk kurva parabola. Hal ini dapat diamati pada berbagai fenomena sehari-hari, seperti lemparan bola dalam olahraga, gerakan air mancur, atau proyektil yang ditembakkan dari meriam.</p>
                            <p>Untuk lebih memahami konsep gerak parabola, mari kita tinjau beberapa rumus dasar dan contoh soal berikut:</p>
                        `;
                            var additionalInfoHeader = "<h2>Pengertian Gerak Parabola</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Komponen-Komponen Gerak Parabola</h2>";
                            var additionalInfoContent2 = `
                            <p>Gerak parabola dapat dianalisis dengan memisahkan gerakan menjadi dua komponen, yaitu komponen horizontal dan komponen vertikal:</p>
                            <ul>
                                <li><strong>Komponen Horizontal:</strong>
                                    <ul>
                                        <li>Kecepatan awal: v<sub>0x</sub> = v<sub>0</sub> cos α</li>
                                        <li>Kecepatan tetap: v<sub>x</sub> = v<sub>0x</sub> = v<sub>0</sub> cos α</li>
                                        <li>Jarak horizontal (x): x = v<sub>x</sub> t = (v<sub>0</sub> cos α) t</li>
                                    </ul>
                                </li>
                                <li><strong>Komponen Vertikal:</strong>
                                    <ul>
                                        <li>Kecepatan awal: v<sub>0y</sub> = v<sub>0</sub> sin α</li>
                                        <li>Kecepatan vertikal setelah waktu t: v<sub>y</sub> = v<sub>0y</sub> - g t = v<sub>0</sub> sin α - g t</li>
                                        <li>Jarak vertikal (y): y = v<sub>0y</sub> t - 1/2 g t<sup>2</sup> = (v<sub>0</sub> sin α) t - 1/2 g t<sup>2</sup></li>
                                        <li>Tinggi maksimum: H = (v<sub>0</sub> sin α)<sup>2</sup> / 2g</li>
                                    </ul>
                                </li>
                            </ul>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Contoh Soal Gerakan Parabola</h2>";
                            var additionalInfoContent3 = `
                            <p><strong>Contoh Soal:</strong> Sebuah bola ditendang dengan kecepatan awal 20 m/s, dengan sudut elevasi yang terbentuk antara lintasan bola dan sumbu x adalah 37° (sin 37° = 0,6 dan cos 37° = 0,8). Percepatan gravitasi adalah 10 m/s². Hitunglah tinggi maksimum dan jarak maksimum yang dapat dicapai oleh bola tersebut.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent4 = `
                            <p>Diketahui:</p>
                            <ul>
                                <li>Kecepatan awal, v<sub>0</sub> = 20 m/s</li>
                                <li>Sudut elevasi, α = 37°</li>
                                <li>Percepatan gravitasi, g = 10 m/s²</li>
                            </ul>
                            <p><strong>Langkah 1: Menentukan komponen kecepatan awal:</strong></p>
                            <ul>
                                <li>Komponen horizontal kecepatan awal (v<sub>0x</sub>): v<sub>0x</sub> = v<sub>0</sub> cos α = 20 * 0,8 = 16 m/s</li>
                                <li>Komponen vertikal kecepatan awal (v<sub>0y</sub>): v<sub>0y</sub> = v<sub>0</sub> sin α = 20 * 0,6 = 12 m/s</li>
                            </ul>
                            <p><strong>Langkah 2: Menghitung tinggi maksimum (H):</strong></p>
                            <p>Tinggi maksimum terjadi ketika kecepatan vertikal (v<sub>y</sub>) sama dengan nol:<br>
                            v<sub>y</sub> = v<sub>0y</sub> - g t<sub>puncak</sub> = 0<br>
                            0 = 12 - 10 t<sub>puncak</sub><br>
                            t<sub>puncak</sub> = 1,2 detik</p>
                            <p>Substitusi waktu puncak ke dalam persamaan tinggi maksimum:<br>
                            H = v<sub>0y</sub> t<sub>puncak</sub> - 1/2 g t<sub>puncak</sub><sup>2</sup><br>
                            H = 12 * 1,2 - 1/2 * 10 * (1,2)<sup>2</sup><br>
                            H = 14,4 - 1/2 * 10 * 1,44<br>
                            H = 14,4 - 7,2<br>
                            H = 7,2 m</p>
                            <p><strong>Langkah 3: Menghitung jarak maksimum (X):</strong></p>
                            <p>Jarak maksimum terjadi ketika bola kembali ke ketinggian awal. Total waktu di udara adalah dua kali waktu mencapai puncak:<br>
                            t<sub>total</sub> = 2 * t<sub>puncak</sub> = 2 * 1,2 = 2,4 detik</p>
                            <p>Substitusi waktu total ke dalam persamaan jarak horizontal:<br>
                            X = v<sub>0x</sub> * t<sub>total</sub><br>
                            X = 16 * 2,4<br>
                            X = 38,4 m</p>
                            <p>Jadi, tinggi maksimum yang dapat dicapai oleh bola adalah 7,2 m, dan jarak maksimum yang dapat dicapai bola adalah 38,4 m.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Aplikasi Gerak Parabola dalam Kehidupan Sehari-Hari</h2>";
                            var additionalInfoContent5 = `
                            <p>Gerak parabola tidak hanya penting dalam konteks fisika teoretis, tetapi juga memiliki berbagai aplikasi praktis dalam kehidupan sehari-hari. Berikut beberapa contoh:</p>
                            <ul>
                                <li><strong>Olahraga:</strong> Dalam banyak olahraga, seperti sepak bola, basket, dan tenis, pemahaman tentang gerak parabola membantu atlet dalam mengarahkan bola untuk mencapai target dengan tepat.</li>
                                <li><strong>Teknologi Militer:</strong> Peluncuran proyektil atau rudal memanfaatkan prinsip gerak parabola untuk menentukan lintasan yang akurat menuju target.</li>
                                <li><strong>Rekayasa:</strong> Insinyur menggunakan prinsip gerak parabola dalam desain berbagai sistem, seperti jalur ski air, lintasan roller coaster, dan sistem irigasi.</li>
                                <li><strong>Permainan Video:</strong> Dalam pengembangan permainan video, simulasi gerak parabola digunakan untuk memberikan pengalaman yang realistis dalam game yang melibatkan lemparan atau tembakan.</li>
                            </ul>
                            <p>Memahami gerak parabola memungkinkan kita untuk merancang, memprediksi, dan mengoptimalkan berbagai aktivitas dan teknologi yang melibatkan lintasan melengkung.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;
                            break;
                        case "javascript":
                            infoHeaderText = "Quantity & Units";
                            var infoContentText = `
                        1. Rumus Gerak Lurus (GL): <br>
                        - Rumus Jarak (S): S = v * t <br>
                        - Rumus Kecepatan (v): v = S / t <br>
                        - Rumus Waktu (t): t = S / v <br><br>

                        2. Besaran Fisika Dasar: <br>
                        - Panjang (L): satuan meter (m) <br>
                        - Massa (m): satuan kilogram (kg) <br>
                        - Waktu (t): satuan detik (s) <br><br>

                        3. Satuan Umum: <br>
                        - Panjang (L): meter (m) <br>
                        - Massa (m): kilogram (kg) <br>
                        - Waktu (t): detik (s) <br><br>
                        `;

                            // Menetapkan gaya CSS langsung untuk konten JavaScript
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Apa yang dimaksud dengan besaran? Besaran dalam fisika diartikan sebagai sesuatu yang dapat diukur, serta memiliki nilai dan satuan. Sementara itu, satuan digunakan sebagai pembanding dalam pengukuran. Dalam satuan, kita mengenal yang namanya Satuan Internasional (SI), yaitu satuan yang distandarisasi dan diakui penggunaannya secara internasional. Besaran dan satuan sangat penting dalam ilmu fisika karena mereka membantu kita untuk mengukur dan memahami fenomena alamiah serta kejadian di sekitar kita.</p>"
                            var additionalInfoHeader = "<h2>Pengertian Besaran dan Satuan</h2>"
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent

                            var additionalInfoHeader2 = "<h2>Contoh Soal Besaran Dan Satuan</h2>"
                            var additionalInfoContent2 = "<p>Bu Dwi membeli gula seberat 6 kg untuk dijual kembali. Kemudian, gula tersebut dimasukkan ke dalam 2 toples yang masing-masing memiliki kapasitas 3 liter. Dari pernyataan tersebut, tentukan besaran beserta nilai dan satuannya!</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>"
                            var additionalInfoContent3 = "<p>Pertama-tama, kita harus mengidentifikasi besaran-besaran yang terlibat dalam soal tersebut. Pada soal tersebut terdapat dua besaran, yaitu massa gula dan volume toples:<br><br>Besaran: Massa<br>Nilai besaran: 6 (enam)<br>Satuan: kg<br><br>Besaran: Volume<br>Nilai besaran: 3 (tiga)<br>Satuan: liter</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3

                            var additionalInfoHeader4 = "<h2>Penerapan Besaran dan Satuan dalam Kehidupan Sehari-hari</h2>"
                            var additionalInfoContent4 = "<p>Besaran dan satuan memiliki peran yang sangat penting dalam kehidupan sehari-hari. Contohnya, ketika kita berbelanja di supermarket, kita menggunakan berbagai satuan untuk mengukur berat (kg, gram) atau volume (liter). Begitu juga ketika kita mengendarai mobil, kita mengukur jarak tempuh menggunakan satuan kilometer. Penggunaan besaran dan satuan ini membantu kita dalam berinteraksi dengan lingkungan sekitar.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4

                            var additionalInfoHeader5 = "<h2>Konversi Satuan</h2>"
                            var additionalInfoContent5 = "<p>Seringkali kita perlu mengkonversi satu satuan ke satuan lainnya. Misalnya, ketika kita ingin mengkonversi 1 kilometer menjadi meter, kita tahu bahwa 1 kilometer sama dengan 1000 meter. Begitu pula ketika kita ingin mengkonversi 1 kilogram menjadi gram, kita tahu bahwa 1 kilogram sama dengan 1000 gram. Pemahaman tentang konversi satuan sangat penting dalam kehidupan sehari-hari.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5

                            var additionalInfoHeader6 = "<h2>Besaran Pokok dan Besaran Turunan</h2>"
                            var additionalInfoContent6 = "<p>Besaran pokok adalah besaran dasar yang tidak dapat dinyatakan dalam satuan-satuan besaran lainnya. Sedangkan, besaran turunan adalah besaran yang berasal dari hasil perkalian atau pembagian besaran pokok dengan besaran lainnya. Contoh besaran pokok adalah panjang, massa, dan waktu. Sementara luas, volume, dan kecepatan merupakan contoh besaran turunan.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6

                            var additionalInfoHeader7 = "<h2>Penggunaan Satuan Internasional (SI)</h2>"
                            var additionalInfoContent7 = "<p>Satuan Internasional (SI) adalah sistem satuan yang digunakan secara luas di seluruh dunia. Beberapa contoh satuan SI adalah meter (m) untuk panjang, kilogram (kg) untuk massa, dan detik (s) untuk waktu. Penggunaan SI memastikan bahwa pengukuran dapat dipahami secara konsisten di seluruh dunia.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7

                            var additionalInfoHeader8 = "<h2>Penerapan Konsep Besaran dalam Ilmu Pengetahuan Lain</h2>"
                            var additionalInfoContent8 = "<p>Konsep besaran dan satuan tidak hanya berlaku dalam fisika, tetapi juga dalam banyak disiplin ilmu lainnya. Misalnya, dalam kimia, kita menggunakan satuan seperti mol dan gram untuk mengukur jumlah zat. Dalam matematika, kita menggunakan konsep seperti meter persegi dan meter kubik untuk mengukur luas dan volume. Pengetahuan tentang besaran dan satuan sangat penting dalam berbagai aspek ilmu pengetahuan.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader8 + additionalInfoContent8

                            break;
                        case "potensial_listrik":
                            infoHeaderText = "Electric Potential";
                            infoContentText = "V = W Q = F ∗ R Q = Q ∗ E ∗ R Q = E ∗ R .";
                            // Menetapkan gaya CSS langsung untuk konten Potensial Listrik
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            var additionalInfoContent = "<p>Potensial listrik merupakan jumlah usaha yang akan diperlukan agar bisa memindahkan unit muatan dari titik referensi ke titik tertentu di dalam lapangan tanpa menghasilkan akselerasi. Titik referensi yang biasa digunakan adalah Bumi atau titik tanpa batas, namun titik apapun dapat juga digunakan. Ada alat yang bisa digunakan dalam mengukur potensial listrik ini, alat tersebut bernama Voltmeter. Alat akan dipasang secara paralel untuk bisa mengetahui beda potensial antara 2 ujung<br><br>V: beda potensial listrik atau tegangan (volt)<br>W: energi (joule)<br>Q: muatan listrik (Coulomb)";
                            var additionalInfoHeader = "<h2>Pengertian dan Rumus Potensial Listrik</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;
                            additionalInfoPotensial.style.fontFamily = "sans-serif";
                            additionalInfoPotensial.style.fontSize = "17px";

                            var additionalInfoHeader2 = "<h2>Contoh Soal Potensial Listrik</h2>";
                            var additionalInfoContent2 = "<p>Berikut ini adalah beberapa contoh soal mengenai potensial listrik beserta pembahasannya. <br><br>1. Sebuah muatan sebesar 6 Coulomb akan dipindahkan dari titik A ke titik B dengan usaha sebesar 10 Joule. Hitunglah beda potensial antara titik A dan B!</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Penyelesaian/Solusi</h2>";
                            var additionalInfoContent3 = "<p>Diketahui: <br>Q = 6 C <br>W = 10 J <br>Maka, dengan menggunakan rumus V = W/Q, maka hasil perhitungannya adalah: <br>V = 10/6 <br>V = 1,6 V <br><br>Dari hasil perhitungan ini, beda potensial antara titik A dan B adalah sebesar 1,6 Volt.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoContent4 = "<p>2. Dalam usaha untuk memindahkan muatan sebesar 20 Coulomb dari titik A ke titik B diperlukan usaha sebesar 400 Joule. Hitunglah potensial antara titik A dan B!<br><br>Diketahui: <br>Q = 20 C <br>W = 400 J <br>Maka, menggunakan rumus V = W/Q, maka hasil perhitungannya adalah: <br>V = 400/20 <br>V = 20 V <br><br>Dari hasil perhitungan ini, beda potensial antara titik A dan B adalah sebesar 20 Volt.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Penjelasan Lebih Lanjut</h2>";
                            var additionalInfoContent5 = "<p>Potensial listrik, atau tegangan listrik, adalah ukuran energi per muatan listrik pada suatu titik dalam medan listrik. Ini menunjukkan seberapa besar energi yang diperlukan untuk memindahkan muatan listrik dari satu titik ke titik lainnya dalam medan listrik. Dalam istilah sederhana, potensial listrik dapat dianggap sebagai 'tekanan listrik' yang mendorong muatan listrik untuk bergerak.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Unit Potensial Listrik</h2>";
                            var additionalInfoContent6 = "<p>Satuan SI untuk potensial listrik adalah Volt (V), yang didefinisikan sebagai satu joule energi yang diperlukan untuk memindahkan satu coulomb muatan listrik dari satu titik ke titik lainnya dalam medan listrik. Jadi, jika kita memiliki satu volt potensial listrik antara dua titik, itu berarti energi sebesar satu joule diperlukan untuk memindahkan satu coulomb muatan listrik dari titik satu ke titik lainnya.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Penerapan Potensial Listrik</h2>";
                            var additionalInfoContent7 = "<p>Potensial listrik memiliki banyak penerapan dalam kehidupan sehari-hari dan dalam berbagai bidang ilmu pengetahuan dan teknologi. Misalnya, potensial listrik digunakan dalam pembangkit listrik, elektronika, dan sistem komunikasi. Pemahaman tentang potensial listrik sangat penting dalam memahami berbagai fenomena elektromagnetik dan aplikasinya dalam teknologi modern.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            var additionalInfoHeader8 = "<h2>Hubungan antara Potensial Listrik dan Energi Potensial</h2>";
                            var additionalInfoContent8 = "<p>Energi potensial listrik (W) pada suatu titik dalam medan listrik dapat dihitung menggunakan rumus:<br><br>W = Q * V<br><br>Di mana:<br>W adalah energi potensial listrik (joule)<br>Q adalah muatan listrik (coulomb)<br>V adalah potensial listrik (volt)<br><br>Ini menunjukkan bahwa energi potensial listrik adalah hasil perkalian antara muatan listrik dan potensial listrik pada titik tertentu dalam medan listrik.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader8 + additionalInfoContent8;

                            var additionalInfoHeader9 = "<h2>Hubungan antara Potensial Listrik dan Medan Listrik</h2>";
                            var additionalInfoContent9 = "<p>Potensial listrik pada suatu titik dalam medan listrik merupakan ukuran energi per muatan pada titik tersebut. Medan listrik, di sisi lain, adalah gaya yang dialami oleh muatan listrik pada suatu titik dalam medan tersebut. Potensial listrik dan medan listrik saling terkait: perubahan dalam potensial listrik menyebabkan terjadinya medan listrik, dan sebaliknya, medan listrik dapat menyebabkan perubahan dalam potensial listrik.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader9 + additionalInfoContent9;

                            var additionalInfoHeader10 = "<h2>Efek Potensial Listrik dalam Tubuh Manusia</h2>";
                            var additionalInfoContent10 = "<p>Di dalam tubuh manusia, potensial listrik sangat penting untuk fungsi-fungsi biologis tertentu, termasuk aktivitas saraf dan kontraksi otot. Proses sinyal-sinyal listrik dalam sistem saraf dan otot bergantung pada potensial listrik yang dihasilkan oleh perbedaan ion di dalam sel dan di antara sel-sel.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader10 + additionalInfoContent10;

                            var additionalInfoHeader11 = "<h2>Referensi Potensial dalam Fisika</h2>";
                            var additionalInfoContent11 = "<p>Selain potensial listrik, ada juga konsep potensial gravitasi, potensial magnetik, dan potensial kimia. Potensial gravitasi merupakan ukuran energi per massa pada suatu titik dalam medan gravitasi. Potensial magnetik adalah ukuran energi per muatan pada suatu titik dalam medan magnetik. Potensial kimia adalah ukuran energi per mol pada suatu titik dalam medan kimia.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader11 + additionalInfoContent11;

                            break;
                        case "vektor":
                            infoHeaderText = "Vector"
                            infoContentText = "R = V1 + V2 (Penjumlahan dua vektor)<br>R = V1 – V2 (Pengurangan dua vektor)<br>V1 ⋅ V2 = |V1| ⋅ |V2| cos(α) (Rumus dot product dua vektor)<br>Jika α=0° maka R = |V1 + V2| (Penjumlahan dua vektor searah)<br>Jika α=180° maka R = |V1 - V2| (Pengurangan dua vektor berlawanan arah)<br>Jika α=120° dan V1 = V2 + V maka R = |V| (Penjumlahan dua vektor dengan sudut 120° dan magnitudo V)</p>"
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Vektor adalah besaran yang mempunyai nilai dan arah. Pada ilmu fisika, banyaknya nilai besaran pada vektor dipengaruhi oleh gaya, percepatan, perpindahan, momentum, serta kecepatan. Dari hal itu, didapatkan cara menghitung berupa rumus vektor.<br><br>Vektor juga tak hanya menunjukkan seberapa besar gaya yang ada, melainkan juga menunjukkan ke mana arah gayanya. Dengan mencari tahu vektor, maka seseorang akan tahu apakah gaya menekan, menarik, mengangkat, atau mendorong benda.</p>";
                            var additionalInfoHeader = "<h2>Pengertian Vektor</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Vektor</h2>";
                            var additionalInfoContent2 = "<p>Dua buah vektor gaya yang sama-sama besar masing-masing vektor besarnya adalah 10 Newton. Jika sudut yang terbentuk antara kedua vektor tersebut adalah 60°, tentukan besar nilai resultan vektor.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Diketahui: <br>F1 = 10 N<br>F2 = 10 N<br>α = 60°<br><br>Maka,<br><br>R = √(F1² + F2² + 2 * F1 * F2 * cos(α))<br>R = √(10² + 10² + 2 * 10 * 10 * cos(60°))<br>R = √(100 + 100 + 200 * 0.5)<br>R = √(100 + 100 + 100)<br>R = √300 = 10√3 Newton</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Sifat-Sifat Vektor</h2>";
                            var additionalInfoContent4 = "<p>Vektor memiliki beberapa sifat, di antaranya:<br><br>1. **Komutatif**: Sifat ini berarti urutan penjumlahan vektor tidak mempengaruhi hasil. Dengan kata lain, A + B = B + A.<br>2. **Asosiatif**: Sifat ini berarti hasil penjumlahan tiga vektor tidak bergantung pada cara pengelompokannya. Artinya, (A + B) + C = A + (B + C).<br>3. **Distributif terhadap perkalian dengan bilangan**: Sifat ini memungkinkan kita untuk mengambil faktor luar dari sebuah vektor. Artinya, a * (B + C) = a * B + a * C.<br>4. **Distributif terhadap penjumlahan vektor**: Sifat ini memungkinkan kita untuk mengambil faktor luar dari sebuah penjumlahan vektor. Artinya, a * (B + C) = a * B + a * C.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Rumus Vektor dalam Koordinat Kartesius</h2>";
                            var additionalInfoContent5 = "<p>Dalam koordinat kartesius, vektor dapat direpresentasikan sebagai kombinasi linear dari vektor-vektor satuan i, j, dan k. Dengan demikian, sebuah vektor A dapat dituliskan sebagai:<br><br>A = Axi + Ayj + Azk<br><br>Di mana Ax, Ay, dan Az adalah komponen-komponen vektor A pada sumbu x, y, dan z, sedangkan i, j, dan k adalah vektor-vektor satuan pada sumbu-sumbu yang bersangkutan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Penerapan Vektor dalam Fisika</h2>";
                            var additionalInfoContent6 = "<p>Vektor memiliki banyak penerapan dalam ilmu fisika. Beberapa contohnya termasuk dalam analisis gerak benda, penyelesaian masalah tentang gaya, momen, momen inersia, serta dalam mempelajari medan medan seperti medan gravitasi, medan listrik, dan medan magnetik.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Referensi Lengkap</h2>";
                            var additionalInfoContent7 = "<p>Untuk memahami lebih lanjut tentang vektor, Anda dapat merujuk ke buku-buku fisika dasar, materi online, atau sumber-sumber referensi lainnya yang membahas topik ini secara mendalam.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            var additionalInfoHeader8 = "<h2>Vektor dalam Bidang Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent8 = "<p>Vektor memiliki aplikasi luas dalam kehidupan sehari-hari, termasuk dalam navigasi, desain arsitektur, ilmu komputer (grafika komputer), dan rekayasa perangkat lunak (perancangan game).</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader8 + additionalInfoContent8;

                            var additionalInfoHeader9 = "<h2>Vektor dalam Bidang Teknik</h2>";
                            var additionalInfoContent9 = "<p>Dalam bidang teknik, vektor digunakan dalam berbagai aplikasi seperti analisis struktur, desain mesin, desain kendaraan, dan perencanaan jaringan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader9 + additionalInfoContent9;

                            var additionalInfoHeader10 = "<h2>Vektor dalam Bidang Sains</h2>";
                            var additionalInfoContent10 = "<p>Dalam ilmu pengetahuan, vektor digunakan dalam berbagai bidang termasuk fisika, kimia, biologi, dan astronomi. Dalam fisika, vektor digunakan untuk menganalisis gerak partikel, medan gaya, dan sistem dinamika. Dalam kimia, vektor digunakan untuk menggambarkan kekuatan dan arah reaksi kimia. Dalam biologi, vektor digunakan untuk memodelkan pola pertumbuhan dan pergerakan organisme. Dalam astronomi, vektor digunakan untuk menggambarkan gerak benda langit dan struktur alam semesta.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader10 + additionalInfoContent10;

                            var additionalInfoHeader11 = "<h2>Vektor dalam Bidang Teknologi</h2>";
                            var additionalInfoContent11 = "<p>Vektor memiliki peran penting dalam pengembangan teknologi modern. Dalam ilmu komputer, vektor digunakan untuk memodelkan grafika 2D dan 3D, pengolahan citra, kecerdasan buatan, dan analisis data. Dalam telekomunikasi, vektor digunakan untuk mengoptimalkan jaringan komunikasi, perutean data, dan analisis kinerja sistem.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader11 + additionalInfoContent11;

                            break;
                        case "geraklurus":
                            infoHeaderText = "Straight Motion"
                            infoContentText = "v = ∆x ÷ ∆t<br>v = s ÷ t"
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = `
                            <p>Gerak lurus adalah suatu jenis gerakan di mana sebuah benda berpindah posisi sepanjang lintasan garis lurus, tanpa adanya penyimpangan ke arah lain. Dalam fisika, gerak ini dikategorikan menjadi dua bentuk utama: gerak lurus beraturan (GLB) dan gerak lurus berubah beraturan (GLBB).</p>
                            <p>Gerak lurus beraturan (GLB) adalah jenis gerak lurus di mana benda bergerak dengan kecepatan konstan sehingga jarak yang ditempuh per satuan waktu selalu sama. Misalnya, ketika sebuah mobil bergerak lurus di jalan raya dengan kecepatan tetap 60 km/jam, itu adalah contoh dari gerak lurus beraturan.</p>
                            <p>Gerak lurus berubah beraturan (GLBB), di sisi lain, adalah gerak lurus di mana benda mengalami percepatan konstan sehingga kecepatan benda berubah secara teratur setiap saat. Misalnya, ketika sebuah mobil mulai bergerak dari keadaan diam dan mengalami percepatan sebesar 2 m/s², itu adalah contoh dari gerak lurus berubah beraturan.</p>
                            <p>Gerak lurus ini dipelajari dalam kinematika untuk memahami bagaimana posisi, kecepatan, dan percepatan benda berubah seiring waktu, serta untuk meramalkan perilaku gerakan berdasarkan persamaan dan prinsip-prinsip fisika.</p>
                            <p>Gerak lurus memiliki beberapa karakteristik yang penting untuk dipahami:</p>
                            <ul>
                                <li><strong>Posisi:</strong> Merupakan lokasi suatu benda pada lintasan gerakan pada suatu waktu tertentu. Dalam GLB, posisi bisa dihitung dengan mengalikan kecepatan konstan dengan waktu. Dalam GLBB, posisi benda dihitung dengan menggunakan persamaan gerak lurus berubah beraturan.</li>
                                <li><strong>Kecepatan:</strong> Dalam GLB, kecepatan benda selalu konstan. Dalam GLBB, kecepatan benda dapat berubah tergantung pada percepatan yang dialaminya.</li>
                                <li><strong>Percepatan:</strong> Dalam GLB, tidak ada percepatan karena kecepatan benda konstan. Dalam GLBB, percepatan benda selalu konstan sehingga kecepatan berubah secara teratur.</li>
                            </ul>
                            <p>Untuk lebih memahami konsep gerak lurus, mari kita tinjau beberapa contoh soal berikut:</p>
                        `;
                            var additionalInfoHeader = "<h2>Pengertian Gerak Lurus</h2>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Karakteristik Gerak Lurus</h2>";
                            var additionalInfoContent2 = `
                            <p>Gerak lurus memiliki beberapa karakteristik yang penting untuk dipahami:</p>
                            <ul>
                                <li><strong>Posisi:</strong> Merupakan lokasi suatu benda pada lintasan gerakan pada suatu waktu tertentu. Dalam GLB, posisi bisa dihitung dengan mengalikan kecepatan konstan dengan waktu. Dalam GLBB, posisi benda dihitung dengan menggunakan persamaan gerak lurus berubah beraturan.</li>
                                <li><strong>Kecepatan:</strong> Dalam GLB, kecepatan benda selalu konstan. Dalam GLBB, kecepatan benda dapat berubah tergantung pada percepatan yang dialaminya.</li>
                                <li><strong>Percepatan:</strong> Dalam GLB, tidak ada percepatan karena kecepatan benda konstan. Dalam GLBB, percepatan benda selalu konstan sehingga kecepatan berubah secara teratur.</li>
                            </ul>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Contoh Soal Gerak Lurus</h2>";
                            var additionalInfoContent3 = `
                            <p>Sebuah mobil bergerak lurus dengan percepatan 2 m/s². Pada saat t=0, mobil tersebut bergerak dari keadaan diam. Tentukan jarak yang ditempuh mobil setelah 5 detik!</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Pembahasan Gerak Lurus</h2>";
                            var additionalInfoContent4 = `
                            <p>Diketahui:</p>
                            <ul>
                                <li>Percepatan mobil (a) = 2 m/s²</li>
                                <li>Waktu (t) = 5 detik</li>
                                <li>Kecepatan awal (v<sub>0</sub>) = 0 m/s (karena mobil mulai dari keadaan diam)</li>
                        </ul>
                        <p>Langkah 1: Menghitung jarak yang ditempuh mobil dengan persamaan GLBB:<br>
                        s = v<sub>0</sub>t + 1/2at<sup>2</sup></p>
                        <p>Substitusi nilai yang diketahui:<br>
                        s = 0 * 5 + 1/2 * 2 * (5<sup>2</sup>)<br>
                        s = 0 + 1/2 * 2 * 25<br>
                        s = 0 + 1/2 * 50<br>
                        s = 25 m</p>
                        <p>Jadi, jarak yang ditempuh mobil setelah 5 detik adalah 25 meter.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Aplikasi Gerak Lurus dalam Kehidupan Sehari-Hari</h2>";
                            var additionalInfoContent5 = `
                            <p>Gerak lurus tidak hanya penting dalam konteks fisika teoretis, tetapi juga memiliki berbagai aplikasi praktis dalam kehidupan sehari-hari. Berikut beberapa contoh:</p>
                            <ul>
                                <li><strong>Lalu Lintas:</strong> Memahami konsep gerak lurus membantu dalam merancang sistem lalu lintas dan memprediksi kecelakaan serta pergerakan kendaraan di jalan raya.</li>
                                <li><strong>Olahraga:</strong> Pemain sepak bola, pelari, atau atlet lainnya sering menggunakan prinsip gerak lurus dalam strategi dan latihan mereka.</li>
                                <li><strong>Rekayasa Sipil:</strong> Dalam pembangunan jalan, jembatan, atau proyek konstruksi lainnya, pemahaman tentang gerak lurus penting dalam menghitung jarak, waktu, dan kecepatan.</li>
                                <li><strong>Industri:</strong> Pabrik otomatis dan perakitan menggunakan konsep gerak lurus untuk mengatur mesin dan proses produksi.</li>
                            </ul>
                            <p>Memahami gerak lurus memungkinkan kita untuk merancang, memprediksi, dan mengoptimalkan berbagai aktivitas dan teknologi yang melibatkan pergerakan dalam garis lurus.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            break;
                        case "usahadanenergi":
                            infoHeaderText = "Business & Energy";
                            infoContentText = "W = F × d × cos(θ)";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = `
                        <p>Usaha (W) mengacu pada seberapa banyak gaya yang diterapkan pada suatu benda untuk memindahkannya sejauh jarak tertentu. Dalam rumus matematisnya, usaha adalah hasil perkalian antara gaya yang diterapkan (F) dengan jarak yang ditempuh (d) dalam arah gaya tersebut. Secara matematis:</p>
                        <p>$$ W = F \\times d $$</p>
                        <p>Energi adalah kemampuan untuk melakukan usaha. Dalam sistem fisika, energi dapat mengambil berbagai bentuk, seperti energi kinetik (energi gerak), energi potensial (energi yang disimpan karena posisi atau keadaan), energi panas, energi listrik, dan sebagainya. Hukum kekekalan energi menyatakan bahwa energi tidak bisa diciptakan atau dimusnahkan, tetapi hanya dapat diubah bentuknya dari satu bentuk menjadi bentuk lainnya.</p>
                        <p>Usaha dan energi memiliki peranan penting dalam berbagai aspek kehidupan sehari-hari. Berikut adalah beberapa aplikasi usaha dan energi dalam kehidupan sehari-hari:</p>
                        <ul>
                            <li><strong>Penarikan tali:</strong> Ketika menarik sebuah benda menggunakan tali, usaha yang dilakukan adalah hasil dari gaya yang diterapkan pada tali dan jarak yang ditempuh oleh benda tersebut.</li>
                            <li><strong>Mengangkat barang:</strong> Ketika mengangkat barang ke rak, energi potensial gravitasi dari barang tersebut bertambah seiring dengan kenaikan ketinggian.</li>
                            <li><strong>Menggunakan alat listrik:</strong> Ketika menggunakan alat listrik seperti lampu atau komputer, energi listrik diubah menjadi energi cahaya atau energi yang diperlukan oleh komputer untuk berfungsi.</li>
                            <li><strong>Mengayuh sepeda:</strong> Ketika mengayuh sepeda, energi yang dihasilkan oleh otot kita diubah menjadi energi kinetik yang membuat sepeda bergerak.</li>
                            <li><strong>Menggunakan pegas:</strong> Ketika menarik pegas dan melepaskannya, energi potensial pegas diubah menjadi energi kinetik atau energi gerak.</li>
                            <li><strong>Perangkat elektronik:</strong> Smartphone, laptop, dan perangkat elektronik lainnya menggunakan energi baterai yang kemudian diubah menjadi energi listrik untuk menjalankan fungsi-fungsinya.</li>
                            <li><strong>Ketel listrik:</strong> Ketika menggunakan ketel listrik, energi listrik diubah menjadi energi panas yang digunakan untuk memanaskan air.</li>
                            <li><strong>Penggunaan motor:</strong> Ketika menggunakan motor, energi listrik diubah menjadi energi mekanik untuk menggerakkan mesin.</li>
                            <li><strong>Penarikan tenda:</strong> Ketika menarik tali pada tenda, energi yang dikeluarkan digunakan untuk memindahkan tenda dari satu tempat ke tempat lainnya.</li>
                            <li><strong>Penggunaan alat pengangkat:</strong> Ketika menggunakan forklift atau crane untuk mengangkat beban berat, energi yang dikeluarkan adalah hasil dari usaha untuk menggerakkan alat tersebut.</li>
                            <li><strong>Penggunaan alat bantu jalan:</strong> Ketika menggunakan eskalator atau tangga bergerak, energi listrik diubah menjadi energi mekanik untuk memindahkan orang dari satu tingkat ke tingkat yang lain.</li>
                        </ul>
                        <p>Memahami konsep usaha dan energi membantu kita dalam mengoptimalkan berbagai kegiatan sehari-hari dan merancang sistem yang lebih efisien.</p>
                    `;
                            var additionalInfoHeader = "<h2>Pengertian Usaha & Energi</h2>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Karakteristik Usaha & Energi</h2>";
                            var additionalInfoContent2 = `
                        <p>Usaha dan energi memiliki beberapa karakteristik yang penting untuk dipahami:</p>
                        <ul>
                            <li><strong>Usaha:</strong> Merupakan hasil dari perkalian antara gaya yang diterapkan pada suatu benda dan jarak yang ditempuh oleh benda tersebut sepanjang arah gaya.</li>
                            <li><strong>Energi:</strong> Kemampuan untuk melakukan usaha. Energi dapat berubah dari satu bentuk ke bentuk lainnya, tetapi jumlah total energi dalam sistem akan tetap konstan menurut hukum kekekalan energi.</li>
                        </ul>
                    `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Contoh Soal Usaha & Energi</h2>";
                            var additionalInfoContent3 = `
                        <p>Rini mendorong sebuah meja dengan gaya sebesar 150 N sehingga meja tersebut bisa berpindah sejauh 15 m. Sementara Biru mendorong meja yang memiliki massa dan ukuran yang sama dengan gaya 300 N dan meja tersebut berpindah sejauh 30 m. Berapakah besar usaha yang dilakukan oleh Rini dan Biru?</p>
                        <p>Jika diberikan bahwa gaya dorong dan perpindahan sejauh 15 m dan 30 m, kita dapat menggunakan rumus usaha:</p>
                        <p>$$ W = F \\times d $$</p>
                        <p>Untuk Rini:</p>
                        <p>$$ W_{Rini} = 150 \\, N \\times 15 \\, m = 2.250 \\, J $$</p>
                        <p>Untuk Biru:</p>
                        <p>$$ W_{Biru} = 300 \\, N \\times 30 \\, m = 9.000 \\, J $$</p>
                        <p>Jadi, besar usaha yang dilakukan oleh gaya dorong Rini adalah 2.250 J dan besar usaha yang dilakukan oleh gaya dorong Biru adalah 9.000 J.</p>
                    `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Pembahasan Contoh Soal Usaha & Energi</h2>";
                            var additionalInfoContent4 = `
                        <p>Untuk menghitung usaha, kita dapat menggunakan rumus:</p>
                        <p>$$ W = F \\times \\Delta s $$</p>
                        <p>Dimana:</p>
                        <ul>
                            <li>$$ W $$ adalah usaha (dalam joule)</li>
                            <li>$$ F $$ adalah gaya yang diterapkan (dalam newton)</li>
                            <li>$$ \\Delta s $$ adalah perubahan posisi (jarak yang ditempuh) (dalam meter)</li>
                        </ul>
                        <p>Untuk Rini:</p>
                        <p>$$ W_{Rini} = 150 \\, N \\times 15 \\, m = 2.250 \\, J $$</p>
                        <p>Untuk Biru:</p>
                        <p>$$ W_{Biru} = 300 \\, N \\times 30 \\, m = 9.000 \\, J $$</p>
                        <p>Jadi, besar usaha yang dilakukan oleh gaya dorong Rini adalah 2.250 J dan besar usaha yang dilakukan oleh gaya dorong Biru adalah 9.000 J.</p>
                    `;
                            var additionalInfoHeader5 = "<h2>Aplikasi Usaha & Energi dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = `
                        <p>Konsep usaha dan energi memiliki banyak aplikasi dalam kehidupan sehari-hari. Berikut ini adalah beberapa contoh penerapannya:</p>
                        <ul>
                            <li><strong>Mengayuh Sepeda:</strong> Ketika mengayuh sepeda, energi yang dihasilkan oleh otot kita diubah menjadi energi kinetik yang membuat sepeda bergerak. Semakin banyak kita mengayuh, semakin banyak pula usaha yang kita lakukan.</li>
                            <li><strong>Menggunakan Lift:</strong> Saat menggunakan lift, kita menggunakan usaha untuk mengangkat tubuh kita melawan gravitasi. Lift menggunakan energi listrik untuk mengubah energi listrik menjadi energi mekanik yang diperlukan untuk menggerakkan lift ke atas atau ke bawah.</li>
                            <li><strong>Menggunakan Alat Pemotong:</strong> Ketika menggunakan alat pemotong seperti gergaji atau gunting, kita melakukan usaha untuk memotong benda. Energi kita diubah menjadi energi mekanik yang dibutuhkan untuk memotong benda tersebut.</li>
                            <li><strong>Menggunakan Alat Elektronik:</strong> Ketika menggunakan alat elektronik seperti televisi atau mesin cuci, kita menggunakan energi listrik. Alat tersebut mengubah energi listrik menjadi energi yang diperlukan untuk menjalankan fungsinya.</li>
                            <li><strong>Memasak dengan Kompor Gas:</strong> Saat memasak dengan kompor gas, energi kimia dari gas diubah menjadi energi panas. Energi panas ini digunakan untuk memanaskan makanan yang dimasak.</li>
                            <li><strong>Menggunakan Mobil:</strong> Saat mengemudi mobil, mesin mobil mengubah energi kimia dari bahan bakar menjadi energi kinetik yang menggerakkan mobil. Semakin jauh kita berkendara, semakin banyak pula usaha yang dilakukan oleh mobil.</li>
                            <li><strong>Menggunakan Kipas Angin:</strong> Ketika menggunakan kipas angin, energi listrik diubah menjadi energi mekanik yang diperlukan untuk menggerakkan kipas. Sehingga udara sekitar bergerak dan memberikan efek pendinginan.</li>
                            <li><strong>Menggunakan Mesin Cuci:</strong> Saat menggunakan mesin cuci, energi listrik diubah menjadi energi mekanik yang menggerakkan mesin cuci. Mesin ini kemudian menggunakan usaha untuk mencuci pakaian yang dimasukkan.</li>
                            <li><strong>Menggunakan Lampu:</strong> Ketika menyalakan lampu, energi listrik diubah menjadi energi cahaya dan energi panas. Lampu menggunakan usaha untuk menghasilkan cahaya yang diperlukan.</li>
                            <li><strong>Menggunakan Kran Air:</strong> Ketika membuka kran air, energi listrik atau energi potensial gravitasi diubah menjadi energi kinetik yang mengalirkan air dari keran.</li>
                        </ul>
                        <p>Memahami konsep usaha dan energi membantu kita memahami bagaimana energi digunakan dalam kehidupan sehari-hari dan cara untuk mengoptimalkannya.</p>
                    `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            break;
                        case "coloumb":
                            infoHeaderText = "Coloumb's Law";
                            infoContentText = "F = K Q1.Q2 / R2";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = `
                            <p>Hukum Coulomb ditemukan oleh ahli fisika asal Prancis yang bernama Charles Augustin de Coulomb. Coulomb melakukan penelitian mengenai gaya yang ditimbulkan oleh dua benda yang diberi muatan listrik dan dipisahkan oleh jarak tertentu. Hukum Coulomb pada dasarnya menyatakan bahwa interaksi muatan listrik yang sejenis akan tolak-menolak, sedangkan muatan yang berlainan jenis akan tarik-menarik.</p>
                        `;
                            var additionalInfoHeader = "<h2>Pengertian Hukum Coulomb</h2>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Hukum Coulomb</h2>";
                            var additionalInfoContent2 = `
                            <p>Dua buah titik A dan B berjarak 3 meter, masing-masing bermuatan listrik +4 x 10<sup>-4</sup> C dan -1 x 10<sup>-4</sup> C. Titik C terletak di antara A dan B, berjarak 2 meter dari A dan bermuatan listrik +3 x 10<sup>-5</sup> C. Hitung besar gaya elektrostatis pada muatan di C!</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = `
                            <p>Kita dapat menggunakan hukum Coulomb untuk menghitung gaya elektrostatis pada muatan di C. Hukum Coulomb dinyatakan sebagai:</p>
                            <p>F = k × |q<sub>1</sub> × q<sub>2</sub>| / r<sup>2</sup></p>
                            <p>Di mana:</p>
                            <ul>
                                <li>F adalah gaya elektrostatis,</li>
                                <li>k adalah konstanta Coulomb, sebesar 9 × 10<sup>9</sup> Nm<sup>2</sup>/C<sup>2</sup>,</li>
                                <li>q<sub>1</sub> dan q<sub>2</sub> adalah muatan listrik, dan</li>
                                <li>r adalah jarak antara dua muatan.</li>
                            </ul>
                            <p>Untuk kasus ini, kita memiliki:</p>
                            <ul>
                                <li>q<sub>1</sub> = +4 × 10<sup>-4</sup> C,</li>
                                <li>q<sub>2</sub> = -1 × 10<sup>-4</sup> C, dan</li>
                                <li>r = 2 m.</li>
                            </ul>
                            <p>Masukkan nilai-nilai ini ke dalam rumus:</p>
                            <p>F = k × |q<sub>1</sub> × q<sub>2</sub>| / r<sup>2</sup></p>
                            <p>F = (9 × 10<sup>9</sup>) × |(4 × 10<sup>-4</sup>) × (-1 × 10<sup>-4</sup>)| / (2)<sup>2</sup></p>
                            <p>F = (9 × 10<sup>9</sup>) × (4 × 10<sup>-8</sup>) / 4</p>
                            <p>F = (9 × 10<sup>9</sup>) × (1 × 10<sup>-8</sup>)</p>
                            <p>F = 9 × 10<sup>1</sup> N = 90 N</p>
                            <p>Jadi, besar gaya elektrostatis pada muatan di C adalah 90 N.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent4 = `
                            <p>...</p>
                            <img src='https://cdn-web.ruangguru.com/landing-pages/assets/hs/contoh%20soal%20hukum%20coulomb%202.png' alt='gambar'>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Manfaat Hukum Coulomb dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = `
                            <p>Konsep Hukum Coulomb memiliki banyak manfaat dalam berbagai aspek kehidupan sehari-hari. Berikut beberapa contohnya:</p>
                            <ul>
                                <li><strong>Elektronika:</strong> Hukum Coulomb sangat penting dalam bidang elektronika, seperti dalam desain sirkuit listrik dan perangkat elektronik lainnya.</li>
                                <li><strong>Listrik Statis:</strong> Pemahaman tentang Hukum Coulomb membantu dalam menjelaskan fenomena listrik statis, seperti pada saat menggosokkan bahan-bahan tertentu untuk menghasilkan muatan listrik.</li>
                                <li><strong>Industri:</strong> Dalam industri, Hukum Coulomb digunakan dalam proses-proses yang melibatkan muatan listrik, seperti dalam produksi semikonduktor, pencetakan, dan lainnya.</li>
                                <li><strong>Telekomunikasi:</strong> Hukum Coulomb digunakan dalam perancangan antena dan peralatan telekomunikasi lainnya.</li>
                                <li><strong>Kesehatan:</strong> Dalam bidang kesehatan, pemahaman tentang Hukum Coulomb penting dalam penggunaan peralatan medis yang melibatkan listrik, seperti pada alat-alat elektrokardiogram (EKG) dan terapi listrik.</li>
                                <li><strong>Keamanan:</strong> Dalam bidang keamanan, Hukum Coulomb digunakan dalam perancangan sistem alarm dan detektor yang menggunakan prinsip listrik.</li>
                            </ul>
                            <p>Memahami Hukum Coulomb membantu kita dalam menerapkan konsep ini dalam berbagai aspek kehidupan sehari-hari dan memperluas cakupan pengetahuan kita dalam bidang fisika.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Aplikasi Hukum Coulomb dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent6 = `
                            <p>Hukum Coulomb memiliki berbagai aplikasi dalam kehidupan sehari-hari. Beberapa contohnya meliputi:</p>
                            <ul>
                                <li><strong>Elektronika:</strong> Hukum Coulomb digunakan dalam desain dan pemahaman sirkuit elektronik, seperti transistor, kapasitor, dan resistor.</li>
                                <li><strong>Kelistrikan Rumah Tangga:</strong> Dalam instalasi listrik rumah tangga, Hukum Coulomb digunakan untuk memahami perilaku arus listrik dan pemilihan peralatan listrik yang tepat.</li>
                                <li><strong>Penyimpanan dan Distribusi Energi:</strong> Dalam industri energi, Hukum Coulomb diterapkan dalam desain dan pengoperasian pembangkit listrik, transformator, dan jaringan distribusi listrik.</li>
                                <li><strong>Peralatan Elektronik:</strong> Berbagai perangkat elektronik seperti ponsel, komputer, dan peralatan rumah tangga lainnya menggunakan prinsip Hukum Coulomb dalam operasinya.</li>
                                <li><strong>Kesehatan:</strong> Dalam bidang medis, Hukum Coulomb digunakan dalam peralatan diagnostik seperti MRI (Magnetic Resonance Imaging) dan dalam terapi seperti penggunaan defibrilator.</li>
                                <li><strong>Industri Manufaktur:</strong> Hukum Coulomb digunakan dalam berbagai proses manufaktur yang melibatkan pemakaian listrik, seperti proses pemotongan, pengelasan, dan pencetakan.</li>
                            </ul>
                            <p>Penerapan Hukum Coulomb dalam kehidupan sehari-hari memainkan peran penting dalam berbagai aspek teknologi dan aplikasi fisika modern.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Ilmuwan Penemu Hukum Coulomb</h2>";
                            var additionalInfoContent7 = `
                            <p>Hukum Coulomb ditemukan oleh fisikawan Prancis bernama Charles-Augustin de Coulomb pada tahun 1785. Coulomb menemukan bahwa gaya elektrostatik antara dua muatan benda sebanding dengan hasil perkalian kedua muatan tersebut dan sebaliknya sebanding dengan kuadrat jarak antara keduanya. Hukum Coulomb memberikan dasar untuk memahami interaksi listrik antara muatan listrik dan telah menjadi salah satu hukum dasar dalam elektrostatika.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;


                            break;
                        case "medanlistrik":
                            infoHeaderText = "Electric Field";
                            infoContentText = "E = F/q.";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Medan listrik adalah suatu konsep dalam fisika yang mengacu pada wilayah di sekitar suatu benda bermuatan di mana gaya listrik akan mempengaruhi benda-benda lain yang ditempatkan di dalamnya. Medan listrik dihasilkan oleh adanya muatan listrik, baik itu muatan positif atau negatif. Konsep ini berdasarkan pada prinsip bahwa setiap muatan listrik menciptakan medan listrik di sekitarnya, yang kemudian mempengaruhi muatan lainnya dalam medan tersebut. Medan listrik diukur dalam satuan volt per meter (V/m), yang menunjukkan kuatnya medan listrik pada suatu titik dalam ruang. Secara matematis, medan listrik di suatu titik dapat dihitung menggunakan hukum Coulomb, yang menyatakan bahwa gaya listrik antara dua muatan sebanding dengan hasil perkalian kedua muatan tersebut dan sebaliknya sebanding dengan kuadrat jarak antara keduanya, dengan arah gaya sejajar dengan garis yang menghubungkan kedua muatan tersebut. Medan listrik digunakan dalam berbagai aplikasi, mulai dari pengisian baterai hingga operasi perangkat listrik dan elektronik lainnya, serta memainkan peran penting dalam pemahaman tentang interaksi listrik antara benda-benda di alam semesta.</p>";
                            var additionalInfoHeader = "<h2>Pengertian Medan Listrik</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Medan Listrik</h2>";
                            var additionalInfoContent2 = "<p>Sebuah muatan +5 µC ditempatkan pada titik A(2,3) dalam sistem koordinat kartesian dua dimensi. Sebuah muatan -3 µC ditempatkan pada titik B(-1,2). Hitunglah:</p><ol><li>Medan listrik di titik B</li><li>Gaya yang dialami muatan +5 µC jika diletakkan pada titik C(4,4)</li></ol>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p><strong>Soal 1:</strong><br>Untuk menghitung medan listrik di titik B(-1,2), Anda dapat menggunakan rumus medan listrik yang dihasilkan oleh muatan +5 µC pada titik A(2,3) dan kemudian menghitung vektor medan listrik di titik B. Pastikan untuk menggunakan prinsip superposisi dan memperhitungkan arah vektor medan listrik sesuai dengan posisi relatif muatan dan titik pengamatan.</p>";
                            additionalInfoContent3 += "<p>Diketahui:</p><ul><li>q<sub>1</sub> = +5 µC</li><li>q<sub>2</sub> = -3 µC</li><li>r = √[(-1 - 2)² + (2 - 3)²] = √[9 + 1] = √10</li><li>k = 9 × 10<sup>9</sup> Nm<sup>2</sup>/C<sup>2</sup></li></ul>";
                            additionalInfoContent3 += "<p>Masukkan nilai-nilai ini ke dalam rumus:</p>";
                            additionalInfoContent3 += "<p>F = k × |q<sub>1</sub> × q<sub>2</sub>| / r<sup>2</sup></p>";
                            additionalInfoContent3 += "<p>F = (9 × 10<sup>9</sup>) × |(5 × 10<sup>-6</sup>) × (-3 × 10<sup>-6</sup>)| / ( √10 )<sup>2</sup></p>";
                            additionalInfoContent3 += "<p>F = (9 × 10<sup>9</sup>) × (15 × 10<sup>-12</sup>) / 10</p>";
                            additionalInfoContent3 += "<p>F = 13,5 × 10<sup>-3</sup> N = 13,5 mN</p>";
                            additionalInfoContent3 += "<p>Jadi, besar medan listrik pada titik B adalah 13,5 mN.</p>";

                            additionalInfoContent3 += "<hr>";

                            additionalInfoContent3 += "<p><strong>Soal 2:</strong><br>Untuk menghitung gaya yang dialami oleh muatan +5 µC jika diletakkan pada titik C(4,4), Anda dapat menggunakan rumus gaya Coulomb yang berlaku antara dua muatan listrik. Pastikan untuk memperhitungkan arah dan besar gaya sesuai dengan posisi muatan dan titik pengamatan.</p>";
                            additionalInfoContent3 += "<p>Diketahui:</p><ul><li>q<sub>1</sub> = +5 µC</li><li>q<sub>2</sub> = -3 µC</li><li>r = √[(4 - 2)² + (4 - 3)²] = √[2² + 1²] = √5</li><li>k = 9 × 10<sup>9</sup> Nm<sup>2</sup>/C<sup>2</sup></li></ul>";
                            additionalInfoContent3 += "<p>Masukkan nilai-nilai ini ke dalam rumus:</p>";
                            additionalInfoContent3 += "<p>F = k × |q<sub>1</sub> × q<sub>2</sub>| / r<sup>2</sup></p>";
                            additionalInfoContent3 += "<p>F = (9 × 10<sup>9</sup>) × |(5 × 10<sup>-6</sup>) × (-3 × 10<sup>-6</sup>)| / ( √5 )<sup>2</sup></p>";
                            additionalInfoContent3 += "<p>F = (9 × 10<sup>9</sup>) × (15 × 10<sup>-12</sup>) / 5</p>";
                            additionalInfoContent3 += "<p>F = 27 × 10<sup>-3</sup> N = 27 mN</p>";
                            additionalInfoContent3 += "<p>Jadi, besar gaya yang dialami oleh muatan +5 µC jika diletakkan pada titik C(4,4) adalah 27 mN.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Penerapan Medan Listrik dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent4 = `
                            <p>Medan listrik memiliki banyak penerapan dalam kehidupan sehari-hari. Berikut adalah beberapa contohnya:</p>
                            <ul>
                                <li><strong>Pengisian Baterai:</strong> Dalam pengisian baterai, medan listrik digunakan untuk mengarahkan aliran muatan listrik ke baterai sehingga dapat diisi ulang.</li>
                                <li><strong>Pengoperasian Perangkat Listrik:</strong> Medan listrik digunakan dalam pengoperasian perangkat listrik seperti lampu, kipas angin, dan peralatan rumah tangga lainnya.</li>
                                <li><strong>Elektronika:</strong> Dalam bidang elektronika, medan listrik digunakan dalam desain dan fungsi berbagai komponen, seperti transistor, kapasitor, dan resistor.</li>
                                <li><strong>Pemindaian MRI:</strong> Dalam bidang medis, medan listrik digunakan dalam pemindaian MRI (Magnetic Resonance Imaging) untuk menghasilkan gambaran bagian dalam tubuh manusia dengan menggunakan medan magnet dan gelombang radio.</li>
                                <li><strong>Pendeteksian Muatan:</strong> Medan listrik digunakan dalam alat-alat detektor muatan listrik, seperti detektor asap dan detektor gerak.</li>
                                <li><strong>Industri Manufaktur:</strong> Dalam industri, medan listrik digunakan dalam proses manufaktur yang melibatkan penggunaan listrik, seperti pemotongan, pengelasan, dan pencetakan.</li>
                            </ul>
                            <p>Penerapan medan listrik dalam kehidupan sehari-hari memainkan peran penting dalam berbagai aspek teknologi dan aplikasi fisika modern.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Aplikasi Medan Listrik dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = `
                            <p>Medan listrik memiliki berbagai aplikasi dalam kehidupan sehari-hari. Beberapa contohnya meliputi:</p>
                            <ul>
                                <li><strong>Pengisian Baterai:</strong> Dalam pengisian baterai, medan listrik digunakan untuk mengarahkan arus listrik ke baterai sehingga dapat diisi ulang.</li>
                                <li><strong>Elektronika:</strong> Dalam bidang elektronika, medan listrik digunakan dalam desain dan fungsi berbagai komponen, seperti transistor, kapasitor, dan resistor.</li>
                                <li><strong>Penggunaan Sensor:</strong> Medan listrik digunakan dalam berbagai sensor, seperti sensor sentuhan dan sensor jarak, untuk mendeteksi perubahan medan listrik dan menghasilkan respons yang sesuai.</li>
                                <li><strong>Pendeteksian Muatan:</strong> Medan listrik digunakan dalam alat-alat detektor muatan listrik, seperti detektor asap dan detektor gerak.</li>
                                <li><strong>Pemindaian MRI:</strong> Dalam bidang medis, medan listrik digunakan dalam pemindaian MRI (Magnetic Resonance Imaging) untuk menghasilkan gambaran bagian dalam tubuh manusia dengan menggunakan medan magnet dan gelombang radio.</li>
                                <li><strong>Industri Manufaktur:</strong> Dalam industri, medan listrik digunakan dalam berbagai proses manufaktur yang melibatkan penggunaan listrik, seperti pemotongan, pengelasan, dan pencetakan.</li>
                            </ul>
                            <p>Penerapan medan listrik dalam kehidupan sehari-hari memainkan peran penting dalam berbagai aspek teknologi dan aplikasi fisika modern.</p>
                        `;
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;
                            break;
                        case "hukumgaus":
                            infoHeaderText = "Gauss's Law";
                            infoContentText = "ΦE​ = ε0​Qtotal​";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Medan listrik adalah suatu konsep dalam fisika yang mengacu pada wilayah di sekitar suatu benda bermuatan di mana gaya listrik akan mempengaruhi benda-benda lain yang ditempatkan di dalamnya. Medan listrik dihasilkan oleh adanya muatan listrik, baik itu muatan positif atau negatif. <br><br>Konsep ini berdasarkan pada prinsip bahwa setiap muatan listrik menciptakan medan listrik di sekitarnya, yang kemudian mempengaruhi muatan lainnya dalam medan tersebut. Medan listrik diukur dalam satuan volt per meter (V/m), yang menunjukkan kuatnya medan listrik pada suatu titik dalam ruang. Secara matematis, medan listrik di suatu titik dapat dihitung menggunakan hukum Coulomb, yang menyatakan bahwa gaya listrik antara dua muatan sebanding dengan hasil perkalian kedua muatan tersebut dan sebaliknya sebanding dengan kuadrat jarak antara keduanya, dengan arah gaya sejajar dengan garis yang menghubungkan kedua muatan tersebut.<br><br>Medan listrik digunakan dalam berbagai aplikasi, mulai dari pengisian baterai hingga operasi perangkat listrik dan elektronik lainnya, serta memainkan peran penting dalam pemahaman tentang interaksi listrik antara benda-benda di alam semesta. <br><br>Hukum Gauss adalah prinsip fundamental dalam bidang elektromagnetisme yang menyediakan kerangka kerja matematis untuk memahami distribusi medan listrik yang dihasilkan oleh muatan listrik. Prinsip ini menyatakan bahwa fluks medan listrik melalui permukaan tertutup adalah proporsional dengan jumlah muatan total yang terkurung di dalam permukaan tersebut, dan tidak bergantung pada bentuk atau ukuran permukaan tersebut. Dengan kata lain, jika kita mengamati permukaan tertutup dalam sebuah medan listrik, fluks medan listrik yang melaluinya akan sebanding dengan jumlah muatan total yang terkurung di dalam permukaan tersebut, dan tidak tergantung pada geometri permukaan tersebut. <br><br>Dengan menggunakan hukum Gauss, kita dapat menghitung medan listrik yang dihasilkan oleh distribusi muatan yang simetris, seperti bola bermuatan atau kawat berujung tumpul, dengan lebih mudah daripada menggunakan pendekatan integral langsung. Penerapan hukum Gauss membantu memperkuat pemahaman tentang sifat-sifat medan listrik dan memungkinkan analisis yang lebih sistematis terhadap berbagai situasi elektrostatika dalam fisika. Prinsip ini telah menjadi alat yang sangat berguna dalam pemecahan masalah dalam bidang ilmu pengetahuan dan teknologi yang bergantung pada pemahaman tentang medan listrik, seperti dalam perancangan sirkuit listrik, telekomunikasi, dan berbagai aplikasi teknologi modern lainnya.</p>";
                            var additionalInfoHeader = "<h2>Pengertian Hukum Gauss</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Hukum Gauss</h2>";
                            var additionalInfoContent2 = "<p>Sebuah bola bermuatan dengan muatan total Q terletak di tengah-tengah sebuah silinder yang memiliki muatan total 2Q. Hitunglah medan listrik di sepanjang sumbu silinder.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Dengan menggunakan prinsip simetri, kita dapat menyimpulkan bahwa medan listrik di sepanjang sumbu silinder adalah konstan. Karena bola bermuatan hanya memberikan kontribusi medan listrik di dalam silinder, kita dapat mengabaikan kontribusi dari bola tersebut dalam menghitung medan listrik di sepanjang sumbu silinder. Oleh karena itu, medan listrik di sepanjang sumbu silinder hanya disebabkan oleh muatan pada silinder itu sendiri.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Penerapan Hukum Gauss</h2>";
                            var additionalInfoContent4 = "<p>Hukum Gauss digunakan dalam berbagai aplikasi fisika dan teknik. Misalnya, dalam perancangan kapasitor, hukum ini membantu menentukan distribusi medan listrik di antara pelat-pelat konduktor. Dalam fisika partikel, hukum Gauss membantu memahami interaksi antara muatan dalam medan listrik pada skala subatom. Selain itu, hukum ini juga diterapkan dalam analisis medan listrik di sekitar struktur geometri kompleks, seperti konduktor berongga dan isolator dengan distribusi muatan yang tidak merata.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Latihan Soal</h2>";
                            var additionalInfoContent5 = "<p>Sebuah permukaan tertutup berbentuk kubus dengan sisi sepanjang 2 meter terletak di dalam medan listrik yang homogen dengan kerapatan fluks sebesar 5 x 10^3 N/C. Jika terdapat muatan sebesar 10^-6 C di dalam kubus tersebut, hitunglah fluks total medan listrik melalui permukaan kubus.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Pembahasan Latihan Soal</h2>";
                            var additionalInfoContent6 = "<p>Untuk menghitung fluks total medan listrik melalui permukaan kubus, kita dapat menggunakan hukum Gauss yang menyatakan bahwa fluks total Φ_E melalui permukaan tertutup sebanding dengan muatan total Q yang terkurung di dalamnya:</p>";
                            additionalInfoContent6 += "<p>Φ_E = Q / ε_0</p>";
                            additionalInfoContent6 += "<p>Di mana:</p>";
                            additionalInfoContent6 += "<ul><li>Φ_E adalah fluks medan listrik,</li><li>Q adalah muatan total di dalam permukaan, dan</li><li>ε_0 adalah permitivitas vakum (8.85 x 10^-12 C^2/N·m^2).</li></ul>";
                            additionalInfoContent6 += "<p>Masukkan nilai-nilai yang diketahui:</p>";
                            additionalInfoContent6 += "<p>Φ_E = (10^-6 C) / (8.85 x 10^-12 C^2/N·m^2)</p>";
                            additionalInfoContent6 += "<p>Φ_E = 1.13 x 10^5 N·m^2/C</p>";
                            additionalInfoContent6 += "<p>Jadi, fluks total medan listrik melalui permukaan kubus adalah 1.13 x 10^5 N·m^2/C.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;
                            var additionalInfoHeader7 = "<h2>Aplikasi Hukum Gauss dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent7 = "<p>Hukum Gauss memiliki berbagai aplikasi dalam kehidupan sehari-hari dan teknologi modern. Berikut beberapa contohnya:<br><br><ul><li><strong>Desain Kapasitor:</strong> Hukum Gauss digunakan untuk menghitung medan listrik dan kapasitansi pada kapasitor, yang merupakan komponen penting dalam sirkuit elektronik.</li><br><li><strong>Medan Listrik di Sekitar Kabel:</strong> Hukum Gauss membantu dalam menentukan distribusi medan listrik di sekitar kabel listrik, yang penting dalam desain sistem transmisi listrik.</li><br><li><strong>Telekomunikasi:</strong> Dalam industri telekomunikasi, hukum Gauss digunakan untuk memahami distribusi medan listrik di sekitar antena dan komponen lainnya.</li><br><li><strong>Perancangan Perisai Elektrostatis:</strong> Hukum Gauss membantu insinyur merancang perisai yang melindungi perangkat elektronik dari gangguan elektromagnetik.</li><br><li><strong>Penggunaan dalam MRI:</strong> Dalam teknologi pencitraan resonansi magnetik (MRI), hukum Gauss digunakan untuk memahami distribusi medan listrik dan magnetik yang kompleks.</li></ul></p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "relativitas":
                            infoHeaderText = "Relativity";
                            infoContentText = "E = mc2";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Teori relativitas, yang diperkenalkan oleh fisikawan Albert Einstein pada awal abad ke-20, adalah kerangka kerja konseptual yang mengubah pemahaman kita tentang waktu, ruang, dan gravitasi. Teori ini terdiri dari dua cabang utama: relativitas khusus dan relativitas umum.<br><br><br>Relativitas khusus, yang diperkenalkan oleh Einstein pada tahun 1905, menyatakan bahwa hukum fisika memiliki bentuk yang sama dalam semua sistem acuan inersia (yaitu sistem acuan yang bergerak dengan kecepatan konstan relatif terhadap satu sama lain). Poin inti dari relativitas khusus adalah bahwa tidak ada kerangka referensi yang benar-benar mutlak; semua pengukuran waktu, ruang, dan kecepatan bergantung pada kerangka referensi pengamat. Relativitas khusus menghasilkan efek menarik seperti dilatasi waktu, di mana waktu berjalan lebih lambat bagi benda yang bergerak relatif terhadap pengamat yang diam, serta kontraksi panjang, di mana benda yang bergerak relatif terhadap pengamat akan tampak lebih pendek dalam arah geraknya.<br><br><br>Relativitas umum, yang dikembangkan oleh Einstein sekitar tahun 1915, mengembangkan konsep relativitas khusus ke dalam kerangka yang mencakup gravitasi. Teori ini menyatakan bahwa gravitasi tidak hanya merupakan gaya yang menarik benda-benda bersama-sama, tetapi juga merupakan hasil dari lengkungan ruang-waktu oleh massa dan energi. Dalam relativitas umum, massa dan energi menerapkan tekanan pada ruang-waktu, yang menyebabkan benda-benda untuk bergerak di sepanjang jalur yang dikenal sebagai lintasan geodesik dalam ruang-waktu yang melengkung.<br><br><br>Secara keseluruhan, teori relativitas merupakan tonggak penting dalam perkembangan fisika modern, menggambarkan hubungan fundamental antara ruang, waktu, dan gravitasi, serta memberikan dasar bagi banyak aspek penting dalam fisika teoretis dan observasional.</p>"
                            var additionalInfoHeader = "<h2>Pengertian Relativitas</h2>"
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent

                            var additionalInfoHeader2 = "<h2>Contoh Soal Relativitas</h2>";
                            var additionalInfoContent2 = "<p>Seorang pengamat di bumi melihat dua pesawat antariksa A dan B yang bergerak berlawanan arah mendekati bumi dengan kelajuan masing-masing 0,5c dan 0,6c. Maka, berapa kelajuan pesawat A menurut pilot di pesawat B dan berapa kelajuan pesawat B menurut pilot di pesawat A.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>"
                            var additionalInfoContent3 = "<p>Kelajuan pesawat A menurut pilot B, bisa diselesaikan dengan persamaan berikut:<br><br>Vab = (Va + Vb)/ (1 + ((Va. Vb)/c^2)) <br><br>= (0,5c + 0,6c) / (1 + ((0,5c . 0,6c)/c^2)) <br><br>= 1,1c / (1 + 0,3)<br><br>= 1,1c / 1,3<br><br>= 0,85c. <br><br>Jadi, kelajuan pesawat A menurut pilot B adalah 0,85c. <br><br><br>Kelajuan pesawat B menurut pilot A, bisa diselesaikan dengan persamaan berikut: <br><br>Vba = (Vb + Va)/ (1 + ((Vb. Va)/c^2))<br><br>= (0,6c + 0,5c) / (1 + ((0,6c . 0,5c)/c^2))<br><br>= 1,1c / (1 + 0,3)<br><br>= 1,1c / 1,3<br><br>= 0,85c. <br><br>Jadi, kelajuan pesawat B menurut pilot A adalah 0,85c.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3

                            var additionalInfoHeader4 = "<h2>Konsep Waktu dan Ruang dalam Relativitas</h2>";
                            var additionalInfoContent4 = "<p>Dalam teori relativitas, konsep waktu dan ruang menjadi relatif terhadap pengamat. Ini berarti bahwa pengukuran waktu dan ruang dapat bervariasi tergantung pada kecepatan relatif antara pengamat dan objek yang diamati. Dilatasi waktu dan kontraksi panjang adalah dua efek utama dari relativitas khusus yang menunjukkan bahwa waktu dapat melambat dan panjang dapat berkurang untuk objek yang bergerak dengan kecepatan tinggi. Efek-efek ini telah dikonfirmasi oleh banyak eksperimen, termasuk pengamatan partikel subatom yang bergerak mendekati kecepatan cahaya dan perjalanan pesawat ruang angkasa yang melintasi planet kita.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4

                            var additionalInfoHeader5 = "<h2>Implikasi Relativitas dalam Teknologi</h2>";
                            var additionalInfoContent5 = "<p>Teori relativitas memiliki dampak besar pada teknologi modern. Salah satu contoh paling terkenal adalah sistem Global Positioning System (GPS). GPS bekerja dengan menggunakan satelit yang mengorbit bumi, dan kecepatan serta ketinggian satelit tersebut menyebabkan mereka mengalami dilatasi waktu relatif terhadap pengamat di bumi. Algoritma GPS harus memperhitungkan efek-efek relativistik ini untuk memberikan lokasi yang akurat. Tanpa penyesuaian relativistik, kesalahan posisi yang dihasilkan oleh GPS bisa mencapai beberapa kilometer.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5

                            var additionalInfoHeader6 = "<h2>Relativitas dalam Astrofisika</h2>";
                            var additionalInfoContent6 = "<p>Dalam astrofisika, teori relativitas umum digunakan untuk menjelaskan fenomena seperti lubang hitam, lensa gravitasi, dan ekspansi alam semesta. Lubang hitam adalah objek dengan gravitasi yang sangat kuat sehingga bahkan cahaya tidak bisa lolos darinya. Teori relativitas umum juga menjelaskan bagaimana cahaya dibengkokkan oleh gravitasi, yang dikenal sebagai lensa gravitasi. Selain itu, teori ini juga mendukung konsep bahwa alam semesta kita sedang mengembang, yang merupakan dasar dari teori Big Bang.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6

                            var additionalInfoHeader7 = "<h2>Aplikasi Relativitas dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent7 = "<p>Walaupun teori relativitas tampaknya bersifat abstrak dan teoretis, aplikasi praktisnya sangat nyata dalam kehidupan sehari-hari. Selain GPS, relativitas digunakan dalam berbagai teknologi komunikasi dan pengukuran waktu yang presisi. Misalnya, jam atom yang digunakan dalam satelit komunikasi harus disesuaikan dengan efek relativistik untuk memastikan sinkronisasi waktu yang akurat. Relativitas juga memainkan peran penting dalam bidang medis, seperti dalam teknologi pencitraan resonansi magnetik (MRI), yang digunakan untuk diagnosis medis.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "medanmagnet":
                            infoHeaderText = "Magnetic Field";
                            infoContentText = "B = μ0 I / 2 π r.";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Medan magnet adalah wilayah di sekitar suatu benda atau arus listrik di mana gaya magnetik akan mempengaruhi benda-benda lain yang ditempatkan di dalamnya. Konsep ini berasal dari sifat-sifat magnetik yang melekat pada benda-benda seperti magnet permanen atau arus listrik yang mengalir dalam kawat. Medan magnet memiliki dua sifat utama: arah dan kuatnya. Arah medan magnet ditentukan oleh kutub magnet (utara dan selatan) atau arah arus listrik yang menghasilkan medan magnet.<br><br> Secara konvensional, garis-garis medan magnet didefinisikan sebagai garis-garis imajiner yang menunjukkan arah yang diambil oleh kutub utara magnet ketika ditempatkan di dalam medan tersebut. Kuatnya medan magnet di suatu titik dalam medan magnet diukur dalam tesla (T) atau gauss (G), dengan satu tesla setara dengan 10.000 gauss. Medan magnet dapat dihasilkan oleh berbagai sumber, termasuk magnet permanen, arus listrik yang mengalir dalam kawat atau konduktor, serta medan magnet yang dihasilkan oleh planet atau bintang. Medan magnet memainkan peran penting dalam berbagai aplikasi, mulai dari pembangkitan listrik dalam generator hingga operasi perangkat elektronik seperti kompas dan hard disk komputer.<br><br> Pemahaman tentang medan magnet telah menjadi fundamental dalam perkembangan teknologi modern dan pemahaman tentang fenomena alam yang kompleks seperti dinamo bumi dan magnetosfer.</p>"
                            var additionalInfoHeader = "<h2>Pengertian Medan Magnet</h2>"
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent

                            var additionalInfoHeader2 = "<h2>Contoh Soal Medan Magnet</h2>";
                            var additionalInfoContent2 = "<p>Suatu muatan memiliki massa 2.3 x 10⁻²⁸ kg dengan gerakan memotong tegak lurus dalam medan magnetik sebesar 6 tesla. Apabila muatan sebesar 1.6 x 10⁻¹⁹ C dengan jari-jari 8 mm, tentukan kecepatan muatan tersebut.</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>"
                            var additionalInfoContent3 = "<p>V= R.q.B/m<br><br>V= (8x10⁻³)(1,6x10⁻¹⁹)(6) / 2,3 x 10 ⁻²⁸<br><br>V= 76,8 x 10 ⁻²²/ 2,3 x 10 ⁻²⁸<br><br>V= 3,3 x 10⁷ m/s</p>"
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3

                            var additionalInfoHeader4 = "<h2>Aplikasi Medan Magnet dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent4 = "<p>Medan magnet memiliki berbagai aplikasi penting dalam kehidupan sehari-hari. Misalnya, medan magnet digunakan dalam motor listrik dan generator untuk mengubah energi listrik menjadi energi mekanik atau sebaliknya. Selain itu, medan magnet juga digunakan dalam perangkat medis seperti MRI (Magnetic Resonance Imaging) untuk menghasilkan gambar detail dari bagian dalam tubuh manusia tanpa menggunakan sinar-X. Alat navigasi seperti kompas juga memanfaatkan medan magnet bumi untuk menentukan arah.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4

                            var additionalInfoHeader5 = "<h2>Medan Magnet dalam Fisika dan Teknik</h2>";
                            var additionalInfoContent5 = "<p>Dalam fisika dan teknik, medan magnet sering digunakan untuk mempelajari dan mengendalikan partikel bermuatan. Contohnya, dalam akselerator partikel, medan magnet digunakan untuk membelokkan jalur partikel bermuatan sehingga mereka dapat dipercepat ke kecepatan yang sangat tinggi. Medan magnet juga digunakan dalam teknologi penyimpanan data seperti hard disk, di mana data disimpan dalam bentuk magnetisasi dari material kecil di permukaan disk.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5

                            var additionalInfoHeader6 = "<h2>Pengaruh Medan Magnet terhadap Kesehatan</h2>";
                            var additionalInfoContent6 = "<p>Medan magnet juga memiliki pengaruh terhadap kesehatan. Paparan medan magnet yang sangat kuat atau dalam waktu lama dapat mempengaruhi sistem biologis, meskipun efek ini masih menjadi subjek penelitian. Di sisi lain, medan magnet yang digunakan dalam MRI dianggap aman dan merupakan alat diagnostik yang sangat berharga. Namun, medan magnet yang sangat kuat seperti yang digunakan dalam penelitian fisika partikel harus dioperasikan dengan hati-hati untuk memastikan keamanan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6

                            var additionalInfoHeader7 = "<h2>Penelitian Terkini dalam Medan Magnet</h2>";
                            var additionalInfoContent7 = "<p>Penelitian terkini dalam bidang medan magnet melibatkan berbagai aspek dari pengembangan material magnetik baru hingga aplikasi teknologi canggih yang dapat mengubah banyak aspek kehidupan sehari-hari. Salah satu bidang penelitian yang sedang berkembang pesat adalah penggunaan material magnetik dalam teknologi komputer kuantum. Komputer kuantum memanfaatkan prinsip mekanika kuantum untuk melakukan perhitungan dengan cara yang jauh lebih efisien dibandingkan dengan komputer klasik. Material magnetik berperan penting dalam pengembangan qubit, unit dasar dari komputer kuantum, yang memungkinkan informasi kuantum untuk disimpan dan dimanipulasi.<br><br><br> Selain itu, ada juga penelitian yang fokus pada pengembangan memristor, sebuah komponen elektronik yang dapat mengingat sejarah resistansinya. Memristor menggunakan prinsip medan magnet untuk menyimpan data, yang memungkinkan kecepatan baca/tulis yang sangat cepat dan daya tahan yang tinggi. Teknologi ini berpotensi mengubah industri penyimpanan data dan memori komputer.<br><br><br> Dalam bidang energi terbarukan, medan magnet digunakan dalam pengembangan generator magnetik yang lebih efisien untuk pembangkit listrik tenaga angin dan air. Generator ini memanfaatkan medan magnet kuat untuk menghasilkan listrik tanpa memerlukan banyak bagian bergerak, yang meningkatkan efisiensi dan mengurangi biaya perawatan.<br><br><br> Penelitian tentang medan magnet bumi juga terus berkembang, terutama dalam memahami bagaimana medan magnet bumi mempengaruhi iklim dan lingkungan. Medan magnet bumi berfungsi sebagai perisai terhadap radiasi matahari yang berbahaya, dan perubahan dalam medan ini dapat memiliki dampak signifikan terhadap cuaca dan iklim. Penelitian ini membantu kita memahami lebih baik dinamika internal planet kita dan bagaimana medan magnet bumi melindungi kita dari radiasi matahari.<br><br><br> Selain itu, penelitian dalam bidang biologi magnetik sedang mengeksplorasi bagaimana medan magnet dapat digunakan dalam pengobatan dan terapi medis. Misalnya, terapi medan magnet digunakan untuk mengobati berbagai kondisi kesehatan seperti nyeri kronis dan peradangan. Penelitian lebih lanjut diperlukan untuk memahami mekanisme di balik efek terapeutik ini dan untuk mengembangkan aplikasi klinis yang lebih efektif.<br><br><br> Penelitian tentang material magnetik baru juga sedang berkembang pesat. Material seperti feromagnetik dan antiferomagnetik sedang dieksplorasi untuk berbagai aplikasi mulai dari sensor magnetik hingga perangkat penyimpanan data. Material ini memiliki sifat magnetik yang unik yang dapat digunakan untuk meningkatkan kinerja dan efisiensi berbagai perangkat elektronik.<br><br><br> Dalam dunia astronomi, medan magnet berperan penting dalam pembentukan dan evolusi bintang serta galaksi. Penelitian tentang medan magnet kosmik membantu astronom memahami bagaimana bintang dan galaksi terbentuk dan berevolusi dari waktu ke waktu. Ini juga memberikan wawasan tentang fenomena seperti jet relativistik dan lubang hitam, yang memiliki medan magnet yang sangat kuat.<br><br><br> Secara keseluruhan, penelitian terkini dalam medan magnet mencakup berbagai disiplin ilmu dan menawarkan potensi untuk inovasi yang signifikan dalam teknologi, kesehatan, energi, dan pemahaman kita tentang alam semesta. Dengan kemajuan dalam pemahaman dan aplikasi medan magnet, kita dapat mengharapkan berbagai terobosan yang akan mengubah cara kita hidup dan bekerja di masa depan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "kosmology":
                            infoHeaderText = "Cosmology";
                            infoContentText = "Rμν - 1/2 Rgμν + Λgμν​ = Tμν*8πG/c4 ";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Kosmologi adalah cabang ilmu fisika yang mempelajari asal-usul, struktur, evolusi, dan nasib akhir alam semesta secara keseluruhan. Bidang ini menggabungkan konsep-konsep dari relativitas umum, yang diperkenalkan oleh Albert Einstein, dan mekanika kuantum, yang menjelaskan perilaku partikel pada skala subatomik. Kosmologi modern berusaha memahami berbagai fenomena kosmik, mulai dari Big Bang hingga struktur besar seperti galaksi dan kluster galaksi.<br><br>Beberapa rumus kunci dalam kosmologi mencakup persamaan medan Einstein, yang menggambarkan bagaimana materi dan energi mengkurvatur ruang-waktu. Persamaan ini merupakan dasar dari relativitas umum dan menjelaskan bagaimana gravitasi bukan sekadar gaya, tetapi akibat dari kelengkungan ruang-waktu. Selain itu, persamaan Friedmann mendeskripsikan ekspansi alam semesta berdasarkan parameter densitas dan konstanta kosmologis. Persamaan ini muncul dari solusi persamaan medan Einstein dengan asumsi alam semesta yang homogen dan isotropik.<br><br>Hukum Hubble menjelaskan hubungan antara kecepatan resesi galaksi dan jaraknya, mendukung bukti bahwa alam semesta mengembang. Pengamatan ini didasarkan pada pergeseran spektrum cahaya yang dihasilkan oleh galaksi yang menjauh dari kita, yang dikenal sebagai redshift. Konsep redshift kosmologis menunjukkan bagaimana cahaya dari objek jauh mengalami pergeseran spektrum karena ekspansi ruang-waktu. Dalam hal energi, densitas kritis menentukan geometri alam semesta, yaitu apakah alam semesta bersifat terbuka, datar, atau tertutup. Parameter perlambatan mengukur tingkat perlambatan atau percepatan ekspansi kosmik, yang penting dalam memahami pengaruh energi gelap.<br><br>Secara keseluruhan, kosmologi menggunakan berbagai rumus dan model teoretis untuk menguraikan fenomena kompleks yang terjadi sejak Big Bang hingga masa kini. Ini termasuk pengaruh energi gelap dan materi gelap dalam evolusi kosmik. Energi gelap dipercaya sebagai penyebab percepatan ekspansi alam semesta, sementara materi gelap dianggap berperan penting dalam pembentukan struktur besar di alam semesta.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Kosmologi</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Kosmologi</h2>";
                            var additionalInfoContent2 = "<p>Sebuah galaksi jauh memiliki redshift z=1.5. Jika konstanta Hubble H0=70 km/s/Mpc, hitunglah jarak luminositas (D<sub>L</sub>) galaksi tersebut. Asumsikan alam semesta yang datar dengan parameter densitas materi Ω<sub>m</sub>=0.3 dan energi gelap Ω<sub>Λ</sub>=0.7.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Untuk menghitung jarak luminositas (D<sub>L</sub>) sebuah galaksi dengan redshift z=1.5, kita dapat menggunakan rumus:<br><br>D<sub>L</sub> = (1 + z) * c / H<sub>0</sub> * integral dari 0 ke z (dz' / √(Ω<sub>m</sub>(1 + z')<sup>3</sup> + Ω<sub>Λ</sub>)).<br><br>Dengan z=1.5, H<sub>0</sub>=70 km/s/Mpc, dan menganggap alam semesta datar (Ω<sub>m</sub>=0.3 dan Ω<sub>Λ</sub>=0.7), kita dapat menghitung integral ini untuk mendapatkan:<br><br>D<sub>L</sub> ≈ (1 + 1.5) * 70 km/s/Mpc / 3×10<sup>5</sup> km/s * 1.94<br><br>D<sub>L</sub> ≈ 2.5 * 4285.71 Mpc * 1.94<br><br>D<sub>L</sub> ≈ 2.5 * 8315.29 Mpc<br><br>D<sub>L</sub> ≈ 20788.225 Mpc<br><br>Jadi, jarak luminositas galaksi dengan redshift z=1.5 adalah sekitar 20788.225 Mpc.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Model Kosmologis</h2>";
                            var additionalInfoContent4 = "<p>Model kosmologis berfungsi sebagai kerangka kerja teoretis untuk memahami struktur dan dinamika alam semesta. Model Lambda-CDM adalah model standar kosmologi saat ini, yang mencakup konstanta kosmologis (Λ) yang menggambarkan energi gelap, serta materi gelap (CDM, Cold Dark Matter) yang berperan dalam struktur besar kosmik. Model ini berhasil menjelaskan berbagai pengamatan kosmologis, termasuk distribusi galaksi, radiasi latar kosmik mikro (CMB), dan pola fluktuasi dalam distribusi materi di alam semesta.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Pengamatan Kosmologis</h2>";
                            var additionalInfoContent5 = "<p>Pengamatan kosmologis meliputi berbagai teknik dan instrumen untuk mengumpulkan data tentang alam semesta. Teleskop optik, inframerah, dan radio digunakan untuk mengamati galaksi dan bintang. Detektor radiasi latar kosmik mikro mengungkap kondisi awal alam semesta. Eksperimen untuk mendeteksi materi gelap dan energi gelap, serta pengamatan supernova tipe Ia, membantu memperkuat model teoretis kosmologi. Kombinasi data dari berbagai sumber ini memungkinkan ilmuwan menguji prediksi model kosmologis dan memperbaiki pemahaman kita tentang alam semesta.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Energi Gelap dan Materi Gelap</h2>";
                            var additionalInfoContent6 = "<p>Energi gelap dan materi gelap adalah dua komponen misterius yang mendominasi alam semesta. Energi gelap, yang diperkirakan menyusun sekitar 68% dari total energi di alam semesta, bertanggung jawab atas percepatan ekspansi kosmik. Materi gelap, yang menyusun sekitar 27%, tidak memancarkan atau menyerap cahaya, tetapi keberadaannya dapat dideteksi melalui efek gravitasi pada materi biasa dan radiasi. Studi tentang energi gelap dan materi gelap adalah salah satu bidang terpenting dalam kosmologi modern.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Masa Depan Kosmologi</h2>";
                            var additionalInfoContent7 = "<p>Di masa depan, kosmologi diharapkan akan mengalami kemajuan pesat dengan teknologi dan observasi baru. Teleskop generasi berikutnya seperti James Webb Space Telescope (JWST) dan Square Kilometre Array (SKA) akan memberikan data yang lebih detail tentang alam semesta awal dan struktur besar kosmik. Eksperimen untuk mendeteksi gelombang gravitasi dan neutrino kosmik juga akan membuka jendela baru dalam studi kosmologi. Dengan kemajuan ini, kita dapat berharap untuk memahami lebih dalam tentang asal-usul, evolusi, dan nasib akhir alam semesta.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "ohm":
                            infoHeaderText = "Hukum Ohm";
                            infoContentText = "V = I * R";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Hukum Ohm adalah hukum dasar dalam ilmu listrik yang menyatakan bahwa arus yang mengalir melalui suatu penghantar berbanding lurus dengan tegangan yang diterapkan pada penghantar tersebut, dengan hambatan sebagai faktor pengali. Hukum ini dinamai menurut Georg Simon Ohm, seorang fisikawan Jerman yang pertama kali mengemukakannya pada tahun 1827. Rumus dasar Hukum Ohm adalah:<br><br> V = I * R<br><br>di mana:<br> V = Tegangan (Volt)<br> I = Arus (Ampere)<br> R = Hambatan (Ohm)<br><br>Hukum Ohm sangat berguna dalam menganalisis rangkaian listrik dan menentukan hubungan antara tegangan, arus, dan hambatan dalam suatu rangkaian. Ini juga memungkinkan kita untuk menghitung nilai yang tidak diketahui jika dua nilai lainnya diketahui.<br><br>Hukum Ohm dapat diterapkan dalam berbagai konteks, mulai dari rangkaian listrik sederhana hingga sistem listrik yang kompleks. Misalnya, dalam sebuah rangkaian seri, total hambatan adalah jumlah dari semua hambatan individu, dan arus yang sama mengalir melalui setiap komponen. Dalam rangkaian paralel, tegangan yang sama diterapkan pada setiap cabang, tetapi arus total adalah jumlah dari arus yang mengalir melalui masing-masing cabang. Memahami Hukum Ohm dan bagaimana menggunakannya dalam berbagai konfigurasi rangkaian adalah keterampilan penting bagi insinyur listrik dan teknisi.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Hukum Ohm</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Hukum Ohm</h2>";
                            var additionalInfoContent2 = "<p>Dalam sebuah rangkaian listrik, terdapat dua resistor yang dihubungkan secara seri, masing-masing dengan hambatan 4 ohm dan 6 ohm. Rangkaian ini dihubungkan ke sumber tegangan 24 volt. Hitunglah arus yang mengalir melalui rangkaian dan tegangan pada masing-masing resistor.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Langkah pertama adalah menghitung hambatan total dalam rangkaian seri:<br><br>R<sub>total</sub> = R1 + R2<br><br>R<sub>total</sub> = 4 ohm + 6 ohm<br><br>R<sub>total</sub> = 10 ohm<br><br>Selanjutnya, kita gunakan Hukum Ohm untuk menghitung arus yang mengalir melalui rangkaian:<br><br>I = V / R<sub>total</sub><br><br>Masukkan nilai yang diketahui:<br><br>I = 24 V / 10 ohm<br><br>I = 2.4 A<br><br>Jadi, arus yang mengalir melalui rangkaian adalah 2.4 ampere.<br><br>Untuk menghitung tegangan pada masing-masing resistor, kita gunakan Hukum Ohm lagi:<br><br>V1 = I * R1<br><br>V1 = 2.4 A * 4 ohm<br><br>V1 = 9.6 V<br><br>V2 = I * R2<br><br>V2 = 2.4 A * 6 ohm<br><br>V2 = 14.4 V<br><br>Jadi, tegangan pada resistor pertama adalah 9.6 volt dan tegangan pada resistor kedua adalah 14.4 volt.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Aplikasi Hukum Ohm dalam Rangkaian Seri</h2>";
                            var additionalInfoContent4 = "<p>Dalam rangkaian seri, semua komponen dihubungkan satu sama lain dalam satu jalur. Hukum Ohm dapat digunakan untuk menghitung tegangan, arus, dan hambatan total dalam rangkaian ini. Misalnya, jika kita memiliki tiga resistor dengan hambatan R1, R2, dan R3 yang dihubungkan dalam seri, hambatan total (R<sub>total</sub>) adalah:<br><br>R<sub>total</sub> = R1 + R2 + R3<br><br>Arus yang mengalir melalui rangkaian seri adalah sama di setiap titik, dan tegangan total (V<sub>total</sub>) adalah jumlah dari tegangan pada setiap resistor:<br><br>V<sub>total</sub> = V1 + V2 + V3</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Aplikasi Hukum Ohm dalam Rangkaian Paralel</h2>";
                            var additionalInfoContent5 = "<p>Dalam rangkaian paralel, komponen-komponen dihubungkan dalam cabang-cabang yang terpisah, dengan tegangan yang sama diterapkan pada setiap cabang. Hukum Ohm dapat digunakan untuk menghitung arus, tegangan, dan hambatan total dalam rangkaian ini. Misalnya, jika kita memiliki tiga resistor dengan hambatan R1, R2, dan R3 yang dihubungkan dalam paralel, hambatan total (R<sub>total</sub>) dapat dihitung dengan:<br><br>1 / R<sub>total</sub> = 1 / R1 + 1 / R2 + 1 / R3<br><br>Arus total yang mengalir dalam rangkaian paralel adalah jumlah dari arus yang mengalir melalui setiap cabang:<br><br>I<sub>total</sub> = I1 + I2 + I3</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Penerapan Hukum Ohm dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent6 = "<p>Hukum Ohm tidak hanya penting dalam teori tetapi juga memiliki banyak aplikasi praktis dalam kehidupan sehari-hari. Misalnya, saat menggunakan perangkat elektronik seperti ponsel atau komputer, Hukum Ohm membantu insinyur merancang rangkaian listrik yang efisien. Dalam sistem pencahayaan rumah, memahami hubungan antara tegangan, arus, dan hambatan membantu menentukan jenis dan jumlah lampu yang dapat digunakan tanpa membebani sistem listrik. Selain itu, Hukum Ohm juga digunakan dalam industri otomotif untuk merancang sistem kelistrikan pada kendaraan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Hukum Ohm adalah konsep dasar yang sangat penting dalam bidang listrik dan elektronik. Dengan memahami hubungan antara tegangan, arus, dan hambatan, kita dapat merancang dan menganalisis berbagai jenis rangkaian listrik dengan lebih efektif. Aplikasi praktis Hukum Ohm sangat luas, mulai dari peralatan rumah tangga hingga teknologi canggih. Memiliki pemahaman yang kuat tentang Hukum Ohm merupakan langkah penting dalam menguasai ilmu listrik dan elektronika.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "kapasitor":
                            infoHeaderText = "Kapasitor";
                            infoContentText = "Q = C * V";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Kapasitor adalah komponen elektronik yang menyimpan energi dalam bentuk medan listrik. Kapasitor terdiri dari dua pelat konduktif yang dipisahkan oleh bahan dielektrik. Rumus dasar yang menggambarkan hubungan antara muatan listrik (Q), kapasitansi (C), dan tegangan (V) adalah:<br><br> Q = C * V<br><br>di mana:<br> Q = Muatan listrik (Coulomb)<br> C = Kapasitansi (Farad)<br> V = Tegangan (Volt)<br><br>Kapasitor digunakan dalam berbagai aplikasi, termasuk penyimpanan energi, penyaringan sinyal, dan dalam rangkaian pengaturan waktu. Kapasitansi kapasitor tergantung pada ukuran dan jenis bahan dielektrik yang digunakan antara pelat-pelatnya. Misalnya, kapasitor elektrolit memiliki kapasitansi tinggi dan digunakan untuk penyimpanan energi, sedangkan kapasitor keramik digunakan untuk frekuensi tinggi dalam rangkaian RF.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Kapasitor</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Kapasitor</h2>";
                            var additionalInfoContent2 = "<p>Sebuah rangkaian terdiri dari dua kapasitor dengan kapasitansi masing-masing 10 mikrofarad dan 20 mikrofarad yang dihubungkan secara paralel. Rangkaian ini kemudian dihubungkan ke sumber tegangan 12 volt. Hitung total muatan yang disimpan dalam kapasitor tersebut.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Dalam rangkaian paralel, tegangan pada setiap kapasitor adalah sama dan total muatan adalah jumlah muatan yang disimpan oleh masing-masing kapasitor.<br><br>Langkah pertama adalah menghitung muatan pada masing-masing kapasitor:<br><br>Q1 = C1 * V<br>Q1 = 10 µF * 12 V<br>Q1 = 10 x 10⁻⁶ F * 12 V<br>Q1 = 120 x 10⁻⁶ C<br>Q1 = 120 µC<br><br>Q2 = C2 * V<br>Q2 = 20 µF * 12 V<br>Q2 = 20 x 10⁻⁶ F * 12 V<br>Q2 = 240 x 10⁻⁶ C<br>Q2 = 240 µC<br><br>Langkah kedua adalah menghitung total muatan dalam rangkaian paralel:<br><br>Q<sub>total</sub> = Q1 + Q2<br>Q<sub>total</sub> = 120 µC + 240 µC<br>Q<sub>total</sub> = 360 µC<br><br>Jadi, total muatan yang disimpan dalam kapasitor tersebut adalah 360 mikroCoulomb.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Aplikasi Kapasitor dalam Rangkaian Seri dan Paralel</h2>";
                            var additionalInfoContent4 = "<p>Dalam rangkaian seri, kapasitansi total dihitung dengan rumus:<br><br>1 / C<sub>total</sub> = 1 / C1 + 1 / C2 + 1 / C3 + ...<br><br>Sedangkan dalam rangkaian paralel, kapasitansi total adalah jumlah dari kapasitansi masing-masing:<br><br>C<sub>total</sub> = C1 + C2 + C3 + ...<br><br>Aplikasi dari rangkaian seri dan paralel kapasitor sangat luas dalam dunia elektronika. Dalam rangkaian penyaring (filter), kombinasi kapasitor dan resistor digunakan untuk menghalangi atau memperkuat frekuensi tertentu. Dalam power supply, kapasitor digunakan untuk menyimpan dan menyediakan energi listrik secara instan ketika dibutuhkan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Penerapan Kapasitor dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = "<p>Kapasitor memiliki berbagai penerapan praktis dalam kehidupan sehari-hari. Dalam perangkat elektronik seperti komputer dan ponsel, kapasitor digunakan untuk menstabilkan tegangan dan menyimpan data sementara dalam memori. Dalam sistem audio, kapasitor digunakan untuk memisahkan frekuensi rendah dan tinggi, sehingga meningkatkan kualitas suara. Selain itu, kapasitor juga digunakan dalam lampu kilat kamera untuk menyimpan energi yang dilepaskan secara tiba-tiba untuk menghasilkan cahaya kilat yang kuat.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Peran Kapasitor dalam Elektronika Modern</h2>";
                            var additionalInfoContent6 = "<p>Dalam dunia elektronika modern, kapasitor berperan penting dalam pengembangan teknologi yang lebih efisien dan canggih. Kapasitor super (supercapacitor) misalnya, memiliki kapasitansi yang sangat tinggi dan digunakan dalam aplikasi yang membutuhkan penyimpanan energi besar dan pengisian ulang cepat, seperti dalam kendaraan listrik dan sistem tenaga surya. Selain itu, perkembangan material dielektrik baru terus meningkatkan kinerja dan efisiensi kapasitor, memungkinkan inovasi lebih lanjut dalam berbagai bidang teknologi.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Kapasitor adalah komponen penting dalam rangkaian elektronik dengan berbagai aplikasi mulai dari penyimpanan energi hingga penyaringan sinyal. Memahami prinsip dasar kapasitansi dan cara menghitung muatan, tegangan, dan kapasitansi total dalam berbagai konfigurasi rangkaian adalah keterampilan yang sangat berguna dalam bidang elektronika. Dengan kemajuan teknologi, peran kapasitor terus berkembang, mendukung pengembangan inovasi baru dalam berbagai sektor industri.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "muatanlistrik":
                            infoHeaderText = "Muatan Listrik";
                            infoContentText = "F = k * (|q1 * q2| / r^2)";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Muatan listrik adalah sifat dasar dari partikel yang menyebabkan mereka mengalami gaya ketika ditempatkan dalam medan listrik dan magnet. Muatan listrik dapat bersifat positif atau negatif dan diukur dalam satuan Coulomb (C). Hukum Coulomb menggambarkan gaya antara dua muatan titik dalam vakum sebagai berikut:<br><br> F = k * (|q1 * q2| / r^2)<br><br>di mana:<br> F = Gaya (Newton)<br> k = Konstanta Coulomb (8.99 x 10^9 N m²/C²)<br> q1, q2 = Muatan (Coulomb)<br> r = Jarak antara muatan (meter)<br><br>Muatan listrik adalah dasar dari banyak fenomena listrik dan elektromagnetik serta digunakan dalam berbagai aplikasi seperti dalam peralatan elektronik, komunikasi, dan teknologi energi. Dalam kehidupan sehari-hari, muatan listrik muncul dalam berbagai bentuk, seperti statis yang terjadi ketika kita menggosok balon di rambut kita, atau arus listrik yang mengalir dalam kabel yang memberikan tenaga ke rumah dan perangkat kita.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Muatan Listrik</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Muatan Listrik</h2>";
                            var additionalInfoContent2 = "<p>Dua muatan masing-masing sebesar 3 x 10^-6 C dan 4 x 10^-6 C ditempatkan pada jarak 0.1 meter. Hitung gaya elektrostatik antara kedua muatan tersebut dan tentukan arah gaya tersebut.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Gunakan rumus Hukum Coulomb:<br><br> F = k * (|q1 * q2| / r^2)<br><br>Masukkan nilai-nilai yang diketahui:<br><br> F = 8.99 x 10^9 N m²/C² * (|3 x 10^-6 C * 4 x 10^-6 C| / (0.1 m)²)<br><br> F = 8.99 x 10^9 N m²/C² * (12 x 10^-12 C² / 0.01 m²)<br><br> F = 8.99 x 10^9 N m²/C² * 1.2 x 10^-9 C²/m²<br><br> F = 10.788 N<br><br>Jadi, gaya elektrostatik antara kedua muatan tersebut adalah 10.788 Newton. Karena kedua muatan memiliki tanda yang sama (keduanya positif), gaya ini akan berupa gaya tolak-menolak.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Konsep Medan Listrik</h2>";
                            var additionalInfoContent4 = "<p>Muatan listrik menghasilkan medan listrik di sekitarnya. Medan listrik (E) di suatu titik dalam ruang didefinisikan sebagai gaya (F) per satuan muatan (q) pada muatan uji kecil yang ditempatkan di titik tersebut:<br><br> E = F / q<br><br>di mana:<br> E = Medan listrik (N/C)<br> F = Gaya (N)<br> q = Muatan uji (Coulomb)<br><br>Medan listrik diarahkan menjauh dari muatan positif dan menuju muatan negatif. Kekuatan medan listrik dari muatan titik di jarak r dari muatan q diberikan oleh:<br><br> E = k * (|q| / r^2)<br><br>Medan listrik penting dalam berbagai aplikasi, termasuk dalam desain komponen elektronik seperti kapasitor dan dalam analisis fenomena elektromagnetik yang kompleks.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Penerapan Hukum Coulomb dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = "<p>Hukum Coulomb tidak hanya penting dalam teori, tetapi juga memiliki banyak penerapan praktis. Misalnya, dalam teknologi sensor sentuh, muatan listrik digunakan untuk mendeteksi perubahan kapasitansi saat pengguna menyentuh layar. Dalam medis, elektrostatik digunakan dalam peralatan seperti defibrillator yang memberikan kejutan listrik untuk mengembalikan irama jantung yang normal. Selain itu, dalam industri pencetakan laser dan fotokopi, muatan listrik digunakan untuk menarik partikel toner ke kertas.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Eksperimen dan Pengamatan Muatan Listrik</h2>";
                            var additionalInfoContent6 = "<p>Banyak eksperimen dapat dilakukan untuk mengamati efek muatan listrik dan hukum Coulomb. Salah satu eksperimen sederhana adalah dengan menggunakan alat elektroskop untuk mendeteksi muatan listrik pada suatu objek. Alat ini bekerja dengan prinsip bahwa daun emas di dalam elektroskop akan membuka atau menutup tergantung pada jenis dan jumlah muatan yang dikenakan pada elektroskop. Eksperimen lain termasuk penggunaan generator Van de Graaff untuk menghasilkan muatan tinggi yang dapat digunakan untuk menunjukkan fenomena listrik statis seperti rambut yang berdiri tegak ketika disentuh.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Muatan listrik adalah konsep fundamental dalam fisika yang menjadi dasar dari banyak fenomena listrik dan magnetik. Memahami muatan listrik, Hukum Coulomb, dan medan listrik memungkinkan kita untuk menganalisis dan merancang berbagai perangkat dan sistem yang berguna dalam kehidupan sehari-hari. Aplikasi praktis dari konsep-konsep ini meluas ke berbagai bidang, termasuk elektronik, komunikasi, medis, dan industri, menjadikannya pengetahuan yang sangat berharga dalam dunia teknologi modern.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "induksi":
                            infoHeaderText = "Hukum Faraday";
                            infoContentText = "ε = - dΦ/dt";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Hukum Faraday menjelaskan bahwa arus listrik dapat diinduksi dalam suatu rangkaian oleh perubahan medan magnetik yang melintasinya. Hukum ini diungkapkan dalam rumus:<br><br> ε = - dΦ/dt<br><br>di mana:<br> ε = Gaya elektromotif induksi (Volt)<br> dΦ/dt = Perubahan fluks magnetik terhadap waktu (Wb/s atau T/s)<br><br>Fluks magnetik (Φ) sendiri didefinisikan sebagai produk dari medan magnetik (B) dengan luas area (A) yang tegak lurus terhadap medan tersebut, yakni:<br><br> Φ = B * A<br><br>Hukum Faraday sangat penting dalam pembangkitan listrik dalam generator dan juga menjadi dasar bagi transformator serta berbagai aplikasi lain dalam teknologi dan ilmu pengetahuan. Misalnya, ketika magnet bergerak melalui kumparan kawat, perubahan medan magnetik ini menginduksi arus listrik dalam kumparan tersebut. Prinsip ini digunakan dalam berbagai perangkat seperti generator listrik, motor listrik, dan transformator.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Hukum Faraday</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Hukum Faraday</h2>";
                            var additionalInfoContent2 = "<p>Sebuah kumparan terdiri dari 200 lilitan dengan luas masing-masing lilitan 0.02 m² terletak dalam medan magnetik yang mengalami perubahan pada laju 0.05 Wb/s. Hitung gaya elektromotif induksi total yang dihasilkan oleh kumparan tersebut.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Gunakan rumus Hukum Faraday:<br><br> ε = - N * (dΦ/dt)<br><br>di mana:<br> N = Jumlah lilitan<br> dΦ/dt = Perubahan fluks magnetik terhadap waktu<br><br>Masukkan nilai-nilai yang diketahui:<br><br> ε = - 200 * (0.05 Wb/s)<br><br> ε = - 10 V<br><br>Jadi, gaya elektromotif induksi total yang dihasilkan oleh kumparan tersebut adalah -10 Volt. Tanda negatif menunjukkan arah gaya elektromotif induksi sesuai dengan hukum Lenz, yang menyatakan bahwa arah arus induksi akan menentang perubahan fluks magnetik yang menyebabkannya.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Konsep Fluks Magnetik</h2>";
                            var additionalInfoContent4 = "<p>Fluks magnetik (Φ) menggambarkan jumlah medan magnet yang melewati suatu area tertentu. Fluks magnetik didefinisikan sebagai:<br><br> Φ = B * A * cos(θ)<br><br>di mana:<br> Φ = Fluks magnetik (Weber, Wb)<br> B = Medan magnetik (Tesla, T)<br> A = Luas area (meter persegi, m²)<br> θ = Sudut antara medan magnetik dan garis normal terhadap area<br><br>Fluks magnetik maksimum terjadi ketika medan magnetik sejajar dengan garis normal terhadap area (θ = 0°), dan fluks minimum terjadi ketika medan magnetik sejajar dengan area (θ = 90°). Perubahan fluks magnetik ini yang menyebabkan induksi gaya elektromotif sesuai Hukum Faraday.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Penerapan Hukum Faraday dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = "<p>Hukum Faraday memiliki banyak penerapan praktis. Dalam generator listrik, misalnya, medan magnet yang berubah-ubah digunakan untuk menginduksi arus listrik dalam kumparan kawat. Dalam transformator, perubahan arus listrik dalam kumparan primer menghasilkan perubahan medan magnet yang kemudian menginduksi arus dalam kumparan sekunder. Hukum Faraday juga mendasari operasi motor listrik, di mana arus listrik dalam medan magnet menghasilkan torsi yang memutar rotor. Selain itu, teknologi pengisian nirkabel untuk perangkat elektronik seperti ponsel memanfaatkan prinsip induksi elektromagnetik berdasarkan Hukum Faraday.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Eksperimen dan Pengamatan Hukum Faraday</h2>";
                            var additionalInfoContent6 = "<p>Banyak eksperimen dapat dilakukan untuk mengamati Hukum Faraday. Salah satu eksperimen klasik adalah dengan menggunakan kumparan kawat dan magnet batang. Ketika magnet batang digerakkan melalui kumparan, meteran voltmeter yang terhubung ke kumparan akan menunjukkan adanya gaya elektromotif yang diinduksi. Percobaan lain melibatkan penggunaan osiloskop untuk memvisualisasikan perubahan tegangan yang diinduksi dalam kumparan ketika medan magnet berubah. Alat seperti generator tangan juga dapat digunakan untuk menunjukkan prinsip Hukum Faraday secara praktis.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Hukum Faraday tentang induksi elektromagnetik adalah prinsip dasar dalam fisika yang menjelaskan bagaimana perubahan medan magnetik dapat menghasilkan arus listrik. Pemahaman tentang hukum ini sangat penting untuk mengembangkan dan mengoperasikan berbagai perangkat teknologi, mulai dari generator dan transformator hingga motor listrik dan pengisian nirkabel. Dengan memahami prinsip-prinsip Hukum Faraday, kita dapat lebih menghargai dan memanfaatkan fenomena elektromagnetik dalam kehidupan sehari-hari dan inovasi teknologi masa depan.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "induktansi":
                            infoHeaderText = "Induktansi";
                            infoContentText = "V = L * (di/dt)";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Induktansi adalah sifat dari suatu rangkaian listrik yang menentukan kemampuannya dalam menghasilkan tegangan saat arus yang melaluinya berubah. Rumus dasar induktansi adalah:<br><br> V = L * (di/dt)<br><br>di mana:<br> V = Tegangan (Volt)<br> L = Induktansi (Henry)<br> di/dt = Perubahan arus terhadap waktu (Ampere/s)<br><br>Induktansi sering ditemui dalam induktor, yang merupakan komponen elektronik yang dirancang untuk menyimpan energi dalam medan magnet. Induktor digunakan dalam berbagai aplikasi, termasuk dalam sirkuit pemroses sinyal dan daya, serta dalam berbagai perangkat elektronik. Induktansi juga berperan penting dalam operasi transformator, filter, dan osilator dalam rangkaian elektronik.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Induktansi</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Induktansi</h2>";
                            var additionalInfoContent2 = "<p>Sebuah induktor dengan nilai induktansi 0.1 Henry dihubungkan dalam sebuah rangkaian di mana arus berubah pada laju 2 A/s. Hitung tegangan yang dihasilkan oleh induktor tersebut jika arus awal adalah 0 dan berubah menjadi 2 A dalam waktu 1 detik.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Gunakan rumus Induktansi:<br><br> V = L * (di/dt)<br><br>Masukkan nilai-nilai yang diketahui:<br><br> V = 0.1 H * (2 A/s)<br><br> V = 0.1 H * 2 A/s<br><br> V = 0.2 V<br><br>Jadi, tegangan yang dihasilkan oleh induktor tersebut adalah 0.2 Volt.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Konsep dan Aplikasi Induktansi</h2>";
                            var additionalInfoContent4 = "<p>Induktansi adalah fenomena yang muncul dari hukum induksi Faraday, yang menyatakan bahwa perubahan arus dalam suatu induktor menghasilkan tegangan. Ini adalah dasar dari banyak aplikasi teknologi, seperti dalam filter frekuensi di mana induktor digunakan untuk menyaring sinyal tertentu dalam perangkat komunikasi dan audio. Induktansi juga digunakan dalam transformator untuk menaikkan atau menurunkan tegangan listrik dalam sistem distribusi daya.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Penerapan Induktansi dalam Kehidupan Sehari-hari</h2>";
                            var additionalInfoContent5 = "<p>Induktor ditemukan dalam berbagai perangkat elektronik sehari-hari, seperti dalam charger ponsel, televisi, dan radio. Dalam charger ponsel, induktor digunakan untuk mengatur tegangan dan arus untuk memastikan pengisian yang efisien dan aman. Dalam televisi dan radio, induktor membantu dalam pemrosesan sinyal untuk menghasilkan gambar dan suara yang jernih.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Eksperimen dan Pengamatan Induktansi</h2>";
                            var additionalInfoContent6 = "<p>Salah satu eksperimen klasik untuk mengamati induktansi adalah dengan menggunakan sebuah rangkaian RL (Resistor-Induktor). Dengan menghubungkan sebuah induktor dengan resistor dalam satu rangkaian dan mengamati tegangan yang dihasilkan ketika arus berubah, kita dapat mempelajari bagaimana induktansi bekerja. Dengan menggunakan osiloskop, perubahan tegangan dalam rangkaian dapat diukur dan dianalisis untuk memahami sifat induktansi.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Induktansi adalah konsep penting dalam fisika dan teknik listrik yang memungkinkan kita untuk memahami dan memanfaatkan perubahan arus dalam rangkaian listrik. Dengan pemahaman yang mendalam tentang induktansi, kita dapat merancang dan mengoptimalkan perangkat elektronik yang lebih efisien dan andal. Induktansi memainkan peran kunci dalam berbagai aplikasi teknologi, dari perangkat sehari-hari hingga sistem distribusi daya besar.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "gelombangem":
                            infoHeaderText = "Gelombang Elektromagnetik";
                            infoContentText = "c = λ * f";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Gelombang elektromagnetik (EM) adalah gelombang yang terdiri dari medan listrik dan medan magnet yang berayun secara sinusoidal dan merambat melalui ruang hampa atau media. Gelombang EM merambat dengan kecepatan cahaya (c) dalam ruang hampa, dan hubungan dasar antara panjang gelombang (λ) dan frekuensi (f) adalah:<br><br> c = λ * f<br><br>di mana:<br> c = Kecepatan cahaya (m/s)<br> λ = Panjang gelombang (meter)<br> f = Frekuensi (Hertz)<br><br>Gelombang elektromagnetik memiliki spektrum yang luas, termasuk radio, mikro, inframerah, cahaya tampak, ultraviolet, sinar-X, dan sinar gamma. Masing-masing jenis gelombang EM memiliki panjang gelombang dan frekuensi yang berbeda, serta berbagai aplikasi dalam teknologi, telekomunikasi, ilmu pengetahuan, dan kedokteran. Spektrum elektromagnetik memainkan peran penting dalam kehidupan sehari-hari, mulai dari komunikasi nirkabel hingga pencitraan medis dan penemuan ilmiah.</p>";

                            var additionalInfoHeader = "<h2>Pengertian Gelombang Elektromagnetik</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Gelombang Elektromagnetik</h2>";
                            var additionalInfoContent2 = "<p>Sebuah gelombang elektromagnetik memiliki panjang gelombang 500 nm. Hitung frekuensi gelombang tersebut.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Gunakan rumus hubungan antara kecepatan cahaya, panjang gelombang, dan frekuensi:<br><br> c = λ * f<br><br>Untuk cahaya di ruang hampa, kecepatan cahaya adalah sekitar 3 x 10^8 m/s. Masukkan nilai-nilai yang diketahui:<br><br> 3 x 10^8 m/s = 500 x 10^-9 m * f<br><br> f = (3 x 10^8 m/s) / (500 x 10^-9 m)<br><br> f = 6 x 10^14 Hz<br><br>Jadi, frekuensi gelombang elektromagnetik tersebut adalah 6 x 10^14 Hertz.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Spektrum Gelombang Elektromagnetik</h2>";
                            var additionalInfoContent4 = "<p>Spektrum elektromagnetik mencakup semua jenis gelombang elektromagnetik yang ada, mulai dari gelombang radio dengan panjang gelombang paling panjang hingga sinar gamma dengan panjang gelombang paling pendek. Setiap bagian dari spektrum elektromagnetik memiliki karakteristik dan aplikasi khusus. Misalnya, gelombang radio digunakan untuk komunikasi nirkabel, gelombang mikro untuk memasak dan komunikasi satelit, inframerah untuk penginderaan panas, cahaya tampak untuk penglihatan manusia, ultraviolet untuk sterilisasi, sinar-X untuk pencitraan medis, dan sinar gamma untuk terapi kanker.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Aplikasi Gelombang Elektromagnetik</h2>";
                            var additionalInfoContent5 = "<p>Gelombang elektromagnetik digunakan dalam berbagai aplikasi teknologi dan ilmiah. Dalam telekomunikasi, gelombang radio dan mikro digunakan untuk transmisi data nirkabel dan komunikasi satelit. Dalam kedokteran, sinar-X dan sinar gamma digunakan untuk pencitraan dan terapi. Cahaya inframerah digunakan dalam teknologi penginderaan panas dan kamera malam, sementara cahaya ultraviolet digunakan untuk sterilisasi dan analisis kimia. Selain itu, gelombang elektromagnetik juga digunakan dalam teknologi radar, astronomi, dan penelitian ilmiah untuk mengamati dan mempelajari alam semesta.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Fenomena Gelombang Elektromagnetik</h2>";
                            var additionalInfoContent6 = "<p>Gelombang elektromagnetik mengalami berbagai fenomena seperti refleksi, refraksi, difraksi, dan interferensi. Refleksi terjadi ketika gelombang mengenai permukaan dan dipantulkan kembali. Refraksi adalah pembelokan gelombang saat melewati medium yang berbeda. Difraksi adalah pembengkokan gelombang saat melewati celah atau penghalang. Interferensi adalah superposisi dua atau lebih gelombang yang menghasilkan pola baru. Fenomena-fenomena ini penting dalam berbagai aplikasi teknologi seperti optik, komunikasi, dan penginderaan jauh.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "<p>Gelombang elektromagnetik merupakan dasar dari banyak teknologi dan aplikasi ilmiah yang kita gunakan sehari-hari. Memahami sifat, spektrum, dan fenomena gelombang elektromagnetik memungkinkan kita untuk mengembangkan teknologi baru dan meningkatkan kualitas hidup. Dari komunikasi nirkabel hingga pencitraan medis, gelombang elektromagnetik terus memainkan peran penting dalam kemajuan ilmu pengetahuan dan teknologi.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;
                        case "persamaanmaxwell":
                            infoHeaderText = "Persamaan Maxwell";
                            infoContentText = "\
                        <p>∇ ⋅ <b>E</b> = <sup>ρ</sup>/<sub>ε<sub>0</sub></sub></p>\
                        <p>∇ ⋅ <b>B</b> = 0</p>\
                        <p>∇ × <b>E</b> = -∂<b>B</b>/∂<i>t</i></p>\
                        <p>∇ × <b>B</b> = μ<sub>0</sub><b>J</b> + μ<sub>0</sub>ε<sub>0</sub>∂<b>E</b>/∂<i>t</i></p>\
                        ";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "\
                        <p>Persamaan Maxwell adalah kumpulan empat persamaan diferensial parsial yang menyatukan fenomena elektromagnetik. Persamaan-persamaan ini memberikan dasar matematika untuk teori medan elektromagnetik dan merupakan bagian fundamental dari fisika teoretis. Persamaan Maxwell dalam bentuk diferensial adalah sebagai berikut:<br><br>\
                        1. Hukum Gauss untuk medan listrik: ∇ ⋅ <b>E</b> = <sup>ρ</sup>/<sub>ε<sub>0</sub></sub> <br>\
                        2. Hukum Gauss untuk medan magnetik: ∇ ⋅ <b>B</b> = 0 <br>\
                        3. Hukum Faraday untuk induksi elektromagnetik: ∇ × <b>E</b> = -∂<b>B</b>/∂<i>t</i> <br>\
                        4. Hukum Ampere-Maxwell dengan perbaikan dari Ampere: ∇ × <b>B</b> = μ<sub>0</sub><b>J</b> + μ<sub>0</sub>ε<sub>0</sub>∂<b>E</b>/∂<i>t</i><br><br>\
                        \
                        Hukum Gauss untuk medan listrik menyatakan bahwa fluks listrik total yang melalui permukaan tertutup berbanding lurus dengan muatan total yang terkandung dalam permukaan tersebut. Ini menunjukkan bagaimana muatan menciptakan medan listrik di sekitarnya.<br><br>\
                        \
                        Hukum Gauss untuk medan magnetik menyatakan bahwa fluks magnetik total yang melalui permukaan tertutup adalah nol. Ini mencerminkan bahwa medan magnet tidak memiliki sumber atau muara, yang berarti garis medan magnet selalu berbentuk loop tertutup.<br><br>\
                        \
                        Hukum Faraday untuk induksi elektromagnetik menjelaskan bahwa perubahan fluks magnetik dalam suatu loop akan menginduksi gaya elektromotif (EMF) dalam loop tersebut. Ini adalah prinsip dasar di balik generator dan transformator.<br><br>\
                        \
                        Hukum Ampere-Maxwell dengan perbaikan dari Ampere menunjukkan bahwa medan magnet dihasilkan oleh arus listrik dan perubahan medan listrik. Perbaikan Maxwell pada hukum Ampere menunjukkan bahwa medan magnet juga dapat dihasilkan oleh medan listrik yang berubah-ubah, yang sangat penting untuk memahami propagasi gelombang elektromagnetik.<br><br>\
                        \
                        Dalam persamaan-persamaan ini, <b>E</b> adalah medan listrik, <b>B</b> adalah medan magnetik, <b>ρ</b> adalah kerapatan muatan, <sub>ε<sub>0</sub></sub> adalah permitivitas ruang hampa, <sub>μ<sub>0</sub></sub> adalah permeabilitas ruang hampa, dan <b>J</b> adalah kerapatan arus.<br><br>\
                        \
                        Persamaan Maxwell memainkan peran kunci dalam berbagai teknologi modern. Misalnya, persamaan ini adalah dasar dari teknologi komunikasi nirkabel, seperti radio, televisi, dan jaringan seluler. Mereka juga fundamental dalam desain dan operasi peralatan listrik dan elektronik, seperti motor listrik, transformator, dan perangkat optik seperti laser.<br><br>\
                        \
                        Selain aplikasi teknologi, persamaan Maxwell juga sangat penting dalam penelitian ilmiah. Mereka memungkinkan para ilmuwan untuk memahami dan memprediksi berbagai fenomena fisik, mulai dari perilaku dasar cahaya hingga interaksi kompleks antara medan elektromagnetik dan materi.<br><br>\
                        \
                        Secara historis, persamaan Maxwell juga memiliki dampak besar pada perkembangan teori fisika. Mereka menginspirasi Albert Einstein dalam pengembangan teori relativitas khusus, yang memperluas pemahaman kita tentang ruang dan waktu. Pada akhirnya, persamaan Maxwell adalah salah satu tonggak utama dalam perjalanan ilmiah menuju pemahaman yang lebih dalam tentang alam semesta.</p>\
                        ";
                            var additionalInfoHeader = "<h2>Pengertian Persamaan Maxwell</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;

                            var additionalInfoHeader2 = "<h2>Contoh Soal Persamaan Maxwell</h2>";
                            var additionalInfoContent2 = "\
                        <p>Sebuah muatan terdistribusi dalam ruang dengan kerapatan muatan sebesar <b>4 × 10<sup>-6</sup></b> C/m³. Tentukan fluks medan listrik di sekitar muatan tersebut jika permitivitas ruang hampa <b>ε<sub>0</sub> = 8.85 × 10<sup>-12</sup></b> F/m.</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;

                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "\
                        <p>Gunakan Hukum Gauss untuk medan listrik:<br><br> ∇ ⋅ <b>E</b> = <sup>ρ</sup>/<sub>ε<sub>0</sub></sub><br><br>Diketahui bahwa <b>ρ</b> = <b>4 × 10<sup>-6</sup></b> C/m³ dan <sub>ε<sub>0</sub></sub> = <b>8.85 × 10<sup>-12</sup></b> F/m.<br><br>Masukkan nilai-nilai yang diketahui:<br><br> ∇ ⋅ <b>E</b> = <b>4 × 10<sup>-6</sup></b> / <b>8.85 × 10<sup>-12</sup></b><br><br> ∇ ⋅ <b>E</b> = <b>4.51 × 10<sup>5</sup></b> N/C*m²<br><br>Jadi, fluks medan listrik di sekitar muatan tersebut adalah <b>4.51 × 10<sup>5</sup></b> N/C*m².</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;

                            var additionalInfoHeader4 = "<h2>Penjelasan Persamaan Maxwell</h2>";
                            var additionalInfoContent4 = "\
                            <p>Persamaan Maxwell tidak hanya merupakan kumpulan rumus matematis yang berdiri sendiri, tetapi mereka menggambarkan prinsip-prinsip fundamental dari fenomena elektromagnetik. Mari kita jelaskan setiap persamaannya dengan lebih rinci.</p>\
                            <ol>\
                                <li>\
                                    <h3>Hukum Gauss untuk medan listrik:</h3>\
                                    <p>Hukum ini menyatakan bahwa fluks listrik total yang melalui permukaan tertutup berbanding lurus dengan muatan total yang terkandung dalam permukaan tersebut. Secara matematis, hukum ini dapat dituliskan sebagai:</p>\
                                    <p>∇ ⋅ <b>E</b> = <sup>ρ</sup>/<sub>ε<sub>0</sub></sub></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ ⋅ <b>E</b> adalah divergensi dari medan listrik (<b>E</b>).</li>\
                                        <li><sup>ρ</sup>/<sub>ε<sub>0</sub></sub> adalah rapat muatan (<b>ρ</b>) dibagi dengan permitivitas ruang hampa (<sub>ε<sub>0</sub></sub>).</li>\
                                    </ul>\
                                    <p>Hukum Gauss untuk medan listrik menyatakan bahwa muatan positif menciptakan garis medan keluar dari permukaan tertutup, sementara muatan negatif menciptakan garis medan menuju ke dalam permukaan tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Gauss untuk medan magnetik:</h3>\
                                    <p>Hukum ini menyatakan bahwa fluks magnetik total yang melalui permukaan tertutup adalah nol. Dengan kata lain, tidak ada monopoli magnetik yang ada di alam semesta. Matematikanya dapat dituliskan sebagai:</p>\
                                    <p>∇ ⋅ <b>B</b> = 0</p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ ⋅ <b>B</b> adalah divergensi dari medan magnetik (<b>B</b>).</li>\
                                    </ul>\
                                    <p>Hukum ini mencerminkan bahwa medan magnet tidak memiliki sumber atau muara, yang berarti garis medan magnet selalu berbentuk loop tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Faraday untuk induksi elektromagnetik:</h3>\
                                    <p>Hukum Faraday menjelaskan bahwa perubahan fluks magnetik dalam suatu loop akan menginduksi gaya elektromotif (EMF) dalam loop tersebut. Secara matematis, hukum ini dituliskan sebagai:</p>\
                                    <p>∇ × <b>E</b> = -∂<b>B</b>/∂<i>t</i></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ × <b>E</b> adalah rotasi dari medan listrik (<b>E</b>).</li>\
                                        <li>-∂<b>B</b>/∂<i>t</i> adalah perubahan medan magnetik (<b>B</b>) terhadap waktu (<i>t</i>).</li>\
                                    </ul>\
                                    <p>Hukum Faraday merupakan prinsip dasar di balik generator dan transformator, di mana perubahan medan magnetik menghasilkan arus listrik dalam rangkaian tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Ampere-Maxwell dengan perbaikan dari Ampere:</h3>\
                                    <p>Hukum ini menggabungkan Hukum Ampere dengan Hukum Faraday, dan termasuk perbaikan dari Hukum Ampere asli. Secara matematis, hukum ini dituliskan sebagai:</p>\
                                    <p>∇ × <b>B</b> = μ<sub>0</sub><b>J</b> + μ<sub>0</sub>ε<sub>0</sub>∂<b>E</b>/∂<i>t</i></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ × <b>B</b> adalah rotasi dari medan magnetik (<b>B</b>).</li>\
                                        <li>μ<sub>0</sub> adalah permeabilitas ruang hampa.</li>\
                                        <li><b>J</b> adalah kerapatan arus.</li>\
                                        <li>∂<b>E</b>/∂<i>t</i> adalah perubahan medan listrik (<b>E</b>) terhadap waktu (<i>t</i>).</li>\
                                    </ul>\
                                    <p>Hukum Ampere-Maxwell menunjukkan bahwa medan magnet dihasilkan oleh arus listrik dan perubahan medan listrik. Ini memberikan dasar bagi pemahaman kita tentang propagasi gelombang elektromagnetik"

                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;

                            var additionalInfoHeader5 = "<h2>Pembahasan Lanjutan Persamaan Maxwell (Lanjutan)</h2>";
                            var additionalInfoContent5 = "\
                            <ol start='5'>\
                                <li>\
                                    <h3>Hukum Gauss untuk medan listrik:</h3>\
                                    <p>Hukum ini menyatakan bahwa fluks listrik total yang melalui permukaan tertutup berbanding lurus dengan muatan total yang terkandung dalam permukaan tersebut. Secara matematis, hukum ini dapat dituliskan sebagai:</p>\
                                    <p>∇ ⋅ <b>E</b> = <sup>ρ</sup>/<sub>ε<sub>0</sub></sub></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ ⋅ <b>E</b> adalah divergensi dari medan listrik (<b>E</b>).</li>\
                                        <li><sup>ρ</sup>/<sub>ε<sub>0</sub></sub> adalah rapat muatan (<b>ρ</b>) dibagi dengan permitivitas ruang hampa (<sub>ε<sub>0</sub></sub>).</li>\
                                    </ul>\
                                    <p>Hukum Gauss untuk medan listrik menyatakan bahwa muatan positif menciptakan garis medan keluar dari permukaan tertutup, sementara muatan negatif menciptakan garis medan menuju ke dalam permukaan tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Gauss untuk medan magnetik:</h3>\
                                    <p>Hukum ini menyatakan bahwa fluks magnetik total yang melalui permukaan tertutup adalah nol. Dengan kata lain, tidak ada monopoli magnetik yang ada di alam semesta. Matematikanya dapat dituliskan sebagai:</p>\
                                    <p>∇ ⋅ <b>B</b> = 0</p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ ⋅ <b>B</b> adalah divergensi dari medan magnetik (<b>B</b>).</li>\
                                    </ul>\
                                    <p>Hukum ini mencerminkan bahwa medan magnet tidak memiliki sumber atau muara, yang berarti garis medan magnet selalu berbentuk loop tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Faraday untuk induksi elektromagnetik:</h3>\
                                    <p>Hukum Faraday menjelaskan bahwa perubahan fluks magnetik dalam suatu loop akan menginduksi gaya elektromotif (EMF) dalam loop tersebut. Secara matematis, hukum ini dituliskan sebagai:</p>\
                                    <p>∇ × <b>E</b> = -∂<b>B</b>/∂<i>t</i></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ × <b>E</b> adalah rotasi dari medan listrik (<b>E</b>).</li>\
                                        <li>-∂<b>B</b>/∂<i>t</i> adalah perubahan medan magnetik (<b>B</b>) terhadap waktu (<i>t</i>).</li>\
                                    </ul>\
                                    <p>Hukum Faraday merupakan prinsip dasar di balik generator dan transformator, di mana perubahan medan magnetik menghasilkan arus listrik dalam rangkaian tertutup.</p>\
                                </li>\
                                <li>\
                                    <h3>Hukum Ampere-Maxwell dengan perbaikan dari Ampere:</h3>\
                                    <p>Hukum ini menggabungkan Hukum Ampere dengan Hukum Faraday, dan termasuk perbaikan dari Hukum Ampere asli. Secara matematis, hukum ini dituliskan sebagai:</p>\
                                    <p>∇ × <b>B</b> = μ<sub>0</sub><b>J</b> + μ<sub>0</sub>ε<sub>0</sub>∂<b>E</b>/∂<i>t</i></p>\
                                    <p>Di mana:</p>\
                                    <ul>\
                                        <li>∇ × <b>B</b> adalah rotasi dari medan magnetik (<b>B</b>).</li>\
                                        <li>μ<sub>0</sub> adalah permeabilitas ruang hampa.</li>\
                                        <li><b>J</b> adalah kerapatan arus.</li>\
                                        <li>∂<b>E</b>/∂<i>t</i> adalah perubahan medan listrik (<b>E</b>) terhadap waktu (<i>t</i>).</li>\
                                    </ul>\
                                    <p>Hukum Ampere-Maxwell menunjukkan bahwa medan magnet dihasilkan oleh arus listrik dan perubahan medan listrik. Ini memberikan dasar bagi pemahaman kita tentang propagasi gelombang elektromagnetik.</p>\
                                </li>\
                            </ol>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;
                            break;
                            function setGradientBackground(element, color1, color2) {
                                element.style.background = `linear-gradient(to bottom, ${color1}, ${color2})`;
                            }
                        case "difraksi":
                            infoHeaderText = "Difraksi Gelombang";
                            infoContentText = "a sin(θ) = mλ";
                            // Menetapkan gaya CSS langsung untuk konten HTML
                            infoContentHtml.innerHTML = "<p>" + infoContentText + "</p>"; // Update konten teks
                            infoContentHtml.style.backgroundColor = "aquamarine"; // Warna latar belakang
                            infoContentHtml.style.borderRadius = "10px"; // Border radius
                            infoContentHtml.style.width = "100mm";
                            infoContentHtml.style.color = "white";
                            infoContentHtml.style.padding = "10px"; // Padding
                            infoContentHtml.style.position = "relative"; // Menghilangkan posisi tetap
                            infoContentHtml.style.fontFamily = "timesnewroman"; // Mengatur font
                            infoContentHtml.style.fontWeight = "bold";
                            infoContentHtml.style.fontSize = "20px"; // Mengatur ukuran font
                            infoContentHtml.style.margin = "0 auto";
                            infoContentHtml.style.bottom = "5px";
                            infoContentHtml.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.5)";
                            setGradientBackground(infoContentHtml, "#330033", "#00FFFF");
                            // Menambahkan penjelasan tambahan di bawah teks yang sudah ada
                            additionalInfoPotensial.style.textAlign = "Left";
                            additionalInfoPotensial.style.fontSize = "20px";
                            additionalInfoPotensial.style.padding = "20px";
                            var additionalInfoContent = "<p>Difraksi adalah fenomena di mana gelombang melengkung ketika melewati suatu celah atau bidang rintangan. Persamaan difraksi yang umum digunakan untuk gelombang cahaya adalah:<br><br> a sin(θ) = mλ<br><br>di mana:<br> a = Lebar celah (meter)<br> θ = Sudut difraksi (radian)<br> m = Urutan difraksi (bilangan bulat)<br> λ = Panjang gelombang cahaya (meter)<br><br>Persamaan ini menjelaskan hubungan antara lebar celah, sudut difraksi, urutan difraksi, dan panjang gelombang cahaya. Difraksi sering terjadi pada fenomena seperti celah tunggal, celah ganda, dan kisi difraksi. Fenomena difraksi memiliki banyak aplikasi dalam bidang seperti optika, akustik, dan mekanika gelombang.</p>";
                            var additionalInfoHeader = "<h2>Pengertian Difraksi Gelombang</h2>";
                            additionalInfoPotensial.innerHTML = additionalInfoHeader + additionalInfoContent;
                            var additionalInfoHeader2 = "<h2>Contoh Soal Difraksi Gelombang</h2>";
                            var additionalInfoContent2 = "<p>Suatu celah tunggal memiliki lebar 0.02 mm. Jika cahaya dengan panjang gelombang 500 nm melewati celah tersebut, hitung sudut difraksi pertama yang terjadi.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader2 + additionalInfoContent2;
                            var additionalInfoHeader3 = "<h2>Pembahasan</h2>";
                            var additionalInfoContent3 = "<p>Gunakan persamaan difraksi gelombang:<br><br> a sin(θ) = mλ<br><br>Diketahui bahwa lebar celah \\(a = 0.02 \\times 10^{-3}\\) m, panjang gelombang cahaya \\(λ = 500 \\times 10^{-9}\\) m, dan untuk difraksi pertama \\(m = 1\\).<br><br>Masukkan nilai-nilai yang diketahui:<br><br> \\(0.02 \\times 10^{-3} \\times sin(θ) = 1 \\times 500 \\times 10^{-9}\\)<br><br> \\(sin(θ) = \\frac{500 \\times 10^{-9}}{0.02 \\times 10^{-3}}\\)<br><br> \\(sin(θ) = 0.025\\)<br><br> \\(θ = sin^{-1}(0.025)\\)<br><br> \\(θ ≈ 1.44°\\)<br><br>Jadi, sudut difraksi pertama yang terjadi adalah sekitar 1.44°.</p>";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader3 + additionalInfoContent3;
                            var additionalInfoHeader4 = "<h2>Pembahasan Lanjutan Difraksi Gelombang</h2>";
                            var additionalInfoContent4 = "\
                            <p>Difraksi gelombang juga terjadi pada fenomena celah ganda. Ketika cahaya melewati celah ganda, difraksi menyebabkan munculnya pola interferensi yang kompleks. Persamaan untuk lokasi pita terang dan gelap pada pola interferensi dari celah ganda adalah:</p>\
                            <p> d sin(θ<sub>m</sub>) = mλ</p>\
                            <p>di mana:</p>\
                            <ul>\
                                <li>d adalah jarak antara celah ganda (meter)</li>\
                                <li>θ<sub>m</sub> adalah sudut terhadap sumbu pusat dari pola interferensi (radian)</li>\
                                <li>m adalah urutan interferensi (bilangan bulat)</li>\
                                <li>λ adalah panjang gelombang cahaya (meter)</li>\
                            </ul>\
                            <p>Persamaan ini menjelaskan lokasi dari pita-pita terang pada pola interferensi dan merupakan dasar dari fenomena interferensi cahaya pada celah ganda.</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader4 + additionalInfoContent4;
                            var additionalInfoHeader5 = "<h2>Contoh Soal Difraksi Gelombang pada Celah Ganda</h2>";
                            var additionalInfoContent5 = "\
                            <p>Suatu celah ganda memiliki jarak antara celah sebesar 0.1 mm. Cahaya dengan panjang gelombang 600 nm melewati celah ganda tersebut. Hitung sudut masing-masing pita terang pertama dan kedua pada pola interferensi yang dihasilkan.</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader5 + additionalInfoContent5;

                            var additionalInfoHeader6 = "<h2>Pembahasan Sudut Pita Terang pada Difraksi Gelombang pada Celah Ganda</h2>";
                            var additionalInfoContent6 = "\
                            <p>Untuk pita terang pertama, gunakan persamaan difraksi gelombang pada celah ganda:<br><br>\
                            d sin(θ<sub>1</sub>) = λ</p>\
                            <p>Dimana:<br>\
                            d = 0.1 × 10<sup>-3</sup> m (jarak antara celah ganda)<br>\
                            λ = 600 × 10<sup>-9</sup> m (panjang gelombang cahaya)</p>\
                            <p>Hitung sudut masing-masing pita terang pertama (m = 1):<br><br>\
                            sin(θ<sub>1</sub>) = λ / d<br>\
                            sin(θ<sub>1</sub>) = (600 × 10<sup>-9</sup> m) / (0.1 × 10<sup>-3</sup> m)<br>\
                            sin(θ<sub>1</sub>) = 0.006</p>\
                            <p>θ<sub>1</sub> = sin<sup>-1</sup>(0.006)<br>\
                            θ<sub>1</sub> ≈ 0.34°</p>\
                            <p>Untuk pita terang kedua (m = 2):<br><br>\
                            sin(θ<sub>2</sub>) = 2λ / d<br>\
                            sin(θ<sub>2</sub>) = 2(600 × 10<sup>-9</sup> m) / (0.1 × 10<sup>-3</sup> m)<br>\
                            sin(θ<sub>2</sub>) = 0.012</p>\
                            <p>θ<sub>2</sub> = sin<sup>-1</sup>(0.012)<br>\
                            θ<sub>2</sub> ≈ 0.69°</p>\
                            <p>Jadi, sudut masing-masing pita terang pertama dan kedua pada pola interferensi yang dihasilkan oleh celah ganda adalah sekitar 0.34° dan 0.69°.</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader6 + additionalInfoContent6;

                            var additionalInfoHeader7 = "<h2>Kesimpulan</h2>";
                            var additionalInfoContent7 = "\
                            <p>Difraksi gelombang adalah fenomena yang kompleks namun sangat penting dalam pemahaman tentang perilaku gelombang cahaya. Dari celah tunggal hingga celah ganda, difraksi menyebabkan pembentukan pola-pola interferensi yang mengungkapkan sifat gelombang cahaya. Dengan memahami persamaan dan konsep-konsep yang mendasarinya, kita dapat menjelaskan berbagai fenomena dalam bidang optika dan fisika gelombang.</p>\
                        ";
                            additionalInfoPotensial.innerHTML += additionalInfoHeader7 + additionalInfoContent7;

                            break;

                        default:
                            infoHeaderText = "Informasi tidak tersedia.";
                            infoContentText = "Informasi tidak tersedia.";
                            // Menghapus gaya CSS yang diterapkan pada kedua konten
                            infoContentHtml.innerHTML = ""; // Menghapus konten teks pada konten HTML
                            infoContentHtml.removeAttribute("style"); // Menghapus gaya CSS yang diterapkan pada konten HTML
                            infoContentCss.innerHTML = ""; // Menghapus konten teks pada konten CSS
                            infoContentCss.removeAttribute("style"); // Menghapus gaya CSS yang diterapkan pada konten CSS

                    }
                    // Mengubah konten header
                    infoHeader.innerHTML = "<h2>" + infoHeaderText + "</h2>";
                }

            </script>
    </body>

</html>