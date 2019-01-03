<?php
$image = 'profile.jpg';
$name = '大美人';
$article_title = '今晚的月色如何?';
?>
<div class="content-wrapper" style="min-height:100%;height: 100%; overflow: scroll">
    <div style="width: 70%;display: inline-block;">
        <div class="callout callout-info">
            <h4><?php switch ($board) {
                    case 1:
                        echo "四電資一";
                        break;
                    case 2:
                        echo "四電資二";
                        break;
                    case 3:
                        echo "四電資三";
                        break;
                    case 4:
                        echo "四電資四";
                        break;
                } ?></h4>
            <a href="index.php?page=add&board=<?php echo $board ?>" style="text-decoration:none;">新增文章</a>
        </div>
        <!-- article -->
        <?php
        $i=0;
        foreach ($articles as $article) {
            ?>
            <div class="box box-success">
                <div class="box-body chat" id="chat-box">
                    <div class="item">
                        <img src="../img/<?php echo $image ?>" alt="user image" class="online">
                        <p class="message">
                            <a href="index.php?page=profile&author=<?php echo $article[2]?>" class="name">
                                <?php echo $article[2]?>
                            </a>
                            <?php echo $article[0] ?>
                        </p>
                        <a href="index.php?page=article&board=<?php echo $board ?>&article=<?php echo $article[0]?>" style="margin-left: 50px">閱讀完整文章...</a>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>

    </div>

    <div style="position: relative;height: 100%;width: 30%;float: right;">
        <a href="https://store.playstation.com/zh-hant-tw/grid/STORE-MSF86012-HS_GAME_ASIA/1?emcid=tw-cht_ad_holiday_bahamut">
            <img src="../img/ad.jpg">
        </a>
    </div>
</div>
