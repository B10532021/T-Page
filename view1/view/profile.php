<!-- Content Wrapper. Contains page content -->
<?php
$image = 'profile.jpg';
$article_title = '今晚的月色如何?';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            會員資料
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <section class="content">
        <section class="gray_tshirt_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="gray_tshirt">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single_product_image_tab">
                                        <div role="tabpanel">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <div class="single_p_image">
                                                        <a
                                                                href="/assets/images/single-large.jpg"
                                                                data-lightbox="image-1"
                                                                data-title="My caption"
                                                        ><img src="images/product-plus.png" alt=""/></a>
                                                        <img
                                                                align="center"
                                                                width="80%"
                                                                src="../img/<?php echo $image ?>"
                                                                alt=""/>
                                                        <?php if ($_SESSION['user'][0] == $user[0] and $user[8] != null) {
                                                            ?>
                                                            <a href="index.php?page=family">
                                                                <button style="
                                                            background: none repeat scroll 0 0;
                                                            background-color: #2975d8;
                                                            border: 2px solid;
                                                            border-color: #2975d8;
                                                            border-radius:10px;
                                                            color: #fff;
                                                            font-size: 13px;
                                                            font-weight: 700;
                                                            margin: 8px auto 15px;
                                                            padding: 7px;
                                                            margin-left: 100px;
                                                            text-align: center;
                                                            text-transform: uppercase;
                                                            width: 120px;
                                                            height: 40px;">我的家庭
                                                                </button>
                                                            </a>
                                                        <?php } ?>
                                                        <?php if ($_SESSION['user'][0] == $user[0]) {
                                                        ?>
                                                        <a href="index.php?page=friend">
                                                            <button style="
                                                            background: none repeat scroll 0 0;
                                                            background-color: #2975d8;
                                                            border: 2px solid;
                                                            border-color: #2975d8;
                                                            border-radius:10px;
                                                            color: #fff;
                                                            font-size: 13px;
                                                            font-weight: 700;
                                                            margin: 8px auto 15px;
                                                            padding: 7px;
                                                            text-align: center;
                                                            text-transform: uppercase;
                                                            width: 120px;
                                                            height: 40px;">我的朋友
                                                            </button>
                                                        </a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="product_detail_heading">
                                        <div><h3>個人簡介</h3>
                                            <div class="detail_heading_left">
                                                <h4>姓名：<?php echo $user[0] ?></h4>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>學校：<?php echo $user[3] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>性別：<?php echo $user[4] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>生日：<?php echo $user[5] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <span style="font-size: 18px">家族：<?php echo $user[8] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($_SESSION['user'][0] == $user[0]) {
                                            ?>

                                            <script>
                                                function show_alert() {
                                                    alert("修改成功");
                                                }
                                            </script>
                                            <form method="post" action="index.php?page=profile" id="modifyProfile">
                                                <div class="product_detail_heading">
                                                    <div class="detail_heading_left">
                                                        <div class="detail_heading_left">
                                                            <h4>興趣：</h4>
                                                            <textarea style="border:0; background-color:#f7f8f9"
                                                                      placeholder="請輸入你的興趣" cols="50"
                                                                      rows="3"
                                                                      name="update_interests"><?php echo $user[6] ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_detail_heading">
                                                    <div class="detail_heading_left">
                                                        <div class="detail_heading_left">
                                                            <h4>參加的社團：</h4>
                                                            <textarea style="border:0; background-color:#f7f8f9"
                                                                      placeholder="請輸入參加過的社團" cols="50"
                                                                      rows="3"
                                                                      name="update_clubs"><?php echo $user[7] ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="submit" value="儲存修改" onclick="show_alert()" style="
                                            background: none repeat scroll 0 0;
                                            background-color: #2975d8;
                                            border: 2px solid;
                                            border-color: #2975d8;
                                            border-radius:10px;
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
                                        <?php } else { ?>
                                            <div class="product_detail_heading">
                                                <div class="detail_heading_left">
                                                    <div class="detail_heading_left">
                                                        <h4>興趣：</h4>
                                                        <h5><?php echo $user[6] ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_detail_heading">
                                                <div class="detail_heading_left">
                                                    <div class="detail_heading_left">
                                                        <h4>參加的社團：</h4>
                                                        <h5><?php echo $user[7] ?></h5>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>已發表的文章：</h3>
            <hr class="style-five"/>
            <?php
            $i = 0;
            foreach ($articles as $article) {
                ?>
                <div class="box box-success">
                    <div class="box-body chat" id="chat-box">
                        <div class="item">
                            <img src="../img/<?php echo $image ?>" alt="user image" class="online">
                            <p class="message">
                                <a href="index.php?page=profile&author=<?php echo $article[2] ?>" class="name">
                                    <?php echo $article[2] ?>
                                </a>
                                <?php echo $article[0] ?>
                            </p>
                            <a href="index.php?page=article&article=<?php echo $article[0] ?>"
                               style="margin-left: 50px">閱讀完整文章...</a>
                            <?php if ($_SESSION['user'][0] == $user[0]) {
                                ?>
                            <form method="post">
                                <input name="delete_article" style="display:none" value="<?php echo $article[0] ?>">
                                <button type="submit" style="
                                            background: none repeat scroll 0 0;
                                            background-color: red;
                                            border: 2px solid;
                                            border-color: red;
                                            border-radius:10px;
                                            color: #fff;
                                            font-size: 10px;
                                            font-weight: 700;
                                            margin: 8px auto 15px;
                                            padding: 7px;
                                            margin-left: 80%;
                                            text-align: center;
                                            text-transform: uppercase;
                                            width: 50px;
                                            height: 30px;">刪除
                                </button>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </section>
</div>