<!-- <div class="container">
    <div class="my-4 text-center">
        <i class="fa-solid fa-clock mx-3" style="font-size:2.5rem;color:var(--bs-primary)"></i>
        <span class="" style="font-size:2rem;">10:00:00</span>
    </div>
    <div class="card mt-5">
        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <div>
                <img src="assets/img/{{subjectImg}}" width="40px" alt="">
                <b class="text-white pt-3"> <?= $data['result']['subject_name'] ?></b>
            </div>
            <div>
                <span class="badge badge-danger text-dark"> /10</span>
            </div>
        </div>

        <div class="card-body">
            <h4 class="card-title" id="question">câu hỏi</h4>
            <hr>
            <p class="card-text">
        <input type="hidden" name="subject_id" id="subject_id" value="<?= $data['result']['id'] ?>">
            <div class='content'>
                <div class='py'>
                    <label>
                        <input type="radio" class="answer option-input radio" name="answer" id="a" value="" />
                        <span style="cursor:pointer;font-size:1.2rem" id="cau_a" for="a">câu trả lời</span>
                    </label>

                </div>
                <div class='py'>
                    <label>
                        <input type="radio" class="answer option-input radio" name="answer" id="b" value="" />
                        <span style="cursor:pointer;font-size:1.2rem" id="cau_b" for="b">câu trả lời</span>
                    </label>

                </div>
                <div class='py'>
                    <label>
                        <input type="radio" class="answer option-input radio" name="answer" id="c" value="" />
                        <span style="cursor:pointer;font-size:1.2rem" id="cau_c" for="c">câu trả lời</span>
                    </label>

                </div>
                <div class='py'>
                    <label>
                        <input type="radio" class="answer option-input radio" name="answer" id="d" value="" />
                        <span style="cursor:pointer;font-size:1.2rem" id="cau_d" for="d">câu trả lời</span>
                    </label>

                </div>
            </div>

            </p>
        </div>

        <hr>
        <div class="card-footer d-flex justify-content-between">
            <div>
                <button class="btn btn-primary py-2">Submit</button>
                <button class="btn btn-primary py-2">Next</button>

            </div>
            <div class="">
                <button class="btn btn-success py-0">Điểm/10</button>
            </div>
        </div>
    </div>
</div> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let subject_id=document.getElementById('subject_id');
    subject_id=subject_id.value;
    let cauhoi = document.getElementById('question');
    let cautraloi = document.querySelectorAll('answer');
    let cau_a = document.getElementById('cau_a');
    let cau_b = document.getElementById('cau_b');
    let cau_c = document.getElementById('cau_c');
    let cau_d = document.getElementById('cau_d');
    let cauhoihientai = 0;
    let diem = 0;
    $.post(`../../quiz/SubjectQuestion/${subject_id}`,function(data){
        console.log(data);
    })
</script> -->
<div class="my-5">
    <div ng-show="!check">
        <div class="card mb-5">
            <div class="card-header">
                <h2 class="card-title text-uppercase">{{infoSubject.Name}}</h2>
            </div>
            <div class="row p-5">
                <div class="col-4 text-center ">
                    <img class="card-img-top img-thumbnail" style="width:250px;height:auto" src="assets/img/{{infoSubject.Logo}}" alt="">
                </div>
                <div class="col-8">
                    Sau loạt bài học javascript căn bản thì mình xin giới thiệu với các bạn series học Javascript
                    nâng
                    cao, đây là series rất quan trọng bởi khi bạn muốn học nodejs hoặc các Javascript Framework thì
                    đây
                    là những kiến thức bắt buộc.
                    Dưới đây là tổng hợp các câu hỏi liên quan đến chương học.
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3>Bắt đầu làm Quiz với 10 câu hỏi?</h3>
            <button class="btn btn-primary py-2 " ng-click="start()">Bắt đầu Quiz</button>
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
                        <b class="text-white pt-3"> {{subjectName}}</b>
                    </div>
                    <div>
                        <span class="badge badge-danger text-dark">{{id<10?id+1:id}} /10</span>
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
                        <div class='py' ng-repeat="option in options">
                            <label>
                                <input type="radio" class="option-input radio" name="answer" id="{{option.Id}}" value="{{option.Id}}" />
                                <span style="cursor:pointer;font-size:1.2rem" for="{{option.Id}}">{{option.Text}}></span>
                            </label>
                        </div>
                    </div>

                    </p>
                </div>

                <hr>
                <div class="card-footer d-flex justify-content-between">
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