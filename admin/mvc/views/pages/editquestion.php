<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Cập nhật câu hỏi</h5>

</div>
<div class="content">
    <div class="row">
        <div class="danh-muc-chinh col-12">
            <?php
            if (isset($_COOKIE["msg"])) {
            ?>
                <div class="bg-info p-2"><?php echo $_COOKIE['msg']; ?></div>
            <?php
            }
            ?>
            <form action="../../question/xulyupdate" id="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Môn học</label>
                    <input type="hidden" name="id_question" value="<?=$data['id'];?>">
                    <div class="form-group">
                        <select class="form-control" name="subject-id" id="">
                            <?php
                            foreach ($data['subject'] as $subject) {
                                if ($subject['id'] == $data['result'][0]['subject_id']) {
                            ?>
                                <option selected value="<?= $subject['id'] ?>"><?= $subject['subject_name']; ?></option>

                                <?php
                                } else { ?>
                                <option value="<?= $subject['id'] ?>"><?= $subject['subject_name']; ?></option>

                                <?php

                                }
                                ?>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <small id="error-" class="form-text text-danger "></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Câu hỏi</label>
                    <br>
                    <textarea name="question" id="" cols="150" rows="2"><?=$data['result'][0]['question'];?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Câu A</label>
                    <br>
                    <textarea name="A" id="" cols="150" rows="2"><?=$data['result'][0]['A'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Câu B</label>
                    <br>
                    <textarea name="B" id="" cols="150" rows="2"><?=$data['result'][0]['B'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Câu C</label>
                    <br>
                    <textarea name="C" id="" cols="150" rows="2"><?=$data['result'][0]['C'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Câu D</label>
                    <br>
                    <textarea name="D" id="" cols="150" rows="2"><?=$data['result'][0]['D'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Đáp án</label>
                    <br>
                    <select class="form-control" name="answer" id="">
                       
                        <option selected value="<?=$data['result'][0]['answer']?>"><?=$data['result'][0]['answer']?></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>

                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Cập nhật</button>
            </form>
        </div>



    </div>
</div>