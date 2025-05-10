<!-- Đăng ký nhận tin tức của chúng tôi tại đây -->
<section class="bg-[#D2E4D6]">
    <div class="container py-4 md:py-8 lg:py-12">
        <div class="flex flex-wrap justify-center lg:justify-between items-center gap-4">
            <div class="w-[418px]">
                <h2 class="text-[1.5rem] md:text-[2rem] lg:text-[2.5rem] font-bold mb-5">Đăng ký nhận tin tức của chúng tôi tại đây</h2>
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1.25rem] font-roboto opacity-80">Nhập email của bạn tại đây để nhận tin tức mới nhất của chúng tôi</p>
            </div>
            <div class="w-[464px]">
                <div class="form-contact">
                    <form action="">
                        <input type="text" placeholder="Nhập email">
                        <input type="submit" value="Đăng kí">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-info">
        <div class="container">
            <div class="footer-info-container">
                <div class="footer_logo">
                    <img src="theme/frontend/images/footer_logo.png" alt="logo_footer">
                </div>
                <div class="footer_info-items flex justify-between gap-x-[5.563rem] gap-y-[1.25rem] xl:flex-nowrap flex-wrap">
                    <div class="">
                        <div class="mb-[1rem] md:mb-[1.25rem] xl:mb-[1.875rem]">
                            <h2 class="footer-title xl:max-w-[26.063rem]">CÔNG TY TNHH LINTIMATE VIỆT NAM</h2>
                        </div>
                        <div class="flex flex-col gap-y-[1.5rem]">
                            <div class="flex items-center gap-x-[0.75rem]">
                                <div class="bg-[#E3FDE4] p-[0.875rem] rounded-full footer-location-icon">
                                    <?php @include("template/svgs/location.php") ?>
                                </div>
                                <div>
                                    <p class="f-content">Địa chỉ</p>
                                    <p class="f-subcontent md:max-w-[26.063rem]">Số nhà 35 Ngõ 6 đường 800A, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt Nam</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-[0.75rem]">
                                <div class="bg-[#E3FDE4] p-[0.875rem] rounded-full footer-email-icon">
                                    <?php @include("template/svgs/email.php") ?>
                                </div>
                                <div>
                                    <p class="f-content">Email</p>
                                    <a href="mailto:info@lintimate.com" class="f-subcontent">info@lintimate.com</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-[0.75rem]">
                                <div class="bg-[#E3FDE4] p-[0.875rem] rounded-full footer-contact-icon">
                                    <?php @include("template/svgs/contact.php") ?>
                                </div>
                                <div>
                                    <p class="f-content">Liên hệ</p>
                                    <a href="tel:1900636598" class="f-subcontent">1900 636598</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-[0.75rem]">
                                <div class="bg-[#E3FDE4] p-[0.875rem] rounded-full footer-mst-icon">
                                    <?php @include("template/svgs/mst.php") ?>
                                </div>
                                <div>
                                    <p class="f-content">Mã số thuế</p>
                                    <p class="f-subcontent">0107257248</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-[0.75rem]">
                                <div class="bg-[#E3FDE4] p-[0.875rem] rounded-full footer-website-icon">
                                    <?php @include("template/svgs/website.php") ?>
                                </div>
                                <div>
                                    <p class="f-content">Website</p>
                                    <a href="https://lintimate.com/" class="f-subcontent">https://lintimate.com/</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info-item-support flex md:flex-col flex-row gap-y-[2.5rem]">
                        <div>
                            <h2 class="footer-title mb-[1.25rem]">HỖ TRỢ</h2>
                            <div class="text-[1rem] font-[400]">
                                <ul>
                                    <li>
                                        <a href="#" alt="">CEO Bạch Diệu Linh</a>
                                    </li>
                                    <li>
                                        <a href="#" alt="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="#" alt=""> Liên hệ</a>
                                    </li>
                                    <li>
                                        <a href="#" alt="">Điều khoản</a>
                                    </li>
                                    <li>
                                        <a href="#" alt="">Chính sách bảo mật</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="footer-contact mb-[1rem] sm:mb-[2.5rem]">
                                <h3>Kết nối với chúng tôi</h3>
                                <div class="flex items-center gap-x-[0.75rem] gap-[1rem]">
                                    <?php @include("template/svgs/facebook.php") ?>
                                    <?php @include("template/svgs/tiktok.php") ?>
                                    <?php @include("template/svgs/youtube.php") ?>
                                    <?php @include("template/svgs/instagram.php") ?>
                                </div>
                            </div>
                            <div class="footer-ownership-img w-[7.563rem]">
                                <img src="theme/frontend/images/footer_ownership.png" alt="anh">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" mb-[1.25rem] md:mb-[2.938rem]">
                            <h2 class="footer-title mb-[1rem] sm:mb-[1.25rem]">SƠ ĐỒ TRANG WEB</h2>
                            <div class="footer-map-content text-[1rem] font-[400]">
                                <ul>
                                    <li>
                                        <a href="#" title="sơ đồ">Webstories</a>
                                    </li>
                                    <li>
                                        <a href="#" title="sơ đồ">Padcast</a>
                                    </li>
                                    <li>
                                        <a href="#" title="sơ đồ">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-map">
                            <a href="#" title="sơ đồ">
                                <img src="theme/frontend/images/footer_map.png" alt="sơ đồ">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-[1.25rem]">
                    <p class="text-center font-[400] text-[1.25rem] text-[#fff] leading-[1.465rem]">©2024, Bản quyền thuộc về Lintimate</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="theme/frontend/js/swiper-bundle.min.js" defer></script>
<script src="theme/frontend/js/fancybox.umd.js" defer></script>
<script src="theme/frontend/js/wow.min.js" defer></script>
<script src="theme/frontend/js/script.js" defer></script>
</body>

</html>