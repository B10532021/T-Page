<link rel="stylesheet" href="css/responsive.css">

<body>

<div>
    <div class="container" style="padding-top: 60px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog_slider_box col-md-4 col-sm-3">
                    <h2 style="color: black"><?php switch ($board) {
                            case 1:
                                echo "四電資一";
                                break;
                            case 2:
                                echo "四電資二";
                                break;
                            case 3:
                                echo "四電資三";
                                break;
                            case 4:
                                echo "四電資四";
                                break;
                        } ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <?php
                $i=0;
                foreach ($articles as $article) {
                    ?>
                    <div class="single_blog_in_page">
                        <div class="blog_date_in_page">
                            <h2>_ <span>12</span></h2>
                            <p>april 2015</p>
                        </div>
                        <div class="blog_text_in_page">
                            <a href="single-blog.html"><h3><?php echo $article[1]?></h3></a>
                            <h4>By <span><?php echo $article[2] ?></span></h4>
                            <p><?php echo $article[0] ?></p>
                            <div class="read_more">
                                <a class="read_more_blog" href="index.php?page=article&board=<?php echo $board ?>&title=<?php echo $i?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>

<!--                <div class="row">-->
<!--                    <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                        <div class="pagi_line"></div>-->
<!--                        <div class="pagi_ul">-->
<!--                            <ul id="pagination">-->
<!--                                <li><a href="">Previous</a></li>-->
<!--                                <li><a href="">1</a></li>-->
<!--                                <li><a href="">2</a></li>-->
<!--                                <li><a href="">3</a></li>-->
<!--                                <li><a href="">4</a></li>-->
<!--                                <li><a href="">5 ...</a></li>-->
<!--                                <li><a href="">Next</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <!--            <div class="col-md-4 col-sm-4 col-xs-12">-->
            <!--                <div class="blog_page_sidebar">-->
            <!--                    <div class="blog_search">-->
            <!--                        <input type="text" placeholder="search post HERE..." />-->
            <!--                        <i class="fa fa-search"></i>-->
            <!--                    </div>-->
            <!--                    <div class="blog_widget">-->
            <!--                        <h2>TEXT WIDGET</h2>-->
            <!--                        <div class="multi_line"></div>-->
            <!--                        <p>Nemo enim ipsam volupitatem quia voluptas sia aspernatur aut odit aut fugit, sed quia cosequun tur magni dolores eos qui ratione volup tatemas sequi nesciuntsa Neque porro.</p>-->
            <!--                    </div>-->
            <!--                    <div class="blog_categories">-->
            <!--                        <h2>POST CATEGORIES</h2>-->
            <!--                        <div class="multi_line"></div>-->
            <!--                        <ul id="blog_categories">-->
            <!--                            <li><a href="#">Stylish Looks</a></li>-->
            <!--                            <li><a href="#">Fashion Of the week</a></li>-->
            <!--                            <li><a href="#">Summer Special</a></li>-->
            <!--                            <li><a href="#">Offers & Discounts</a></li>-->
            <!--                            <li><a href="#">Seller of the day</a></li>-->
            <!--                            <li><a href="#">Best reviews</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                    <div class="blog_recent_post">-->
            <!--                        <h2>RECENT POST</h2>-->
            <!--                        <div class="multi_line"></div>-->
            <!--                        <div class="single_recent_post">-->
            <!--                            <div class="log_li_img">-->
            <!--                                <img src="images/blog_li.png" alt="" />-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_text">-->
            <!---->
            <!--                                <a href="single-blog.html"><h3>Beritatis et Quasi Arcteco<br>-->
            <!--                                        veatae Vitae</h3></a>-->
            <!--                                <p>April 2015</p>-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_img">-->
            <!--                                <a href="single-blog.html"><img src="images/recent_post1.png" alt="" /></a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="single_recent_post">-->
            <!--                            <div class="log_li_img">-->
            <!--                                <img src="images/blog_li.png" alt="" />-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_text">-->
            <!---->
            <!--                                <a href="single-blog.html"><h3>Beritatis et Quasi Arcteco<br>-->
            <!--                                        veatae Vitae</h3></a>-->
            <!--                                <p>April 2015</p>-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_img">-->
            <!--                                <a href="single-blog.html"><img src="images/recent_post2.png" alt="" /></a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="single_recent_post">-->
            <!--                            <div class="log_li_img">-->
            <!--                                <img src="images/blog_li.png" alt="" />-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_text">-->
            <!---->
            <!--                                <a href="single-blog.html"><h3>Beritatis et Quasi Arcteco<br>-->
            <!--                                        veatae Vitae</h3></a>-->
            <!--                                <p>April 2015</p>-->
            <!--                            </div>-->
            <!--                            <div class="recent_post_img">-->
            <!--                                <a href="single-blog.html"><img src="images/recent_post3.png" alt="" /></a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="instrigram">-->
            <!--                        <h2>Instagram</h2>-->
            <!--                        <div class="multi_line"></div>-->
            <!--                        <ul id="instrigram">-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side1.jpg" alt="" /></a></li>-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side2.jpg" alt="" /></a></li>-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side3.jpg" alt="" /></a></li>-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side4.jpg" alt="" /></a></li>-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side5.jpg" alt="" /></a></li>-->
            <!--                            <li><a href="single-blog.html"><img src="images/blog-side6.jpg" alt="" /></a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>

<!-- JS Files -->
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 150,
            max: 1500,
            values: [520, 1100],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery.elevatezoom.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rs-plugin/rs.home.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Opacity & Other IE fix for older browser-->
<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
<![endif]-->
<script src="js/main.js"></script>
</body>

