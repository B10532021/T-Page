<!DOCTYPE html>

<link rel="stylesheet" href="../css/login.css">


<body>
<div id="testContent">
    <div class="clear"></div>

    <section id="main" class="login entire_width">
        <div class="container_12">
            <div id="content">
                <div class="grid_12 loginTitle">
                    <h1 class="page_title ">登入或註冊帳號</h1>
                </div>
                <!-- .grid_12 -->
            </div>
            <!-- #content -->
            <div class="clear"></div>

            <div id="block">
                <div class=" new_customers createAccountBlock">
                    <h2>新會員</h2>
                    <p>
                        註冊帳號您將能夠贊助募資團隊，或是發起一場募資。
                    </p>
                    <div class="clear"></div>
                    <button
                            class="account"
                            [routerLink]="['/', 'register']"
                            routerLinkActive="active"
                    >
                        註冊一個帳號
                    </button>
                </div>
                <!-- .grid_6 -->

                <div class="grid_6 registedBlock">
                    <form class="registed" #form="ngForm">
                        <h2>已註冊會員</h2>

                        <p>如果您已經有帳號了，請登入</p>

                        <div class="email">
                            <strong>email :</strong
                            ><sup class="surely">*</sup><br/>
                            <input
                                    type="email"
                                    [(ngModel)]="user.email"
                                    #f1="ngModel"
                                    name="email"
                                    placeholder="E-mail"
                                    required
                            />
                        </div>
                        <!-- .email -->

                        <div class="password">
                            <strong>password :</strong
                            ><sup class="surely">*</sup><br/>
                            <input
                                    type="password"
                                    [(ngModel)]="user.password"
                                    #f2="ngModel"
                                    name="password"
                                    placeholder="密碼"
                                    required
                            />
                            <a
                                    class="forgot"
                                    href="#"
                                    [routerLink]="['/', 'retrievePassword']"
                                    routerLinkActive="active"
                            >
                                忘記密碼?</a
                            >
                        </div>
                        <!-- .password -->

                        <div class="remember">
                            <input
                                    class="niceCheck"
                                    type="checkbox"
                                    name="Remember_password"
                                    [(ngModel)]="user.remember"
                            />
                            <span class="rem">記得密碼</span>
                        </div>
                        <!-- .remember -->

                        <div class="submit">
                            <input (click)="login(user)" type="submit" value="登入"/>
                            <sup class="surely">*</sup
                            ><span>必須欄位</span>
                        </div>
                        <!-- .submit -->
                    </form>
                    <!-- .registed -->
                </div>
                <!-- .grid_6 -->
            </div>

            <div class="clear"></div>
        </div>
        <!-- .container_12 -->
    </section>
    <!-- #main -->
</div>
</body>

</html>
