<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Thêm học viên</h5>

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
            <form action="../../user/xulyadd" id="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control"name="email" >
                    <small id="error-" class="form-text text-danger "></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mật khẩu</label>
                    <br>
                    <input type="password" class="form-control"name="password" >

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên học viên</label>
                    <br>
                    <input type="text" class="form-control"name="name" >

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh</label>
                    <br>
                    <input type="file" class="form-control"name="img" >
                </div>
                <!-- <img src="../../public/upload/ADAV.jpg" id="preview-img" alt=""> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <br>
                    <input type="date" class="form-control"name="birthday" >

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                    <br>
                    <input type="radio" id="nam" value="0" name="gender" >
                    <label for="nam">Nam</label>
                    <input type="radio" id="nu"  value="1" name="gender" >
                    <label for="nu">Nữ</label>


                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Điện thoại</label>
                    <br>
                    <input type="number" class="form-control"name="phone" >

                </div>
                <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
            </form>
        </div>



    </div>
</div>