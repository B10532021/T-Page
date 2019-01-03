<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            註冊帳號
        </h1>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="../index.php?page=articles&board=1" accept-charset="utf-8">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">姓名：</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control"
                                               name="name" placeholder="請輸入名字" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">帳號/信箱：</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control"
                                               name="email" placeholder="請輸入信箱" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">密碼：</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control"
                                               name="password"
                                               placeholder="請輸入密碼"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">確認密碼：</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" placeholder="再次輸入密碼" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">學校科系：</label>

                                    <div class="col-md-6">
                                        <input id="school" class="form-control"
                                               name="school"
                                               placeholder="請輸入學校科系"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">性別：</label>

                                    <div class="col-md-6">
                                        <input id="gender" class="form-control"
                                               name="gender"
                                               placeholder="請輸入性別"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">生日：</label>

                                    <div class="col-md-6">
                                        <input id="gender" class="form-control"
                                               name="birth"
                                               placeholder="請輸入性別"
                                               required>
                                    </div>
                                </div>

<!--                                <div class="form-group row">-->
<!--                                    <label for="password-confirm"-->
<!--                                           class="col-md-4 col-form-label text-md-right">生日：</label>-->
<!---->
<!--                                    <div class="col-md-6">-->
<!--                                        <input id="birth" class="form-control"-->
<!--                                               name="birth"-->
<!--                                               placeholder="請輸入生日"-->
<!--                                               required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group row">-->
<!--                                    <label for="password-confirm"-->
<!--                                           class="col-md-4 col-form-label text-md-right">家族：</label>-->
<!---->
<!--                                    <div class="col-md-6">-->
<!--                                        <input id="family" class="form-control"-->
<!--                                               name="family"-->
<!--                                               placeholder="請輸入家族"-->
<!--                                               required>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="form-group row mb-0" style="padding-left: 500px">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            註冊
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>