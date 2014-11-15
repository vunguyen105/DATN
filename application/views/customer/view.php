<script src="<?php echo base_url(); ?>assets/dialog/run_prettify.js"></script>
<link href="<?php echo base_url(); ?>assets/dialog/bootstrap-dialog.css"
	rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/dialog/bootstrap-dialog.js"></script>
<div class="row-fluid">
	<div class="span12">
	<?php if (!empty($customers)) { ?>
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-cogs"></i>Thống kê người dùng
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					 <a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div id="content" class="portlet-body flip-scroll">
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
					 <?php $i = 1; foreach ( $customers as $key => $value ) :?>
					<tbody>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value["CusUser"]; ?></td>
							<td class="numeric"><?php echo $value['CusName']; ?></td>
							<td class=""><?php echo $value["CusPhone"]; ?></td>
							<td class="numeric"><?php echo $value["CusAdd"]; ?></td>
							<td data-id="<?php echo $value['CusID']?>"><span
								class="icon-edit"></span></td>
							<td data-no="<?php echo $i;?>"
								data-id="<?php echo $value['CusID']?>"><span class="icon-trash"></span></td>
						</tr>
					</tbody>
                       <?php $i++; endforeach; ?>
				</table>
				<div class="row-fluid">
					<div class="" id="ajax_paging">
						<span style="float: right;" class="dataTables_info"
							id="sample_1_info">Có tất cả <?php echo $count; ?> dòng dữ liệu</span>
                         <?php echo $pagination; ?>
                    </div>
				</div>
			</div>
		</div>
		<?php } ?>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
</div>

<script>
</script>

<style type="text/css">
.css {
	overflow: hidden;
}
</style>


