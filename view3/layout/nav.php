<section class="nav_area">
    <div class="container">
        <div class="nav_left floatleft">
            <!--            <a href="category-1.html">category<i class="fa fa-bars"></i></a>-->
            <!--            <div class="cat_mega_menu">-->
            <!--                <div class="cat_left">-->
            <!--                    <h5>Shirts</h5>-->
            <!--                    <div class="cat_menu_line"></div>-->
            <!--                    <ul class="cat_nav">-->
            <!--                        <li><a href="">check shirts</a></li>-->
            <!--                        <li><a href="">denim shirts</a></li>-->
            <!--                        <li><a href="">long sleeve shirts</a></li>-->
            <!--                        <li><a href="">denim shirts</a></li>-->
            <!--                        <li><a href="">long sleeve shirts</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div class="cat_middle">-->
            <!--                    <h5>T Shirts</h5>-->
            <!--                    <div class="cat_menu_line"></div>-->
            <!--                    <ul class="cat_nav">-->
            <!--                        <li><a href="">plain T-shirt</a></li>-->
            <!--                        <li><a href="">printed T-shirt</a></li>-->
            <!--                        <li><a href="">sports T-shirt</a></li>-->
            <!--                        <li><a href="">striped T-shirt</a></li>-->
            <!--                        <li><a href="">V-Neck T-Shirt</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div class="cat_middle_right">-->
            <!--                    <h5>trousers fit</h5>-->
            <!--                    <div class="cat_menu_line"></div>-->
            <!--                    <ul class="cat_nav">-->
            <!--                        <li><a href="">flexible waist</a></li>-->
            <!--                        <li><a href="">regular fit</a></li>-->
            <!--                        <li><a href="">slim fit</a></li>-->
            <!--                        <li><a href="">tailored fit</a></li>-->
            <!--                        <li><a href="">tight fit</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <div class="cat_img">-->
            <!--                    <img src="images/menu_cat.png" alt=""/>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
        <div class="nav_center">
            <nav class="mainmenu">
                <ul id="nav">
                    <li><a href="../#">Home</a>
                    </li>
                    <li><a>board</a>
                        <ul id="sub-menu7">
                            <?php
                            $i=0;
                            foreach ($boards as $singleBoard) {
                                ?>
                                <li><a href="../?page=articles&board=<?php echo $singleBoard[0]?>"><?php echo $singleBoard[0]?></a></li>
                                <?php
                                $i++;
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="../?page=card">Card</a></li>
                </ul>
            </nav>
        </div>


        <!-- MOBILE ONLY CONTENT -->
        <div class="only-for-mobile">
            <ul class="ofm">
                <li class="m_nav"><i class="fa fa-bars"></i> Navigation</li>
            </ul>

            <!-- MOBILE MENU -->
            <div class="mobi-menu">
                <div id='cssmenu'>
                    <ul>
                        <li>
                            <a href='../index.php'><span>Home</span></a>
                        </li>

                        <li class='has-sub'>
                            <a href='../category-1.html'><span>category</span></a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'><span>Shirts</span></a>
                                    <ul>
                                        <li><a href="#"><span>check shirts</span></a></li>
                                        <li><a href="#"><span>denim shirts</span></a></li>
                                        <li><a href="#"><span>long sleeve shirts</span></a></li>
                                        <li><a href="#"><span>denim shirts</span></a></li>
                                        <li class="last"><a href="..#"><span>long sleeve shirts</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'><span>T Shirts</span></a>
                                    <ul>
                                        <li><a href="#"><span>plain T-shirt</span></a></li>
                                        <li><a href="#"><span>printed T-shirt</span></a></li>
                                        <li><a href="#"><span>sports T-shirt</span></a></li>
                                        <li><a href="#"><span>striped T-shirt</span></a></li>
                                        <li class='last'><a href="#"><span>V-Neck T-Shirt</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'><span>trousers fit</span></a>
                                    <ul>
                                        <li><a href="#"><span>flexible waist</span></a></li>
                                        <li><a href="#"><span>regular fit</span></a></li>
                                        <li><a href="#"><span>slim fit</span></a></li>
                                        <li><a href="#"><span>tailored fit</span></a></li>
                                        <li class='last'><a href="#"><span>tight fit</span></a></li>
                                    </ul>
                                </li>
                                <li class="img-nav">
                                    <div class="container">
                                        <div class="clearfix"></div>
                                        <div class="space20"></div>
                                        <div class="clearfix"></div>
                                        <div class="row in1">
                                            <div class="col-md-6">
                                                <a href="#"><img src="../images/menu_cat.png" class="img-responsive"
                                                                 alt=""/></a>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="space20"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="space20"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='../category-2.html'><span>shop</span></a>
                        </li>
                        <li class='has-sub'>
                            <a href='../category-1.html'><span>accessories</span></a>
                            <ul class="sub-nav">
                                <li><a href="#"><span>check shirts</span></a></li>
                                <li><a href="#"><span>denim shirts</span></a></li>
                                <li><a href="#"><span>long sleeve shirts</span></a></li>
                                <li><a href="#"><span>plain shirts</span></a></li>
                                <li><a href="#"><span>printed shirts</span></a></li>
                                <li><a href="#"><span>short sleeve shirts</span></a></li>
                                <li><a href="#"><span>shortsleeve denim shirts</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'>
                            <a href='#'><span>pages</span></a>
                            <ul id="sub-nav">
                                <li><a href="../category-1.html">Category page</a></li>
                                <li><a href="../category-2.html">Category page without filter</a></li>
                                <li><a href="../checkout.html">Checkout page</a></li>
                                <li><a href="../cart.html">Cart page</a></li>
                                <li><a href="../product-detail.html">Product detail page</a></li>
                                <li><a href="../blog.html">Blog</a></li>
                                <li><a href="../single-blog.html">Blog single</a></li>
                                <li><a href="../contact.html">Contact page</a></li>
                                <li><a href="../404.html">404 page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href='../blog.html'><span>Blog</span></a>
                        </li>
                        <li>
                            <a href='../cart.html'><span>cart</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- MOBILE ONLY CONTENT -->
    </div>
</section>