<?php

/*

$strCurrentScriptwFolder = $_SERVER['SCRIPT_NAME'] ?? '';

if (!empty($_SERVER[$strCurrentScriptwFolder])) {

        if (str_contains($strCurrentScriptwFolder, '')) {
            
            $preload_bg_images = [
            '/img/headers/1180_header_bg_development.png',
            '/img/headers/1180_header_bg_design.png',
            '/img/headers/1180_header_bg_promotion.png',
            ];

        }

        if (str_contains($strCurrentScriptwFolder, 'ai-powered-php-mysql-web-application-developer')) {
            
            $preload_bg_images = [
            '/img/headers/1180_header_bg_homepage.png',
            '/img/headers/1180_header_bg_development.png',
            '/img/headers/1180_header_bg_design.png',
            '/img/headers/1180_header_bg_promotion.png',

            '/img/headers/360_header_bg_homepage.png',
            '/img/headers/360_header_bg_development.png',
            '/img/headers/360_header_bg_design.png',
            '/img/headers/360_header_bg_promotion.png',

            '/img/headers/840_header_bg_homepage.png',
            '/img/headers/800_header_bg_development.png',
            '/img/headers/840_header_bg_design.png',
            '/img/headers/840_header_bg_promotion.png',
            ];

        }

        if (str_contains($strCurrentScriptwFolder, 'ai-powered-php-mysql-web-application-developer')) {
            
            $preload_bg_images = [
            '/img/headers/1180_header_bg_homepage.png',
            '/img/headers/1180_header_bg_development.png',
            '/img/headers/1180_header_bg_design.png',
            '/img/headers/1180_header_bg_promotion.png',

            '/img/headers/360_header_bg_homepage.png',
            '/img/headers/360_header_bg_development.png',
            '/img/headers/360_header_bg_design.png',
            '/img/headers/360_header_bg_promotion.png',

            '/img/headers/840_header_bg_homepage.png',
            '/img/headers/800_header_bg_development.png',
            '/img/headers/840_header_bg_design.png',
            '/img/headers/840_header_bg_promotion.png',
            ];

        }

        if (str_contains($strCurrentScriptwFolder, 'ai-powered-php-mysql-web-application-developer')) {
            
            $preload_bg_images = [
            '/img/headers/1180_header_bg_homepage.png',
            '/img/headers/1180_header_bg_development.png',
            '/img/headers/1180_header_bg_design.png',
            '/img/headers/1180_header_bg_promotion.png',

            '/img/headers/360_header_bg_homepage.png',
            '/img/headers/360_header_bg_development.png',
            '/img/headers/360_header_bg_design.png',
            '/img/headers/360_header_bg_promotion.png',

            '/img/headers/840_header_bg_homepage.png',
            '/img/headers/800_header_bg_development.png',
            '/img/headers/840_header_bg_design.png',
            '/img/headers/840_header_bg_promotion.png',
            ];

        }

    }


if(isset($preload_bg_images)){

?>

<script>
window.addEventListener('load', function () {
    setTimeout(function () {
        const bgImages = <?php echo json_encode($preload_bg_images, JSON_UNESCAPED_SLASHES); ?>;

        bgImages.forEach(function (src) {
            const img = new Image();
            img.decoding = 'async';
            img.src = src;
        });

    }, 5000);
});
</script>

<?php

} 
 
*/ ?>