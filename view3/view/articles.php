<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="../css/add_article.css">

<body>

<div>
    <div class="container" style="padding-top: 60px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog_slider_box col-md-4 col-sm-3">
                    <h2 style="color: black"><?php echo $board ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php
                foreach ($articles as $article) {
                    ?>
                    <div class="single_blog_in_page">
                        <div class="blog_date_in_page">
                            <h2>_ <span><?php if($article[4] != null){
                                    echo $article[4][8].$article[4][9];
                                    }
                                    ?>
                                    </span></h2>
                            <p><?php if($article[4] != null){
                                    echo $article[4][0].$article[4][1].$article[4][2].$article[4][3].$article[4][4].$article[4][5].$article[4][6].$article[4][7];
                                }
                                ?>
                        </div>
                        <div class="blog_text_in_page">
                            <a href="single-blog.html"><h3><?php echo $article[0] ?></h3></a>
                            <h4>By <span><?php echo $article[2] ?></span></h4>
                            <div class="read_more">
                                <a class="read_more_blog"
                                   href="index.php?page=article&board=<?php echo $board ?>&title=<?php echo $article[0] ?>">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>

            </div>

        </div>
        <div class="col-md-offset-5 col-md-3 col-sm-offset-5 col-sm-3 col-xs-offset-5 col-xs-3">
            <div class="add_btn">
                <a href="../?page=add&board=<?php echo $board ?>">新增文章</a>
            </div>
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

