<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Bảng Dịch Vụ</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>ID</th>
                    <th>Tên Dịch Vụ</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung Chi Tiết</th>
                    <th>Loại</th>
                    <th>Link Ảnh</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listdv as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href="<?php echo base_url();?>index.php/admin/edit_dv"><em class="fa fa-pencil"></em></a>
                            <br>
                            <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/delete_dv/<?php echo $row['id_dv'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['id_dv'];?></td>
                        <td><?php echo $row['ten_dv'];?></td>
                        <td><?php echo $row['tieu_de_dv'];?></td>
                        <td><?php
                            echo substr($row['noi_dung_dv'],0,70) . "  ...";
                            ?></td>
                        <td><?php echo $row['loai'];?></td>
                        <td><?php echo $row['link_dv'];?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="list123">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>