<!DOCTYPE html><html><head>
    <title>iForcetek - Contact || Your trusted IT solutions partner</title>
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="iForcetek offers IT Solutions in the area of Web Application, Mobile Application, Software Implementation and maintenance support, Software Product development, customization and support." />
    <meta name="keywords" content="Technology Solutions Bellevue, Web App Development Bellevue, Web App Development Seattle, Mobile App Development Bellevue, Mobile App Development Seattle, Small Business Web Bellevue, Technology Solutions Seattle, Small Business Web Seattle, Membership Management, Startup Technology Solutions Bellevue, Startup Technology Solutions Seattle, Web App Development, Mobile Application, iOS, Android App, Windows 7 App, CRM Implementation, IT Consulting, Software Development, Mobile Application, iOS App Development, Android App Development, Windows App Development, AHTML5 App Development, Web Application Development, iforcetek, iForce Tecknologies, iForcetek Techfuse, iForcetek Customer VoiceBox" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include '_includes/functionsPHP.php';
        makeLinkTag('', 'base');
    include '_includes/nav.php';
    ?>
<div class="center contact_center">
            <section class="section-holder">
                <div class="desk-social-bar show-desktop social-bar">
              
                    <?php include '_includes/social-bar.php';?>
              
                </div>
                <div class="issues_form">
                    <form data-enhance="false" data-ajax="false" id="contact_first_form" action="gdform.php" method="post">
                        <fieldset>
                            <legend class="header">Please fill out the form below to contact us,<br />
                                thank you.</legend>
                            <div>
                                <label>Name</label>
                                <input type="text" name="name" id="contact_name" class="input_class" />
                            </div>
                            <div>
                                <label>E-mail</label>
                                <input type="email" name="email" id="contact_email" class="input_class" />
                            </div>
                            <div>
                                <label>Subject</label>
                                <input type="text" name="subject" id="contact_subject" class="input_class" />
                            </div>
                            <div>
                                <label>Your Message</label>
                                <textarea name="message" cols="44" rows="12" id="contact_message"></textarea>
                            </div>
                            <input data-enhance="false" data-ajax="false" name="submit" type="submit" value="Send Message" onclick="
    MM_validateForm('contact_name', '', 'R', 'contact_email', '', 'R', 'contact_subject', '', 'R', 'contact_message', '', 'R');
    return document.MM_returnValue" />
                            <input type="hidden" name="subject" value="Form Submission" />
                            <input type="hidden" name="redirect" value="thankyou.html" />
                        </fieldset>
                    </form>
                </div>
                <section class="contact-after-form">
                    <div class="header contact_bases">
                        <h1>iForcetek</h1>
                    </div>
                    <div class="contact_bases">
                        <h2 class="left">President<a href="http://www.linkedin.com/in/lakshank" target="_blank">
                        Lakshmi Shankar
                        </a></h2>
                    </div>
                    <div class="contact_bases">
                        <h4 class="left first_h4">Contact</h4>
                        <p class="phone left">425.898.8074</p>
                        <a class="left" href="mailto: info@iforcetek.com" target="_blank">info@iforcetek.com</a>
                    </div>
                    <div class="contact_bases">
                        <h4 class="left first_h4">Sales</h4>
                        <a class="left" href="mailto: sales@iforcetek.com" target="_blank">sales@iforcetek.com</a>
                    </div>
                    <div class="contact_bases">
                        <h4 class="left first_h4">Service</h4>
                        <a class="left" href="mailto: itenabler@iforcetek.com" target="_blank">itenabler@iforcetek.com</a>
                    </div>
                    <div class="contact_bottom_text">
                        <p class="p-verdana">
                            Our Corporate Office is located at Sammamish, WA 98074.
                        </p>
                        <p class="p-verdana">
                            Please contact us to discuss your companies IT needs and how we can help your organization's 
                        IT management.
                        </p>
                        <p class="p-verdana">
                            We offer competitive salary and a promising career path. Our package includes medical, dental, 
                        vision, vacation and national holidays.
                        </p>
                        <p class="p-verdana">
                            We are hiring interns with expertise in the following areas: HTML5, CSS, JavaScript, jQuery, 
                        Apache, MySQL. If you have skills in these areas and is open for internship please forward your 
                        resume to <a href="mailto:jobs@iforcetek.com">jobs@iforcetek.com</a>.
                        </p>
                    </div>
                </section>
                <div class="clearfix-hor"></div>
            </section>
            <div class="clearfix-hor"></div>
        </div>
     <?php include '_includes/footer.php'?>
        <?php 
        $file_name = preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF']));
        makeScriptTag('', 'base', $file_name);?>
</div></body></html>

    