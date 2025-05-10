<?php include 'header.php'; ?>

<?php include 'template/breadcrumbs.php'; ?>

<section class="mb-8 lg:mb-10">
    <div class="container">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-[1.5rem] w-[130px] lg:w-[180px] lg:text-[2rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 shrink-0">
                Ẩm thực
            </h2>
            <div class="swiper-list-cat-news w-[calc(100%-150px)] lg:w-[calc(100%-200px)] px-8 relative">
                <div class="swiper text-[0.75rem] md:text-[0.875rem] lg:text-[1rem]">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <div class="swiper-slide !w-fit">
                                <a href="" class="hover:text-cl-primary">
                                    Danh mục con <?= $i + 1 ?>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="btn-next-cat-news absolute top-1/2 -translate-y-1/2 right-0">
                    <span class="size-7 flex justify-center items-center">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </div>
                <div class="btn-prev-cat-news absolute top-1/2 -translate-y-1/2 left-0">
                    <span class="size-7 flex justify-center items-center">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-2.5 gap-y-5">
            <div class="w-full lg:w-3/4 px-2.5">
                <h1 class="text-[2rem] font-bold mb-4 md:mb-5">
                    Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                </h1>
                <div class="flex flex-wrap gap-x-10 gap-y-4 items-center mb-4 md:mb-5">
                    <div class="text-[#43464C]">
                        <a href="" title="Thực phẩm" class="font-semibold">Thực phẩm</a> - <span>31/10/2024 18:00 GMT +7</span>
                    </div>
                    <p class="font-medium text-[#43464C]">Đóng góp bởi: <span class="font-semibold text-[#262626]">Lê Thành An</span></p>
                </div>
                <div class="s-content mb-4 md:mb-5 pb-5 border-b">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit dignissimos accusantium fugiat et eum! Quis, reprehenderit consequuntur quod deserunt magni nihil odio. Perferendis dicta similique distinctio saepe voluptatibus, ipsa accusantium.
                </div>
                <p class="text-cl-secondary font-bold text-[1.25rem] mb-4 md:mb-5">Ý kiến của bạn</p>
                <div class="mb-4 md:mb-5"></div>
                <p class="text-cl-secondary font-bold text-[1.25rem] mb-4 md:mb-5">Tags</p>
                <div class="flex flex-wrap items-end gap-5 justify-between">
                    <div class="flex gap-4">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                            <a href="" class="font-medium text-white bg-cl-secondary py-2 px-3 rounded-[10px] font-roboto hover:bg-white hover:text-cl-secondary border border-cl-secondary">
                                Tag <?= $i + 1 ?>
                            </a>
                        <?php endfor; ?>
                    </div>
                    <div class="gap-5 flex items-center">
                        <p class="text-[#161616] font-roboto font-semibold">Chia sẻ bài viết:</p>
                        <a href="" title="Facebook" class="w-7">
                            <?php include 'template/svgs/facebook.php'; ?>
                        </a>
                        <a href="" title="Twiter" class="w-6">
                            <?php include 'template/svgs/twiter.php'; ?>
                        </a>
                        <a href="" title="Zalo" class="w-6">
                            <?php include 'template/svgs/zalo.php'; ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4 px-2.5">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="mb-5 last:mb-0">
                        <p class="text-[1.25rem] lg:text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-4 md:mb-5">
                            Danh mục con 1
                        </p>
                        <div class="md:mb-4 last:mb-0 pb-4 last:pb-0 md:border-b md:border-none md:pb-0 border-[#262626]/20 last:border-none">
                            <a href="" class="c-img mb-3 pt-[59%] img__ block rounded-[5px] overflow-hidden">
                                <img src="theme/frontend/images/image1.png" alt="">
                            </a>
                            <h3 class="mb-2 md:mb-3">
                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary max-md:text-[1.125rem]" title="Cách Pha Nước Chấm Bún Chả Chuẩn Vị Hà Nội">
                                    Rau Tiến Vua Làm Món Gì? Khám Phá Bí Quyết Ẩm Thực Cung Đình
                                </a>
                            </h3>
                            <div class="flex justify-between items-center text-cl-secondary font-roboto mb-2">
                                <div>
                                    <a href="" class="font-semibold max-md:text-[0.875rem]">Tên danh mục con</a>
                                </div>
                                <div class="flex items-center gap-x-0.5">
                                    <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                        <?php include 'template/svgs/date.php'; ?>
                                    </span>
                                    <span class="text-[0.75rem] md:text-[1rem]">
                                        1 ngày
                                    </span>
                                </div>
                            </div>
                            <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem] opacity-70">
                                Nước chấm bún chả – linh hồn của món ăn trứ danh Hà thành. Bạn đã bao giờ thắc mắc làm thế nào để pha được bát nước chấm bún chả ngon đúng điệu, hài hòa giữa vị chua ngọt cay mà không bị gắt, làm dậy lên hương vị thơm ngon của miếng chả […]
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-1 md:gap-y-5">
                            <?php for ($m = 0; $m < 2; $m++): ?>
                                <div class="w-1/2 md:w-full px-1">
                                    <div class="flex max-md:flex-col gap-3">
                                        <div class="md:w-[133px] shrink-0">
                                            <a href="" class="c-img pt-[61.6%] img__ block rounded-[5px] overflow-hidden">
                                                <img src="theme/frontend/images/image1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <h3 class="mb-1">
                                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary" title="Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng">
                                                    Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                                                </a>
                                            </h3>
                                            <div class="flex items-center gap-x-0.5 text-[#2A6049] font-roboto">
                                                <span class="w-[14px] -translate-y-[1px]">
                                                    <?php include "template/svgs/date.php"; ?>
                                                </span>
                                                <span class="text-[0.75rem]">
                                                    1 ngày
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<section class="mb-8 lg:mb-10">
    <div class="container">
        <p class="text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-5">
            Tin liên quan
        </p>
        <div class="flex flex-wrap -mx-2.5 gap-y-5">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="w-full md:w-1/2 lg:w-1/4 px-2.5">
                    <div class="">
                        <a href="" class="c-img mb-3 pt-[59%] img__ block rounded-[5px] overflow-hidden">
                            <img src="theme/frontend/images/image1.png" alt="">
                        </a>
                        <h3 class="mb-2 md:mb-3">
                            <a href="" class="line-clamp-2 font-bold hover:text-cl-primary max-md:text-[1.125rem]" title="Cách Pha Nước Chấm Bún Chả Chuẩn Vị Hà Nội">
                                Rau Tiến Vua Làm Món Gì? Khám Phá Bí Quyết Ẩm Thực Cung Đình
                            </a>
                        </h3>
                        <div class="flex justify-between items-center text-cl-secondary font-roboto mb-2">
                            <div>
                                <a href="" class="font-semibold max-md:text-[0.875rem]">Tên danh mục con</a>
                            </div>
                            <div class="flex items-center gap-x-0.5">
                                <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                    <?php include 'template/svgs/date.php'; ?>
                                </span>
                                <span class="text-[0.75rem] md:text-[1rem]">
                                    1 ngày
                                </span>
                            </div>
                        </div>
                        <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem] opacity-70">
                            Nước chấm bún chả – linh hồn của món ăn trứ danh Hà thành. Bạn đã bao giờ thắc mắc làm thế nào để pha được bát nước chấm bún chả ngon đúng điệu, hài hòa giữa vị chua ngọt cay mà không bị gắt, làm dậy lên hương vị thơm ngon của miếng chả […]
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<section class="mb-8 lg:mb-10">
    <div class="container">
        <div class="flex flex-wrap -mx-2.5 gap-y-5">
            <div class="w-full lg:w-3/4 px-2.5">
                <p class="text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-5">
                    Tin đọc nhiều
                </p>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="flex gap-3 md:gap-5 pb-5 mb-5 border-b border-[#262626]/20 last:mb-0 last:pb-0 last:border-none">
                        <div class="w-[143px] md:w-[200px] lg:w-[278px] shrink-0">
                            <a href="" class="c-img pt-[63.3%] rounded-[5px] overflow-hidden block img__">
                                <img src="theme/frontend/images/image1.png" alt="">
                            </a>
                        </div>
                        <div class="space-y-3 md:space-y-4">
                            <h3 class="">
                                <a href="" class="line-clamp-2 text-black hover:text-cl-primary lg:text-[1.25rem] font-bold">
                                    Cách pha nước chấm chả chuẩn vị Hà Nội
                                </a>
                            </h3>
                            <div class="flex max-md:justify-between text-cl-secondary md:gap-x-10 lg:gap-x-12 xl:gap-x-[3.75rem] font-roboto text-[0.75rem] md:text-[1rem]">
                                <h5>
                                    <a href="" class="font-semibold hover:text-cl-primary">Tên danh mục con</a>
                                </h5>
                                <div class="flex items-center">
                                    <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                        <?php include 'template/svgs/date.php'; ?>
                                    </span>
                                    <span>
                                        1 ngày
                                    </span>
                                </div>
                            </div>
                            <div class="s-content line-clamp-2 font-roboto opacity-80 max-md:hidden">
                                1 Phút Plank Bằng Bao Nhiêu Cái Gập Bụng: Sự Thật Bạn Cần Biết
                                Bạn có đang thắc mắc 1 Phút Plank Bằng Bao Nhiêu Cái Gập Bụng và liệu plank có phải là bài tập hiệu quả hơn? Câu trả lời không đơn giản như bạn nghĩ! Hãy cùng LINTIMATE khám phá sự thật thú vị đằng sau hai bài tập quen thuộc này và tìm hiểu cách tối ưu hóa việc tập luyện cho hiệu quả tốt nhất nhé.
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="w-full lg:w-1/4 px-2.5">
                <div class="rounded-[5px] bg-cover bg-center bg-no-repeat pb-60 h-full" style="background-image: url('theme/frontend/images/image2.jpg');">
                    <div class="py-4 px-5 border-b-[3px] border-[#fe3] rounded-[5px] bg-cl-secondary">
                        <p class="font-bold text-white text-center">
                            Sống khỏe mỗi ngày cùng
                        </p>
                        <div class="max-w-[236px] mx-auto img__contain">
                            <img src="theme/frontend/images/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-8 lg:mb-10">
    <div class="container">
        <div class="flex flex-wrap -mx-2.5 gap-y-5">
            <div class="w-full lg:w-3/4 px-2.5">
                <p class="text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-5">
                    Cùng chuyên mục
                </p>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="flex gap-3 md:gap-5 pb-5 mb-5 border-b border-[#262626]/20 last:mb-0 last:pb-0 last:border-none">
                        <div class="w-[143px] md:w-[200px] lg:w-[278px] shrink-0">
                            <a href="" class="c-img pt-[63.3%] rounded-[5px] overflow-hidden block img__">
                                <img src="theme/frontend/images/image1.png" alt="">
                            </a>
                        </div>
                        <div class="space-y-3 md:space-y-4">
                            <h3 class="">
                                <a href="" class="line-clamp-2 text-black hover:text-cl-primary lg:text-[1.25rem] font-bold">
                                    Cách pha nước chấm chả chuẩn vị Hà Nội
                                </a>
                            </h3>
                            <div class="flex max-md:justify-between text-cl-secondary md:gap-x-10 lg:gap-x-12 xl:gap-x-[3.75rem] font-roboto text-[0.75rem] md:text-[1rem]">
                                <h5>
                                    <a href="" class="font-semibold hover:text-cl-primary">Tên danh mục con</a>
                                </h5>
                                <div class="flex items-center">
                                    <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                        <?php include 'template/svgs/date.php'; ?>
                                    </span>
                                    <span>
                                        1 ngày
                                    </span>
                                </div>
                            </div>
                            <div class="s-content line-clamp-2 font-roboto opacity-80 max-md:hidden">
                                1 Phút Plank Bằng Bao Nhiêu Cái Gập Bụng: Sự Thật Bạn Cần Biết
                                Bạn có đang thắc mắc 1 Phút Plank Bằng Bao Nhiêu Cái Gập Bụng và liệu plank có phải là bài tập hiệu quả hơn? Câu trả lời không đơn giản như bạn nghĩ! Hãy cùng LINTIMATE khám phá sự thật thú vị đằng sau hai bài tập quen thuộc này và tìm hiểu cách tối ưu hóa việc tập luyện cho hiệu quả tốt nhất nhé.
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="w-full lg:w-1/4 px-2.5">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div class="mb-5 last:mb-0">
                        <p class="text-[1.25rem] lg:text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-4 md:mb-5">
                            Danh mục con 1
                        </p>
                        <div class="md:mb-4 last:mb-0 pb-4 last:pb-0 md:border-b md:border-none md:pb-0 border-[#262626]/20 last:border-none">
                            <a href="" class="c-img mb-3 pt-[59%] img__ block rounded-[5px] overflow-hidden">
                                <img src="theme/frontend/images/image1.png" alt="">
                            </a>
                            <h3 class="mb-2 md:mb-3">
                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary max-md:text-[1.125rem]" title="Cách Pha Nước Chấm Bún Chả Chuẩn Vị Hà Nội">
                                    Rau Tiến Vua Làm Món Gì? Khám Phá Bí Quyết Ẩm Thực Cung Đình
                                </a>
                            </h3>
                            <div class="flex justify-between items-center text-cl-secondary font-roboto mb-2">
                                <div>
                                    <a href="" class="font-semibold max-md:text-[0.875rem]">Tên danh mục con</a>
                                </div>
                                <div class="flex items-center gap-x-0.5">
                                    <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                        <?php include 'template/svgs/date.php'; ?>
                                    </span>
                                    <span class="text-[0.75rem] md:text-[1rem]">
                                        1 ngày
                                    </span>
                                </div>
                            </div>
                            <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem] opacity-70">
                                Nước chấm bún chả – linh hồn của món ăn trứ danh Hà thành. Bạn đã bao giờ thắc mắc làm thế nào để pha được bát nước chấm bún chả ngon đúng điệu, hài hòa giữa vị chua ngọt cay mà không bị gắt, làm dậy lên hương vị thơm ngon của miếng chả […]
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-1 md:gap-y-5">
                            <?php for ($m = 0; $m < 2; $m++): ?>
                                <div class="w-1/2 md:w-full px-1">
                                    <div class="flex max-md:flex-col gap-3">
                                        <div class="md:w-[133px] shrink-0">
                                            <a href="" class="c-img pt-[61.6%] img__ block rounded-[5px] overflow-hidden">
                                                <img src="theme/frontend/images/image1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <h3 class="mb-1">
                                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary" title="Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng">
                                                    Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                                                </a>
                                            </h3>
                                            <div class="flex items-center gap-x-0.5 text-[#2A6049] font-roboto">
                                                <span class="w-[14px] -translate-y-[1px]">
                                                    <?php include "template/svgs/date.php"; ?>
                                                </span>
                                                <span class="text-[0.75rem]">
                                                    1 ngày
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>