<?php include 'header.php'; ?>

<?php include 'template/breadcrumbs.php'; ?>

<section class="mb-8 lg:mb-10">
    <div class="container">
        <div class="flex flex-wrap -mx-2.5 gap-y-5">
            <div class="w-full lg:w-3/4 px-2.5">
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
                <div class="flex flex-wrap -mx-2.5 gap-y-5 mb-5">
                    <div class="w-full md:w-[53.5%] px-2.5">
                        <div class="flex flex-col h-full gap-3">
                            <a href="" class="c-img pt-[66.25%] grow img__ block md:rounded-[5px] overflow-hidden max-sm:w-[calc(100%+2rem)] max-sm:-mx-4">
                                <img src="theme/frontend/images/image1.png" alt="">
                            </a>
                            <h3>
                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary text-[1.25rem] xl:text-[1.5rem]" title="Cách Pha Nước Chấm Bún Chả Chuẩn Vị Hà Nội">
                                    Cách Pha Nước Chấm Bún Chả Chuẩn Vị Hà Nội
                                </a>
                            </h3>
                            <div class="flex justify-between items-center text-[#2A6049] font-roboto max-md:text-[0.875rem]">
                                <div>
                                    <a href="" class=" font-semibold">Tên danh mục con</a>
                                </div>
                                <div class="flex items-center gap-x-0.5">
                                    <span class="w-[20px] -translate-y-[2px]">
                                        <?php include "template/svgs/date.php"; ?>
                                    </span>
                                    <span class="">
                                        1 ngày
                                    </span>
                                </div>
                            </div>
                            <div class="s-content line-clamp-3 font-roboto max-md:text-[0.875rem] opacity-80">
                                Nước chấm bún chả – linh hồn của món ăn trứ danh Hà thành. Bạn đã bao giờ thắc mắc làm thế nào để pha được bát nước chấm bún chả ngon đúng điệu, hài hòa giữa vị chua ngọt cay mà không bị gắt, làm dậy lên hương vị thơm ngon của miếng chả […]
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-[46.5%] px-2.5">
                        <div class="flex flex-wrap max-md:-mx-2 max-sm:-mx-1 gap-y-2">
                            <?php for ($i = 0; $i < 4; $i++): ?>
                                <div class="w-1/2 md:w-full max-sm:px-1 max-md:px-2 md:border-b last:border-none md:pb-3 md:mb-1 last:mb-0 last:pb-0 md:border-[#262626]/20">
                                    <div class="flex max-md:flex-col gap-3">
                                        <div class="md:w-[143px] shrink-0">
                                            <a href="" class="c-img pt-[61.6%] img__ block rounded-[5px] overflow-hidden">
                                                <img src="theme/frontend/images/image1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="">
                                            <h3 class="">
                                                <a href="" class="line-clamp-2 font-bold hover:text-cl-primary max-md:text-[0.875rem]" title="Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng">
                                                    Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                                                </a>
                                            </h3>
                                            <a href="" class="font-semibold text-cl-secondary block mb-1 text-[0.875rem] md:text-[0.75rem] font-roboto">Tên danh mục con</a>
                                            <div class="flex items-center gap-x-0.5 text-cl-secondary font-roboto">
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
                </div>
                <div class="flex flex-wrap -mx-2.5 gap-y-5 mb-5">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div class="w-full md:w-1/3 px-2.5">
                            <div class="max-md:border-b flex flex-col max-md:border-[#262626]/20 max-md:pb-5">
                                <a href="" class="c-img pt-[59%] img__ mb-3 block rounded-[5px] overflow-hidden order-1">
                                    <img src="theme/frontend/images/image1.png" alt="">
                                </a>
                                <div class="flex justify-between items-center text-[#2A6049] font-roboto md:mb-2 order-3 md:order-2 max-md:text-[0.875rem]">
                                    <div>
                                        <a href="" class="font-semibold">Tên danh mục con</a>
                                    </div>
                                    <div class="flex items-center gap-x-0.5">
                                        <span class="w-[20px] -translate-y-[1px]">
                                            <?php include "template/svgs/date.php"; ?>
                                        </span>
                                        <span class="">
                                            1 ngày
                                        </span>
                                    </div>
                                </div>
                                <h3 class="order-2 md:order-3 max-md:mb-2">
                                    <a href="" class="line-clamp-2 font-bold hover:text-cl-primary max-md:text-[1.125rem]" title="Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng">
                                        Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                                    </a>
                                </h3>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <p class="text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-5">
                    Tin tài trợ
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
                <?php for ($i = 0; $i < 5; $i++): ?>
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