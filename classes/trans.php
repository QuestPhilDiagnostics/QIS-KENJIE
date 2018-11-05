<?php

class trans {
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT f.PatientID, f.CompanyName, f.Position, f.FirstName, f.MiddleName, f.LastName, f.Age, f.Gender, f.ContactNo,t.TransactionID, t.TransactionDate, t.TransactionType, t.ItemName, t.ItemDescription, t.ItemPrice, t.GrandTotal FROM qpd_patient f, qpd_trans t WHERE f.PatientID = t.PatientID ORDER BY t.TransactionID");
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
