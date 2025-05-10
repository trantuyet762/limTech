<?php include "header.php" ?>

<section class="tacgia mt-[1.5625rem] sm:mt-[2.5rem]">
    <div class="container">
        <div>
            <div class="flex items-center link-page">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3C12 3 5.814 8.34 2.357 11.232C2.24695 11.3278 2.15829 11.4457 2.09678 11.578C2.03528 11.7103 2.0023 11.8541 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H5V20C5 20.2652 5.10536 20.5196 5.29289 20.7071C5.48043 20.8946 5.73478 21 6 21H9C9.26522 21 9.51957 20.8946 9.70711 20.7071C9.89464 20.5196 10 20.2652 10 20V16H14V20C14 20.2652 14.1054 20.5196 14.2929 20.7071C14.4804 20.8946 14.7348 21 15 21H18C18.2652 21 18.5196 20.8946 18.7071 20.7071C18.8946 20.5196 19 20.2652 19 20V13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C21.9986 11.8513 21.9634 11.7049 21.897 11.5718C21.8307 11.4388 21.7349 11.3226 21.617 11.232C18.184 8.34 12 3 12 3Z" fill="#2A6049" />
                </svg>
                <?php include 'template/svgs/arrow_link.php'; ?>
                <a href="#" class="">Tác giả</a>
            </div>
            <div class=" mt-[1.25rem] sm:mt-[2.5rem] tacgia-container">
                <div>
                    <h1 class="text-center ">Tác giả</h1>
                </div>
                <div class="tacgia-items mt-[1rem] sm:mt-[1.25rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <div class="p-[1rem] gap-y-[1rem] tacgia-item">
                            <div class="img-tacgia-items shrink-0">
                                <a href="#" title="" class="c-img rounded-[0.625rem] overflow-hidden block img__ pt-[64%]">
                                    <img src="theme/frontend/images/tacgia_1.png" alt="tacgia_name">
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="name-tacgia">
                                    Nguyễn Anh Tuấn
                                </a>
                                <p class="level-name-tacgia">Tên chức vụ</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>