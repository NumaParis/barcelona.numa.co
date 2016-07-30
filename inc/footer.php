<footer class="footer-1 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <img alt="Logo" style="max-height: 230px;" class="logo" src="img/logo-white.png" />
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h6 class="title">Twitter Feed</h6>
                    <hr>
                    <div class="twitter-feed">
                        <a class="twitter-timeline" data-height="270" data-theme="dark" href="https://twitter.com/NUMA_Bcn">Tweets by NUMA_Bcn</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <!--<ul class="list-inline social-list">
                        <li><a target="_blank" href="https://twitter.com/NUMA_Bcn"><i class="ti-twitter-alt icon icon-sm"></i></a></li>
                        <li><a target="_blank" href="http://www.facebook.com/numabarcelona"><i class="ti-facebook icon icon-sm"></i></a></li>
                        <li><a target="_blank" href="http://instagram.com/numa_barcelona"><i class="ti-instagram icon icon-sm"></i></a></li>
                    </ul>-->
                </div>
                <!--end of widget-->
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget" style="color:white;">
                    <h6 class="title">Location</h6>
                    <hr> Palau de Mar,
                    <br /> Plaça de Pau Vila,
                    <br /> Barcelona, 08003
                    <br /> Spain
                </div>
                <!--end of widget-->
            </div>
            <div class="col-md-3 col-sm-6 col-md-offset">
                <div class="widget">
                    <h6 class="title">Contact us</h6>
                    <hr>
                    <?php
                    if(isset($_POST['sendEmail'])) {
                        $to      = 'lopermo.g@gmail.com';
                        $subject = 'New suscriber: ' . $_POST['recipient-name'];
                        $message = "Name: " . $_POST['recipient-name'] . "<br />Email: " . $_POST['recipient-email'];
                        $header  = "From: info@bloomedia.biz\r\n";
                        $header .= "Reply-To: " . $_POST['recipient-email'] ."\r\n";
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "Content-Type: text/html; charset=utf-8\r\n";
                        $header .= "X-Priority: 1\r\n";

                        @mail($to, $subject, $message, $header);

                        $to      = $_POST['recipient-email'];
                        $subject = "Confirmación de envío";
                        $message = "
                        Muchas gracias por interesarte en uno de nuestros packs. En breve nos pondremos en contacto.<br /><br />
                        Te adjuntamos un enlace a nuestra presentación: <a href='https://docsend.com/view/ptsk34m' target='_blank'>Abrir presentación</a><br />
                        Mientras tanto, por qué no nos sigues en las redes sociales.<br /><br />
                        <a style='margin-right:5px' href='https://www.facebook.com/BlooMediaMarketing' target='_blank'><img src='http://bloomedia.biz/img/icons/facebook.png' style='width:24px;height:auto;'></a>
                        <a style='margin-right:5px' href='https://www.linkedin.com/company/bloo-media' target='_blank'><img src='http://bloomedia.biz/img/icons/linkedin.png' style='width:24px;height:auto;'></a>
                        <a href='https://twitter.com/bloo_media' target='_blank'><img src='http://bloomedia.biz/img/icons/twitter.png' style='width:24px;height:auto;'></a><br />
                        <img src='http://bloomedia.biz/img/logo_dark.png' style='width:150px;height:auto;'>";
                        $header  = "From: noreply@bloomedia.biz\r\n";
                        $header .= "Reply-To: noreply@bloomedia.biz\r\n";
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "Content-Type: text/html; charset=utf-8\r\n";
                        $header .= "X-Priority: 1\r\n";

                        @mail($to, $subject, $message, $header);
                        echo '<script>alert("Mensaje enviado correctamente")</script>';
                    }
                     ?>
                    <form action="" method="post">
                        <div class="row mb8">
                            <div class="col-sm-12">
                                <input type="text" name="recipient-name" class="mb0 validate-name validate-required  signup-name-field" placeholder="Full name">
                            </div>
                        </div>
                        <div class="row mb8">
                            <div class="col-sm-12">
                                <input type="text" name="recipient-email" class="mb0 validate-email validate-required  signup-email-field" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <button style="height:40px;" type="submit" name="sendEmail" class="mb0">Send email</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end of widget-->
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-6">
                <span class="sub">&copy; Copyright 2016 - Barcelona Numa</span>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="list-inline social-list">
                    <li><a target="_blank" href="https://twitter.com/NUMA_Bcn"><i class="ti-twitter-alt"></i></a></li>
                    <li><a target="_blank" href="http://www.facebook.com/numabarcelona"><i class="ti-facebook"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/10864997?trk=tyah&trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_10864997%2Cidx%3A0"><i class="ti-linkedin"></i></a></li>
                    <li><a target="_blank" href="http://instagram.com/numa_barcelona"><i class="ti-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row text-center bg-dark">
        <h4 style="opacity:0.4;" class="mt24">#yeswecrowd</h4>
    </div>

    <!--end of container-->
    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
</footer>
