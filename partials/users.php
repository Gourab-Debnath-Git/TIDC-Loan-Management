<?php
require_once 'connect.php';
class Users extends Database {
    protected $tablename = 'loandata';
    // Function to add user
    public function add($data){
        if(!empty($data)){
            $fields = $placeholders=[];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholders[] = ":{$field}";
        }
    }
    $sql = "INSERT INTO {$this->tablename} 
                (" . implode(',', $fields).")
                VALUES 
                (" . implode(',', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
            $this->conn->rollback();
        }
    }
    // Function to get rows
    public function getRows($start = 0, $limit = 10) {
        $sql = "SELECT * FROM {$this->tablename} ORDER BY SlNo ASC LIMIT {$start}, {$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }
    // Function to add single row
    public function getRow($field, $value) {
        $sql = "SELECT * FROM {$this->tablename} WHERE {$field} = :value";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':value', $value, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;
    }
    // Function to count number of rows
    public function getCount() {
        $sql = "SELECT COUNT(*) as pcount FROM {$this->tablename}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }
     // function to update 
     public function update($data, $SlNo) {
        $fields = ""; 
        if (!empty($data)) {
            $x = 1;
            $fieldsCount = count($data);    
            foreach ($data as $field => $value) {
                $fields .= "{$field}=:{$field}";
                if ($x < $fieldsCount) {
                    $fields.= ",";
                }
                $x++;
            }
        }
        $sql = "UPDATE {$this->tablename} SET {$fields} WHERE SlNo=:SlNo";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $data['SlNo'] = $SlNo;
            $stmt->execute($data);
            $this->conn->commit();
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
            $this->conn->rollback();
        }
    }

    // function to delete 

    // function to search 





}
