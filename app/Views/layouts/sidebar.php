<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="<?=base_url()?>/public/assets/images/faces/ff.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?=session()->get('fname')?>
                </p>
                <p class="designation">
                  Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('client')?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">My Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?=base_url('orders_all')?>">View All</a></li>
              
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?=base_url('orders_pending')?>">Pending Orders</a></li>
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?=base_url('order_new')?>">Order Now</a></li>
         
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Approved Orders </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('orders_inprogress')?>">In progress</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('orders_inrevision')?>">In revision</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('orders_completed')?>">Completed</a></li>
              </ul>
              </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-columns menu-icon"></i>
              <span class="menu-title">Disputed Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('orders_rejected')?>">Rejected</a></li>
              
              </ul>
            </div>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">Transactions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Current Transactions</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">All Transactions</a></li>
               
           
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fab fa-wpforms menu-icon"></i>
              <span class="menu-title">Contact</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?=base_url('email_support')?>">Email Support</a></li>                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="fas fa-pen-square menu-icon"></i>
              <span class="menu-title">Chat</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Coming_soon</a></li>
             
              </ul>
            </div>
          </li>
  
        </ul>
      </nav>

