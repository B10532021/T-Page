<link rel="stylesheet" href="../css/card.css">

<div class="content">
    <div class="row">
        <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width:80%; height: 80%; overflow:scroll;"
                     src="<?php
                     if(file_exists("images/{$_SESSION["user"]}.jpg")){
                        echo "../images/{$_SESSION["user"]}.jpg";
                     }
                     else{
                         echo "../images/comment1.png";
                     }?> "
                />
                <form class="submit_btn form-group" action="../index.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file"><br><br>
                    <input type="submit" value="Submit">
                </form>
                <img src="../images/money.png" width="50%">
                <br>
                <span style="font-size: 70px"><?php echo $user[9]?></span>
            </div>

            <form method="post" action="../index.php" accept-charset="utf-8">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>name</label>
                        <input
                            type="text"
                            name="name"
                            value="<?php echo $user[0]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>school</label>
                        <input
                            type="text"
                            name="school"
                            value="<?php echo $user[3]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>sex</label></p>
                        <input
                            type="text"
                            name="sex"
                            value="<?php echo $user[4]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>birth</label>
                        <input
                            type="date"
                            name="birth"
                            value="<?php echo $user[5]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>interest</label></p>
                        <input
                            type="text"
                            name="interest"
                            value="<?php echo $user[6]?>"
                        />
                    </div>
                    <div class="form-group">
                        <p><label>club</label></p>
                        <input
                                type="text"
                                name="club"
                                value="<?php echo $user[7]?>"
                        />
                    </div>
                    <div class="form-group">
                        <p><label>Family</label></p>
                        <input
                            type="text"
                            name="family"
                            value="<?php echo $user[8]?>"
                        />
                    </div>
                </div>
                <div class="col-md-offset-5 col-md-3 col-sm-offset-2">
                    <div class="submit_btn form-group" >
                        <!-- TODO:驗證表單再重新導向 -->
                        <input type="submit" value="修改" name="profile"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<section class="blog_page_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3>已發表的文章</h3>
                <?php
                $i = 0;
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
                            <a href="../?page=articles&board=<?php echo $article[1] ?>&title=<?php echo $i ?>" style="display: inline-block"><h3><?php echo $article[0] ?></h3></a>
                            <img src="../images/close.png" style="display: inline-block padding-left:30px text-align:center ;">
                            <h4>By <span><?php echo $article[2] ?></span></h4>
                            <div class="read_more">
                                <a class="read_more_blog"
                                   href="index.php?page=article&board=<?php echo $article[1] ?>&title=<?php echo $i ?>">Read
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
    </div>
</section>



