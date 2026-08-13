    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XGQJQY0YZF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XGQJQY0YZF');
    </script>

    <meta property="og:locale" content="en-CA">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sean Roberts - Web Development">
    <meta property="og:image:alt" content="Developing Websites since 1996! Freelance / Contract / Remote">
    <meta property="og:image" content="https://seanroberts.ca/img/social/vert-social-brand-promo.png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1536">
    <meta name="theme-color" content="#000000">

    <link rel="icon" type="image/png" href="https://seanroberts.ca/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="https://seanroberts.ca/img/favicon/favicon.svg">
    <link rel="shortcut icon" href="https://seanroberts.ca/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="https://seanroberts.ca/img/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="SeanRoberts.ca">
    <link rel="manifest" href="https://seanroberts.ca/img/favicon/site.webmanifest">
    <link rel="stylesheet" href="/css/seanroberts_ca.css?v=<?php echo htmlspecialchars((string) ($timestamp), ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="/menu/css/menu-style.css?v=<?php echo htmlspecialchars((string) ($timestamp), ENT_QUOTES, 'UTF-8'); ?>">
    <style>
        /* Chrome / Edge / Safari */
        ::-webkit-scrollbar {
            width: 16px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
            box-shadow: inset 0 0 3px rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background-color: #9fe3ff;
            border-radius: 6px;
            box-shadow: inset 0 0 0 2px #000;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #00c8ff;
        }

        /* //\ SCROLLBAR STYLES */
    </style>
    <script>
        var dateNow = new Date();
        var intYear = dateNow.getFullYear();
    </script>

<?php

    $keyToCheck = 'HTTP_HOST';
    $strClosingServerVar = ".php";

    if (!empty($_SERVER[$keyToCheck])) {

        //echo "The server variable '$keyToCheck' is set and is not empty. Value: " . $_SERVER[$keyToCheck];

        // If host contains seanroberts.ca
        if (str_contains($_SERVER[$keyToCheck], 'seanroberts.ca')) {
            $strClosingServerVar = "/";
        }
        
    }

?>