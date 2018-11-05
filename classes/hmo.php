<?php

class trans {
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM qpd_trans WHERE trans_type = 'ACCOUNT' AND bill_to LIKE 'INTELLICARE%' OR bill_to LIKE 'VALUCARE%' OR bill_to LIKE 'COCOLIFE%' OR bill_to LIKE 'AVEGA%' OR bill_to LIKE 'EASTWEST%' ORDER BY TransactionID");
		$query->execute();

		return $query->fetchAll();

	}

	public function fetch_data($id){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM qpd_trans WHERE TransactionID = ?");
			$query->bindValue(1, $id);
			$query->execute();

			return $query->fetch();


	}


}
?>
