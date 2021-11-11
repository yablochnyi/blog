<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- banner post start-->
<section class="banner_post" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <?php foreach ($threeLastArticles as $threeLastArticle): ?>
                <div class="banner_post_1 banner_post_bg_1">
                    <div class="banner_post_iner text-center">
                        <a href="category.html"><h5><?php echo $threeLastArticle['category']; ?></h5></a>
                        <a href="single-blog.html"><h2><?php echo $threeLastArticle['tittle']; ?></h2></a>
                        <p>Опубликовано <?php echo $threeLastArticle['date']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>
<!-- banner post end-->

<!-- subscribe form start-->
<div class="subscribe_form padding_top margin_top">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="subscribe_form_iner">
                    <form action="/" method="post">
                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-md-12 col-lg-3">
                                <h3>Подписаться
                                    на обновления!</h3>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <input type="email" name="email" class="form-control" placeholder="Ваш email">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <input type="submit" class="btn_1" name="submit" value="Подписаться">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe form end-->

<!-- feature_post start-->
<section class="all_post section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_post post_1 feature_post">
                            <div class="single_post_img">
                                <img src="../../template/img/post/post_12.png" alt="">
                            </div>
                            <div class="single_post_text text-center">
                                <a href="category.html"><h5> Fashion / Life style</h5></a>
                                <a href="single-blog.html"><h2>All said replenish years void kind say void </h2></a>
                                <p>Posted on April 15, 2019</p>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($articlesList as $articleList): ?>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single_post post_1">
                            <div class="single_post_img">
                                <img src="../../template/img/post/post_18.png" alt="">
                            </div>
                            <div class="single_post_text text-center">
                                <a href="category.html"><h5><?php echo $articleList['category']; ?></h5></a>
                                <a href="single-blog.html"><h2><?php echo $articleList['tittle']; ?></h2></a>
                                <p>Опубликовано <?php echo $articleList['date']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="page_pageniation">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar_widget">
                    <div class="single_sidebar_wiget search_form_widget">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder='Search Keyword'
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                <div class="btn_1">search</div>
                            </div>
                        </form>
                    </div>
                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Категории</h3>
                        </div>
                        <div class="single_catagory_item category">
                            <ul class="list-unstyled">
                                <?php foreach ($rightCategories as $rightCategory): ?>
                                <li><a href="category.html"><?php echo $rightCategory['category']; ?></a> <span>(15)</span> </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Popular Feeds</h3>
                        </div>
                        <div class="single_catagory_post post_2 ">
                            <div class="category_post_img">
                                <img src="../../template/img/sidebar/sidebar_1.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2 ">
                            <div class="category_post_img">
                                <img src="../../template/img/sidebar/sidebar_2.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">

                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2">
                            <div class="category_post_img">
                                <img src="../../template/img/sidebar/sidebar_3.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                    </div>

                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Share this post</h3>
                        </div>
                        <div class="social_share_icon tags">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature_post end-->

<!-- social_connect_part part start-->
<section class="social_connect_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="social_connect">
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_1.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_2.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_3.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_4.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_5.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="../../template/img/insta/instagram_6.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- social_connect_part part end-->

<?php include ROOT . '/views/layouts/footer.php'; ?>
