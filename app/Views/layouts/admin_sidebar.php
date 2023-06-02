   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
       <li class="nav-item nav-profile">
         <div class="nav-link">
           <div class="profile-image">
             <img src="<?= base_url() ?>/public/assets/images/gotvet.jpg" alt="image" />
           </div>
           <div class="profile-name">
             <p class="name">
               Welcome <?= session()->get('fname') ?>
             </p>
             <p class="designation">
               Admin
             </p>
           </div>
         </div>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin') ?>">
           <i class="fa fa-home menu-icon"></i>
           <span class="menu-title">Home</span>
         </a>
       </li>

       <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Students</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('all_students')?>">All Accounts </a></li>
             
              
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('enrolled')?>"> Enrolled Students</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('approved')?>">Approved</a></li>
              </ul>
            </div>
          </li>
       

       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
           <i class="fab fa-trello menu-icon"></i>
           <span class="menu-title">Insitutes</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="page-layouts">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('all_insitutes') ?>">View All</a></li>

             <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('uni_insitutes') ?>">Tvet Universities</a></li>
             <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('pol_insitutes') ?>">Tvet Polytechnics</a></li>
             <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('tt_insitutes') ?>">Technical Training Institutes</a></li>


           </ul>
         </div>
       </li>

       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           <i class="far fa-compass menu-icon"></i>
           <span class="menu-title">Courses </span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('all_courses') ?>">All couses</a></li>
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('completed_orders') ?>">Add new</a></li>
            
 
           </ul>
         </div>
       </li>
       <li class="nav-item d-none d-lg-block">
         <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
           <i class="fas fa-columns menu-icon"></i>
           <span class="menu-title">Reports</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="sidebar-layouts">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('rpt_ins') ?>">Registerd insitutes</a></li>
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('rpt_courses') ?>">Availble courses</a></li>
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('rpt_stdnt_accounts') ?>">Registerd students</a></li>
             <li class="nav-item"> <a class="nav-link" href="<?= base_url('rpt_stdnt_enrolled') ?>">Enrolled Students</a></li>
 
           </ul>
         </div>
       </li>


       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
           <i class="fas fa-pen-square menu-icon"></i>
           <span class="menu-title">Learning Materials</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="editors">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"><a class="nav-link" href="#">Coming_soon</a></li>

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
           <span class="menu-title">Support</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"><a class="nav-link" href="#">Received Messages</a></li>
           </ul>
         </div>
       </li>



 



     </ul>
   </nav>