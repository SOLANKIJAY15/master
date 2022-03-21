
<?php
     $base=$this->config->item("base_url");
    // print_r($base);
    // exit;
?>
<!-- Footer Start -->
   <div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>Ahemdabad,Gujarat,INDIA</p>
                        <p><i class="fa fa-envelope"></i>himanshumakwana3110@gmail.com</p>
                        <p><i class="fa fa-envelope"></i>jaysolanki934@gmail.com</p>
                        <p><i class="fa fa-phone"></i>+91 7566244671</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                           
                            <a href="https://accounts.google.com/signin/v2/identifier?service=youtube&passive=1209600&continue=https%3A%2F%2Fstudio.youtube.com%2F&followup=https%3A%2F%2Fstudio.youtube.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <!--  -->
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <img src="<?php echo $base.'/assets/img/payment-method.png';?>" alt="Payment Method" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="<?php echo $base.'/assets/img/godaddy.svg';?>" alt="Payment Security" />
                    <img src="<?php echo $base.'/assets/img/norton.svg';?>" alt="Payment Security" />
                    <img src="<?php echo $base.'/assets/img/ssl.svg';?>" alt="Payment Security" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->     

   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $base.'/assets/lib/easing/easing.min.js';?>"></script>
        <script src="<?php echo $base.'/assets/lib/slick/slick.min.js';?>"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo $base.'/assets/js/main.js';?>"></script>
    </body>
</html>
