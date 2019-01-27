<?php
 class controller_processorder_3 extends controller_processorder_3
 {
	 $this->model = new Model_processorder_3();
	 $this->view =new view();
 }
 function action_index()
 {
	 $data = $this->model->get_data();
	 $this->view->generate('processorder_3_view.php'), 'template_view.php', $data);
 }
 }
 
	 