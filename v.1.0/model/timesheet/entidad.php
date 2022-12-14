
<?php
	include_once("../conexion.php");
	$db = new conexion();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	
	function getRecords($params) {
        $variable_1 = $_GET['variable_1'];
        $variable_2 = $_GET['variable_2'];
        $variable_3 = $_GET['variable_3'];
        $variable_4 = $_GET['variable_4'];
	   // getting total number records without any search
		$sql = "SELECT idTimeSheet,day(Date_ts) as Date_ts ,IF(hours_work=0,'',hours_work) as hours_work ,IF(hours_absence=0,'',hours_absence) hours_absence,IF(hours_vacaton=0,'',hours_vacaton) hours_vacaton,IF(hours_other=0,'',hours_other) hours_other,comments 
        FROM `timesheet` 
        WHERE idProvider='$variable_1' and idContract='$variable_2'
		 and Month_ts='$variable_3' and Year_ts='$variable_4'         
        order by Date_ts asc LIMIT 0, 31 ";
		
		$queryRecords = mysqli_query($this->conn, $sql) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}
		
		return $data;   // total data array
	}
	function updateEmployee($params) {
		$data = array();
		$sql = "Update `timesheet` set ".$params["name"]." = '" . $params["value"] . "' WHERE idTimeSheet='".$params["pk"]."'";
		
		if($result = mysqli_query($this->conn, $sql)) {
			echo 'Successfully! Record updated...';
		} else {
			die("error to update '".$params["name"]."' with '".$params["value"]."'");
		}
	}
}
?>
	