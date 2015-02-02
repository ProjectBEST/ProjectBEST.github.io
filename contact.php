<!DOCTYPE HTML>
<html>

<head>
    <title>Project BEST &ndash; Contact Us</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="shortcut icon" href="favicon.ico">
    <script src="email/validation.js" type="text/javascript"></script>
</head>

<body id="top">

    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <h1><a href="index.html">Project BEST</a>
        </h1>
        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="about.html">About</a>
                </li>
                <li><a href="getinvolved.html">Get Involved</a>
                </li>
                <li><a href="#">Media</a>
                </li>
                <li><a href="#">Team</a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper style1">
        <header class="major">
            <h2>Contact Us</h2>
            <p>Have something to say&quest; Go ahead and fill this out and we&apos;ll get back to you as soon as possible&excl;</p>
        </header>
        <div class="container">
            <hr class="major" />  
            <div class="row">
                <div class="12u">
                    <section class="special">
                        <h3 style="color:#629DD1;">
                                <?php echo $_GET[msg];?>
                        </h3>
                    </section>
                </div>
            </div>
            <div class="row"> 
                <div class="8u">
                    <section class="special">
                        <form name="enq" method="post" action="email/" onsubmit="return validation();">
                            <fieldset>

                                <input type="text" name="name" id="name" value="" class="input-block-level" placeholder="Name" /><br>
                                <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email Address" /><br>
                                <input type="text" name="phone" id="phone" value="" class="input-block-level" placeholder="Phone Number" /><br>
                                <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Message"></textarea><br>

                                <div class="actions">
                                    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="button special" title="Click here to submit your message!" />
                                </div>

                            </fieldset>
                        </form>
                    </section>
                </div>
                <div class="4u">
                    <section>
                        <h3>Our Information:</h3>
                        <p><b>Email:</b>&nbsp;projectbest.usa@gmail.com<br><b>Telephone:</b>&nbsp;571-234-3172</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row double">
                <div class="6u">
                    <div class="row collapse-at-2">
                        <div class="6u">
                            <h3>Accumsan</h3>
                            <ul class="alt">
                                <li><a href="#">Nascetur nunc varius</a>
                                </li>
                                <li><a href="#">Vis faucibus sed tempor</a>
                                </li>
                                <li><a href="#">Massa amet lobortis vel</a>
                                </li>
                                <li><a href="#">Nascetur nunc varius</a>
                                </li>
                            </ul>
                        </div>
                        <div class="6u">
                            <h3>Faucibus</h3>
                            <ul class="alt">
                                <li><a href="#">Nascetur nunc varius</a>
                                </li>
                                <li><a href="#">Vis faucibus sed tempor</a>
                                </li>
                                <li><a href="#">Massa amet lobortis vel</a>
                                </li>
                                <li><a href="#">Nascetur nunc varius</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="6u">
                    <h2>Aliquam Interdum</h2>
                    <p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
                    <ul class="icons">
                        <li>
                            <a href="#" class="icon fa-twitter">
                                <span class="label">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-facebook">
                                <span class="label">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-instagram">
                                <span class="label">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-linkedin">
                                <span class="label">LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon fa-pinterest">
                                <span class="label">Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="copyright">
                <li>Copyright &copy;
                    <script type="text/javascript">
                    var d = new Date()
                     document.write(d.getFullYear())
                    </script>&nbsp;Project BEST. All rights reserved.</li>
            </ul>
        </div>
    </footer>

</body>

</html>
