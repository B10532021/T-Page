<link rel="stylesheet" href="css/responsive.css">

<body>


<!--<section class="blog_slider_area">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="blog_slider_box">-->
<!--                    <h2>blog - single</h2>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<div class="breadcumb_area">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="bread_box">-->
<!--                    <ul class="breadcumb">-->
<!--                        <li><a href="index.html">home <span>|</span></a></li>-->
<!--                        <li><a href="blog.html">blog <span>|</span></a></li>-->
<!--                        <li class="active"><a href="">blog - single</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="single_blog_in_page">
<!--                    <div class="blog_img_l"><img src="images/blog_page2.jpg" alt="" /></div>-->
                    <div class="blog_date_in_page">
                        <h2>_ <span>18</span></h2>
                        <p>april 2015</p>
                    </div>
                    <div class="blog_text_in_page">
                        <h3><?php echo $article[0] ?></h3>
                        <h4>By <span><?php echo $article[2] ?></span>,   comments  <span>23</span></h4>
                    </div>
                    <div class="blog_detail_in_page">
                        <p><?php echo $article[3] ?></p>
                    </div>
                    <div class="share">
                        <span>12 shares</span>
                    </div>
                    <div class="share_icons">
                        <ul id="share_icon">
                            <li><a class="fa fa-facebook" href=""></a></li>
                            <li><a class="fa fa-twitter" href=""></a></li>
                            <li><a class="fa fa-google-plus" href=""></a></li>
                            <li><a class="fa fa-linkedin" href=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="comments">
                    <h2>Comments(3)</h2>
                    <div class="multi_line"></div>
                    <div class="single_comment">
                        <?php
                        foreach ($messages as $message) {
                            ?>
                            <div class="comment_img">
                                <img src="images/comment1.png" alt="" />
                            </div>
                            <div class="comment_text">
                                <div class="comment_name">
                                    <h3><?php echo $message[0] ?>   |   <span>April 18, 2015 at 5.00 pm</span></h3>
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
                        <p>Name<span>*</span></p>
                        <input type="text"/><br>
                        <p>Email<span>*</span></p>
                        <input type="text"/><br>
                        <p>Phone Number<span>*</span></p>
                        <input type="text"/>
                    </div>
                    <div class="right_input">
                        <p>Comments</p>
                        <textarea name="" cols="30" rows="10"></textarea>
                        <input type="submit" value="post comment" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<!-- JS Files -->
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 150,
            max: 1500,
            values: [ 520, 1100 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
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

