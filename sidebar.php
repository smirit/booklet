                <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                    <div class="mdk-drawer__content ">
                        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                            <div class="sidebar-p-y">
                                <?php  if($this->session->userdata('is_logged_In_user')){
                                    $login_UserData=$this->session->userdata('is_logged_In_user');?>
                                <?php } else{
                                    redirect("signIn"); exit();
                                } ?>   
                                <div class="sidebar-heading">APPLICATIONS</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <li class="sidebar-menu-item active">
                                        <?php if($login_UserData["u_role"]!=3){ ?>
                                        <a class="sidebar-menu-button" href="<?php echo site_url('dashboard'); ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Dashboard
                                        </a>
                                        <?php }else{ ?>
                                            <a class="sidebar-menu-button" href="<?php echo base_url(); ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Dashboard
                                        </a>
                                        <?php } ?>
                                    </li>
                                    
                                    
                                </ul>
                                 <!-- Account menu -->
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <?php if($login_UserData["u_role"]==3){ ?>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                            Account
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url('change_password'); ?>">
                                                    <span class="sidebar-menu-text">Change Password</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url('account')?>">
                                                    <span class="sidebar-menu-text">Edit Account</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="
                                                <?php echo base_url();?>index.php/logout">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                                </a>
                                            </li> -->
                                            
                                        </ul>
                                    </li>
                                    <!-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#messages_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="messages_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo base_url();?>">
                                                    <span class="sidebar-menu-text">Inbox</span>
                                                    <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo base_url();?>">
                                                    <span class="sidebar-menu-text">Send</span>
                                                    <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">0</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <?php }else{ ?>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                                Users
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="<?php echo site_url("dashboard/addUser"); ?>">
                                                        <span class="sidebar-menu-text">Add New User</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="<?php echo site_url("dashboard/allUser"); ?>">
                                                        <span class="sidebar-menu-text">All Users List</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="sidebar-heading">Examination</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <?php if($login_UserData["u_role"]==3){ ?>
                                        <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#AssignmentSetting">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                            Assignment
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="AssignmentSetting">
                                           <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo site_url('teacher/MyAssignment'); ?>">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i>Assign Assignments
                                            </a>
                                        </li>
                                            
                                        </ul>
                                    </li>
                                    <?php } else{ ?>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#AssignmentSetting">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                            Assignment Setting
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="AssignmentSetting">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url("dashboard/allAssignment"); ?>">
                                                    <span class="sidebar-menu-text">All Assignment List</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url("dashboard/addAssignment"); ?>">
                                                    <span class="sidebar-menu-text">Add New Assignment</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                                <div class="sidebar-heading">Forum</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#Community">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                            Community
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="Community">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url('forum');?>">
                                                    <span class="sidebar-menu-text">Forum</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url('forum/my_forum'); ?>">
                                                    <span class="sidebar-menu-text">My Forum</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo site_url('forum/askQuestion'); ?>">
                                                    <span class="sidebar-menu-text">Ask Question</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    
                                    
                                </ul>
                                 
                                <div class="sidebar-heading">Teacher</div>

                                <ul class="sidebar-menu sm-active-button-bg">
                                   <?php if($login_UserData["u_role"]==3){ ?> 
                                    <!-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url(); ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Take a Test
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url(); ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Test Results
                                        </a>
                                    </li>
                                     -->
                                    
                                    <!-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url(); ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                                        </a>
                                    </li> -->
                                    <?php }else{ ?>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo site_url('dashboard/assign_assignment'); ?>">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i>Assign Assignments
                                            </a>
                                        </li>
                                    <?php } ?>    
                                </ul>
                                
                                <div class="sidebar-heading">Layout</div>
                                <ul class="sidebar-menu">
                                   <?php if($login_UserData["u_role"]==3){ ?>
                                    <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo site_url("logout"); ?>">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Sign Out
                                            </a>
                                        </li>
                                    <?php } else{ ?>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo site_url("signOut"); ?>">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Sign Out
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
