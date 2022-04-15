<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.9/angular.min.js" integrity="sha512-CjpXuCK2f47gfxIjQvOwKRVGj01yHWI5qdMTO0qzERireNL30uf+fXLeZ5OxKGDj7r8xpRK4XVxgqXhBbW8Tbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container " ng-app="myApp" ng-controller="quizapp">

    <div class="my-5 container">
        <input type="hidden" value="<?= $data['result']['id'] ?>" id="subject_id">
        <div ng-show="!check">
            <div class="card mb-5">
                <div class="card-header">
                    <h2 class="card-title text-uppercase"><?= $data['result']['subject_name'] ?></h2>
                </div>
                <div class="row p-5">
                    <div class="col-4 text-center ">
                        <img class="card-img-top img-thumbnail" style="width:250px;height:auto" src="../../../admin/public/upload/<?php echo trim($data['result']['subject_img']) ?>" alt="">
                    </div>

                    <div class="col-8">
                        <!-- Sau loạt bài học javascript căn bản thì mình xin giới thiệu với các bạn series học Javascript
                    nâng
                    cao, đây là series rất quan trọng bởi khi bạn muốn học nodejs hoặc các Javascript Framework thì
                    đây
                    là những kiến thức bắt buộc.
                    Dưới đây là tổng hợp các câu hỏi liên quan đến chương học. -->
                        <div class="text-center">
                            <h3>Bắt đầu làm Quiz với 10 câu hỏi?</h3>
                            <button class="btn btn-primary py-2 " ng-click="start()">Bắt đầu Quiz</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" ng-show="check">
            <div ng-show="quizOver">
                <div class="text-center">
                    <h3>Đã kết thúc 10 câu hỏi.Bạn muốn làm lại ?</h3>
                    <h4>Điểm đạt được : {{score}} </h4>
                    <h5 ng-show="score<5">Rất tiếc bạn không vượt qua được bài kiểm tra.</h5>
                    <h5 ng-show="score>5">Chúc mừng bạn đã vượt qua được bài kiểm tra.</h5>
                    <div>
                        <button class="btn btn-primary py-2 " ng-click="reset()">Làm lại Quiz</button>
                        <button class="btn btn-primary py-2 " ng-click="save()">Lưu kết quả</button>
                    </div>
                </div>
            </div>
            <div ng-show="!quizOver">
                <div class="my-4 text-center">
                    <i class="fa-solid fa-clock mx-3" style="font-size:2.5rem;color:var(--bs-primary)"></i>
                    <span class="" style="font-size:2rem;">{{countDownView}}</span>
                </div>
                <div class="card mt-5">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <div>
                            <img src="assets/img/{{subjectImg}}" width="40px" alt="">
                            <b class="text-white pt-3"><?= $data['result']['subject_name'] ?></b>
                        </div>
                        <div>
                            <span class="badge badge-danger text-dark">{{curentQuestion +1}} /10</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">{{question}}</h4>
                        <hr>
                        <p class="card-text">
                            <!-- <div class="form-group" ng-repeat="option in options">

                            <input type="radio" name="answer" id="{{option.Id}}" value="{{option.Id}}">
                            <label style="cursor:pointer;" for="{{option.Id}}">{{option.Text}}</label>
                        </div> -->
                        <div class='content'>
                            <div class='py' ng-repeat="(key,option) in options">
                                <label>
                                    <input type="radio" class="option-input radio" name="answer" id="{{key}}" value="{{key}}" />
                                    <span style="cursor:pointer;font-size:1.2rem" for="{{key}}">{{option}}</span>
                                </label>
                            </div>
                        </div>

                        </p>
                    </div>

                    <hr>
                    <div class=" card-footer d-flex justify-content-between">
                        <div>
                            <div ng-show="nextAns">
                                <button class="btn btn-primary py-2" ng-click="checkAnswer()">Submit</button>
                            </div>
                            <div ng-show="!nextAns">
                                <button class="btn btn-primary py-2" ng-click="nextQuestion()">Next</button>

                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-success py-0">Điểm {{score}}/10</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let app = angular.module('myApp', []);
    app.controller('quizapp', function($scope, $timeout, $http) {
        $scope.subject_id = document.getElementById('subject_id').value;
        //   $http.get('../../')
        $scope.check = false;
        $scope.curentQuestion = 0;
        $scope.score = 0;
        $scope.quizOver = false;
        $scope.ok = false;
        $scope.call = function(data) {
            $scope.questions = data;
            $scope.ok = true;


        }
        $http.get(`../../quiz/SubjectQuestion/${$scope.subject_id}`).then(function(response) {
            // console.log(response.data);
            let rs = response.data

            // $scope.questions = rs;
            $scope.call(rs);
        })

        $scope.start = function() {
            if ($scope.ok == true) {
                // alert(1)
                $scope.getQuestion();
            } else {
                // alert(2)
            }

            $scope.check = true;

            //đồng hồ
            $scope.counter = 1000000;

            function secondsToHms(d) {
                d = Number(d);
                var h = Math.floor(d / 3600);
                var m = Math.floor((d % 3600) / 60);
                var s = Math.floor((d % 3600) % 60);

                var hDisplay = h > 0 ? h + (h == 1 ? ":" : ":") : "";
                var mDisplay = m > 0 ? m + (m == 1 ? " phút :" : " phút :") : "";
                var sDisplay = s > 0 ? s + (s == 1 ? "  giây " : "  giây") : "";
                return hDisplay + mDisplay + sDisplay;
            }
            // đổi số thành ngày giờ
            $scope.countDownView = secondsToHms($scope.counter);

            //
            var stopped;
            $scope.countdown = function() {
                stopped = $timeout(function() {
                    if ($scope.counter > 0) {
                        $scope.counter--;
                        $scope.countdown();
                        $scope.countDownView = secondsToHms($scope.counter);
                    } else {
                        $scope.quizOver = true; // hoàn thành
                    }
                }, 1000);
            };
            //gọi hàm countdown
            $scope.countdown();

            //end đồng hồ
        };

        //get câu hỏi
        // câu hỏi

        $scope.getQuestion = function() {

            // chọn câu hỏi trong mảng theo index i ++ 
            $scope.question = $scope.questions[$scope.curentQuestion].question;
            $scope.options = $scope.questions[$scope.curentQuestion].answer;
            $scope.answer = $scope.questions[$scope.curentQuestion].answer_id;
            $scope.nextAns = true; // xử lý nút next

        };
        //check answer
        $scope.checkAnswer = function() {

            let answer = $("input[name = answer]:checked").val();

            if (answer.trim() == $scope.answer.trim()) {
                // alert("đúng")
                // tăng điểm ;
                $scope.score++;
                $scope.correctAns = true;
                let label = $("input[name = answer]:checked").next("span");
                label[0].style.color = "#40e0d0";
            } else {
                // alert("sai");
                $scope.correctAns = false;
                $("input[name = answer]:checked").css("background-color", "red");
                let label = $("input[name = answer]:checked").next("span");
                label[0].style.color = "red";
            }

            $scope.nextAns = false; // xử lý nút next
            if ($scope.curentQuestion == 9) {
                $scope.quizOver = true;
            }

        };
        $scope.reset = function() {
            $scope.check = false;
            $scope.score = 0;
            $scope.curentQuestion = 0;
            location.reload()
        };
        //next
        $scope.nextQuestion = function() {

            $scope.curentQuestion += 1;

            $scope.getQuestion();
            // bỏ check
            let answer = $("input[name = answer]:checked");
            let label = $("input[name = answer]:checked").next("span");
            label[0].style.color = "black";
            answer[0].checked = false;
            if (answer[0].checked) {
                answer[0].style.backgroundColor = '#40e0d0';
            } else {
                answer[0].style.backgroundColor = '#cbd1d8';
            }
        }
    })

    //factorry
</script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins'
    }

    body {
        background: #edf2f9
    }

    .dpx {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    h1 {
        font-size: 28px;
        line-height: 28px;
        margin-bottom: 15px;
    }

    label {
        display: block;
        line-height: 40px;
    }

    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 8.33333px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 30px;
        width: 30px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }

    .option-input:hover {
        background: #9faab7;
    }

    .option-input:checked {
        background: #40e0d0;
    }

    .option-input:checked::before {
        width: 30px;
        height: 30px;
        display: flex;
        content: '\f00c';
        font-size: 16px;
        font-weight: bold;
        position: absolute;
        align-items: center;
        justify-content: center;
        font-family: 'Font Awesome 5 Free';
    }

    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }

    .option-input.radio {
        border-radius: 50%;
    }

    .option-input.radio::after {
        border-radius: 50%;
    }

    @keyframes click-wave {
        0% {
            height: 40px;
            width: 40px;
            opacity: 0.35;
            position: relative;
        }

        100% {
            height: 200px;
            width: 200px;
            margin-left: -80px;
            margin-top: -80px;
            opacity: 0;
        }
    }
</style>