<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>Innovative SWCNT</title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/media.css" rel="stylesheet" media="screen">
    <!-- js -->
</head>

<body>
    <?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    
    if($_POST['btn_submit']){
        $errors = array(); // контейнер для ошибок
        // проверяем корректность полей
    if($_POST['user_email'] == "")   $errors[] = "Error: The field 'Your e-mail' is not filled!";
    
    if($_POST['user_comp'] == "")    $errors[] = "Error: The field 'Company/Insitute/Organisation' is not filled!";
    
        if($_POST['user_name'] == "")    $errors[] = "Error: The field 'First Name' is not filled!";
    
    
        if($_POST['user_name2'] == "")   $errors[] = "Error: The field 'Family Name' is not filled!";
        
        
            if($_POST['position'] == "")     $errors[] = "Error: The field 'Position' is not filled!";
            
            
    
    

        // если форма без ошибок
        if(empty($errors)){     
            // собираем данные из формы
            $message  = "First Name: " . $_POST['user_name'] . "<br/>";
            $message .= "Family Name: " . $_POST['user_name2'] . "<br/>";
            $message .= "E-mail addres: " . $_POST['user_email'] . "<br/>";
            $message .= "Company: " . $_POST['user_comp'] . "<br/>";        
            $message .= "Position: " . $_POST['position'] . "<br/>";
            $message .= "Occupation: " . $_POST['select'] . "<br/>";
            $message .= "Field of interest: " . $_POST['select2'] . "<br/>";
            $message .= "Occupation custom field: " . $_POST['custom_1'] . "<br/>";
            $message .= "Field of interest custom field: " . $_POST['custom_2'] . "<br/>";  
            send_mail($message); // отправим письмо
            // выведем сообщение об успехе
            $msg_box = "<em>Message sent successfully!</em>";
        }else{
            // если были ошибки, то выводим их
            $msg_box = "";
            foreach($errors as $one_error){
                $msg_box .= "<i>$one_error</i><br/>";
            }
        }
    }
    
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "daejeon2018@ocsial.com"; 
        // тема письма
        $subject = "Daejeon 2018 feedback";
        
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Feedback <no-reply@test.com>\r\n"; // от кого письмо
        
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
?>
    <header>
        <div class="navbar navbar-inverse navbar-fixed-topg">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://ocsial.com/ko/" target="_blank">
                        <img src="img/logo.png"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <div class="nav-anchor"></div>
                    <nav id="menu-center">
                        <ul>
                            <li>
                                <a class="active sl1 slice" href="#hv1">About</a>
                            </li>
                            <li>
                                <a class="sl2 slice" href="#hv2">REGISTER NOW</a>
                            </li>
                            <li>
                                <a class="sl3" href="#hv3">Programme & Speakers</a>
                            </li>
                            <li>
                                <a class="sl4 slice" href="#hv4">Venue</a>
                            </li>
                            <li>
                                <a class="sl5 slice" href="#hv5">The Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="hv0" class="section-0">
        <div class="single-item">
            <div>
                <div class="bg-area" style="background: url(img/main.jpg) 0 0 no-repeat;">
                    <div class="container">
                        <img src="img/m1.png">
                        <div class="txt-top">
                            <h1>Nanotechnology & materials</h1>
                            <h2>OCSiAl Workshop & Conference</h2>
                            <h3>
                                Innovative single wall carbon nanotubes
                                <span>From Laboratory to Industry</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="click-positon">
            <span>13 April</span>
            2018 Daejeon, Korea
        </div>
    </section>
    <section id="hv1" class="section-1">
        <div class="container">
            <div class="col-sm-6">
                <div class="fsl1">
                    <h4>
                        Innovative Single Wall Carbon Nanotubes: From Laboratory to Industry
                    </h4>
                    <p>
                        Welcome to the OCSiAl Workshop and Conference! We will focus on the transition that single wall carbon nanotubes are making from an attractive laboratory material to an economically and technologically viable product for the manufacturing industry. The Workshop and Conference will gather representatives from research universities, hi-tech companies and industry.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="fsl2">
                    <h4>Reasons to come:</h4>
                    <ul>
                        <li>
                            Discover recent breakthroughs in single wall carbon nanotube research
                        </li>
                        <li>
                            Find out about advances in technologies for enhancing the properties of materials
                        </li>
                        <li>
                            Experience nanoaugmented materials of new-generation products from all over the world
                        </li>
                        <li>
                            Talk with OCSiAl experts and R&D teams about ways in which nanotubes can transform your products or academic field
                        </li>
                        <li>
                            Explore the contribution nanotubes are making to reducing CO2 emissions and protecting the environment
                        </li>
                        <li>Network and share your vision for how nanotubes can improve materials</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="bottom-txt-1">
                <p>
                    To attend the OCSiAl Workshop & Conference, complete
                    the online
                    <a href="#"> <strong>registration form</strong>
                    </a>
                </p>
                <span>
                    Registration will be closed on <strong>April 5nd</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="hv2" class="section-2">
        <div class="container">
            <h2>Registration</h2>
            <div class="bg-form">
                <div class="left-form">
                </div>
                <div class="right-form">
                    <p>
                        If you’ve missed a chance to register in time, but you still would like to join us, please contact us via e-mail <a href="mailto:daejeon2018@ocsial.com" target="_blank">daejeon2018@ocsial.com</a>.<br><br> We will do our best to include you in additional list of participants.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>
        </form>
        </div>
    </section>
    <section id="hv3" class="section-3">
        <div class="container">
            <h2 id="hvs3">Programme & Speakers</h2>
            <div class="bottom-sp-area">
                <p>
                    <span>10.00–12.00</span>
                    Plenary session:
                    <br>SWCNT 2.0 – From Laboratory to Industry</p>
            </div>
            <div class="stl-row">
                <div class="speaker-area blue-style">
                    <div class="img-speaker">
                        <img src="img/1.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Viktor Kim, CEO</p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Asia Pacific
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style">
                    <div class="img-speaker">
                        <img src="img/2.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Dr. Alexander Bezrodny, <br>
                            R&D Director
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            International Scientific Center for Thermophysics and Energy
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                SWCNT V2.0 – TUBALL™ new level of additive
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style mobile-blue-style">
                    <div class="img-speaker">
                        <img src="img/3.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Dr. Bon-Cheol Ku, Principal researcher scientist</p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            Korea Institute of Science and Technology
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Current development status of high-strength CNT fibers
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area blue-style mobile-pink-style">
                    <div class="img-speaker">
                        <img src="img/4.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Hansang Kwon Ph. D. Dept. Of Materials System Engineering / CEO
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            Pukyong National University / Next Generation Materials Co.,Ltd
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Carbon Nanotube Reinforced Metal and Ceramic Matrix Composites
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <hr>
                <div class="top-sp-area">
                    <div class="bottom-sp-area" style="margin-bottom: 0;">
                        <p style="color: #fff;">
                            Coffee break
                        </p>
                    </div>
                </div>
                <hr>
                <br>
                <div class="clearfix"></div>
                <div class="speaker-area blue-style">
                    <div class="img-speaker">
                        <img src="img/5.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Dr. Oleg Bobrenok, Leading Researcher
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            International Scientific Center for Thermophysics and Energy
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                SWCNTs for Electrochemical Power Sources
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style">
                    <div class="img-speaker">
                        <img src="img/s3.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt"> Sergey Chupin, R&D manager
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Asia Pacific
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                High concentration TUBALL™ suspensions in various media: characterization and performance
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style mobile-blue-style">
                    <div class="img-speaker">
                        <img src="img/7.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Dr. Joong Tark Han, Principal researcher, Professor
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            Korea Electrotechnology Research Institute
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Nanocarbon materials for soft electronics
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="bottom-sp-area" style="margin-bottom: 0;">
                <p>
                    <span>12.00–13.00</span>
                    Lunch, networking & expo visiting.
                    <br>General photo of participants.</p>
            </div>
            <hr>
            <div class="bottom-sp-area">
                <p>
                    <span>13.00–14.00</span>
                    Plenary session: TUBALL applications
                    <br>– Coatings, Latexes and Li-ion Batteries</p>
            </div>
            <div class="stl-row">
                <div class="speaker-area blue-style">
                    <div class="img-speaker">
                        <img src="img/s1.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Youngsup Kim, <br>
                            Commercial Director
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Asia Pacific
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Industrial applications with TUBALL™ (SWCNT). Success stories in the world
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style">
                    <div class="img-speaker">
                        <img src="img/9.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Dongil Park, President
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            Seohyun Tech Chem Co., Ltd.
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Localization Tuball suspensions in Korea
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style mobile-blue-style">
                    <div class="img-speaker">
                        <img src="img/10.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Andrey Senyut, CEO
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Energy
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Ready-to-use solutions for the Future of Mobility and Energy Storage
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="bottom-sp-area" style="margin-bottom: 0;">
                <p>
                    <span>14.00–14.30</span>
                    Coffee break, networking & expo visiting
                </p>
            </div>
            <hr>
            <div class="bottom-sp-area">
                <p>
                    <span>14.30–16.00</span>
                    Plenary session: TUBALL applications – New
                    <br>Generation Elastomers and High-performance Composites</p>
            </div>
            <div class="stl-row">
                <div class="speaker-area blue-style">
                    <div class="img-speaker">
                        <img src="img/11.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Jean Nicolas‐Helt, <br>
                            Development and Support <br>
                            Leader for Elastomers
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Group
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                OCSiAl - SWCNT in rubber applications
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style">
                    <div class="img-speaker">
                        <img src="img/s2.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Jaekwan Kim, Sales Manager</p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Asia Pacific
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                Color&coductivity silicones HSR, LCR
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="speaker-area pink-style mobile-blue-style">
                    <div class="img-speaker">
                        <img src="img/13.jpg" alt="">
                        <div class="speaker-bg"></div>
                    </div>
                    <div class="txt-right">
                        <h5>Name & Position:</h5>
                        <p class="sp-txt">Vladimir Kravchenko,<br>
                            Project Leader
                        </p>
                        <h5>Company:</h5>
                        <p class="sp-txt2">
                            OCSiAl Group
                        </p>
                        <h5>Topic:</h5>
                        <p class="sp-txt2">
                            <strong>
                                TUBALL™ applications in Composite & Polymers
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="bottom-sp-area" style="margin-top: 50px;">
                <p>
                    <span style="
