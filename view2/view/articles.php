
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
                echo "
				<div class='row'>
					<div class='3u'>
						<section>
							<p>Quisque dictum. Pellentesque viverra  enim. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
							<a href='#' class='button'>Read More</a>
						</section>
					</div>
				</div>";
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
