<?php 

class database{

	var $host = "webtest91.mysql.database.azure.com";
	var $uname = "webadmin91@webtest91";
	var $pass = "Irfan91!";
	var $db = "test";
	public $conn;
	

	
	
	function __construct(){
		// mysqli_connect($this->host, $this->uname, $this->pass);
		// mysqli_select_db($this->db);
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data(){
	
		$data = mysqli_query($this->conn,"select * from user");
	//	var_dump($data);die();
		if(mysqli_num_rows($data) != 0){
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	}

	function input($nama,$alamat,$usia,$email){
		mysqli_query($this->conn,"insert into user values('$nama','$alamat','$usia','$email','')");
	}

	function hapus($id){
		mysqli_query($this->conn,"delete from user where id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn,"select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$email){
		mysqli_query($this->conn,"update user set nama='$nama', alamat='$alamat', usia='$usia', email='$email'  where id='$id'");
	}

} 

?>