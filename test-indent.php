<!DOCTYPE html>
<html lang="en">
<%~ include('/src/views/layouts/head.html') %>

<body class="home">
    <%~ include('/src/views/partials/header.html') %>
    <common-navigation class="w-center">
        <div class="inner">
            <nav aria-label="breadcrumbs" class="rank-math-breadcrumb"><p><a href="https://delightparkdalat.141.bluecoral.vn/events/">Sự kiện</a><span class="separator"> / </span><span class="last">Sự kiện trong tháng</span></p></nav>
        </div>
    </common-navigation>
    <common-event-details>
        <div class="inner">
            <h1 class="font-SVN-Abril-Fatface">Tên sự kiện siêu dài 100 từ</h1>
            <span class="date">December 20, 2024 - December 29, 2024</span>
        </div>

        <div class="img w-featured">
            <picture class="image--mobile">
                <source media="(min-width: 768px)" srcset="@images/empty.jpg">
                <source media="(max-width: 767px)" srcset="@images/event_details_banner_mobile.jpg, @images/event_details_banner_mobile.jpg 2x, @images/event_details_banner_mobile.jpg 3x">
                <img class="object-cover" srcset="@images/event_details_banner_mobile.jpg" loading="eager" alt="herobanner" fetchpriority="true">
            </picture>

            <picture class="image--ipad-up">
                <source media="(min-width: 768px) and (max-width: 1023px)" srcset="@images/event_details_banner.jpg, @images/event_details_banner.jpg 2x" >
                <source media="(min-width: 1024px) and (max-width: 1279px)" srcset="@images/event_details_banner.jpg, @images/event_details_banner.jpg 2x" >
                <source media="(min-width: 1280px) and (max-width: 1599px)" srcset="@images/event_details_banner.jpg, @images/event_details_banner.jpg 2x" >
                <source media="(min-width: 1600px) and (max-width: 1919px)" srcset="@images/event_details_banner.jpg, @images/event_details_banner.jpg 2x" >
                <source media="(min-width: 1920px)" srcset="@images/event_details_banner.jpg, @images/event_details_banner.jpg 2x" >

                <source media="(max-width: 767px)" srcset="@images/empty.jpg">

                <img class="object-cover" srcset="@images/event_details_banner.jpg"  loading="eager" alt="herobanner" fetchpriority="true">
            </picture>

            <svg width="1500" height="108" viewBox="0 0 1500 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 108C193.583 47.52 458.039 10.8 750 10.8C1041.96 10.8 1306.42 47.52 1500 108V0H0.000670241L0 108Z" fill="white"/>
            </svg>

        </div>
    </common-event-details>

    <common-details-text-image class="w-vertical block py-[60px] md:py-[80px] lg:py-[100px] xl:py-[120px] sc-pd sc-details">
        <div class="inner max-w-[1000px]">
            <div class="flex flex-col gap-[32px] md:gap-[40px] lg:gap-[50px] xl:gap-[60px]">
                <div class="copy flex-1 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="flex-1">
                    <div class="img pb-[66.666666666%] rounded-[12px] md:rounded-[16px] lg:rounded-[20px] xl:rounded-[24px]">
                        <img class="object-cover" srcset="@images/blog_details_01.jpg"  loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
    </common-details-text-image>

    <common-details-testimonial class="block py-[60px] md:py-[80px] lg:py-[100px] xl:py-[120px] sc-pd sc-details">
        <div class="inner flex flex-col justify-center text-center max-w-[740px]">
            <svg class="w-[30px] h-auto mx-auto mb-[16px] md:mb-[20px] xl:mb-[24px]" width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.261719 16.0332C0.261719 15.3029 0.328109 14.5394 0.460889 13.7427C1.19118 8.76349 3.54803 4.18257 7.53143 0L9.52313 1.49378C7.13309 4.0166 5.90487 6.27386 5.83848 8.26556C5.90487 9.39419 6.73475 10.1909 8.32811 10.6556C8.79284 10.7884 9.29076 10.9544 9.82189 11.1535C12.4111 12.3485 13.7057 14.3734 13.7057 17.2282C13.7057 18.2905 13.4733 19.2863 13.0086 20.2158C11.8136 22.7386 9.88828 24 7.23267 24C6.30321 24 5.44014 23.834 4.64346 23.5021C1.7223 22.4398 0.261719 19.9502 0.261719 16.0332ZM16.2949 16.0332C16.2949 15.3029 16.3613 14.5394 16.4941 13.7427C17.2244 8.76349 19.5812 4.18257 23.5646 0L25.5563 1.49378C23.1663 4.0166 21.9381 6.27386 21.8717 8.26556C21.9381 9.39419 22.7679 10.1909 24.3613 10.6556C24.826 10.7884 25.324 10.9544 25.8551 11.1535C28.4443 12.3485 29.7389 14.3734 29.7389 17.2282C29.7389 18.2905 29.5065 19.2863 29.0418 20.2158C27.8468 22.7386 25.9215 24 23.2659 24C22.3364 24 21.4733 23.834 20.6767 23.5021C17.7555 22.4398 16.2949 19.9502 16.2949 16.0332Z" fill="#FF8B00"/>
            </svg>
            <h2 class="font-SVN-Abril-Fatface text-[#FF8B00] text-[16px] leading-[1.5] lg:text-[20px] lg:leading-[1.4]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h2>
        </div>
    </common-details-testimonial>

    <common-details-text-image class="w-horizontal block py-[60px] md:py-[80px] lg:py-[100px] xl:py-[120px] sc-pd sc-details">
        <div class="inner max-w-[1000px]">
            <div class="flex flex-col md:flex-row gap-[32px] md:gap-[40px] lg:gap-[50px] xl:gap-[60px]">
                <div class="flex-1 xl:flex xl:flex-col xl:items-start xl:justify-center">
                    <div class="copy">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <a href="#" class="c-btn c-primary-btn mt-[16px] md:mt-[20px] xl:mt-[24px]">
                        <span class="txt">Call to action</span>
                    </a>
                </div>
                <div class="flex-1">
                    <div class="img pb-[100%] rounded-[12px] md:rounded-[16px] lg:rounded-[20px] xl:rounded-[24px]">
                        <img class="object-cover" srcset="@images/blog_details_01.jpg"  loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
    </common-details-text-image>

    <common-details-text-image class="w-horizontal w-reverse block py-[60px] md:py-[80px] lg:py-[100px] xl:py-[120px] sc-pd sc-details">
        <div class="inner max-w-[1000px]">
            <div class="flex flex-col md:flex-row-reverse gap-[32px] md:gap-[40px] lg:gap-[50px] xl:gap-[60px]">
                <div class="copy flex-1 xl:flex xl:items-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="flex-1">
                    <div class="img pb-[100%] rounded-[12px] md:rounded-[16px] lg:rounded-[20px] xl:rounded-[24px]">
                        <img class="object-cover" srcset="@images/blog_details_02.jpg"  loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
    </common-details-text-image>

    <common-related-events class="block py-[60px] md:py-[80px] lg:py-[100px] xl:py-[120px] sc-pd w-bg bg-[linear-gradient(180deg,#FFFFFF_9.11%,#F5ECF9_44.83%,#FFF6FF_76.02%,#FFEEFF_97.81%)] overflow-hidden no-pd-top">
        <div class="inner">
            <h2 class="w-small font-SVN-Abril-Fatface text-gradient w-orange-gradient max-w-[650px] mx-auto text-center mb-[24px] md:mb-[32px] xl:mb-[40px]">Sự kiện khác</h2>
            <div class="swiper w-initial" data-slider data-name="related-events" data-options='{
                    "slidesPerView": 1.13,
                    "spaceBetween": 16,
                    "speed": 1000,
                    "breakpoints": {
                        "768": {
                            "slidesPerView": 3,
                            "spaceBetween": 20
                        }
                    }
                }'>
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide h-auto p-[16px] md:p-[20px] xl:p-[24px] rounded-[12px] md:rounded-[16px] xl:rounded-[24px] bg-white text-center group">
                        <div class="img pb-[133.333333333%] rounded-[8px] md:rounded-[12px] lg:rounded-[16px] mb-[16px]">
                            <img src="@images/event_01.jpg" loading="lazy" class="object-cover " alt="">
                        </div>
                        <div class="flex flex-col md:flex-col-reverse gap-[4px]">
                            <span class="text-[12px] leading-[16px] lg:text-[14px] lg:leading-[20px] font-bold block">December 20, 2024 - December 29, 2024</span>
                            <h3 class="font-SVN-Abril-Fatface text-[20px] leading-[1.2] lg:text-[24px] lg:leading-[30px] lg+:transition-colors lg+:duration-200 lg+:group-hover:text-[#ff8b00]">Tên sự kiện</h3>
                        </div>
                        <div class="copy mt-[10px] md:mt-[12px]">
                            <p>Error non architecto blanditiis nihil rerum. Corporis modi repudiandae qui molestiae vel hic fugit veniam </p>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide h-auto p-[16px] md:p-[20px] xl:p-[24px] rounded-[12px] md:rounded-[16px] xl:rounded-[24px] bg-white text-center group">
                        <div class="img pb-[133.333333333%] rounded-[8px] md:rounded-[12px] lg:rounded-[16px] mb-[16px]">
                            <img src="@images/event_01.jpg" loading="lazy" class="object-cover " alt="">
                        </div>
                        <div class="flex flex-col md:flex-col-reverse gap-[4px]">
                            <span class="text-[12px] leading-[16px] lg:text-[14px] lg:leading-[20px] font-bold block">December 20, 2024 - December 29, 2024</span>
                            <h3 class="font-SVN-Abril-Fatface text-[20px] leading-[1.2] lg:text-[24px] lg:leading-[30px] lg+:transition-colors lg+:duration-200 lg+:group-hover:text-[#ff8b00]">Tên sự kiện</h3>
                        </div>
                        <div class="copy mt-[10px] md:mt-[12px]">
                            <p>Error non architecto blanditiis nihil rerum. Corporis modi repudiandae qui molestiae vel hic fugit veniam </p>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide h-auto p-[16px] md:p-[20px] xl:p-[24px] rounded-[12px] md:rounded-[16px] xl:rounded-[24px] bg-white text-center group">
                        <div class="img pb-[133.333333333%] rounded-[8px] md:rounded-[12px] lg:rounded-[16px] mb-[16px]">
                            <img src="@images/event_01.jpg" loading="lazy" class="object-cover " alt="">
                        </div>
                        <div class="flex flex-col md:flex-col-reverse gap-[4px]">
                            <span class="text-[12px] leading-[16px] lg:text-[14px] lg:leading-[20px] font-bold block">December 20, 2024 - December 29, 2024</span>
                            <h3 class="font-SVN-Abril-Fatface text-[20px] leading-[1.2] lg:text-[24px] lg:leading-[30px] lg+:transition-colors lg+:duration-200 lg+:group-hover:text-[#ff8b00]">Tên sự kiện</h3>
                        </div>
                        <div class="copy mt-[10px] md:mt-[12px]">
                            <p>Error non architecto blanditiis nihil rerum. Corporis modi repudiandae qui molestiae vel hic fugit veniam </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex justify-center mt-[24px] md:mt-[32px] xl:mt-[40px]">
                <a href="#" class="c-link c-primary-link whitespace-nowrap">
                    <span class="txt">Khám phá thêm sự kiện</span>
                    <span class="icon-arrow-right"></span>
                </a>
            </div>
        </div>
    </common-related-events>

    <%~ include('/src/views/partials/footer.html') %>
    <%~ include('/src/views/layouts/foot.html') %>
</body>

</html>