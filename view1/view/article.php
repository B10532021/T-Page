<?php
$name = 'howard';
$comment = '真感動';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            文章
        </h1>
    </section>

    <section style="padding-top: 50px">
        <div style="padding-left: 50px">
            <div style="font-size: 24px">
                文章標題：<?php echo $article[0] ?>
                <br>
                發文者：<?php echo $article[2] ?>
            </div>
            <hr class="style-five"/>
            <div style="font-size: 18px;white-space: pre-line;">

                <?php echo $article[3] ?>

            </div>
        </div>
        <div style="padding-top: 20px;padding-left: 50px;">
            <form method="post" accept-charset="utf-8">
                <input name="title" style="display: none" value="<?php echo $article[0] ?>">
                <input name="like" style="display: none" value="<?php echo $article[5] ?>">
                <input type="image" src="../img/like.png"
                       style="padding-left: 5px;"
                       width="3%"
                       alt="Submit">：<?php echo $article[5] ?>
            </form>
            <form method="post" accept-charset="utf-8">
                <input name="title" style="display: none" value="<?php echo $article[0] ?>">
                <input name="dislike" style="display: none" value="<?php echo $article[6] ?>">
                <input type="image" src="../img/dislike.png"
                       style="padding-left: 5px;"
                       width="3%"
                       alt="Submit">：<?php echo $article[6] ?>
            </form>
        </div>
        <div style="padding-top: 50px">
            <h4>留言板</h4>
            <?php
            foreach ($messages as $message) {
                ?>
                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                        <div class="item">
                            <img src="../img/angel.jpg" alt="user image" class="online">
                            <p class="message">
                            <span style="font-size: 16px">
                                <?php echo $message[0] ?>
                                <br>
                                <?php echo $message[1] ?>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <form style="padding-top: 50px" method="post" aciton="../index.php" accept-charset="utf-8">
            <div class="product_detail_heading">
                <div class="detail_heading_left">
                    <div class="detail_heading_left">
                        <h4>留言：</h4>
                        <input name="name" style="display: none" value="<?php echo $user[0] ?>">
                        <input name="title" style="display: none" value="<?php echo $article[0] ?>">
                        <textarea style="border:0; background-color:#f7f8f9"
                                  placeholder="請輸入想說的話" cols="50"
                                  rows="5"
                                  name="message"></textarea>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" style="
                                            background: none repeat scroll 0 0;
                                            background-color: #2975d8;
                                            border: 2px solid;
                                            border-color: #2975d8;
                                            color: #fff;
                                            font-size: 13px;
                                            font-weight: 700;
                                            margin: 8px auto 15px;
                                            padding: 7px;
                                            margin-left: 200px;
                                            text-align: center;
                                            text-transform: uppercase;
                                            width: 120px;
                                            height: 40px;">留言
                </button>
            </div>
        </form>
    </section>
</div>