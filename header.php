<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="theme/frontend/css/all.min.css">
    <link rel="stylesheet" href="theme/frontend/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="theme/frontend/css/fancybox.min.css">
    <link rel="stylesheet" href="theme/frontend/css/animate.css">
    <link rel="stylesheet" href="theme/frontend/css/output.css">
    <link rel="stylesheet" href="theme/frontend/css/main.css">
    <link rel="stylesheet" href="theme/frontend/css/tacgia.css">
</head>

<body>
    <header>
        <div class="header__top border-b border-[rgba(38,38,38,0.2)]">
            <div class="container flex items-center justify-between">
                <div class="flex gap-x-10 items-center py-2.5">
                    <a href="" class="max-w-[174px]">
                        <img src="theme/frontend/images/logo.png" alt="">
                    </a>
                    <form action="" class="flex py-3 px-5 rounded-[30px] bg-[#F0F1F2]">
                        <button type="submit" class="mr-2">
                            <i class="fa-solid fa-magnifying-glass text-[#9A9EA6]"></i>
                        </button>
                        <input type="text" placeholder="Tìm kiếm" class="placeholder:text-[#9A9EA6] bg-transparent">
                    </form>
                    <div class="header__top-menu">
                        <ul>
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Tác giả</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center">
                    <p class="mr-5 opacity-40">Theo dõi chúng tôi tại</p>
                    <a href="" class="flex w-6 gap-x-2 mr-3">
                        <?php include 'template/svgs/facebook.php'; ?>
                    </a>
                    <a href="" class="flex w-6 gap-x-2 mr-3">
                        <?php include 'template/svgs/tiktok.php'; ?>
                    </a>
                    <a href="" class="flex w-6 gap-x-2">
                        <?php include 'template/svgs/youtube.php'; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="header__bottom relative border-b border-[#262626]">
            <div class="container flex items-center py-4">
                <button class="text-[#262626] text-lg font-semibold mr-16 toggle-menu-category-fixed hover:text-cl-primary">
                    <i class="fa-solid fa-bars mr-2"></i> Toàn bộ danh mục
                </button>
                <div class="header__bottom-menu">
                    <ul>
                        <li><a href="">Ẩm thực</a></li>
                        <li><a href="">Sức khỏe</a></li>
                        <li><a href="">Thực phẩm</a></li>
                        <li><a href="">Tin tức</a></li>
                    </ul>
                </div>
            </div>
            <!-- Menu category -->
            <div class="menu-category-fixed">
                <div class="container menu-container h-screen lg:h-[50dvh] overflow-y-auto">
                    <a href="" class="max-w-[174px] block py-2 mx-auto lg:hidden">
                        <img src="theme/frontend/images/logo.png" alt="">
                    </a>
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li><a href="">Tác giả</a></li>
                    </ul>
                    <ul>
                        <?php for ($i = 0; $i < 20; $i++) : ?>
                            <li>
                                <a href="">Ẩm thực</a>
                                <ul>
                                    <li><a href="">Món ngon mỗi ngày</a></li>
                                    <li><a href="">Thực đơn hàng ngày</a></li>
                                    <li><a href="">Clip ẩm thực</a></li>
                                    <li><a href="">Tin tức ẩm thực</a></li>
                                    <li><a href="">Tra cứu ẩm thực</a></li>
                                    <li><a href="">Khéo tay</a></li>
                                </ul>
                                <span class="btn-show-more">
                                    <i class="fa-solid fa-angle-down"></i>
                                </span>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>