<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="header_top_left">
                    <!--<img src="images/car.png" alt="Header Car Icon" />-->
                    <!--<p>get free! shipping on order over <span>$100</span></p>-->
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="header_top_right floatright">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <p>
                            <a href="index.php?page=login" style="text-decoration:none;">login</a>
                            /
                            <a href="index.php?page=register" style="text-decoration:none;">register</a>
                        </p>
                    <?php } else { ?>
                        <p>
                            <a href="../?page=logout" style="text-decoration:none;">
                                logout
                            </a>
                            /
                            <a href="../?page=profile" style="text-decoration:none;">
                                profile
                            </a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="header_left floatleft">
<!--                    <form>-->
<!--                        <a class="fa fa-search"></a>-->
<!--                        <input type="text" placeholder="search"/>-->
<!--                    </form>-->
                </div>
            </div>
            <div class="col-md-6 col-sm-5 col-xs-12">
                <div class="header_center">
                    <a href="../index.php"><img src="../images/logo.png" alt="Site Logo"/></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="header_right floatright">
                    <!--<ul class="checkout">-->
                    <!--<li><a href="checkout.html"><i class="fa fa-heart-o"></i>wishlist</a></li>-->
                    <!--<li class="mobi_right_li"><a href="checkout.html"><i class="fa fa-shopping-cart"></i>checklist</a></li>-->
                    <!--</ul>-->
                    <!--<div class="w_likes">-->
                    <!--<span>3</span>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>