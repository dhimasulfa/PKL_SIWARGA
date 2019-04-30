<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url ('assets/img/siwarga.jpeg')?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>

<!--status menu untuk RW-->

<?php if($this->session->userdata('akses')=='RW'){ ?>
              	  	
                  <li class="mt">
                      <a href="<?php echo base_url ('be/Landing/tampil_dashboard')?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Perangkat Desa</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url ('be/Landing/rw')?>">Rukun Warga</a></li>
                          <li><a  href="<?php echo base_url ('be/Landing/rt')?>">Rukun Tetangga</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                  <a href="<?php echo base_url ('be/Landing/warga_rw')?>" >
                          <i class="fa fa-users"></i>
                          <span>Warga</span>
                      </a>                     
                  </li>  
                  
                  <li class="sub-menu">
                      <a href="<?php echo base_url ('be/Landing/info_warga')?>" >
                          <i class="fa fa-bell-o"></i>
                          <span>Info Warga</span>
                      </a>                     
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url ('be/Landing/emergency')?>" >
                          <i class="fa fa-file-text-o"></i>
                          <span>Emergency</span>
                      </a>                     
                  </li>

<!--status menu untuk RT-->
<?php }elseif ($this->session->userdata('akses')=='RT'){?>


                  <li class="mt">
                      <a href="<?php echo base_url ('be/Landing/tampil_dashboard')?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                  <a href="<?php echo base_url ('be/Landing/warga')?>" >
                          <i class="fa fa-users"></i>
                          <span>Warga</span>
                      </a>                     
                  </li>  
                  
                  <li class="sub-menu">
                      <a href="<?php echo base_url ('be/Landing/info_warga')?>" >
                          <i class="fa fa-file-text-o"></i>
                          <span>Info Warga</span>
                      </a>                     
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url ('be/Landing/emergency')?>" >
                          <i class="fa fa-bell-o"></i>
                          <span>Emergency</span>
                      </a>                     
                  </li>

<?php } ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>