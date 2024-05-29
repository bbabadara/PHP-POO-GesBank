<?php
class Database {


    public function save($table, $data) {
        // Construire la requête SQL dynamique
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $SQL_INSERT = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($SQL_INSERT);

        // Lier les paramètres
        foreach ($data as $key => &$val) {
            $stmt->bindParam(":$key", $val);
        }

        // Exécuter la requête préparée
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Error inserting record: " . implode(" - ", $stmt->errorInfo()));
        }
    }
}
?>
