<style>
    /* blend mod login */
    .bg-blend-mod-login {
        background-color: var(--bs-gray-800);
        background-image: url('../../public/client/assets/img/quiz.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-blend-mode: color-dodge;
    }
</style>
<div class="bg-blend-mod-login">
    <header class="py-4 py-md-5" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Đăng nhập</h1>

        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>

    <!-- LOGIN
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-6 mx-auto p-5" style="background-color:var(--bs-dark);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius: 15px;">
                <!-- Login -->
                <h3 class="mb-6 text-white">Đăng nhập để làm Quiz!</h3>

                <!-- Form Login -->
                <form action="../../account/checkLogin/" method="POST" class="mb-5">
                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSigninEmail1" class="text-white">
                            Email
                        </label>
                        <input type="email" name="email" class="form-control" id="email_login" placeholder="">
                        <small class="text-danger errorEmailLogin"></small>
                    </div>
                    <div><?php

                            echo isset($_SESSION['msg']) ? $_SESSION['msg'] :'';
                            ?></div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSigninPassword1" class="text-white">
                            Mật khẩu
                        </label>
                        <input type="password" name="password" class="form-control" id="password_login" placeholder="">
                        <small class="text-danger errorPassLogin"></small>

                    </div>

                    <div class="d-flex align-items-center mb-5 font-size-sm">
                        <div class="form-check">
                            <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck1">
                            <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                                Ghi nhớ
                            </label>
                        </div>

                        <div class="ms-auto">
                            <a class="text-gray-800" href="#!recover">Quên mật khẩu</a>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" ng-click="login()" type="submit">
                        Đăng nhập
                    </button>
                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Bạn chưa có tài khoản? <a class="text-danger" href="../../account/register/">Đăng ký</a>
                </p>
            </div>
        </div>
    </div>
</div>