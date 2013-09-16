 <div class="footer" tabindex="-1" data-role="footer" data-enhance="false">
            <div class="mob-social-bar social-bar show-mobile">
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/Iforcetek" title="Become a fan">
                        <img src="images/social/facebook_32.png" alt="Facebook" /></a></li>
                    <li><a target="_blank" href="http://www.twitter.com/iforcetek" title="Follow my tweets">
                        <img src="images/social/twitter_32.png" alt="Facebook" /></a></li>
                    <li><a target="_blank" href="https://plus.google.com/105541264589044199743" title="Add to the circle">
                        <img src="images/social/google_plus_32.png" alt="Facebook" /></a></li>
                    <li><a target="_blank" href="http://www.linkedin.com/company/iforcetek" title="Check my linkeIn">
                        <img src="images/social/linkedin_32.png" alt="linkedin" /></a></li>
                    <li><a target="_blank" href="mailto:itenabler@iforcetek.com" title="Send me a email">
                        <img src="images/social/email_32.png" alt="email" /></a></li>
                </ul>
            </div>
            <ul class="footer_ul">
                <li>© 2013 iForce Tecknologies Inc, all rights reserved.</li>
                <li><a href="privacy_policy.html" target="_blank">Privacy Policy</a></li>
                <li><a href="mailto:itenabler@iforcetek.com" target="_blank">itenabler@iforcetek.com</a></li>
                <li><a href="contact.html" target="_blank">425-898-8074</a></li>
                <li><a href="#" class="false">Desktop version</a></li>
            </ul>
            <div class="clearfix-hor"></div>
        </div>

<?php 
makeScriptTag(1); 
$path=__FILE__;
if(strpos($path, 'index.php')){
    echo '<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>';
}
?>
        <script type="text/javascript">
            $(function () {
                $('.flexslider').flexslider({
                    animation: 'slide'
                });
            });
        </script>
    </div>
    <div data-role="page" id="dialog01" title="Subscribe to iForcetek Techfuse blog">
        <div data-role="header">
            <h1>Subscribe to iForcetek
                <br />
                Techfuse blog</h1>
        </div>
        <div data-role="content">
            <form data-ajax="false" action="gdform.php" method="post">
                <fieldset>
                    <legend>Please fill out the form below, thank you.</legend>
                    <br />
                    <div>
                        <label>Name</label>
                        <input name="author2" type="text" class="inputclass" id="author2" size="24" />
                    </div>
                    <div>
                        <label>E-mail</label>
                        <input name="email" type="text" class="inputclass" id="email" />
                    </div>
                    <div style="width: 45%;" class="left">
                        <input data-theme="e" type="reset" value="Reset Form" data-role="button" data-mini="true" />
                        <input data-theme="e" data-ajax="false" data-role="button" data-mini="true" name="submit" type="submit" value="Subscribe" onclick="MM_validateForm('author2', '', 'R', 'email', '', 'R'); return document.MM_returnValue" />
                    </div>
                    <input type="hidden" name="subject" value="Form Submission" />
                    <input type="hidden" name="redirect" value="thankyou.html" />
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
