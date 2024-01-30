    <?php
        // header('Content-type: text/css', true);
     header("Content-type: text/css; charset: UTF-8");
     //header("Cache-Control: public, max-age=31536000");
     require '/var/www/html/wordpress/wp-load.php';
    $primary_theme_color = get_field('primary_theme_color', 'option');
    $secondary_theme_color = get_field('secondary_theme_color', 'option');
    $background_white_color = get_field('background_white_color', 'option');
    $primary_text__color = get_field('primary_text__color', 'option');
    $secondary_text_color = get_field('secondary_text_color', 'option');
    $white_text_color = get_field('white_text_color', 'option');
    $black_text_color = get_field('black_text_color', 'option');
    ?>
    <style type="text/css">
        /* Custom Fonts */
        /* @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"); */
        /* Custom CSS  Start Here*/
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

	:root {
           
            /* Background Color */
            --primary-color: <?php echo $primary_theme_color; ?>;
            --secondary-color: <?php echo $secondary_theme_color; ?>;
            --bg-white: <?php echo $background_white_color; ?>;
            /* Text Color */
            --primary-text: <?php echo $primary_text__color; ?>;
            --secondary-text: <?php echo $secondary_text_color; ?>;
            --text-white: <?php echo $white_text_color; ?>;
            --text-black: <?php echo $black_text_color; ?>;
	}
	body {
            margin: 0;
            padding: 0;
            font-family: "Open Sans", sans-serif;
            font-display: swap;
        }

        .main-btn {
            background: var(--secondary-color);
            color: var(--text-white);
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 50px;
            border-radius: 4px;
            margin-top: 0px;
        }

        .main-btn:hover {
            background: var(--primary-color);
            color: var(--text-white);
        }

        .main-btn:focus {
            background: var(--secondary-color);
            color: var(--text-white);
        }

        .red-btn-hover:hover {
            background: var(--secondary-color) !important;
            color: var(--text-white) !important;
            border-color: var(--secondary-color) !important;
        }

        .blue-btn-hover:hover {
            background: var(--primary-color) !important;
            color: var(--text-white) !important;
            border-color: var(--primary-color) !important;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 0.35rem;
        }

        ::-webkit-scrollbar-track {
            background: var(--primary-color);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
        }

        ::-moz-selection {
            /* Code for Firefox */
            color: var(--text-white);
            background: var(--secondary-color);
        }

        ::selection {
            color: var(--text-white);
            background: var(--secondary-color);
        }

        button:focus,
        a:focus,
        input:focus,
        .form-control:focus {
            outline: 0;
            box-shadow: none;
            border: 0;
        }

        .header-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
            background: var(--bg-white) !important;
            z-index: 999;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.10);
        }

        .header-fixed a {
            color: var(--primary-text) !important;
            padding: 1rem 2rem !important;
        }

        .header-fixed a:hover,
        .header-fixed .active a {
            color: var(--text-white) !important;
        }

        /* Custom CSS End Here */
        /* Header CSS Start Here */
        .cmc-logo {
            padding: 5px 0;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        form.d-flex.header-search button.btn {
            position: relative;
        }

        img.black-search {
            position: absolute;
            left: 12px;
            top: 8px;
        }

        .fixtopheader img.black-search {
            opacity: 1;
        }

        .who-we-are-menu img.white-serach {
            opacity: 0;
        }

        .who-we-are-menu img.black-search {
            opacity: 1;
        }

        .black-search {
            opacity: 0;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            color: rgba(255, 255, 255, .75);
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-underline .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
            color: #6c757d;
        }

        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .show>.nav-link {
            /* color: #a0edcc; */
            color: var(--text-white);
            background: var(--secondary-color);
        }

        .nav-underline .nav-link:hover {
            color: #007bff;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: var(--text-white);
            background: var(--secondary-color);
        }

        .navbar-dark .navbar-nav .nav-link:focus {
            color: var(--text-white);
        }

        .nav-underline .active {
            font-weight: 500;
            color: #343a40;
        }

        .dropdown-menu-dark .dropdown-item:active {
            color: var(--primary-color);
            background-color: var(--text-white)0;
        }

        .dropdown-menu-dark .dropdown-item:focus {
            color: var(--primary-color);
        }

        #navbarNavDarkDropdown a.dropdown-item {
            display: inline-block;
            width: 33.33%;
            color: var(--primary-color);
            font-size: 14px;
            padding: 0.4rem 0;
            transition: .3s ease-in-out;
            border-bottom: 1px solid #fff0;
        }

        #navbarNavDarkDropdown .dropdown-menu {
            padding: 1rem !important;
        }

        #navbarNavDarkDropdown .dropdown-item:hover:after {
            content: "";
            width: 6rem;
            border-bottom: 1px solid var(--secondary-color);
            display: block;
        }

        #navbarNavDarkDropdown a.dropdown-item:hover {
            background: unset;
            color: var(--secondary-color);
        }

        .navbar-dark .navbar-nav .nav-link:after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0px;
            width: 0%;
            height: 2px;
            background-color: #a0edcc;
            opacity: 1;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .header-search input.form-control.me-2:focus {
            background-color: var(--bg-white);
            outline: 0;
            box-shadow: none;
            background: none;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5);
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding: 10px 53px;
            color: var(--text-white);
            font-size: 15px;
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .header-search input.form-control.me-2 {
            background: none;
            border: none;
            border: 1px solid #999;
            border-radius: 4px;
            color: var(--text-black);
            padding-left: 40px;
            height: 35px;
        }

        form.header-search {
            position: relative;
        }

        .header-search button.btn {
            position: absolute;
            left: 0;
            top: -3px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        a.nav-link.dropdown-toggle.show {
            background: var(--secondary-color);
            color: var(--text-white);
            opacity: 1;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
            padding: 0;
            top: 41px;
            border-radius: 0;
            background: var(--bg-white);
            width: 620px;
            left: 0%;
            padding: 20px 20px 20px 40px;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu li {
            float: left;
            width: 33.33%;
        }

        .dropdown-menu-dark .dropdown-item {
            color: var(--primary-color);
            font-size: 14px;
            padding: 5px 0;
            transition: .3s ease-in-out;
            width: max-content;
            border-bottom: 1px solid var(--text-white)0;
        }

        .dropdown-menu-dark .dropdown-item:hover {
            color: var(--secondary-color);
            border-bottom: 1px solid var(--secondary-color);
        }

        .header-search button.btn.btn-outline-success {
            position: absolute;
            left: 0;
            color: var(--text-white);
            border: none;
            padding: 0;
        }

        .fixed-top {
            position: absolute;
        }

        .navbar {
            padding-top: 10px;
        }

        .navbar.fixtopheader .what-we-do-section {
            padding: 90px 0 0;
        }

        .navbar.fixtopheader .what-we-do-body:before {
            background: var(--bg-white);
	}
        .navbar.fixtopheader .back-to-top-section {
            padding: 90px 0 0;
        }

        .navbar.fixtopheader .back-to-top-body:before {
            background: var(--bg-white);
        }

        .navbar.fixtopheader {
            position: fixed;
            top: 0;
            background: var(--bg-white);
            padding: 0;
            transition: .3s ease-in-out;
            width: 100%;
            z-index: 9999;
            box-shadow: 1px 1px 5px 1px #dddddd8f;
        }

        .fixtopheader.navbar-dark .navbar-nav .nav-link.active,
        .fixtopheader.navbar-dark .navbar-nav .show>.nav-link {
            color: var(--text-black);
        }

        .fixtopheader.navbar-expand-lg .navbar-nav .nav-link {
            color: var(--text-black);
        }

        .fixtopheader .header-search input.form-control.me-2 {
            border-bottom: 1px solid var(--text-black);
            color: var(--text-black);
        }

        .btn-hover {
            background: var(--bg-white);
            border: 1px solid #025076;
            color: var(--text-white);
            transition: color 0.3s ease;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgb(0 0 0 / 0%);
            position: relative;
            border-radius: 0;
        }

        .btn-hover:hover:before {
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
        }

        .btn-hover:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--bg-white);
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            transition: transform 0.3s ease-out;
            -webkit-transition: transform 0.3s ease-out;
        }

        .bg-dark-blue {
            background: var(--primary-color);
            padding: 0;
        }

        .upper-links {
            text-align: right;
            padding: 8px 0 23px;
        }

        .upper-links a {
            color: var(--text-black);
            font-size: 14px;
            text-decoration: none;
            margin: 0 10px;
        }

        .upper-links .font-plus {
            color: var(--text-black);
            font-size: 12px;
            text-decoration: none;
            background: none;
            border: 1px solid var(--text-black);
            border-radius: 4px;
            z-index: 999;
            cursor: pointer;
        }

        .upper-links .font-plus:hover {
            background-color: var(--secondary-color);
            color: var(--text-white);
        }

        .book-appointment a {
            background: none;
            border: 1px solid var(--primary-color);
            border-radius: 4px;
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
            display: block;
            padding: 6px;
            text-align: center;
        }

        .give-cmc a {
            background: var(--secondary-color);
            border: 1px solid var(--secondary-color);
            border-radius: 4px;
            color: var(--text-white);
            text-decoration: none;
            font-size: 14px;
            display: block;
            padding: 6px;
            text-align: center;
        }

        .dropdown-item.active,
        .dropdown-item:active,
        .dropdown-item:hover,
        .dropdown-item:active {
            background: var(--secondary-color);
            color: var(--text-white);
        }

        /* Header CSS End Here */
        /* Footer CSS Start Here */
        footer {
            background: var(--primary-color);
            padding: 30px 0 10px;
        }

        .social-links {
            text-align: right;
            margin-top: 20px;
        }

        .social-links a {
            margin-left: 10px;
            text-decoration: none;
        }

        .quick-links a {
            color: var(--text-white);
            font-size: 14px;
            display: block;
            padding: 10px 0;
            text-decoration: none;
        }

        .footer-head h2 {
            color: var(--secondary-color);
            font-size: 19px;
            margin-bottom: 20px;
        }

        .footer-head.quick-links-start.quick-links {
            padding-left: 50px;
        }

        .footer-head p {
            color: var(--text-white);
            font-size: 14px;
            margin-bottom: 0;
            line-height: 20px;
        }

        .footer-col {
            display: inline-block;
            width: 49%;
            vertical-align: text-top;
            margin-bottom: 0rem;
        }

        .generals {
            margin-top: 40px;
        }

        .secondpara {
            margin-top: 60px;
        }

        .row.middle-footer {
            margin-top: 40px;
            border-top: 1px solid #344d6a;
            border-bottom: 1px solid #344d6a;
            padding: 30px 0 20px;
        }

        .copyright-line {
            color: var(--text-white);
            opacity: 50%;
            text-align: left;
            font-size: 14px;
        }

        .partner-line,
        .partner-line a,
        .partner-line p {
            color: var(--text-white);
            opacity: 50%;
            text-align: right;
            font-size: 14px;
            text-decoration: none;
        }

        .partner-line a,
        .partner-line p {
            opacity: inherit;
        }

        .bottom-footer {
            margin-top: 10px;
        }

        .footer-head p a {
            color: var(--text-white);
            text-decoration: none;
        }

        /* Footer CSS End Here */
        /* Banner CSS Start Here */
        .slider-text {
            text-align: left;
            max-width: 50%;
        }

        .slider-text h5 {
            font-size: 40px;
            font-weight: 400;
        }

        .slider-text a {
            background: var(--secondary-color);
            color: var(--text-white);
            padding: 10px 30px;
            display: inline-block;
            text-decoration: none;
            margin-top: 20px;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 10%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: var(--text-white);
            text-align: center;
            top: 20%;
        }

        .green-postcard {
            position: absolute;
            z-index: 9;
            width: 20%;
            font-size: 12px;
            right: 1%;
            background: var(--secondary-color);
            padding: 15px 39px 0 20px;
            top: 30px;
            color: var(--text-white);
            border-radius: 3px;
        }

        .green-postcard span {
            position: absolute;
            right: 15px;
            font-size: 16px;
            cursor: pointer;
            top: 12px;
        }

        .download-app {
            position: absolute;
            width: 16%;
            background: var(--text-white);
            bottom: 7%;
            right: 40px;
            padding: 10px;
            text-align: center;
            border-radius: 3px;
        }

        .download-btn {
            margin-top: 15px;
        }

        .download-app h6 {
            font-size: 13px;
            margin-bottom: 17px;
            line-height: 20px;
        }

        .download-app h6 span {
            color: var(--secondary-color);
            display: block;
            font-weight: 600;
        }

        .speeker-box a {
            display: block;
            padding: 20px 30px;
            border: 1px solid #ddd;
            color: var(--text-black);
            text-decoration: none;
            font-size: 14px;
        }

        .speeker-box a span {
            color: var(--text-black);
            font-size: 12px;
        }

        .speeker-para p {
            margin: 0px 0px 10px;
            font-weight: 400;
            font-size: 14px;
        }

        .speeker-para {
            width: 75%;
            margin-left: 25%;
        }

        .speeker-box a img {
            float: left;
        }

        section.speeker-section {
            padding: 50px 0;
        }

        .banner-slider .download-app img {
            width: auto !important;
            display: inline-block !important;
        }

        .banner-slider {
            position: relative;
        }

        .banner-slider button.owl-prev {
            position: absolute;
            top: 50%;
            left: 1%;
        }

        .banner-slider button.owl-next {
            position: absolute;
            top: 50%;
            right: 1%;
        }

        .banner-slider .owl-nav i {
            font-size: 3rem;
            color: var(--text-white);
        }

        .slider-text h1 {
            font-weight: 400;
        }

        .quote p {
            margin-top: 1rem;
            color: var(--primary-text);
            font-weight: 400;
            font-size: 1rem;
        }

        .quote {
            background: #d0d2d9;
            position: relative;
        }

        .quote .close-icon {
            position: absolute;
            right: 5rem;
            text-align: right;
            top: 1rem;
            cursor: pointer;
        }

        /* Banner CSS Start Here */
        /* Services CSS Start Here */
        .service-box {
            position: relative;
        }

        .service-text-icon {
            position: absolute;
            top: 20%;
            z-index: 9;
            width: 100%;
            text-align: center;
        }

        .service-text-icon h3 {
            font-size: 18px;
            color: var(--text-white);
        }

        .service-icon {
            border: 2px solid var(--text-white);
            padding: 20px;
            border-radius: 100px;
            margin-bottom: 45px;
            display: inline-block;
            transition: .3s ease-in-out;
        }

        .service-text-icon a {
            text-decoration: none;
        }

        .service-text-icon a img {
            /* margin-top: 20px; */
        }

        .service-box:hover .service-icon {
            border: 2px solid var(--secondary-color);
            padding: 20px;
            border-radius: 100px;
            margin-bottom: 45px;
            display: inline-block;
            background: var(--secondary-color);
        }

        .main-headings {
            text-align: center;
        }

        .main-headings h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .main-headings h2 span {
            color: var(--secondary-color);
        }

        /* Services CSS Start Here */
        /* Story CSS Start Here */
        .cmc-story-section {
            margin: 50px 0;
            position: relative;
        }

        .cmc-icon-box {
            background: var(--secondary-color);
            color: var(--text-white);
            padding: 25px;
            text-align: center;
            border-radius: 4px;
        }

        .cmc-icon-box h2 {
            font-size: 16px;
            margin-top: 20px;
        }

        .cmc-story-text {
            background: var(--text-white);
            padding: 50px;
            margin-left: 5%;
            border-radius: 4px;
        }

        .cmc-story-text a {
            background: var(--secondary-color);
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 20px;
        }

        .cmc-story-text h4 {
            font-size: 24px;
            color: var(--text-black);
            margin-bottom: 20px;
            font-weight: 400;
            line-height: 1.5;
        }

        .cmc-story-text p {
            font-size: 16px;
            color: var(--text-black);
        }

        .cmc-story-text h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .cmc-story-text h2 span {
            color: var(--secondary-color);
        }

        .row.cmc-story-row {
            position: absolute;
            left: 4%;
            width: 89%;
            top: 13%;
        }

        .row.cmc-icon-row {
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .col-md-5.cmc-icon-column {
            position: relative;
        }

        /* Story CSS End Here */
        /* CTA CSS Start Here */
        .apply-now-text a {
            background: var(--secondary-color);
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .apply-now-text h2 {
            font-size: 24px;
            color: var(--text-white);
            margin-bottom: 10px;
        }

        .apply-now-text p {
            font-size: 15px;
            color: var(--text-white);
        }

        .apply-now-image-text {
            position: relative;
        }

        .apply-now-text {
            position: absolute;
            top: 15%;
            width: 39%;
            left: 5%;
        }

        .apply-now-section {
            margin-bottom: 50px;
        }

        /* CTA CSS End Here */
        /* News CSS Start Here */
        section.news-events-section {
            background: #f4f4f4;
            padding: 50px 0;
        }

        .list-news-events .inner-list a {
            display: block;
            color: var(--text-black);
            border-bottom: 1px solid #d1d1d1;
            padding: 10px 0px;
        }

        .list-news-events .inner-list a:hover .news-events-text span {
            color: var(--secondary-color);
        }

        .list-news-events a img {
            float: left;
            margin-top: 5px;
        }

        .news-events-text {
            display: inline-block;
            width: 82%;
            margin-left: 4%;
        }

        .list-news-events .news-events-text h2 {
            font-size: 16px;
            margin-top: 10px;
            line-height: 22px;
            height: 5rem;
        }

        .events-content .news-events-text a,
        .news-events-text span {
            font-size: 12px;
            color: var(--primary-color);
            transition: .3s ease-in-out;
            text-decoration: none;
        }

        .news-events-head h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            padding-bottom: 20px;
            border-bottom: 1px solid #d1d1d1;
            margin: 0;
        }

        .news-events-head h2 span {
            color: var(--secondary-color);
        }

        .news-events-text.events-text {
            display: inline-block;
            width: 62%;
            margin-left: 4%;
        }

        .readall-btn-news a {
            background: var(--primary-color);
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 20px;
            margin-left: 9%;
        }

        .readall-btn-events a {
            background: var(--secondary-color);
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 20px;
        }

        /* News CSS End Here */
        /* Notabe CSS Start Here */
        .notable-carousel-caption {
            position: absolute;
            right: 15%;
            bottom: -10px;
            left: 10%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: var(--text-white);
            text-align: left;
            top: auto;
        }

        .notable-name h5 {
            font-size: 14px;
            color: var(--text-white);
        }

        .notable-name h5 span {
            font-size: 12px;
            display: block;
            margin-top: 2px;
        }

        .notable {
            padding: 30px 50px 66px;
            border: 1px solid #ddd;
        }

        .notable h2 {
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 40px;
        }

        .notable h2 span {
            color: var(--secondary-text);
        }

        .view-all-text a {
            color: var(--secondary-color);
            ;
            text-decoration: none;
            font-size: 14px;
            float: right;
            margin-top: 10px;
            position: relative;
            z-index: 7;
        }

        .admissions {
            position: relative;
        }

        .admissions h2 {
            position: absolute;
            color: var(--text-white);
            left: 11%;
            top: 4%;
            font-size: 30px;
        }

        .online-admission {
            position: absolute;
            bottom: 0;
            color: var(--text-white);
            padding: 30px;
        }

        .online-admission p {
            font-size: 14px;
        }

        .online-admission h3 {
            font-size: 24px;
            font-weight: 600;
        }

        .online-admission a {
            background: var(--secondary-color);
            ;
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 0px;
        }

        .give-to-cmc h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            padding-bottom: 10px;
            margin: 0;
        }

        .give-to-cmc h2 span {
            color: var(--secondary-color);
            ;
        }

        .give-to-cmc p {
            font-size: 16px;
        }

        .give-to-cmc-text a {
            background: var(--secondary-color);
            ;
            color: var(--text-white);
            font-size: 15px;
            text-decoration: none;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 4px;
            margin-top: 0px;
        }

        .give-to-cmc-text p {
            font-size: 14px;
        }

        .give-to-cmc-text {
            padding: 30px 40px 20px;
        }

        .give-to-cmc {
            border: 1px solid #ddd;
        }

        .three-box-section {
            padding: 50px 0;
        }

        .owl-carousel .owl-item .accolades-slide img {
            width: auto;
            margin: 0 auto;
        }

        .owl-carousel .owl-item .accolades-slide {
            text-align: center;
            border: 1px solid #ddd;
            padding: 15px;
        }

        .our-accolades-section {
            margin-bottom: 50px;
        }

        .notable-alumni-slider .owl-dots span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #ccc;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s;
            border-radius: 30px;
        }

        .notable-alumni-slider .owl-dot.active span {
            background: var(--secondary-color);
        }

        .notable-alumni-slider .owl-dots {
            padding-top: 1rem;
        }

        .view-all-text {
            margin-top: -2.2rem;
        }

        /* Notabe CSS End Here */
        .courses-slider.owl-carousel .owl-item img {
            display: block;
            width: auto;
            text-align: center;
            margin: 2rem auto;
        }

        .courses-slider.owl-carousel .card-title {
            text-align: center;
            color: var(--primary-text);
            font-size: 1rem;
            margin: 1rem;
            height: 3rem;
        }

        .courses-slider.owl-carousel a {
            text-decoration: none;
        }

        .courses {
            padding: 3rem;
            background-color: #f1f0f0;
        }

        .courses h2 {
            margin-bottom: 2rem;
            text-align: left;
        }

        .courses .card {
            background-color: #f8f8f8;
            border: 0;
            border-radius: 0;
        }

        .courses .card:hover {
            background-color: var(--secondary-color);
            color: var(--text-white);
            box-shadow: 0px 11px 21px 0px rgba(0, 0, 0, 0.16);
        }

        .courses .card:hover a,
        .courses .card:hover .card-title {
            color: var(--text-white);
        }

        .courses .card:hover img {
            filter: brightness(0) invert(1);
        }

        .courses-link ul li a {
            color: var(--primary-text);
            font-weight: 400;
            font-size: 1rem;
        }

        .courses-link ul li::marker {
            color: var(--secondary-text);
        }

        .elective {
            padding: 5rem 5rem 3rem;
        }

        .elective-list ul {
            padding: 0;
        }

        .elective-list li {
            border: 1px solid #d1d3d8;
            margin: 1rem 0;
            padding: 0.6rem 2rem;
            list-style: none;
            font-size: 1rem;
            color: var(--text-black);
        }

        .elective-list li a {
            list-style: none;
            font-size: 1rem;
            color: var(--text-black);
        }

        .guide-wrapper h2 {
            margin-bottom: 1.6rem;
        }

        .elective-list li::before {
            content: "\2022";
            display: inline-block;
            /* Needed to add space between the bullet and the text */
            width: 1em;
            /* Also needed for space (tweak if needed) */
            margin-left: -1em;
            /* Also needed for space (tweak if needed) */
            font-size: 1.2rem;
            vertical-align: middle;
            color: var(--secondary-color);
        }

        .guide-wrapper h2 {
            margin-bottom: 1.6rem;
        }

        .about-research-bg,
        .contact-info .container {
            background-color: #f1f0f0;
            padding: 3rem;
            margin-bottom: 5rem;
        }

        .contact-info .main-headings {
            text-align: left;
        }

        .contact-info span {
            color: var(--secondary-color);
        }

        .contact-info p {
            margin-bottom: 0rem;
            font-size: 0.9rem;
            color: var(--text-black);
            font-weight: 400;
        }

        .border-right:before {
            content: "";
            border-right: 1px solid var(--secondary-color);
            display: block;
            height: 4rem;
            position: absolute;
            right: 4rem;
        }

        .col-md-4:last-child .border-right:before {
            border: 0;
        }

        .service-link ul li {
            list-style: none;
        }

        .patient-download-app {
            position: unset;
            width: 100%;
        }

        .quick-information {
            padding: 5rem;
        }

        .quick-information .main-headings {
            text-align: start;
        }

        .quick-information-box {
            background-color: #f1f0f0;
            padding: 1.5rem;
            align-items: center;
            margin: 1.2rem 0;
            width: 30rem;
        }

        .quick-information-box img {
            float: right;
        }

        .quick-information-box h3 {
            margin-bottom: 0;
            font-size: 1.3rem;
        }

        .quick-information-box:hover {
            box-shadow: 0px 8px 13px 0px rgba(0, 0, 0, 0.19);
            background-color: var(--secondary-color);
            color: var(--text-white);
        }

        .quick-information-box:hover img {
            filter: brightness(0) invert(1);
        }

        .feedback {
            padding: 0 5rem 5rem;
        }

        .feedback h2 {
            margin-bottom: 2rem;
            text-align: left;
        }

        .feedback .feedback-btn {
            display: block;
            background: var(--secondary-color);
            border: 1px solid var(--secondary-color);
            border-radius: 0;
            color: var(--text-white);
            text-decoration: none;
            font-size: 14px;
            padding: 10px;
            width: 13rem;
            text-align: center;
            margin: 0 0 1rem;
        }

        .feedback .container {
            background-color: #f1f0f0;
            padding: 2rem 3rem;
        }

        .contact-us-wrapper a {
            text-decoration: none;
            color: var(--text-black);
        }

        .covid-ul {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
        }

        .covid-19 {
            margin-bottom: 3rem;
        }

        .covid-19 li {
            margin-bottom: 0.8rem;
        }

        section.inner-banner h1 {
            font-size: 40px;
            font-weight: 400;
        }

        .courses .card-body {
            padding: 0;
        }

        .research-content {
            padding: 5rem;
        }

        .research-content-para {
            padding: 2rem 0;
            -webkit-columns: 2;
            /* Chrome, Safari, Opera */
            -moz-columns: 2;
            /* Firefox */
            columns: 2;
            text-align: justify;
            column-gap: 70px;
        }

        .our-story {
            padding-bottom: 2rem;
        }

        .play-btn {
            position: absolute;
            top: 40%;
            left: 0;
            right: 0;
            text-align: center;
        }

        .our-story {
            padding: 0 0 5rem;
        }

        .our-story-wrapper a {
            font-size: 1.5rem;
            line-height: 2.6rem;
            color: var(--primary-text);
        }

        .cta-btn {
            column-count: 2;
            column-gap: 20px;
        }

        .red-btn,
        .red-btn:hover {
            background-color: var(--secondary-color);
            color: var(--text-white);
            text-decoration: none;
            display: block;
            padding: 0.5rem 1rem;
            margin-bottom: 0.8rem;
            border-radius: 5px;
            font-weight: 300;
        }

        .research-content-para p,
        .about-research p {
            line-height: 1.563;
        }

        .breadcrumb-sec .breadcrumb-item+.breadcrumb-item::before {
            content: unset;
        }

        .breadcrumb-sec {
            padding: 1rem 0;
        }

        .breadcrumb-sec .bread-home,
        .breadcrumb-sec .bread-cat,
        .breadcrumb-sec .bread-cat:hover {
            text-decoration: none;
            color: #999999;
        }

        .breadcrumb-sec .bread-current {
            color: var(--primary-text);
            font-weight: 500;
        }

        .departments-inner-sec .nav-link,
        .news-content .nav-link {
            background: var(--primary-color);
            color: var(--text-white);
            border: 0;
            border-radius: 0;
            margin: 0 0.3rem;
            padding: 0.5rem 2.5rem;
        }

        .departments-inner-sec .nav-link.active,
        .departments-inner-sec .nav-link:hover,
        .news-content .nav-link.active,
        .news-content .nav-link:hover {
            background-color: var(--secondary-color);
        }

        .news-content .inner-list {
            background: #f4f4f4;
            /* padding: 0 1rem 0.8rem; */
            padding: 0.5rem 1.5rem;
        }

        .news-content .inner-list:hover {
            background-color: var(--bg-white);
            box-shadow: 0px 0px 38px 0px rgba(0, 0, 0, 0.32);
        }

        .news-content .inner-list a {
            border: 0;
        }

        .news-content .inner-list h2 {
            margin: 1rem 0 !important;
        }

        .news-content .list-news-events a img {
            float: left;
            margin-top: 5px;
            height: 10rem;
            width: 10rem;
            object-fit: cover;
            flex-shrink: 0;
            min-height: 100%;
        }

        .news-content h3 {
            margin: 2rem 0;
            font-size: 30px;
            font-weight: 600;
        }

        .news-content h3 span {
            color: var(--secondary-color);
        }

        .list-news-events button {
            border-radius: 0;
            padding: 0.6rem 3rem;
            border-color: var(--primary-color);
            color: var(--primary-text);
            outline: unset;
            box-shadow: none;
        }

        .list-news-events button:focus,
        .list-news-events button:active,
        .list-news-events button:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            outline: unset;
            box-shadow: none;
        }

        .news-content .form-select {
            border-radius: 0;
            /* padding: 0.6rem 4rem 0.6rem 3rem; */
            padding: 0.6rem 0rem 0.6rem 1rem;
            border-color: var(--primary-color);
            color: var(--primary-text);
            outline: unset;
            box-shadow: none;
            /* width: auto; */
        }

        .events-content .list-news-events a img {
            float: left;
            margin-top: 5px;
            height: auto;
            width: 100%;
            object-fit: cover;
            flex-shrink: 0;
            min-height: 100%;
        }

        .events-content .news-events-text.events-text {
            width: auto;
            /* margin-top: 1rem; */
        }

        .events-content .list-news-events .news-events-text h2 {
            height: 4rem;
            margin: 1rem 0 !important;
        }

        .event-cat {
            padding: 0 !important;
        }

        .hide-content {
            overflow: hidden;
        }

        .hide-item {
            display: none;
        }

        .departments-sec .accordion-button:focus {
            outline: 0;
            border: 0;
	    box-shadow: unset;
            text-decoration: none;
	}

        .departments-sec .accordion-item .collapsed {
            border: 1px solid #c6c6c6;
            margin: 0.8rem 0;
	    border-radius: 3px;
            text-decoration: none;
	}
	.departments-sec .accordion-header{
             text-decoration:none;
        }


        .departments-sec .accordion-item button {
            color: var(--primary-color);
	    font-size: 1.5rem;
	    font-weight: 600;
            text-decoration: none;
        }

        .departments-sec .accordion-item {
	    border: 0;
            text-decoration: none;
        }

        .departments-sec .accordion-button:not(.collapsed) {
            background: var(--secondary-color);
            color: var(--text-white);
	    box-shadow: 0px 11px 21px 0px rgba(0, 0, 0, 0.16);
            text-decoration: none;
        }

        .departments-sec .accordion-body {
            padding: 3rem 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-decoration: none;
        }

        .departments-sec .accordion-body a {
            text-decoration: none;
            color: var(--primary-text);
            line-height: 1.875;
            font-size: 1rem;
        }

        .departments-sec .accordion {
            margin-top: 2rem;
        }

        .departments-sec .accordion-button::after {
            content: "+";
            font-size: 2rem;
            float: right;
            background: unset;
            height: auto;
            color: var(--primary-color);
        }

        .departments-sec .accordion-button:not(.collapsed)::after {
            background: unset;
            content: "-";
            font-size: 2rem;
            float: right;
            color: var(--text-white);
            width: auto;
            height: auto;
        }

        .departments-inner-sec p {
            color: #333333;
            line-height: 1.875;
            font-size: 1rem;
        }

        .education-slider img {
            width: auto !important;
        }

        .faculty-inner-sec h2 {
            margin-bottom: 0.8rem;
        }

        .faculty-inner-sec .post-info span {
            color: var(--secondary-text);
        }

        .faculty-inner-sec .post-info {
            margin-bottom: 2rem;
        }

        .faculty-inner-sec p {
            line-height: 1.75;
        }

        .education-box,
        .award-box .row {
            background: #f1f0f0;
            height: 100%;
            padding: 2rem 4rem 5rem;
        }

        .education-slider {
            background: var(--bg-white);
            height: 80%;
            padding: 1rem 1rem 0;
        }

        .education-slider p {
            /* max-width: 70%; */
        }

        .education-box h2 {
            margin-bottom: 2rem;
        }

        .education-slider .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #ccc;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s;
            border-radius: 30px
        }

        .education-slider .owl-dots .owl-dot.active span,
        .education-slider .owl-dots span:hover {
            background: var(--secondary-color);
        }

        .education-slider .owl-dots {
            position: absolute;
            bottom: -3rem;
            left: 0;
        }

        .education-details ul {
            margin-bottom: 0.5rem;
        }

        .education-details ul li {
            color: var(--primary-text);
        }

        .education-details ul li span {
            color: #333333;
            margin-right: 1rem;
        }

        .education-slider hr {
            border: 1px solid #999999;
        }

        .publication {
            padding: 4rem 0;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: top center !important;
            position: relative;
        }

        .publication-slider .item {
            background-color: var(--bg-white);
            padding: 3rem;
        }

        .publication h2 {
            margin-bottom: 3rem;
        }

        .publication-slider .item h3 {
            line-height: 1.625;
            font-size: 1rem;
            color: var(--primary-text);
            margin-bottom: 1rem;
        }

        .publication-slider .owl-nav .owl-prev {
            position: absolute;
            top: 35%;
            left: -5%;
        }

        .publication-slider .owl-nav i {
            color: var(--text-white);
            font-size: 1.9rem;
        }

        .publication-slider .owl-nav .owl-next {
            position: absolute;
            top: 35%;
            right: -5%;
        }

        .publication-slider .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #ccc;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s;
            border-radius: 30px
        }

        .publication-slider .owl-dots .owl-dot.active span,
        .publication-slider .owl-dots span:hover {
            background: var(--secondary-color);
        }

        .publication-slider .owl-dots {
            text-align: center;
        }

        .award-box .row {
            padding-bottom: 1rem;
        }

        .award-box h5 {
            color: var(--primary-color);
        }

        .award-box span {
            font-size: 12px;
            color: var(--primary-color);
            font-weight: 500;
            padding-bottom: 1rem;
            display: block;
        }

        .gallery-content .gallery-blocks h3 {
            font-size: 1.2rem;
            margin: 1.2rem 0;
            font-weight: 400;
            color: var(--primary-text);
        }

        .gallery-content a,
        .gallery-content .gallery-blocks span {
            text-align: center;
            text-decoration: none;
            margin: 0 auto;
            display: block;
        }

        .gallery-content .gallery-blocks span {
            text-decoration: underline;
            color: var(--secondary-text);
        }

        .gallery-icon {
            position: absolute;
            top: 40%;
            right: 0;
            left: 0;
        }

        .our-campuses .card {
            border: 0;
            text-align: center;
        }

        .our-campuses .card .card-title {
            padding: 1rem;
            font-size: 1.5rem;
        }

        .our-campuses .card:hover .main-btn+.card-body .card-title {
            color: var(--secondary-text);
            transition: color 0.3s ease-in-out;
        }

        .our-campuses .card:hover .main-btn+picture .featured-image img {
            border: 2px solid var(--secondary-text);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .our-campuses .card:hover .featured-image img {
            border: 2px solid var(--secondary-text);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .our-campuses .card:hover .card-body .card-title {
            color: var(--secondary-text);
            transition: color 0.3s ease-in-out;
        }

        .featured-image img {
            border: 2px solid transparent;
            box-shadow: none;
            transition: all 0.3s ease-in-out;
        }

        .campus-content img {
            float: left;
            margin-right: 2.5rem;
            margin-bottom: 1rem;
        }

        .campus-content p {
            line-height: 1.7;
            color: #000;
        }

        .campus-content .main-headings h2:nth-child(2) {
            color: var(--secondary-text);
        }

        .work-life-img img {
            padding-right: 2rem;
        }

        .work-life-text {
            padding-top: 1rem;
        }

        .work-life-text p {
            font-size: 1rem;
            color: #333;
            line-height: 1.7;
        }

        section.current-openings-section {
            padding: 3rem 0;
        }

        .heading-select {
            display: flex;
            justify-content: space-between;
        }

        select.forms-select {
            padding: 0.5rem 4rem 0.5rem 2rem;
            border-radius: 0.3rem;
            background-image: url(https://cmc.tonicww.in/wp-content/uploads/2023/03/dropdown.png);
            background-repeat: no-repeat;
            border-color: var(--primary-text);
            background-position: 88%;
            cursor: pointer;
        }

        select.forms-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .opning-acordion .accordion-button::after {
            background-image: url(https://cmc.tonicww.in/wp-content/uploads/2023/03/plus.png);
            transform: scale(.7) !important;
            position: absolute;
            right: 2rem;
            top: 2rem;
        }

        .opning-acordion .accordion-button:not(.collapsed)::after {
            background-image: url(https://cmc.tonicww.in/wp-content/uploads/2023/03/minus.png);
            position: absolute;
            right: 2rem;
            top: 2rem;
        }

        .opning-acordion .accordion-button {
            padding: 1rem 2rem;
            display: block;
            box-shadow: none;
            outline: 0;
        }

        .opning-acordion .accordion-button:not(.collapsed) {
            color: var(--primary-text);
            background-color: #fff0;
            box-shadow: none;
        }

        .opning-acordion .card-body {
            padding: 0 2rem 2rem;
        }

        .opning-acordion .card-body h4 {
            font-size: 1rem;
            color: var(--primary-text);
        }

        .opning-acordion .card-body ul li {
            font-size: 1rem;
            color: #333;
            margin-top: 15px;
        }

        .opning-acordion .card-body ul {
            margin-bottom: 2rem;
            padding-left: 1.3rem;
            padding-top: 0.3rem;
        }

        .opning-acordion .accordion-button h3 {
            color: var(--primary-text);
            font-size: 20px;
            margin-bottom: 5px;
        }

        .opning-acordion .accordion-button h5 {
            color: var(--secondary-color);
            font-size: 12px;
            margin-bottom: 0;
        }

        button {
            box-shadow: none;
            outline: 0;
        }

        .opning-acordion .accordion-item {
            margin-bottom: 1.25rem;
        }

        .footer-forms {
            position: relative;
            margin-bottom: 19px;
        }

        .footer-forms label {
            display: block;
            color: #334431;
            font-size: 14px;
        }

        .footer-forms input {
            width: 100%;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #3c2b99;
            font-size: 14px;
            color: #333;
        }

        .footer-forms select {
            width: 100%;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #3c2b99;
            font-size: 14px;
            border-radius: 0;
            color: #c1c1c1;
        }

        .footer-forms textarea {
            width: 100%;
            padding: 11px 0;
            border: none;
            border-bottom: 1px solid #3c2b99;
            font-size: 14px;
            color: #c1c1c1;
        }

        .footer-forms .error {
            position: absolute;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            padding: 1px 10px;
            bottom: -19px;
            left: 0%;
            background: var(--primary-text);
        }

        .footer-forms .error:before {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-bottom: 8px solid var(--primary-text);
            ;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            top: -8px;
        }

        .error {
            display: none;
        }

        .footer-forms input.value-field {
            position: absolute;
            left: 0;
            width: 36px;
        }

        .footer-forms input.contactnumber {
            padding: 5px 38px;
        }

        .dreamjob {
            padding: 2rem 0;
        }

        .owl-carousel .owl-item .testimonials-slide img {
            width: auto;
            margin-bottom: 2rem;
        }

        .testimonials-slide {
            background: #f4f4f4;
            padding: 40px;
            transition: .4s ease-in-out;
            margin: 20px 0;
        }

        .testimonials-slide p {
            color: #000;
        }

        .testimonials {
            padding: 1rem 0 0;
        }

        .testimonials-slide h3 {
            color: var(--primary-text);
            font-size: 18px;
            margin-bottom: 5px;
        }

        .testimonials-slide h4 {
            color: var(--secondary-color);
            font-size: 12px;
            margin-bottom: 0;
        }

        .testimonials-slide:hover {
            box-shadow: 5px 1px 14px 4px rgb(0 0 0 / 10%);
            background: #fff;
        }

        .testimonials-slide {
            padding: 20px;
        }

        .testimonials .main-headings h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .gcaptcha {
            margin-top: 1rem;
        }

        .contact-details p,
        .contact-details p a {
            color: #333333;
            text-decoration: none;
        }

        .contact-details h5 {
            color: var(--secondary-color);
            text-decoration: none;
            font-size: 1rem;
            margin-bottom: 0;
            margin-top: 1.8rem;
        }

        .contact-form-section {
            padding: 2rem 0 0rem;
        }

        .map {
            padding: 4rem 0 0;
        }

        .grey-bg {
            background: #f1eff0;
            padding: 0 0 2rem;
        }

        section.facilities-section {
            padding: 4rem 0;
        }

        .facilities-box a h2 {
            text-align: center;
            color: var(--primary-text);
            font-size: 1rem;
            margin-top: 1.2rem;
            margin-bottom: 0;
        }

        .facilities-box {
            display: inline-flex;
            width: 19%;
            margin: 0.3rem;
        }

        .facilities-box {
            width: 19.2%;
            display: inline-block;
            text-align: center;
            background: #f8f8f8;
            margin: 0.2rem 0.2rem 0.4rem;
        }

        .facilities-box a:hover {
            background: var(--secondary-text);
        }

        .facilities-box a:hover img {
            filter: brightness(0) invert(1);
        }

        .facilities-box a:hover h2 {
            color: #fff;
        }

        .facilities-box a {
            display: block;
            text-align: center;
            background: #f8f8f8;
            padding: 2rem 0;
            text-decoration: none;
            border-radius: 4px;
            transition: .3s ease-in-out;
        }

        .medical-services-section p a {
            color: var(--primary-text);
        }

        .friends-vellore li {
            display: inline-block;
            width: 24%;
            margin-right: 9px;
            margin-bottom: 0;
        }

        p {
            color: #333;
        }

        .opning-acordion .accordion-item:not(:first-of-type) {
            border-top: 1px solid #ddd;
        }

        .who-we-are-para p strong {
            color: #000;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
            padding-left: 27px;
            display: block;
            position: relative;
            padding-right: 30px;
        }

        .who-we-are-para p strong:before {
            content: '';
            position: absolute;
            background: var(--secondary-color);
            height: 4px;
            width: 4px;
            left: 0;
            top: 14px;
        }

        .who-we-are-para p {
            line-height: 28px;
            font-size: 16px;
        }

        .our-campus-section {
            padding: 4rem 0;
        }

        .four-zero-four {
            text-align: center;
            padding: 5rem 0;
        }

        .four-zero-four h2 {
            font-size: 1.5rem;
            padding: 2rem 0;
            margin: 0;
        }

        .whats-new img {
            position: fixed;
            top: 13rem;
            right: 1rem;
            z-index: 9999;
        }

        .back-to-top img {
            position: fixed;
            top: 15rem;
            right: 1rem;
            z-index: 9996;
        }
        section.medical-services-section {
            position: relative;
        }

        .content.search-box-result h2 {
            color: #003975;
            font-size: 20px;
        }

        .content.search-box-result p {
            font-weight: 400;
            margin: 0 0 6px;
            font-size: 14px;
            color: #333;
        }

        .content.search-box-result .date-time p {
            margin-bottom: 0;
            color: #999999;
        }

        .content.search-box-result {
            padding: 20px 30px;
            border: 1px solid #ddd;
            margin: 5px 0 20px;
            border-radius: 5px;
            display: none;
        }

        .result-count p {
            color: #999999;
            font-size: 13px;
            margin-bottom: 4px;
        }

        section.search-result-section {
            padding: 4rem 0;
            position: relative;
        }

        .his-vis-box {
            float: left;
            width: 100%;
            background: #01206887;
            padding: 40px;
        }

        .his-vis-box h2 {
            color: #fff;
            margin: 0;
            font-size: 24px;
        }

        .his-vis-list li {
            float: left;
            width: 47%;
            margin-right: 15px;
            margin-top: 0;
            color: #fff;
            text-decoration: underline;
        }

        section.his-vis-section {
            background: url(https://cmc.tonicww.in/wp-content/uploads/2023/03/his-vis-bg.jpg);
            background-size: 100%;
            padding: 9rem 0;
        }

        .green-initiatives-para h2 {
            margin-bottom: 10px;
        }

        .green-initiatives-para p {
            color: #000;
            padding-right: 8rem;
            text-align: justify;
            margin: 20px 0 25px;
        }

        .green-initiatives-para {
            padding: 3rem 2rem;
        }

        section.green-initiatives {
            padding: 4rem 0;
            background: #f1eff0;
        }

        .three-boxes-section {
            padding: 5rem 0;
        }

        .same-height-box h2 {
            margin: 8px 0;
        }

        .same-height-box p {
            color: #333;
            font-size: 14px;
        }

        .same-height-box a.btn.btn-lg.main-btn {
            width: 100%;
            margin-top: 7px;
        }

        .same-height-box {
            padding: 30px 70px 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            height: 380px;
        }

        .thank-you-box h2 {
            color: #0054a6;
            font-size: 60px;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .thank-you-box {
            text-align: center;
            background: #fff;
            width: 38%;
            padding: 40px 0;
            margin: auto;
            position: relative;
            top: 16%;
            z-index: 99991;
        }

        .thank-you-box h5 {
            color: #0054a6;
            font-size: 24px;
            margin-top: 0;
        }

        .thank-you-box p {
            margin-top: 15px;
        }

        .thankyou-popup:before {
            content: "";
            background: #000000d4;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 11111;
        }

        .thank-you-box .close-popup {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .thankyou-popup {
            display: block;
            position: fixed;
            width: 100%;
            left: 0;
            top: 0;
            height: 100%;
            z-index: 9999;
        }

        .thank-you-box hr {
            border: 1px solid var(--secondary-color);
            height: 1px;
            width: 25%;
            margin: 20px auto 15px;
        }

        .sitemap-box hr {
            margin: 10px 0;
        }

        .sitemap-box a {
            color: #012068;
            font-size: 15px;
            display: block;
            text-decoration: none;
            font-weight: 400;
        }

        .sitemap-box .mega-menu-link ul {
            padding: 0;
            list-style: none;
        }

        .sitemap-box .mega-menu-link ul li a {
            font-size: 14px;
            color: #000;
            padding: 5px 0;
        }

        .common-acord .accordion-item:last-of-type {
            border-radius: 0 !important;
            border: none;
        }

        .common-acord button.accordion-button {
            padding: 5px 0;
            font-size: 15px;
        }

        .common-acord .accordion-item:first-of-type .accordion-button {
            border-radius: 0 !important;
            background: none !important;
        }

        .common-acord .accordion-button:not(.collapsed) {
            color: #e31325;
        }

        button.accordion-button.collapsed {
	    color: #012068;

        }

        .common-acord .accordion-button:not(.collapsed) {
            box-shadow: none;
        }

        .m-top {
            margin-top: 10px;
        }

        .common-acord .accordion-button:focus {
            box-shadow: none;
        }

        .group-links a {
            color: #012068;
            font-size: 15px;
            display: block;
            text-decoration: none;
            font-weight: 400;
            padding: 5px 0;
        }

        .sitemap-section .main-headings h2 {
            color: var(--text-black);
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .sitemap-section {
            padding: 0 0 5rem;
            position: relative;
        }

        .faqs-acord .accordion-button:not(.collapsed) {
            color: #fff;
            background-color: var(--secondary-color);
            box-shadow: none;
            border-radius: calc(0.375rem - 1px);
        }

        .faqs-acord .card-body {
            padding: 20px 15px;
        }

        .faqs-acord .accordion-item {
            border: none;
        }

        .faqs-acord .card-body ul li {
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 24px;
            list-style: decimal;
        }

        .faqs-acord .card-body .read-more a {
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 24px;
        }

        .faqs-acord .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
            border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
            border: 1px solid #bfbfbf;
        }

        .faqs-acord .accordion-item {
            margin-bottom: 10px;
        }

        .faqs-acord button.accordion-button.collapsed {
            color: #012068;
            border: 1px solid #888;
            border-radius: 5px;
        }

        .his-vis-list li a {
            color: #fff;
            text-decoration: none;
        }

        .copyright-line p {
            color: #fff;
        }

        .whats-new-box a {
            background: #f4f4f4;
            display: block;
            padding: 30px;
            text-decoration: none;
            transition: .4s ease-in-out;
	}
       

        .whats-new-box a h3 {
            color: #333;
            font-size: 16px;
            margin: 15px 0 10px;
        }

        .whats-new-box span {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        .whats-new-box a:hover {
            box-shadow: 5px 1px 14px 4px rgb(0 0 0 / 10%);
            background: #fff;
        }

        .whats-new-box {
            margin-bottom: 20px;
        }

        section.whats-new-section {
            padding: 0rem 0 4rem;
        }

        .notable-alumni-slider picture img {
            filter: brightness(0.7);
        }

        .quick-information a {
            color: var(--text-black);
            text-decoration: none;
        }

        .profile-card-sec .card-img-overlay {
            display: flex;
            flex-direction: column;
            justify-content: end;
            color: var(--text-white);
        }

        .profile-card-sec .card-img-overlay h5,
        .profile-card-sec .card-img-overlay p {
            color: var(--text-white);
        }

        .profile-card-sec .card-img {
            filter: brightness(0.7);
        }

        .profile-card-sec .card-img-overlay h5 {
            font-size: 1rem;
            margin-bottom: 0.3rem;
        }

        .profile-card-sec .card-img-overlay p {
            font-size: 0.9rem;
        }

        ul.faculty-row {
            padding: 1rem 0 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-decoration: none;
            list-style: none;
        }

        ul.faculty-row li {
            padding-bottom: 0.9rem;
        }

        ul.faculty-row li a {
            text-decoration: none;
            color: var(--primary-text);
            line-height: 1.875;
            font-size: 1rem;
        }

        .pleasewait {
            text-decoration: none;
            display: none;
        }

        .goog-logo-link {
            display: none !important;
        }

        div#google_translate_element {
            width: 10rem;
            display: inline-block;
            margin-inline: 0 1rem;
        }
    </style>
