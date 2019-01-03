<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            家族
        </h1>
    </section>

    <section style="padding-top: 50px">
        <div id="main">
            <div class="container">
                <header>
                    <h2><?php echo $family[0][1] ?></h2>
                </header>

                <div class="divider"></div>
                <?php
                foreach ($family as $member) {
                    ?>
                    <a href="index.php?page=profile&author=<?php echo $member[0]?>">
                        <button style="
                                    background: none repeat scroll 0 0;
                                    background-color: #E5E8E8;
                                    border: 2px solid;
                                    border-color: #E5E8E8;
                                    color: black;
                                    font-size: 13px;
                                    font-weight: 700;
                                    margin: 8px auto 15px;
                                    padding: 7px;
                                    margin-left: 40px;
                                    text-align: center;
                                    text-transform: uppercase;
                                    width: 120px;
                                    height: 40px;"><?php echo $member[0]?></button>
                    </a>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
</div>