">16.00–16.10 Closing remarks</span>
                </p>
            </div>
        </div>
        <a href="Programme.pdf" target="_blank" class="btn-download">Download PDF</a>
        </div>
    </section>
    <section id="hv4" class="section-4">
        <div class="left-lx"></div>
        <div class="right-lx">
            <h2>Venue</h2>
            <div class="plp-area">
                <p>
                    The Workshop and Conference will take place in Daejeon – Korean technological and innovation hub. It is also a partner town of Russia’s Novosibirsk – the birthplace of OCSiAl technology for industry-scale production of single wall carbon nanotubes.
                </p>
                <p>
                    The main venue for the OCSiAl Workshop and Conference will be the ICC Hotel, Conventional Center, Floor 2. For your convenience, we have prebooked rooms at this hotel.
                </p>
                <p>
                    Click <a href="http://www.hotelicc.com/eng/eng_rese.do" target="_blank">here</a> for the online hotel reservation system – to get 10% discount on room charge, remember to insert “DAEJEON CONFERENCE” in ”ADDITIONAL REQUIREMENTS” field in reservation form.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="hv5" class="section-5">
        <div id="map-canvas" style="height: 500px; width: 100%;"></div>
        <script src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>
        <div class="left-c">
            <div class="lf-blk">
                <h2>The Contacts</h2>
                <div class="cnt-a">
                    <p>
                        OCSiAl support team is ready to help you.
                        <br>Please contact us, if you need any assistance.</p>
                    <a href="mailto:Daejeon2018@ocsial.com">Daejeon2018@ocsial.com</a>
                    <a href="tel:+82 10 8488 0284">+82 10 8488 0284</a>
                    <div class="smp-p">
                        For more details on TUBALL nanotubes and OCSiAl contact Kim Jaekwan
                        <a href="tel:+82 32 260 0407">+82 10 4115 9923</a>
                        <div class="btm-c">
                            OCSiAl Asia Pacific
                            <br>
                            Pilot Plant Bldg, Office 208,
                            <br>
                            12 Gaetbeol-ro Yeonsu-gu, Incheon, Korea
                            <br>
                            <a href="tel:+82 32 260 0407">+82 32 260 0407</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-c"></div>
        <div class="clearfix"></div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="logo">
                        <a href="https://ocsial.com/ko/" target="_blank">
                            <img src="img/logo.png"></a>
                        <span>
                            Redefining materials
                            <br>
                            Reinventing technologies
                            <br>© All rightts reserved. OCSiAl 2015</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-right">
                        <div class="top">Follow us</div>
                        <a href="https://www.facebook.com/ocsialgroup" target="_blank">
                            <img src="img/fb.png"></a>
                        <a href="https://twitter.com/OCSiAl" target="_blank">
                            <img src="img/tw.png"></a>
                        <a href="http://www.youtube.com/OCSiAl" target="_blank">
                            <img src="img/yo.png"></a>
                        <a href="http://www.linkedin.com/company/ocsial-group/" target="_blank">
                            <img src="img/in.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <!-- /.modal -->
</body>

</html>