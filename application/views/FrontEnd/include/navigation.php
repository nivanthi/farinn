<nav role="navigation" id="main-nav" style="height: 70px; ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <a href="<?php echo base_url(); ?>index.php" id="logo"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/logo-leisure.png" alt=""></a>
        <input type="checkbox" id="toggle-main-nav" class="toggle-nav-input">
        <ul id="menu-main-menu" class="menu">
          <li class="menu-item menu-item-type-custom menu-item-object-custom"> <a href="<?php echo base_url(); ?>index.php">Home</a> </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"> <a href="<?php echo base_url(); ?>index.php#about_us">About Us</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php#facilities">Facilities</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/contact">Contact Us</a> </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<nav role="navigation" id="secondary-nav">
  <div class="container">
    <input type="checkbox" class="toggle-nav-input" id="toggle-secondary-nav">
    <ul class="menu">
      <li class="menu-item"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/rooms">Accomodation <em>Rooms &amp; Suites</em></a>
        <ul class="sub-menu bg-accomodation">
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/rooms#Standard_Rooms">Standard Rooms</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/rooms#Suite_Room">Suite Rooms</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/rooms#Delux_Room">Deluxe Rooms</a> </li>
        </ul>
      </li>
      <li class="menu-item"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/wedding_services">Banquet Halls <em>wedding, party or event </em></a>
        <ul class="sub-menu bg-golf">
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/wedding_services">Wedding Services</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/banquet">Banquet Halls</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/banquet#grand">Grand Ballroom Hall</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/banquet#vip">Royal Princess VIP Hall</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/wedding_services#honeymoon_Package">Honeymoon Packages</a> </li>
        </ul>
      </li>
      <li class="menu-item"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours">Tours <em>All Seasons</em></a>
        <ul class="sub-menu bg-tennis">
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#chilaw">Chilaw City</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Wilpattu">Wilpaththu National Park </a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Kalpitiya">Kalpitiya Dolpin Watching </a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Anawilundawa">Anawilundawa sanctuary </a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Munneswaram">Munneswaram Hindu Temple </a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Lagoon">Chilaw Lagoon </a> </li>
        </ul>
      </li>
      <li class="menu-item"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Gallery <em>Outdoor &amp; Indoor</em></a>
        <ul class="sub-menu bg-pool">
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Rooms &amp; Suites</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Banquet Halls</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Faciliies</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Locations</a> </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/gallery">Tours</a> </li>
        </ul>
      </li>
    </ul>
    <!-- .menu --> 
  </div>
  <!-- .container --> 
</nav>
<!-- #secondary-nav -->
<label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> DETAILS</label>
<label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i> INFO </label>
</div>
<!-- .header-row -->