<?php

?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên danh mục</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        foreach ($data['ListAll'] as $listall) : $i++;
        ?>
            <tr>
                <th scope="row"><?=$i;?></th>
                <td><?=$listall['ten_dm']?></td>
              
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>