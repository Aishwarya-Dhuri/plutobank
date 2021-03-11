<footer class="footerbg">
    <div class="container">
        <div class="footerspace fullwith"></div>
        <div class="col-md-3 col-sm-6 footerwidth">
            <div class="footerlogo">
                <img src="images/plotologo.png" class="img-responsive" alt="website-logo" />
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <address class="">
                Address
            </address>
        </div>
        <div class="col-md-3 col-sm-6 footerwidth">
            <div class="footerlogo">
                <h4>FINANCIAL SYSTEM</h4>
            </div>
            <ul>
                <li>
                    Financial Stablity
                </li>
                <li>
                    Macro Financial Reviews
                </li>
                <li>
                    Target 2 Overview
                </li>
                <li>
                    Countercyclical Capital Buffer
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6 monetarypolicy footerwidth">
            <div class="footerlogo">
                <h4>MONETARY POLICY</h4>
            </div>
            <ul>
                <li>
                    Policy Setting
                </li>
                <li>
                    Monetary Policy Role
                </li>
                <li>
                    Policy Implementation
                </li>
                <li>
                    Asset Purchase Programmes
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6 monetarypolicy footerwidth">
            <div class="footerlogo">
                <h4>RECENT TWEETS</h4>
            </div>
            <ul>
                <li>
                    How We Regulate
                </li>
                <li>
                    Industry & Market Sectors
                </li>
                <li>
                    Authorisation
                </li>
                <li>
                    Protected Disclosures & Wistleblowing
                </li>
            </ul>
        </div>
        <div class="col-md-3 martop50 col-sm-6 footerwidth">
            <div class="footerlogo">
                <h4>SITE INFORMATION</h4>
            </div>
            <ul>
                <li>
                    Disclosures
                </li>
                <li>
                    Social Media
                </li>
                <li>
                    Disclosures & Privacy
                </li>
                <li>
                    Terms
                </li>
                <li>
                    Site Map
                </li>
            </ul>
        </div>
        <div class="col-md-3 martop50 col-sm-6 footerwidth">
            <div class="footerlogo">
                <h4>LEGAL</h4>
            </div>
            <ul>
                <li>
                    Site map
                </li>
                <li>
                    RSS Feeds
                </li>
                <li>
                    Glossary
                </li>
                <li>
                    Freedom of Information
                </li>
            </ul>
        </div>
        <div class="col-md-12 martop50 marbot30 col-sm-12 fullwith">
            <div class="footercontent">
                <h5>Trade Responsibilities</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque elementum odio, nec euismod nunc interdum pulvinar ad minim veniam, quis sed ac dignissim sem. Pellentesque pellentesque ipsum ante, nec placerat dui cursus id. Fusce egestas risus sapien, eget dapibus nibh varius ac. Sed Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque elementum odio, nec euismod nunc interdum pulvinar ad minim veniam, Suspendisse vitae massa vel elit dictum consectetur in sed purus.</p>
            </div>
        </div>
        <div class="col-md-8 bottomemenu">
            <div class="bottomlist">
                <ul class="footermenu">
                    <li>
                        <a href="javascript:void(0)">HOME</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">ABOUT</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">NEWS & MEDIA</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">EVENTS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">CAREERS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 sociallink">
            <div class="iconfiled">
                <ul class="socialicon">
                    <li>
                        <a href="javascript:void(0)">
                            <img src="images/social.png" class="img-responsive" alt="socialimg">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" />
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custome.js"></script>
<script src="js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $('.mobilemenu button').click(function() {
        $('.nav-menu').addClass('open');
        $('pusher').addClass('shift');
        $('body').addClass('bodyoverflow');
    });
    $('.closebtn').click(function() {
        $('.nav-menu').removeClass('open');
        $('pusher').removeClass('shift');
        $('body').removeClass('bodyoverflow');
    });

    $("#navbar .navbar-nav li").click(function() {
        $("#navbar .navbar-nav li").removeClass('active');
        $(this).addClass("active");
    });
    $(document).ready(function($) {
        var url = window.location.href;
        var activePage = url;
        $('.bs-example ul li a').each(function() {
            var linkPage = this.href;
            if (activePage == linkPage) {
                $(this).closest("li").addClass("active");
            }

        });
        var url = window.location.href;
        var activePage = url;
        console.log(activePage);
        $('.menu-section .navbar-nav li a').each(function() {
            var linkPage = this.href;
            if (activePage == linkPage) {
                $(this).closest("li").addClass("active");
            }
        });
    });
</script>
</body>

</html>
