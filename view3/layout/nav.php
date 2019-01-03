<section class="nav_area">
    <div class="container">
        <div class="nav_left floatleft">
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
                    <li><a href="../?page=family">Family</a></li>

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
                            <a href='../category-1.html'><span>board</span></a>
                            <ul class="sub-nav">
                                <?php
                                $i=0;
                                foreach ($boards as $singleBoard) {
                                    ?>
                                    <li><a href="index.php/?page=articles&board=<?php echo $singleBoard[0]?>"><?php echo $singleBoard[0]?></a></li>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="../?page=card">Card</a></li>
                        <li><a href="../?page=family">Family</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- MOBILE ONLY CONTENT -->
    </div>
</section>