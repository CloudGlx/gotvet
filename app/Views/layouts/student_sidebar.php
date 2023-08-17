<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="<?=base_url()?>/public/assets/images/faces/ff.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?=session()->get('FirstName')?>
                </p>
                <p class="designation">
               
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('stud_dashboard')?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title" style="color:green;font-weight:bold;">Home</span>
            </a>
          </li>
     


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ap" aria-expanded="false" aria-controls="ap">
            <i class="fa fa-book menu-icon"></i>
              <span class="menu-title">Programmes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ap">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('programmes')?>">All Courses</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('cert_prog')?>">Recognition of prior learnin</a></li>
                
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
              <span class="menu-title">My Applications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">My Applications</a></li>
              
              </ul>
            </div>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">My library</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">learning Materials</a></li>
               
               
           
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#oppt" aria-expanded="false" aria-controls="oppt">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">Opportunities</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="oppt">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Attachments</a></li>
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
                <li class="nav-item"><a class="nav-link" href="#">Email Support</a></li>                
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

