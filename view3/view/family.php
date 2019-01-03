<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="comments">
                    <h2>Family</h2>
                    <div class="multi_line"></div>
                    <div class="single_comment">
                        <?php
                        foreach ($f_friends as $f_friend) {
                            ?>
                            <div class="comment_img">
                                <img src="<?php
                                if(file_exists("images/{$f_friend[0]}.jpg")){
                                    echo "../images/{$f_friend[0]}.jpg";
                                }
                                else{
                                    echo "../images/comment1.png";
                                }?> " alt=""/>
                            </div>
                            <div class="comment_text">
                                <div class="comment_name">
                                    <h3><?php echo $f_friend[0] ?></h3>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

