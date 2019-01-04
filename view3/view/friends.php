<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="comments">
                    <h2>Friends</h2>
                    <div class="multi_line"></div>

                        <?php
                        foreach ($f_friends as $f_friend) {
                            ?>
                    <div class="single_comment">
                            <a style="text-decoration: none" href="../?page=friend&name=<?php echo $f_friend[0] ?>">
                                <div class="comment_img">
                                    <img src="<?php
                                    if (file_exists("images/{$f_friend[1]}.jpg")) {
                                        echo "../images/{$f_friend[1]}.jpg";
                                    } else {
                                        echo "../images/comment1.png";
                                    } ?> " style="width: 90px; height: 90px"/>
                                </div>
                                <div class="comment_text">
                                    <div class="comment_name">
                                        <h3><?php echo $f_friend[1] ?><span></span></h3>
                                    </div>
                                    <div class="reply"><span></span></div>
                                    <div class="comment-detail">
                                        <p><br></p>
                                    </div>
                                </div>
                            </a>
                    </div>
                            <?php
                        }
                        ?>

                </div>


            </div>
        </div>
    </div>
</section>
