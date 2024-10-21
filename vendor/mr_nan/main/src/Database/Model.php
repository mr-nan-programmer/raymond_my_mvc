<?php

namespace MrNan\Main\Database;
//crud  -> Create Read Update Delete
use PDO;
use PDOStatement;

class Model extends Database
{
    protected array|string $selectedItems;
    protected array $whereList=[];
    protected int $limit;
    protected array $valuesForBind =[];
    public PDOStatement $statement;
    protected  $fetchMethod;
    public function update(int $id,array $data) :bool
    {

        $dataKeys=array_keys($data);
        $fields_update=array_map(fn($key)=>"$key=:$key",$dataKeys);
        $fields_update=implode(",",$fields_update);
        $this->statement= $this->pdo->prepare("UPDATE $this->tablename SET $fields_update WHERE id=:id");
        $this->bindvalues(array_merge($data,['id'=>$id]));
        return $this->statement->execute();
//UPDATE PRUDOCTS SET TITLE =
    }
    public function where(string $name , $value, string $operator = '=')
    {
    $this->whereList[]="$name $operator $value :name";
    $this->valuesForBind[$name]=$value;
    $this->bindValue();
        return $this;

    }
    public function limit(int $limit) :self
    {
        $this->limit=$limit;
        return $this;

    }
    public function select() :self
    {

    $this->selectedItems=func_get_args();
    return $this;
    }
    public function creat($data) :bool {


        $Key_Data=array_keys($data);
        $fileds=implode(",",$Key_Data);
        $params =implode(",",array_map(fn($keys)=>":$keys", $Key_Data)  );
        $this->statement= $this->pdo->prepare("INSERT INTO {self::TABLENAME}   ($fileds) values ($params)");
        $this->bindvalues($data);
    }
    public function find($value,$filed = 'id')
    {
    return $this->where($filed,$value)->first() ;
    }
    public function delete(int $id) :bool
    {
        $this->statement=$this->pdo->prepare("DELETE FROM $this->tablename WHERE id=:id");
     $this->bindvalues(['id'=>$id]);
     return $this->statement->execute();
    }
    public function result() :self
{
    $query=["SELECT"];
    $query[] = count($this->selectedItems)? implode(',',$this->selectedItems):"*";
    $query[] ="FROM {$this->tablename}";
    if(count($this->whereList))
        $query[]= $this->prepareWhereStatment();
    $this->statement= $this->pdo->prepare(implode(" ",$query));
    if (!empty($this->limit))
        $query[]="LIMIT {$this->limit}";
    $this->statement->execute();
    return $this;
}


protected function prepareWhereStatment() :string
{
//    "WHERE id= :id AND title = :title"
    $query[]="WHERE";
    foreach ($this->whereList as $key=>$value){
        if($key !==array_key_first($this->whereList)) $query[]="AND";
        $query[]=$value;
    }
    return implode(" ",$query);
}


    public function get () : bool|array
    {
      return  $this->result()->fetch('fetch');

    }

    public function first()
    {
        return  $this->limit(1)->result()->fetch('fetch');


    }
    public function fetch($fetchMethod='fetchAll')
    {

        return $this->statement->fetch($this->fetchMethod);

    }
    protected function bindvalues(?array $data= null) : void
    {
        if($data){
            $this->valuesForBind =array_merge($this->valuesForBind,$data);
        }
        foreach ($this->valuesForBind as $key => $value) {
            $this->statement->bindValue($key, $value);
        }
    }
}