<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Danh sách môn học</h5>
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
                        <th>Hình ảnh</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['result'] as $subject) {
                    ?>
                        <tr>
                            <td scope="row"><?= $subject['id']; ?></td>
                            <td><?= $subject['subject_name']; ?></td>
                            <td><img width="60" src="../../public/upload/<?php echo trim($subject['subject_img']); ?>" alt=""></td>
                            <td> <a href="../../subject/edit/<?= $subject['id'] ?>">Sửa |</a>
                                <a href="../../subject/deleteSubject/<?= $subject['id'] ?>">Xoá</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>



    </div>
</div>