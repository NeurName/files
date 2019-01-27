<?php
class controller_vieworders_3 extend Controller
{
	Function _construct()
	{
		$this->model = new Model_vieworders_3();
		$this->view = new View();
	}
	function action_index()
	{
		$data = $this->model->get_data();
		$this->View->generate('vieworders_3_view.php' , 'template_view.php', $data);
	}
	