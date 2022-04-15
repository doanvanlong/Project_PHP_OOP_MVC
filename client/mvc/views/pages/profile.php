<div class="container">
    <div class="card my-4">
        <div class="card-header">
            <h2>Thông tin tài khoản</h2>
        </div>
        <?php 
            if(isset($_COOKIE['msg'])){
               ?>
                    <h5 class="bg-info py-2"><?php echo $_COOKIE['msg']; ?></h5>
               <?php
            }
        ?>
        <div class="card-body">
            <form action="../../account/xulyupdate" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-4">

                        <div class=text-center>
                            <input type="hidden" name="id_user" value="<?=$data['result']['id']?>">
                            <input type="hidden" name="imgold" value="<?=$data['result']['img']?>">
                            <?php
                            if ($data['result']['img'] == '') { ?>
                                <img src="../../public/client/assets/img/notfound.png" width="70%" class="imgUpload" alt="">

                            <?php

                            } else { ?>
                                <img src="../../../admin/public/upload/<?php echo trim($data['result']['img']); ?>" width="70%" class="imgUpload" alt="">

                            <?php

                            }
                            ?>
                            <input type="file" name="img" id="chooseImg" >
                        </div>
                        <div>
                            <button type="submit" name="" class="btn btn-primary py-2 mt-4">Cập nhập</button>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label style="font-weight: bold" for="">Họ tên </label>
                            <input type="text" name="name" id="" class="form-control py-2" value="<?= $data['result']['name'] ?>" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold" for="">Email </label>
                            <input type="text" name="email" id="" class="form-control py-2" placeholder="" value="<?= $data['result']['email'] ?>" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold" for="">Giới tính </label>
                            <br>
                            <?php
                            if ($data['result']['gender'] == 0) { ?>
                                <label for="nam">Nam</label>
                                <input type="radio" value="0" checked name="gender" id="nam" class=" py-2" placeholder="" aria-describedby="helpId">
                                <label for="nu">Nữ</label>
                                <input type="radio" name="gender"  value="1" id="nu" class=" py-2" placeholder="" aria-describedby="helpId">

                            <?php

                            } else { ?>
                             <label for="nam">Nam</label>
                                <input type="radio" value="0"  name="gender" id="nam" class=" py-2" placeholder="" aria-describedby="helpId">
                                <label for="nu">Nữ</label>
                                <input type="radio" name="gender" checked  value="1" id="nu" class=" py-2" placeholder="" aria-describedby="helpId">

                            <?php
                            }
                            ?>

                        </div>

                        <div class="form-group">
                            <label style="font-weight: bold" for="">Ngày sinh </label>
                            <br>
                            <input type="date" class="form-control py-2" name="birthday">
                            <br>
                            <input type="text" readonly name="birthdayold" value="<?=$data['result']['birthday']?>"="" class="form-control py-2" placeholder="" aria-describedby="helpId">

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>