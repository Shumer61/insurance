

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('admin.dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  
						  <h3><b>MediAdvisor</b> Ke</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
      		<li class="">
                <a href="{{ route('admin.dashboard') }}">
                  <i data-feather="pie-chart"></i>
      			<span>Dashboard (OverView)</span>
                </a>
              </li>  
        <li class="treeview ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Health Packages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('add-package')}}"><i class="ti-more"></i>Add Package</a></li>

             <li class=""><a href="{{ route('package.view') }}"><i class="ti-more"></i>Manage Packages</a></li>
             
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Package Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('benefit.edit') }}"><i class="ti-more"></i>Add Benefits</a></li>
            <li class=""><a href="{{ route('exclusion.add') }}"><i class="ti-more"></i>Add Exclusions</a></li>
            <li class=""><a href="{{ route('periods.add') }}"><i class="ti-more"></i>Add Waiting Periods</a></li>
            <li class=""><a href="{{ route('hospitals.add') }}"><i class="ti-more"></i>Add Hospitals</a></li>
          </ul>
        </li> 		  
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Messages </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('contact.view') }}"><i class="ti-more"></i>All Messages</a></li>
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="file"></i>
            <span>User Inquiries</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.inquiries') }}"><i class="ti-more"></i>View User Inquiries</a></li>
            
          </ul>
        </li> 
        </ul>
        </li>       

 

      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>