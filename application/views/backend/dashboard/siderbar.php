<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- 					<form class="sidebar-search"> -->
            <!-- 						<div class="input-box"> -->
            <!-- 							<a href="javascript:;" class="remove"></a> -->
            <!-- 							<input type="text" placeholder="Search..." /> -->
            <!-- 							<input type="button" class="submit" value=" " /> -->
            <!-- 						</div> -->
            <!-- 					</form> -->
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start active">
            <a href="<?php echo base_url() ?>admin">
                <i class="icon-home"></i> 
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class=" ">
            <a href="<?php echo base_url() ?>product/view">
                <i class="icon-briefcase"></i> 
                <span class="title">Product</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li >
                    <a href="<?php echo base_url() ?>product/product_create">
                        Add New</a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>product/view">
                        All Product</a>
                </li>

            </ul> 
        </li>
        <li >
            <a href="<?php echo base_url() ?>category/view">
                <i class="icon-folder-open"></i> 
                <span class="title">Catefories</span>

            </a>
        </li>
        <li class=" ">
            <a href="<?php echo base_url() ?>product/view">
                <i class="icon-briefcase"></i> 
                <span class="title">Acticle</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li >
                    <a href="<?php echo base_url() ?>news/view">
                        Add New</a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>news/news_create">
                        All Acticle</a>
                </li>

            </ul> 
        </li>
        <li >
            <a href="javascript:;">
                <i class="icon-user"></i> 
                <span class="title">Tài khoản</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li >
                    <a href="<?php echo base_url() ?>customer/view">
                        Danh sách Tài Khoản</a>
                </li>
                <li > 
                    <a href="<?php echo base_url() ?>customer/create"> 
                        Tạo Tài Khoản</a> 
                </li> 

            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>