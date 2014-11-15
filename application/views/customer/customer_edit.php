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
											<div class="caption"><i class="icon-reorder"></i>Tài khoản người dùng</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal">
												<h3 class="form-section"></h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Họ</label>
															<div class="controls">
																<input name="FirstName" type="text" class="m-wrap span12" placeholder="Họ">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Tên</label>
															<div class="controls">
																<input  name="LastName" type="text" class="m-wrap span12" placeholder="Tên">
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Giới tính</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option value="1">Nam</option>
																	<option value="2">Nữ</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Date of Birth</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row--> 
												<!--/row-->                   
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label">Địa chỉ</label>
															<div class="controls">
																<input name="CusAdd" type="text" class="m-wrap span12" >
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Thành phố</label>
															<div class="controls">
																<select name="City" class="m-wrap span12">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Email</label>
															<div class="controls">
																<input name="CusEmail" type="text"  class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Post Code</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Country</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->                
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


