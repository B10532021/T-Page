<link rel="stylesheet" href="../css/card.css">

<div class="content">
    <div class="row">
        <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width:80%; height: 80%; overflow:scroll;"
                     src="<?php
                     if(file_exists("images/{$_SESSION["user"]}.jpg")){
                        echo "../images/{$_SESSION["user"]}.jpg";
                     }
                     else{
                         echo "../images/comment1.png";
                     }?> "
                />
                <form class="submit_btn form-group" action="../index.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>

            <form method="post" action="../index.php" accept-charset="utf-8">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>name</label>
                        <input
                            type="text"
                            name="name"
                            value="<?php echo $user[0]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>school</label>
                        <input
                            type="text"
                            name="school"
                            value="<?php echo $user[3]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>sex</label></p>
                        <input
                            type="text"
                            name="sex"
                            value="<?php echo $user[4]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>birth</label>
                        <input
                            type="date"
                            name="birth"
                            value="<?php echo $user[5]?>"
                            readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>interest</label></p>
                        <input
                            type="text"
                            name="interest"
                            value="<?php echo $user[6]?>"
                        />
                    </div>
                    <div class="form-group">
                        <p><label>club</label></p>
                        <input
                                type="text"
                                name="club"
                                value="<?php echo $user[7]?>"
                        />
                    </div>
                    <div class="form-group">
                        <p><label>Family</label></p>
                        <input
                            type="text"
                            name="family"
                            value="<?php echo $user[8]?>"
                        />
                    </div>
                </div>
                <div class="col-md-offset-5 col-md-3 col-sm-offset-2">
                    <div class="submit_btn form-group" >
                        <!-- TODO:驗證表單再重新導向 -->
                        <input type="submit" value="修改" name="profile"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



