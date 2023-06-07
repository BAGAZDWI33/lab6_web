<?php



class Database {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function executeQuery($sql) {
        $result = $this->conn->query($sql);
        if($result === false) {
            die("Query error: " . $this->conn->error);
        }
        return $result;
    }

    public function executeNonQuery($sql) {
        $result = $this->conn->query($sql);
        if($result === false) {
            die("Query error: " . $this->conn->error);
        }
        return $this->conn->affected_rows;
    }

    public function getInsertId() {
        return $this->conn->insert_id;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
