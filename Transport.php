<?php
	// Connect to database
	include("db_connect.php");
	$request_method = $_SERVER["REQUEST_METHOD"];
//recuperer les bus
	function GetBus()
	{   
		global $conn;
		$response= array();
		$query = "SELECT * FROM bus";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
	//recuperer les taxis
	function GetTaxi(){
		global $conn;
		$query = "SELECT * FROM taxi";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[]= $row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
	//recuperer les photos
	function GetPhotos(){
		global $conn;
		$query = "SELECT * FROM photos";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[]= $row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
	//recuperer les agences de location
	function GetLocationV() {
		global $conn;
		$query = "SELECT * FROM loc_voiture";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
}
		
	
         if(!empty($_GET["id"]))
           {  
	              $id=$_GET["id"] ;
	              
				  if($id=="1") {
                    
					GetBus();

                  }else if($id=="2"){
		            
					GetTaxi();

	              }else if($id=="3"){
		           
					GetLocationV();

	              } else if ($id=="4"){
		             GetPhotos();
	              }
            }
      

			
			
			
		
	
?>