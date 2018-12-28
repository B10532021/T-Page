<!-- Content Wrapper. Contains page content -->
<?php
$image = 'angel.jpg';
$name = '大美人';
$school = '國立台灣科技大學';
$gender = '女';
$birth = '1998/01/01';
$interests = '打撞球、讀小說、聽音樂';
$clubs = '跆拳道社';
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

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="gray_tshirt">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="single_p_image">
                                <a
                                        href="/assets/images/single-large.jpg"
                                        data-lightbox="image-1"
                                        data-title="My caption"
                                ><img src="images/product-plus.png" alt=""/></a>
                                <img
                                        id="zoom_02"
                                        src="../img/<?php echo $image?>"
                                        data-zoom-image="/assets/images/single-large.jpg"
                                        alt=""/>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="product_detail_heading">
                            <div><h3>個人簡介</h3>
                                <div class="detail_heading_left">
                                    <h4>姓名：<?php echo $name?></h4>
                                </div>
                            </div>
                            <div class="product_detail_heading">
                                <div class="detail_heading_left">
                                    <div class="detail_heading_left">
                                        <h4>學校：<?php echo $school?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="product_detail_heading">
                                <div class="detail_heading_left">
                                    <div class="detail_heading_left">
                                        <h4>性別：<?php echo $gender?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="product_detail_heading">
                                <div class="detail_heading_left">
                                    <div class="detail_heading_left">
                                        <h4>生日：<?php echo $birth?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="product_detail_heading">
                                <div class="detail_heading_left">
                                    <div class="detail_heading_left">
                                        <h4>興趣：</h4>
                                        <textarea style="border:0; background-color:#f7f8f9" placeholder="請輸入你的興趣" cols="50" rows="5"><?php echo $interests?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="product_detail_heading">
                                <div class="detail_heading_left">
                                    <div class="detail_heading_left">
                                        <h4>參加的社團：</h4>
                                        <textarea style="border:0; background-color:#f7f8f9" placeholder="請輸入參加過的社團" cols="50" rows="5"><?php echo $clubs?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <h3>已發表的文章：</h3>
        <hr class="style-five"/>
        <div class="box box-success" onclick="<?php change_page('../view/article')?>">
            <div class="box-body chat" id="chat-box">
                <div class="item">
                    <img src="../img/avatar5.png" alt="user image" class="online">
                    <p class="message">
                        <a href="index.php?page=profile" class="name">
                            <?php echo $name?>
                        </a>
                        <?php echo $article_title?>
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
                            <?php echo $name?>
                        </a>
                        <?php echo $article_title?>
                    </p>
                    <a href="index.php?page=article" style="margin-left: 50px">閱讀完整文章...</a>
                </div>
            </div>
        </div>
    </section>

</div>