
<!-- Main -->
<div id="main">
    <div class="container">
        <header>
            <h2><?php echo $family[0][1]?></h2>
        </header>

        <div class="divider">&nbsp;</div>
        <?php

        $rowLength=floor(sizeof($family)/4);
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
                                <p><?php echo$family[$i*4+$j][0]?></p>
                                </section>
                        </div>
                        <?php
                    }
                }
                else
                {
                    for($j=0;$j<sizeof($family)%4;$j++)
                    {

                        ?>
                        <div class='3u'>
                            <section>
                                <p><?php echo$family[$i*4+$j][0]?></p>
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

    </div>
</div>
<!-- Main -->
