<link rel="stylesheet" href="../css/card.css">

<div class="content">
    <div class="row">
        <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width:80%; height: 80%; overflow:scroll;"
                     src="<?php
                     if(file_exists("images/{$friend[0]}.jpg")){
                         echo "../images/{$friend[0]}.jpg";
                     }
                     else{
                         echo "../images/comment1.png";
                     }?> "
                />
            </div>

            <form *ngIf="user !== undefined" #form="ngForm">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>name</label>
                        <input
                                type="text"
                                name="name"
                                value="<?php echo $friend[0] ?>"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>school</label>
                        <input
                                type="text"
                                name="school"
                                value="<?php echo $friend[3] ?>"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>sex</label></p>
                        <input
                                type="text"
                                name="sex"
                                value="<?php echo $friend[4] ?>"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>birth</label>
                        <input
                                type="text"
                                name="birth"
                                value="<?php echo $friend[5] ?>"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>interests</label></p>
                        <input
                                type="text"
                                name="interests"
                                value="<?php echo $friend[6] ?>"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>clubs</label></p>
                        <input
                                type="text"
                                name="clubs"
                                value="<?php echo $friend[7] ?>"
                                readonly
                        />
                    </div>
                </div>
                <div class="col-md-offset-5 col-md-3 col-sm-offset-2">
                    <div class="submit_btn form-group" >
                        <!-- TODO:驗證表單再重新導向 -->
                        <input type="submit" value="send invitation" name="card"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

