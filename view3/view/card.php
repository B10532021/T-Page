<link rel="stylesheet" href="../css/card.css">

<div class="content">
    <div class="row">
        <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width:80%; height: 80%; overflow:scroll;"
                     src="../images/tzuyu.jpg"
                />
            </div>

            <form *ngIf="user !== undefined" #form="ngForm">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>name</label>
                        <input
                                type="text"
                                name="name"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>school</label>
                        <input
                                type="text"
                                name="school"
                                value="國立台灣科技大學企管系"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>sex</label></p>
                        <input
                                type="text"
                                name="sex"
                                value="男"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <label>birth</label>
                        <input
                                type="date"
                                name="birth"
                                value="1998-01-01"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>interest</label></p>
                        <input
                                type="text"
                                name="interest"
                                value="打撞球、讀小說、聽音樂"
                                readonly
                        />
                    </div>
                    <div class="form-group">
                        <p><label>Society</label></p>
                        <input
                                type="text"
                                name="Society"
                                value="跆拳道社"
                                readonly
                        />
                    </div>
                </div>
                <div class="col-md-offset-5 col-md-3 col-sm-offset-2">
                    <div class="submit_btn form-group" >
                        <!-- TODO:驗證表單再重新導向 -->
                        <input type="submit" value="send invitation"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

