<script src="<?php echo base_url(); ?>assets/dialog/run_prettify.js"></script>
<link href="<?php echo base_url(); ?>assets/dialog/bootstrap-dialog.css"
	rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/dialog/bootstrap-dialog.js"></script>
<style type="text">
    .icon-trashs{
        float: right;
    }
    i.icon-pencil{
        cursor: pointer !important;
    }
</style>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>assets/plugins/jquery-nestable/jquery.nestable.css" />
<div class="row-fluid">
	<div class="span6">
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-reorder"></i>List menu
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a> <a href="javascript:;"
						class="remove"></a>
				</div>
				<div class="actions">
					<a class="btn green" id="add-menu"> Add new menu</a>
				</div>
			</div>
			<div class="portlet-body">
                <?php if (!empty($menu)) { ?>
                    <div class="dd" id="nestable_list_3">
					<ol class="dd-list">
                            <?php foreach ($menu as $key => $value) { ?>
                                <li class="dd-item dd3-item" data-id="">
							<span style="float: right"><i class="icon-plus"></i><i
								class="icon-pencil"></i><i class="icon-trash"></i></span>
							<div class="dd-handle dd3-handle"></div>
							<div data-menu-id="<?php echo $value['MenuID'] ?>"
								class="dd3-content"><?php echo $value['MenuName'] ?></div>
						</li>
                            <?php } ?>
                        </ol>
				</div>
                <?php } ?>
            </div>
		</div>
	</div>
	<div class="span6">
		
	</div>
	
</div>
<div class="row-fluid">
					<div class="span6">
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-comments"></i>Nestable List 1</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body ">
								<div class="dd" id="nestable_list_1">
									
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-comments"></i>Nestable List 2</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="dd" id="nestable_list_2">
									<ol class="dd-list">
										<li class="dd-item" data-id="13">
											<div class="dd-handle">Item 13</div>
										</li>
										<li class="dd-item" data-id="14">
											<div class="dd-handle">Item 14</div>
										</li>
										<li class="dd-item" data-id="15">
											<div class="dd-handle">Item 15</div>
											<ol class="dd-list">
												<li class="dd-item" data-id="16">
													<div class="dd-handle">Item 16</div>
												</li>
												<li class="dd-item" data-id="17">
													<div class="dd-handle">Item 17</div>
												</li>
												<li class="dd-item" data-id="18">
													<div class="dd-handle">Item 18</div>
												</li>
											</ol>
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>

<script
	src="<?php echo base_url(); ?>assets/plugins/jquery-nestable/jquery.nestable.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/ui-nestable.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>

<script>
jQuery(document).on('click', '#add-menu', function() { 
        var text = '<label class="control-label">Name menu</label>';
        text += '<div class="controls"><input type="text" class="m-wrap large" placeholder="Name menu"></div>'
        BootstrapDialog.show({
            title: 'Add new menu',
            message: $(text),
            buttons: [{
                    label: 'Create',
                    cssClass: 'btn green',
                    hotkey: 13, // Enter.
                    action: function() {
                        var name = $('input.m-wrap').val();
                        $.ajax({
                            type: "POST",
                            data: {
                                name: name
                            },
                            url: 'menu_new',
                            beforeSend: function() {
                            },
                            success: function(data) { alert(data);
                                $('div#nestable_list_3.dd').html(data);
                                $('#nestable_list_2').nestable();
                                BootstrapDialog.closeAll();
                            }
                        });
                    }
                }]
        });
    });

jQuery(document).on('click', 'div#nestable_list_3 .icon-pencil', function() {
    var id = $(this).parent().next().next().attr('data-menu-id'); 
    //var text = '<label class="control-label">Tên thư mục</label><div data-menu-id="'+id+'" id="controls"></div>'
	
	//var text = loadMenu(); alert(text);
		//'<div class="dd" id="nestable_list_1"><ol class="dd-list"><li class="dd-item" data-id="1"><div class="dd-handle">Item 1</div></li><li class="dd-item" data-id="2"><div class="dd-handle">Item 2</div><ol class="dd-list"><li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li><li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li><li class="dd-item" data-id="5"><div class="dd-handle">Item 5</div><ol class="dd-list"><li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li><li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li><li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li></ol></li><li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li><li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li></ol></li><li class="dd-item" data-id="11"><div class="dd-handle">Item 11</div></li><li class="dd-item" data-id="12"><div class="dd-handle">Item 12</div></li><li class="dd-item" data-id="12"><div class="dd-handle">Item 12</div></li><li class="dd-item" data-id="12"><div class="dd-handle">Item 12</div></li><li class="dd-item" data-id="12"><div class="dd-handle">Item 12</div></li><li class="dd-item" data-id="12"><div class="dd-handle">Item 12</div></li></ol></div>';
// //     BootstrapDialog.show({
// //         title: 'Edit menu ' + name,
// //         message: $(text),
// //         buttons: [{
// //                 label: 'Edit',
// //                 cssClass: 'btn green',
// //                 hotkey: 13, // Enter.
// //                 action: function() {
// //                     var name = $('input.m-wrap').val();
// //                     $.ajax({
// //                         type: "POST",
// //                         data: {
// //                             id: id,
// //                             left: left,
// //                             right: right,
// //                             name: name
// //                         },
// //                         url: 'category_update',
// //                         beforeSend: function() {
// //                         },
// //                         success: function(data) {
// //                             that.html(name);
// //                             BootstrapDialog.closeAll();
// //                             $('#nestable_list_2').nestable();
// //                         }
// //                     });
// //                 }
//             }]
//     });
     loadMenu(id); 
     loadmenuview(id)
    // that.remove();
});


jQuery(document).on('click', 'div#nestable_list_1 span p.btn', function() {
	var CateID = $(this).parent().parent().attr('data-id'); 
	var MenuID = $('div#nestable_list_1 ol.dd-list').attr('menu-id'); 
		$.ajax({
	     type: "POST",
	     data: {
	    	 CateID: CateID,
	    	 MenuID: MenuID
	     },
	     url: 'menu_add_category',
	     beforeSend: function() {
	     },
	     success: function(data) {
	    	 $('div#nestable_list_1').html(data); 
	    	 loadmenuview(MenuID);
	     }
	 });
});
function loadMenu(id)
{
    $.post("category_load_menu_notID", { id: id}, function(data) {
    	$('div#nestable_list_1').html(data);
    });
}
function loadmenuview(id)
{
	   $.post("show_menu", { id: id}, function(data) {
	    	$('div#nestable_list_2').html(data);
	    });
}
 </script>