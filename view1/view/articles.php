<?php
$board = '四電資一';
$image = 'angel.jpg';
$name = '大美人';
$article_title = '今晚的月色如何?';
?>
<div class="content-wrapper" style="min-height:100%;height: 100%; overflow: scroll">
    <div style="width: 70%;display: inline-block;">
        <div class="callout callout-info">
            <h4><?php echo $board?></h4>
            <a href="index.php?page=add" style="text-decoration:none;">新增文章</a>
        </div>
    <!-- article -->
        <div class="box box-success" onclick="<?php change_page('../view/article') ?>">
            <div class="box-body chat" id="chat-box">
                <div class="item">
                    <img src="../img/<?php echo $image?>" alt="user image" class="online">
                    <p class="message">
                        <a href="index.php?page=profile" class="name">
                            <?php echo $name ?>
                        </a>
                        <?php echo $article_title ?>
                    </p>
                    <a href="index.php?page=article" style="margin-left: 50px">閱讀完整文章...</a>
                </div>
            </div>
        </div>
        <!-- /article -->
        <!-- article -->
        <div class="box box-success">
            <div class="box-body chat" id="chat-box">
                <div class="item">
                    <img src="../img/avatar5.png" alt="user image" class="online">
                    <p class="message">
                        <a href="index.php?page=profile" class="name">
                            <?php echo $name ?>
                        </a>
                        <?php echo $article_title ?>
                    </p>
                    <a href="index.php?page=article" style="margin-left: 50px">閱讀完整文章...</a>
                </div>
            </div>
        </div>
        <div class="box box-success" onclick="<?php change_page('../view/article') ?>">
            <div class="box-body chat" id="chat-box">
                <div class="item">
                    <img src="../img/avatar5.png" alt="user image" class="online">
                    <p class="message">
                        <a href="index.php?page=profile" class="name">
                            <?php echo $name ?>
                        </a>
                        <?php echo $article_title ?>
                    </p>
                    <a href="index.php?page=article" style="margin-left: 50px">閱讀完整文章...</a>
                </div>
            </div>
        </div>
        <!-- /article -->
        <!-- article -->
        <div class="box box-success">
            <div class="box-body chat" id="chat-box">
                <div class="item">
                    <img src="../img/avatar5.png" alt="user image" class="online">
                    <p class="message">
                        <a href="index.php?page=profile" class="name">
                            <?php echo $name ?>
                        </a>
                        <?php echo $article_title ?>
                    </p>
                    <a href="index.php?page=article" style="margin-left: 50px">閱讀完整文章...</a>
                </div>
            </div>
        </div>
        <!-- /article -->
    </div>

    <div style="position: relative;height: 100%;width: 30%;float: right;">
        <a href="https://store.playstation.com/zh-hant-tw/grid/STORE-MSF86012-HS_GAME_ASIA/1?emcid=tw-cht_ad_holiday_bahamut">
            <img src="../img/ad.jpg">
        </a>
    </div>
</div>
