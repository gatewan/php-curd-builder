<div class="page-content row">  
  <div class="page-header"> <!-- Page header -->
    <div class="page-title">
      <h3> <?php echo  $pageTitle ;?> <small><?php echo $pageNote ;?></small></h3>
    </div>    
    
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('') ?>"> <?php echo $this->lang->line('core.home'); ?></a></li>
      <li><a href="<?php echo site_url('sximo/config/getHelp') ?>"> Help</a></li>
      <li class="active"> Developer </li>
    </ul>      
      
  </div><!-- /Page header -->

   <div class="page-content-wrapper m-t">
     <div class="row">
        <div class="col-md-4">
          <?php $this->load->view('sximo/config/manual/developersidebar'); ?>
        </div>

        <div class="col-md-8" style="margin-bottom:50px;">
          <h2> Controller Structure </h2>
          <p> Every controller generated by code builder will have same structure and code</p>
          <h4> Controller code </h4>
          <pre class="prettyprint">
              class ModuleController extends SB_Controller {
                protected $layout   = "layouts/main";
                public $module    = 'ModuleController';
                public $per_page  = '10';
                public function __construct() {
                  parent::__construct();
                  $this->load->model('ModuleControllerModel');
                  $this->model = $this->ModuleControllerModel;
                  
                  $this->info = $this->model->makeInfo( $this->module);
                  $this->access = $this->model->validAccess($this->info['id']); 
                  $this->data = array_merge( $this->data, array(
                    'pageTitle' =>  $this->info['title'],
                    'pageNote'  =>  $this->info['note'],
                    'pageModule'  => 'ModuleController',
                  ));
                }

                public function index()
                {
                  /* Handle table grid , sort order , 
                    pagination and search proccess */ 
                }

                function show( $id = null)
                {
                  /* Handle view detail*/                        
                }

                function add( $id = null)
                {
                  /* Handle form add or edit */ 
                }

                function save()
                {
                  /* Handle post form from add or edit */ 
                }

                public function destroy()
                {
                  /* Handle multiple delete  */ 

                }             
              }
          </pre>
        </div>
     </div>
   </div><!-- page-content-wrapper -->

</div> <!-- /page-content-row -->