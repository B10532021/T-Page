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
        <div style="font-size: 24px">
            文章標題：<?php echo $article['title'] ?>
            <br>
            發文者：<?php echo $article['author'] ?>
        </div>
        <hr class="style-five"/>
        <div style="font-size: 18px">
            <?php echo $article['content'] ?>
        </div>

        <div style="padding-top: 100px">
            <h4>留言板</h4>
            <?php
            foreach ($article['messages'] as $message) {
                ?>
                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                        <div class="item">
                            <img src="../img/angel.jpg" alt="user image" class="online">
                            <p class="message">
                            <span style="font-size: 16px">
                                <?php echo $message['name'] ?>
                                <br>
                                <?php echo $message['content'] ?>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <form style="padding-top: 50px" method="post" aciton="controller.php">
            <div class="product_detail_heading">
                <div class="detail_heading_left">
                    <div class="detail_heading_left">
                        <h4>留言：</h4>
                        <span name="name" style="display: none"><?php echo $user[0]?></span>
                        <span name="title" style="display: none"><?php echo $article[0]?></span>
                        <textarea style="border:0; background-color:#f7f8f9"
                                  placeholder="請輸入想說的話" cols="50"
                                  rows="5"
                                  name="message"></textarea>
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" value="留言" style="
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
                                            height: 40px;">
            </div>
        </form>
    </section>
</div>