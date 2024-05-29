<?php
abstract class  Model
{
    protected string $table;
    protected string $class;
    protected string $columns;
    protected string $values;

    public function findAll()
    {
        $SQL_SELECT_ALL = "select * from $this->table";
        $result = $this->openConnexion()->query($SQL_SELECT_ALL);
        // var_dump($result);
        $all = $result->fetchAll(PDO::FETCH_CLASS,$this->class);
        return $all;
    }
    
    protected function openConnexion()
    {
        return new PDO(
            'mysql:host=localhost;dbname=gesbank;charset=utf8',
            'gesbank',
            'gesbankabc123'
        );
    }


}

// public function save(){
//     $SQL_INSERT="insert into $this->table ($this->columns) values ($this->values)";
//     $result = $this->openConnexion()->exec($SQL_INSERT); 
// }