<?php
if ($user[8] == null) {
    ?>
    <section class="blog_page_area">
        <div class="container">
            <div class="row">
                <!--                <div class="col-md-12 col-sm-8 col-xs-12">-->
                <!--                </div>-->
                <div class="leave_a_reply">
                    <h2>Family</h2>
                    <div class="multi_line"></div>
                    <div class="left_input">
                    </div>
                    <form action="../index.php" method="post">
                        <div class="left_input">
                            <p>Family ID<span></span></p>
                            <input type="text" name="familyID"/><br>
                            <div class="submit_btn form-group">
                                <!-- TODO:驗證表單再重新導向 -->
                                <input type="submit" value="加入" name="add_family"/>
                            </div>
                        </div>
                    </form>
                    <form action="../index.php" method="post">
                        <div class="left_input">
                            <p>Family ID<span></span></p>
                            <input type="text" name="familyID"/><br>
                            <div class="submit_btn form-group">
                                <!-- TODO:驗證表單再重新導向 -->
                                <input type="submit" value="創建" name="create_family"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
} else {
    ?>
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
                                        <h3><?php echo $f_friend[0] ?><span></span></h3>
                                    </div>
                                    <div class="reply"><span></span></div>
                                    <div class="comment-detail">
                                        <p><br></p>
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

    <?php
}
?>