<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Cập nhật học viên</h5>

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
           
            <form action="../../user/xulyupdate" id="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_user" value="<?=$data['result'][0]['id'];?>">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" value="<?= $data['result'][0]['email'] ?>" class="form-control" name="email">
                    <small id="error-" class="form-text text-danger "></small>
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên học viên</label>
                    <br>
                    <input type="text" value="<?= $data['result'][0]['name'] ?>" class="form-control" name="name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh</label>
                    <br>
                    <input type="file" class="form-control" name="img">
                </div>
                <input type="hidden" value="<?= $data['result'][0]['img']  ?>" name="img"> 
                <img width="80" src="../../public/upload/<?php echo trim($data['result'][0]['img']) ?>" alt="">
                <!-- <img src="../../public/upload/ADAV.jpg" id="preview-img" alt=""> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <br>
                    <input type="date" class="form-control" name="birthday">

                </div>
                <input type="text" class="form-control"  name="birthdayold" readonly value="<?= $data['result'][0]['birthday'] ?> ">
                <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                    <br>
                    <?php
                    if ($data['result'][0]['gender'] == 0) { ?>
                        <input type="radio" checked id="nam" value="0" name="gender">
                        <label for="nam">Nam</label>
                        <input type="radio"  id="nu" value="1" name="gender">
                        <label for="nu">Nữ</label>
                    <?php

                    } else { ?>
                        <input type="radio" checked id="nu" value="1" name="gender">
                        <label for="nu">Nữ</label>
                        <input type="radio"  id="nam" value="0" name="gender">
                        <label for="nam">Nam</label>
                    <?php

                    }
                    ?>




                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Điện thoại</label>
                    <br>
                    <input type="number" value="<?= $data['result'][0]['phone'] ?>" class="form-control" name="phone">

                </div>
                <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
            </form>
        </div>



    </div>
</div>