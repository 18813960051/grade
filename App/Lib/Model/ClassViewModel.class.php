<?php 
	class ClassViewModel extends ViewModel{
		public $viewFields = array(
			'Class' => array('cid','ccode','cname','cmaster','cmasterphone','_type'=>'LEFT'),
			'Department' => array('dname','_on'=>'Class.departmentid=Department.did')
		);
	}
 ?>