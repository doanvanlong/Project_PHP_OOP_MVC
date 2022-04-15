<div class="content-header">
    <h5 class=" bg-secondary text-light p-2" style="border-radius:3px;">Chi tiết môn học</h5>

</div>
<div class="content">
    <div class="row">
        <div class="danh-muc-chinh col-12">
            <?php
            if (isset($_COOKIE["msg"])){
            ?>
                <div class="bg-info p-2"><?php echo $_COOKIE['msg']; ?></div>
            <?php
            }
            ?>

            <form action="../../subject/xulyupdate" id="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên môn học</label>
                    <input type="text" autocomplete="off" class="form-control" value="<?=$data['result'][0]['subject_name'];?>" name="subject-name" id="" aria-describedby="" placeholder="...">
                    <small id="error-" class="form-text text-danger "></small>
                </div>
                <input type="hidden" name="subject-id" value="<?=$data['id'];?>">
                <input type="hidden" name="subject-img" value="<?=$data['result'][0]['subject_img'];?>">
                <img width="60" src="../../public/upload/<?php echo trim($data['result'][0]['subject_img']);?>" alt="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh</label>
                    <br>
                    <input type="file" name="subject-img" id="" aria-describedby="">
                </div>
                <button type="submit" name="submit" class="btn btn-success">Cập nhật</button>
            </form>
        </div>



    </div>
</div>