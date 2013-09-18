<!DOCTYPE html><html><head>
    <title>iForcetek - Clients || Your trusted IT solutions partner</title>
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="iForcetek offers IT Solutions in the area of Web Application, Mobile Application, Software Implementation and maintenance support, Software Product development, customization and support." />
    <meta name="keywords" content="IT Solutions, IT Services, Web Development, Mobile Application, iOS, Android App, Windows 7 App, CRM Implementation, IT Consulting, Software Development, Software Customization, Application Development, iforcetek, iForce Tecknologies, iForcetek Techfuse, iForcetek Customer VoiceBox" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include '_includes/functionsPHP.php';
        makeLinkTag(array('css/jquery-ui-1.9.2.accordion-min.css'), 'clients.php');
        include '_includes/nav.php';    
    ?>
<div class="center clients_center" data-enhance="false">
            <div class="desk-social-bar show-desktop social-bar">
              <?php include '_includes/social-bar.php'?>
            </div>
            <section class="client_first_section">
                <div class="outer_thin_shadow">
                    <article>
                        <header class="header">
                            Evaluation
                        </header>
                        <p class="p-verdana">
                            Our first meeting with the client is for evaluation purpose. Our evaluation service is free of charge. We ask critical questions addressing your current systems issue, near term and long term business goals, budget constraints, plans for system upgrades, process flows and prepare a first evaluation report pointing out gap analysis, short term and long term solutions, deployment options, budget and pricing projections.
                        </p>
                    </article>
                    <article>
                        <header class="header">
                            Client Engagement
                        </header>
                        <p class="p-verdana">
                            Client Engagement gets started when client agrees to the work order. From this point on we continue to engage with our client, frequently as per the client engagement model the customer as opted for until the deployment of our solutions. After successful completion of our solutions deployment, the client signs off on the deployment report after verifying the elements of functionality delivered.
                        </p>
                    </article>
                    <article>
                        <header class="header">
                            Service Guarantee
                        </header>
                        <p class="p-verdana">
                            We offer continued service support for the solutions deployed by us for at least 3 months from the date of solutions deployment which ensures a sense of commitment from us to our clients. During this phase we educate and train them on usability, admin rights and other maintenance aspects of the solution deployed.
                        </p>
                    </article>
                    <article>
                        <header class="header">
                            On Going Support
                        </header>
                        <p class="p-verdana">
                            We offer a robust maintenance and support plan which is reviewed on an annual basis. The support features include system maintenance, trouble shooting of systems issues, security issues for the supported systems and applications, systems upgrade for those systems covered under the annual maintenance contract.
                        </p>
                    </article>
                </div>
                <div class="accordion">
                    <header>
                        Clients
                    </header>
                    <p class="p-verdana">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla in sem in aliquam. Praesent aliquam purus quis dolor placerat pretium in facilisis risus. Donec mattis pulvinar mi, at imperdiet justo bibendum vitae. Aenean egestas nulla nec feugiat commodo. Suspendisse porttitor nulla venenatis lectus ullamcorper, in consectetur nunc imperdiet. Praesent et lectus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ultrices justo. Quisque nec volutpat arcu. Aenean fermentum metus laoreet, ullamcorper leo eu, iaculis felis. Curabitur ac tempor magna, non ullamcorper ligula. Aliquam sed suscipit ante. Vestibulum id gravida libero, id pretium erat. Morbi eu risus id eros semper cursus. Nullam placerat nulla quis ultricies dapibus.
                    </p>
                    <header>
                        Affiliations
                    </header>
                    <p class="p-verdana">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla in sem in aliquam. Praesent aliquam purus quis dolor placerat pretium in facilisis risus. Donec mattis pulvinar mi, at imperdiet justo bibendum vitae. Aenean egestas nulla nec feugiat commodo. Suspendisse porttitor nulla venenatis lectus ullamcorper, in consectetur nunc imperdiet. Praesent et lectus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ultrices justo. Quisque nec volutpat arcu. Aenean fermentum metus laoreet, ullamcorper leo eu, iaculis felis. Curabitur ac tempor magna, non ullamcorper ligula. Aliquam sed suscipit ante. Vestibulum id gravida libero, id pretium erat. Morbi eu risus id eros semper cursus. Nullam placerat nulla quis ultricies dapibus.
                    </p>
                    <header>
                        Client's testimonials
                    </header>
                    <div id="testimonial_slide">
                        <a href="#dialog03" data-rel="dialog" data-transition="flip" class="p-verdana">I want to thank Laksmi and iForcetek for all their support and patience
                        <span class="more_clients">[ MORE ]</span>
                        </a>
                        <span class="dn">educating me on how to improve my productivity. I had no idea how much changed in the internet community the past few years. There are so many tools out there that we really need to use. It has been a blessing to have such a professional as Laksmi to guide mein the right direction. I would whole heartedly refer iForcetek as a solution to anyone's need to be more efficient and streamline their business.</span>
                        <span class="dn">problem solution, not just technology or IT systems. She brought strong thinking, excellent communication and collaboration to the project. I felt highly enough of her performance and abilities that at the end of the project, I recommeded her for additional work in our organization.</span>
                        <br />
                        <a href="#dialog03" data-rel="dialog" data-transition="flip" class="p-verdana">Laksmi helped lead a project that needs to be focused on the business   
                        <span class="more_clients">[ MORE ]</span>
                        </a>
                    </div>
                </div>
            </section>
            <div class="clearfix-hor"></div>
        </div>
        <?php include '_includes/footer.php';?>
        <?php 
        $file_name = preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF']));
        makeScriptTag(array('js/jquery-ui-1.9.2.accordion-min.js'), 'clients.php', $file_name);
        ?>
            <script type="text/javascript">
                $(document).on('pageinit', function () {
                    $('.accordion').accordion();
                });
            </script>
</div>
    <div data-role="page" id="dialog03" title="Client's Testimonial" style="padding: 1em;">
        <div data-role="header" style="padding: 0.8em; text-align: center;">
            Testimonials
        </div>
        <div data-role="content">
        <h1>
            Mario A. Morales Executive Director
                <br>
            Founding President Eastside Business Association
        </h1>
        <div data-role="content">
            <p class="p-verdana" style="padding: 1.5em;">
                I want to thank Laksmi and iForcetek for all their support and patience educating me on how to improve my productivity. I had no idea how much changed in the internet community 
                the past few years. There are so many tools out there that we really need to use. It has been a blessing to have such a professional as Laksmi to guide me
                in the right direction. I would whole heartedly refer iForcetek as a solution to anyone's need to be more efficient and streamline their business. 
            </p>
        </div>
        <div style="width: 100%; border: outset 0.1em #444; margin-bottom: 0.6em;"></div>
        <h1>
            Group Program Manager, Microsoft
        </h1>
        <div data-role="content">
            <p class="p-verdana" style="padding: 1.5em;">
                Laksmi helped lead a project that needs to be focused on the business problem solution, not just technology or IT systems. She brought strong thinking,
                excellent communication and collaboration to the project. I felt highly enough of her performance and abilities that at the end of the project, I recommeded 
                her for additional work in our organization.
            </p>
        </div>
        </div>
        <div data-role="footer"></div>
    </div>
</body>
</html>