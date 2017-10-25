<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-2">
                <img class="pg-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/Logo-Final-white.png"/>
                <ul class="pg-footer__social">
                    <li>
                        <a href="https://www.facebook.com/The-Pug-851539991524937/"><i
                                    class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/pughomeloans"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="http://linkedin.com/company/pug-home-loans"><i
                                    class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mt-2">
                <h2 class="h4 mt-0">Get In Touch</h2>
                <ul class="list-unstyled pg-footer__list">
                    <li>Suite 10, 50 Victoria Road Drummoyne 2047</li>
                    <li>Tel:  1300 THE PUG, 1300 843 784 </li>
                    <li>Skype: PUGLOANS</li>
                </ul>
            </div>
            <div class="col-md-4 mt-2">
                <h2 class="h4 mt-0">Quick Links</h2>
                <ul class="list-unstyled pg-footer__list">
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/">Home</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/about">About</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/faq">FAQ</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/credit-guide">Credit Guide</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/security">Security</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/privacy">Privacy</a>
                    </li>
                    <li>
                        <a class="text-lightest" href="<?php echo get_site_url(); ?>/contact-us">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="small text-muted mt-2">
            © Pug Financial Pty Ltd 2015 | All Rights Reserved | Credit Representative Number 480259 is authorised under
            Australian Credit Licence Number 389328.
            Thepug.com.au is a registered trademark.
        </div>
    </div>
</footer>

</div>
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cbpQTRotator.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script>
    $(function () {
        /*
        - how to call the plugin:
        $( selector ).cbpQTRotator( [options] );
        - options:
        {
            // default transition speed (ms)
            speed : 700,
            // default transition easing
            easing : 'ease',
            // rotator interval (ms)
            interval : 8000
        }
        - destroy:
        $( selector ).cbpQTRotator( 'destroy' );
        */

        $('#cbp-qtrotator').cbpQTRotator();

    });
</script>

<script>


    jQuery(document).ready(function () {
        jQuery(".button").click(function () {
            var href_val = jQuery(this).find('a').attr('href');
            window.location = href_val;
        });

        function myFunction($param) {
            $param.each(function () {
                var square_w = jQuery(this).width();
                var padding_w = jQuery(this).css('padding-left');
                jQuery(this).css('height', Number(square_w) + Number(padding_w));
                jQuery(this).children(".card-container").css('height', square_w);
                jQuery(this).find(".card .front").css('height', square_w);
                jQuery(this).find(".back").css('height', square_w);
                jQuery(this).find(".card-container").css('height', square_w);
            });
        }

        myFunction(jQuery(".square"));
        jQuery(window).resize(function () {
            myFunction(jQuery(".square"));
        })

    })
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-67856089-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 939489437;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/939489437/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body>
</html>
