<?php
$image = 'profile.jpg';
$name = '大美人';
$school = '國立台灣科技大學企管系';
$gender = '女';
$birth = '1998/01/01';
$interests = '打撞球、讀小說、聽音樂';
$clubs = '跆拳道社';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            卡友~
            <small>抽起來</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">抽卡友</li>
        </ol>
    </section>

    <!-- Main content -->
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
                                                                    width="80%"
                                                                    src="../img/<?php echo $image?>"
                                                                    alt=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <h4>姓名：<?php echo $_SESSION["cardfriend"][0] ?></h4>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>學校：<?php echo $_SESSION["cardfriend"][3]?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>性別：<?php echo $_SESSION["cardfriend"][4]?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>生日：<?php echo $_SESSION["cardfriend"][5]?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>興趣：<?php echo $_SESSION["cardfriend"][6]?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_detail_heading">
                                            <div class="detail_heading_left">
                                                <div class="detail_heading_left">
                                                    <h4>參加的社團：<?php echo $_SESSION["cardfriend"][7]?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function show_alert() {
                                            alert('已送出交友邀請');
                                        }
                                    </script>
                                    <form method="post" action="index.php?page=card">
                                    <div>
                                        <input name="name" style="display: none" value="<?php echo $_SESSION["user"] ?>">
                                        <input name="cardfriend" style="display: none" value="<?php echo $_SESSION["cardfriend"][0] ?>">
                                        <button type="submit" style="
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
                                            height: 40px;" onclick="show_alert()">送出交友邀請
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </section>
    <!-- /.content -->
</div>
