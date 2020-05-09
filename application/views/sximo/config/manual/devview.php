<div class="page-content row">  
  <div class="page-header"> <!-- Page header -->
    <div class="page-title">
      <h3> <?php echo  $pageTitle ;?> <small><?php echo $pageNote ;?></small></h3>
    </div>    
    
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>"> <?php echo $this->lang->line('core.home'); ?>  Home</a></li>
      <li class="active"> Title </li>
    </ul>      
      
  </div><!-- /Page header -->

   <div class="page-content-wrapper m-t">
    <div class="row">

      <div class="col-md-4">
        <?php $this->load->view('sximo/config/manual/developersidebar'); ?>
      </div>

      <div class="col-md-8">
        <h2 > View Structure </h2>
        <p> As Codeigniter default engine template , all files generated by LCRUD using Codeigniter default template </a> syntax , but template engine will not limiting you to use tag php at all template, you can use any php function in all element template </p>
        <h6> view.php structure code </h6>
        <pre class="prettyprint lang-php">
         # body template
            #header title 
            #breadcrumb            #grid action control 

            #start table view

              <!-- Looping head table -->

              

            #end table view

           

        #end body template    

        </pre>
      </div>
      
    </div>
   </div><!-- page-content-wrapper -->

</div> <!-- /page-content-row -->