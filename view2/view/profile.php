<?php
//
//$conn = mysqli_connect("localhost:33060","root","root");
//
//// 設定連線編碼
//mysqli_query( $conn, "SET NAMES 'utf8'");
//$sql ="select * from tpage.member";
//$result = mysqli_query($conn, $sql);
//$num = mysqli_fetch_row($result);
//?>
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
<!--                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">--><?php //echo $num[0]?><!--</li>-->
<!--                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">台灣科技大學<br>--><?php //echo $test?><!--</li>-->
                        <li style="background-color: papayawhip;padding-left: 30%;margin-top: 10px;">家族: 我們這一家</li>
                    </ul>
                </section>
            </div>
            <!-- Sidebar -->

            <!-- Content -->
            <div id="content" class="6u skel-cell-important">
                <section>
                    <header>
                        <h2>狀態: 今天天氣真好</h2>
                        <a href="../index.php?page=writeArticle" class="button">發文</a>
                    </header>
                    <!--       文章         -->
                    <div class="row">
                        <div class="6u">
                            <section>
                                <p>Quisque dictum. Pellentesque viverra  enim. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </section>
                        </div>
                        <div class="6u">
                            <section>
                                <p>Pellentesque viverra  enim. Tristique ante ut risus. Quisque dictum. Integer sagittis convallis elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </section>
                        </div>
                    </div>
                    <!--       /文章         -->


                </section>
            </div>
            <!-- /Content -->

            <!-- Sidebar -->
            <div id="sidebar" class="3u">
                <section>
                   <img src="../images/ad.jpg">
                </section>
            </div>
            <!-- Sidebar -->

        </div>

    </div>
</div>
<!-- Main -->