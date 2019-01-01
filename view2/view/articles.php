
	<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<h2><?php switch ($board){case 1: echo "四電資一";break;
                            case 2: echo "四電資二";break;
                            case 3: echo "四電資三";break;
                            case 4: echo "四電資四";break;} ?></h2>
                    <a href="../index.php?page=writeArticle<?php echo"&board=".$board ?>" class="button">發文</a>
				</header>

                <div class="divider">&nbsp;</div>

                <?php

                $rowLength=floor(sizeof($articles)/4);
                for($i=0;$i<=$rowLength;$i++)
                {
                ?>
				<div class='row'>
                    <?php
                    if($i!=$rowLength)
                    {
                        for($j=0;$j<4;$j++)
                        {

                        ?>
                    <div class='3u'>
						<section>
							<p><?php echo$articles[$i*4+$j][0]?></p>
							<a href="../index.php?page=article&articleTitle=<?php echo $articles[$i*4+$j][0]?>" class='button' onclick="document.write('<?php clickReadMore($articles[$i*4+$j][0]); ?>');">Read More</a>
						</section>
					</div>
                            <?php
                        }
                    }
                    else
                    {
                        for($j=0;$j<sizeof($articles)%4;$j++)
                        {

                        ?>
                            <div class='3u'>
						<section>
							<p><?php echo$articles[$i*4+$j][0]?></p>
							<a href="../index.php?page=article&articleTitle=<?php echo $articles[$i*4+$j][0]?>" class='button' onclick="document.write('<?php clickReadMore($articles[$i*4+$j][0]); ?>');">Read More</a>
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

                <div class="row">
                    <!-- Content -->
                    <div class="12u skel-cell-important" >
                        <section id="content" >
                            <p><a href="https://www.momoshop.com.tw/edm/cmmedm.jsp?lpn=O0YtsjW2Bo6&n=1&mdiv=1000000000-bt_0_240_01-bt_0_240_01_P1_2_e1&ctype=B" class="image full">
                                    <img src="../images/banner.JPG" alt="" style="height: 100%">
                                </a></p>
                        </section>
                    </div>
                    <!-- /Content -->
                </div>
			
			</div>
		</div>
	<!-- Main -->
