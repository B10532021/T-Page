<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            登入
        </h1>
    </section>

    <section style="padding-top: 50px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            <form method="POST" action="index.php?page=articles&board=1">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">帳號/信箱：</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" placeholder="請輸入帳號/信箱" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">密碼：</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4" style="padding-left:300px ">
                                        <button type="submit" class="btn btn-primary">
                                            登入
                                        </button>
                                        <a class="btn btn-link" href="index.php?page=register">
                                            註冊
                                        </a>
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