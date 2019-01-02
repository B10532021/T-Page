<?php
$userArticles=$model->searchAuthor("王小明");
?>
<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div id="sidebar" class="3u">
                <section>
                    <header>
                        <img src="../images/angel.jpg" style="width: 100%;height: 100%;">
                    </header>
                    <ul class="default">
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;"><?php echo $user[0]?></li>
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;"><?php echo $user[3]."<br>"?></li>
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">性別: <?php echo $user[4]?></li>
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">生日: <?php echo $user[5]?></li>
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">家族: <?php echo $user[8]?></li>
                    </ul>
                </section>
            </div>
            <!-- Sidebar -->

            <!-- Content -->
            <div id="content" class="6u skel-cell-important">
                <section>
                    <header>
                        <h2>狀態: 今天天氣真好</h2>
                    </header>


                    <?php

                    $rowLength=floor(sizeof($userArticles)/2);
                    for($i=0;$i<=$rowLength;$i++)
                    {
                        ?>
                        <div class='row'>
                            <?php
                            if($i!=$rowLength)
                            {
                                for($j=0;$j<2;$j++)
                                {

                                    ?>
                                    <div class='6u'>
                                        <section>
                                            <p><?php echo$articles[$i*2+$j][0]?></p>
                                            <a href="../index.php?page=article&articleTitle=<?php echo $articles[$i*2+$j][0]?>" class='button'>Read More</a>
                                        </section>
                                    </div>
                                    <?php
                                }
                            }
                            else
                            {
                                for($j=0;$j<sizeof($articles)%2;$j++)
                                {

                                    ?>
                                    <div class='6u'>
                                        <section>
                                            <p><?php echo$articles[$i*2+$j][0]?></p>
                                            <a href="../index.php?page=article&articleTitle=<?php echo $articles[$i*2+$j][0]?>" class='button'>Read More</a>
                                        </section>
                                    </div>

                                    <?php
                                }
                            }
                            ?>

                        </div>
                        <?php
                    }

                    ?>

                </section>
            </div>
            <!-- /Content -->

            <!-- Sidebar -->
            <div id="sidebar" class="3u">
                <section>
                   <a href="https://store.playstation.com/zh-hant-tw/grid/STORE-MSF86012-HS_GAME_ASIA/1?emcid=tw-cht_ad_holiday_bahamut">
                       <img src="../images/ad.jpg">
                   </a>
                </section>
            </div>
            <!-- Sidebar -->

        </div>

    </div>
</div>
<!-- Main -->