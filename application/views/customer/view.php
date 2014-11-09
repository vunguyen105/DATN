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
					<i class="icon-cogs"></i>Flip Scroll
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a> <a
						href="#portlet-config" data-toggle="modal" class="config"></a> <a
						href="javascript:;" class="reload"></a> <a href="javascript:;"
						class="remove"></a>
				</div>
			</div>
			<div id="content" class="portlet-body flip-scroll">
				<table id="table_product"
					class="table-bordered table-striped table-condensed flip-content">
					<thead class="flip-content">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th class="numeric">Category</th>
							<th class="numeric">Description</th>
							<th class="numeric">Price</th>
							<th class="numeric">Change</th>
							<th class="numeric">Delete</th>
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
jQuery(document).on('click', 'table#table_product span.icon-trash', function() {
    var id = $(this).parent().attr('data-id');
    var no = $(this).parent().attr('data-no');
    var that = $(this).parent().parent();
    var page = $('div.pagination li.active').children('a').text();
    BootstrapDialog.confirm('Thông báo', '', function(result) {
        if (result) {
            $.ajax({
                type: "POST",
                data: {
                    id: id,
                    no: no,
                    page: page
                },
                url: 'product_del',
                beforeSend: function() {
                },
                success: function(data) {
                	$("#content").html(data);
                	applyPagination();
                }
            });
        } else {

        }
    });
});
    jQuery(document).ready(function() {  
        applyPagination();
    });
    jQuery(document).on('click', 'span.icon-edit', function() {
    	var id = $(this).parent().attr('data-id');
    	window.open(
    	  '<?php echo base_url('customer/edit');?>'+'/'+id,
    	  '_blank' 
    	);

    	
    });

    function applyPagination() {
        $("#ajax_paging a").click(function() {
            if ($(this).attr('doclick') == '0') {
                return false;
            } else {
                var url = $(this).attr("href");
                $.ajax({
                    type: "POST",
                    data: {
                        ajax: 1
                    }, 
                    url: url,
                    beforeSend: function() {
                        //$('#global_ajax_processing').fadeIn('slow');
                    },
                    success: function(msg) {
                        // $('#global_ajax_processing').fadeOut('slow');
                        $("#content").html(msg);
                        applyPagination();
                    }
                });
            }
            return false;
        });
    }
</script>

<style type="text/css">
.css {
	overflow: hidden;
}
</style>


