<link rel="stylesheet" href="css/responsive.css">

<body>

<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="single_blog_in_page">
                    <!--                    <div class="blog_img_l"><img src="images/blog_page2.jpg" alt="" /></div>-->
                    <div class="blog_date_in_page">
                        <h2>_ <span><?php if($article[4] != null){
                                    echo $article[4][8].$article[4][9];
                                }
                                ?></span></h2>
                        <p><?php if($article[4] != null){
                                echo $article[4][0].$article[4][1].$article[4][2].$article[4][3].$article[4][4].$article[4][5].$article[4][6];
                            }
                            ?></p>
                    </div>
                    <div class="blog_text_in_page">
                        <h3><?php echo $article[0] ?></h3>
                        <h4>By <span><?php echo $article[2] ?></span>, likes <span><?php echo $article[5] ?></span>, dislikes <span><?php echo $article[6] ?></span></h4>
                    </div>
                    <div class="blog_detail_in_page">
                        <p><?php echo $article[3] ?></p>
                    </div>
<!--                    <div class="share">-->
<!--                        <span>12 shares</span>-->
<!--                    </div>-->
                    <div style="padding-top: 20px;padding-left: 50px;">
                        <form class="col-md-offset-4 col-md-1" method="post" accept-charset="utf-8">
                            <input name="title1" style="display: none" value="<?php echo $article[0] ?>">
                            <input name="board2" style="display: none" value="<?php echo $article[1] ?>">
                            <input name="like" style="display: none" value="<?php echo $article[5] ?>">
                            <input type="image" src="../images/like.png"
                                   style="padding-left: 5px;"
                                   width="100%"
                                   alt="Submit">
                        </form>
                        <form class="col-md-1" method="post" accept-charset="utf-8">
                            <input name="title1" style="display: none" value="<?php echo $article[0] ?>">
                            <input name="board2" style="display: none" value="<?php echo $article[1] ?>">
                            <input name="dislike" style="display: none" value="<?php echo $article[6] ?>">
                            <input type="image" src="../images/dislike.png"
                                   style="padding-left: 5px;"
                                   width="100%"
                                   alt="Submit">
                        </form>
                    </div>
                </div>
                <div class="comments">
                    <h2>Comments</h2>
                    <div class="multi_line"></div>
                    <div class="single_comment">
                        <?php
                        foreach ($messages as $message) {
                            ?>
                            <div class="comment_img">
                                <img src="<?php
                                if(file_exists("images/{$message[0]}.jpg")){
                                    echo "../images/{$message[0]}.jpg";
                                }
                                else{
                                    echo "../images/comment1.png";
                                }?> " style="height: 90px; width: 90px"/>
                            </div>
                            <div class="comment_text" style="white-space: pre-line;">
                                <div class="comment_name" style="white-space: pre-line;">
                                    <h3><?php echo $message[0] ?> | <span><?php echo $message[3] ?></span></h3>
                                </div>
                                <div class="reply"><span>Reply</span></div>
                                <div class="comment-detail">
                                    <p> <?php echo $message[1] ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="leave_a_reply">
                    <h2>leave a reply</h2>
                    <div class="multi_line"></div>
                    <div class="left_input">
                    </div>
                    <form action="../index.php" method="post">
                        <div class="right_input">
                            <p>Comments</p>
                            <input type="text" name="title1" style="display: none" value="<?php echo $article[0]?>">
                            <input type="text" name="board1" style="display: none" value="<?php echo $article[1]?>">
                            <textarea name="context" cols="30" rows="10"></textarea>
                            <input type="submit" value="post comment" name="message"/>
                        </div>
                    </form>
                </div>

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

