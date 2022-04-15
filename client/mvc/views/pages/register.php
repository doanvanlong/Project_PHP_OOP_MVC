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
            <h1 class="display-4 fw-semi-bold mb-0">Đăng ký</h1>

        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>

     <!-- REGISTER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-6 mx-auto p-5" style="background-color:var(--bs-dark);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius: 15px;">
                <!-- Register -->
                <h3 class="mb-6 text-white">Đăng ký tài khoản miễn phí!</h3>

                <!-- Form Register -->
                <form class="mb-5">

                    <!-- Username -->
                    <div class="form-group mb-5 ">
                        <label for="modalSignupUsername1" class="text-white">
                            Họ tên
                        </label>
                        <input type="text" class="form-control" id="modalSignupUsername1" ng-model="nameRegister" placeholder="">
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSignupEmail1" class="text-white">
                            Email
                        </label>
                        <input type="email" class="form-control"  ng-model="emailRegister" id="modalSignupEmail1" placeholder="">
                        <small class="text-danger error-emailRegister"></small>
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3" class="text-white">
                            Mật khẩu
                        </label>
                        <input type="password" class="form-control"  ng-model="passRegister" id="modalSignupPassword3" placeholder="">
                    </div>
                    
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3" class="text-white">
                            Ngày sinh
                        </label>
                        <input type="text"  ng-model="birthdayRegister" class="form-control" id="modalSignupPassword3">
                    </div>

                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3" class="text-white">
                            Giới tính
                        </label>
                        <br>
                        <label for="male" style="color:white">Nam</label>
                        <input type="radio"  ng-model="genderRegister" class="" id="male" name="gender">
                        <label style="color:white" for="female">Nữ</label>
                        <input type="radio" class=""  ng-model="genderRegister" id="female" name="gender">

                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" ng-click="register()" type="submit">
                        Đăng ký
                    </button>

                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Bạn đã có tài khoản? <a class="text-underline text-danger" href="../../account/login/">Đăng nhập</a>
                </p>
            </div>
        </div>
    </div>
</div>