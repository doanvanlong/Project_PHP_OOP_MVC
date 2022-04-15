<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Danh sách câu hỏi</h5>
    <?php
    if (isset($_COOKIE['msg'])) {
    ?>
        <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;"><?php echo $_COOKIE['msg']; ?></h5>
    <?php
    }
    ?>
</div>
<div class="content bg-white">
    <div class="row">
        <div class="danh-muc-chinh col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên môn học</th>
                        <th>Câu hỏi</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    foreach ($data['result'] as $question) {
                    ?>
                        <tr>
                            <td scope="row"><?= $question['id']; ?></td>
                           <td><?=$data['name_subject'][$i];?></td>
                            <td><?= $question['question']; ?></td>
                            <td> <a href="../../question/edit/<?= $question['id'] ?>">Sửa |</a>
                                <a href="../../question/deleteQuestion/<?= $question['id'] ?>">Xoá</a>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    }
                    ?>


                </tbody>
            </table>
        </div>



    </div>
</div>