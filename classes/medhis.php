

<?php

class His {
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM qpd_medhis ORDER BY PatientID desc");
		$query->execute();

		return $query->fetchAll();

	}

	public function fetch_data($id){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM qpd_medhis WHERE PatientID = ?");
			$query->bindValue(1, $id);
			$query->execute();

			return $query->fetch();


	}

}
?>






