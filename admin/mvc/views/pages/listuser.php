<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Danh sách học viên</h5>
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
                        <th>Tên học viên</th>
                        <th>Hình ảnh</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['result'] as $user) {
                    ?>
                        <tr>
                            <td scope="row"><?= $user['id']; ?></td>
                            <td><?= $user['name']; ?></td>
                            <td><img width="60" src="../../public/upload/<?php echo trim($user['img']); ?>" alt=""></td>
                            <td><?= $user['email']; ?></td>

                            <td><?= $user['birthday']; ?></td>
                            <td><?php echo $user['gender'] ==0 ? 'Nam' : 'Nữ' ?></td>
                            <td><?= $user['phone']; ?></td>

                            <td> <a href="../../user/edit/<?= $user['id'] ?>">Sửa |</a>
                                <a href="../../user/deleteUser/<?= $user['id'] ?>">Xoá</a>
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