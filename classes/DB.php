<?php


class DB
{
    private $host;
    private $login;
    private $password;
    private $dataBase;

    public function __construct($host='localhost',$login='root',$password='death9393',$dataBase='test')
    {
        $this->host=$host;
        $this->login=$login;
        $this->password=$password;
        $this->dataBase=$dataBase;
    }

    private function connectToDB()
    {
        return mysqli_connect($this->host,$this->login,$this->password,$this->dataBase);
    }

    public function queryAll($sql,$class='stdClass')
    {
        $resource = $this->connectToDB();
        $result= mysqli_query($resource,$sql);

        if (false===$result)
        {
          return false;
        }

        $tmp=[];

        while ($row = mysqli_fetch_object($result,$class))
        {
            $tmp[]=$row;
        }

        return $tmp;
    }

    public function queryOne($sql,$class='stdClass')
    {
        return $this->queryAll($sql,$class)[0];
    }


}

