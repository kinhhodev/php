<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="img w-bg">
    <picture class="image--mobile">
        <source media="(min-width: 768px)" srcset="">
        <img class="object-cover" srcset="" loading="eager" alt="herobanner" fetchpriority="true">

    </picture>

    <picture class="image--ipad-up">
        <source media="(max-width: 767px)" srcset="">
        <img class="object-cover" srcset="" loading="eager" alt="herobanner" fetchpriority="true">
        <div class="img w-bg">
            <picture class="image--mobile">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/empty.jpg">
                <img class="object-cover" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact_bg_mobile.png" loading="eager" alt="herobanner" fetchpriority="true">
            </picture>

            <picture class="image--ipad-up">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/empty.jpg">
                <img class="object-cover" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact_bg.png" loading="eager" alt="herobanner" fetchpriority="true">
            </picture>
        </div>
    </picture>
    
</div>
</body>
</html>
