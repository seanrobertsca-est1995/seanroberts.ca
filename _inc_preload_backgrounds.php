<?php
$preload_bg_images = [
'/img/headers/1180_header_bg_design.png',
'/img/headers/1180_header_bg_homepage.png',
'/img/headers/1180_header_bg_development.png',
'/img/headers/1180_header_bg_promotion_forest.png',
'/img/headers/360_header_bg_homepage.png',
'/img/headers/360_header_bg_development.png',
'/img/headers/360_header_bg_promotion_forest.png',
];
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