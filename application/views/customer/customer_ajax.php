<?php if (!empty($customers)) { ?>
<table id="table_product"
	class="table-bordered table-striped table-condensed flip-content">
	<thead class="flip-content">
		<tr>
			<th>STT</th>
			<th>Tài khoản</th>
			<th class="numeric">Họ Tên</th>
			<th class="numeric">Số điện thoại</th>
			<th class="numeric">Địa chỉ</th>
			<th class="numeric">Chỉnh sửa</th>
			<th class="numeric">Xóa</th>
		</tr>
	</thead>
		<?php foreach ( $customers as $key => $value ) :?>
	<tbody>
		<tr>
			<td><?php echo $start + 1;?></td>
			<td><?php echo $value["CusUser"]; ?></td>
							<td class="numeric"><?php echo $value['CusName']; ?></td>
							<td class=""><?php echo $value["CusPhone"]; ?></td>
							<td class="numeric"><?php echo $value["CusAdd"]; ?></td>
							<td data-id="<?php echo $value['CusID']?>"><span
								class="icon-edit"></span></td>
							<td data-no="<?php echo $start +1 ;?>"
								data-id="<?php echo $value['CusID']?>"><span class="icon-trash"></span></td>
						</tr>
	</tbody>
      <?php $start++; endforeach; ?>
</table>
<div class="row-fluid">
	<div class="" id="ajax_paging">
		<span style="float: right;" class="dataTables_info" id="sample_1_info">Có tất cả <?php echo $count; ?> dòng dữ liệu</span>
                                <?php echo $pagination; ?>
                        </div>

</div>
<?php }else { ?>
<div id="data">
	<p>Không tìm thấy kết quả nào!</p>
</div>
<?php } ?>

