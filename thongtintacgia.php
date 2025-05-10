<?php include "header.php" ?>
<section class="thongtintacgia mt-[1.5625rem] sm:mt-[2.5rem]">
    <div class="container">
        <div class="max-w-[73.125rem]">
            <div class="flex items-center link-page">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3C12 3 5.814 8.34 2.357 11.232C2.24695 11.3278 2.15829 11.4457 2.09678 11.578C2.03528 11.7103 2.0023 11.8541 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H5V20C5 20.2652 5.10536 20.5196 5.29289 20.7071C5.48043 20.8946 5.73478 21 6 21H9C9.26522 21 9.51957 20.8946 9.70711 20.7071C9.89464 20.5196 10 20.2652 10 20V16H14V20C14 20.2652 14.1054 20.5196 14.2929 20.7071C14.4804 20.8946 14.7348 21 15 21H18C18.2652 21 18.5196 20.8946 18.7071 20.7071C18.8946 20.5196 19 20.2652 19 20V13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C21.9986 11.8513 21.9634 11.7049 21.897 11.5718C21.8307 11.4388 21.7349 11.3226 21.617 11.232C18.184 8.34 12 3 12 3Z" fill="#2A6049" />
                </svg>
                <?php include 'template/svgs/arrow_link.php'; ?>
                <a href="#" class="">Tác giả</a>
                <?php include 'template/svgs/arrow_link.php'; ?>
                <a href="#" class="">CEO Jesse Dang</a>
            </div>
            <div class="thongtintacgia-container">
                <h1 class="title-content-tacgia text-center">Thông tin tác giả</h1>
                <div class="mt-[1.25rem]">
                    <div class="thongtintacgia-title-number">1. Giới thiệu</div>
                    <div class="thongtintacgia-content"></div>
                </div>
                <div class="mt-[1.25rem]">
                    <div class="thongtintacgia-title-number">2. Thông tin cá nhân</div>
                    <div class="thongtintacgia-content"></div>
                </div>
                <div class="mt-[1.25rem]">
                    <div class="thongtintacgia-title-number">3. Mục tiêu nghề nghiệp</div>
                    <div class="thongtintacgia-content"></div>
                </div>
                <div class="mt-[1.25rem]">
                    <div class="thongtintacgia-title-number">4. Kinh nghiệm làm việc</div>
                    <div class="thongtintacgia-content"></div>
                </div>
                <div class="mt-[1.25rem]">
                    <div class="thongtintacgia-title-number">5. Bằng cấp</div>
                    <div class="thongtintacgia-content"></div>
                </div>
            </div>
            <div class="posts-tacgia mt-[2rem] sm:mt-[2.5rem]">
                <div class="flex justify-between items-center">
                    <h2 class=" posts-tacgia-title">Bài viết của tác giả</h2>
                    <button class="py-[0.5rem] px-[1.25rem] sm:py-[0.625rem] sm:px-[1.875rem] text-[#fff] font-[500] text-[0.875rem] sm:text-[1rem] rounded-[4.375rem]">
                        Xem thêm
                    </button>
                </div>
                <div class="mt-[1rem] sm:mt-[1.25rem]">
                    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-y-[1.25rem] gap-x-[1rem]">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="swiper-slide-post">
                                <div>
                                    <div>
                                        <a href="#" class="c-img pt-[63%] overflow-hidden block img__ rounded-[0.3125rem]">
                                            <img src="theme/frontend/images/post1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="posts-category-tacgia  mt-[1rem]">
                                        <a href="#" title="" class="posts-name-category">Ẩm thực</a>
                                        <div class="posts-date-category flex items-center justify-center gap-[0.5rem]">
                                            <?php @include("template/svgs/date_posts.php") ?>
                                            <p>1 ngày</p>
                                        </div>
                                    </div>
                                    <div class="text-[1rem] mt-[0.75rem] sm:mt-[1rem] title-posts-content">
                                        <a href="#" title=""> Khám phá 100 Món Chay Đơn Giản Cho Cuộc Sống Thêm Thanh Lành</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>