<?php

class Database extends PDO{

    /**
     * Constructeur
     */
    public function __construct()
    {
        // PDO::__construct('mysql:host=localhost;dbname=streogww_md','streogww_md','kaka92izi');
        PDO::__construct('mysql:host=localhost;dbname=streogww_md','root','');
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //Prod
        $this->exec('SET CHARACTER SET utf8');
    }

    /**
     * Function inserting an upload in database
     *
     * @param array $params this argument is build with File_uploaded->buildparams private method
     * @return boolean True=> insert, False => failed
     */
    public function insertion($params){
        $sql = 'INSERT INTO videos(video_id,video_name,video_view,video_up_date,video_up_ip) VALUES (:id,:name,:view,:date,:ip);';

        $req = $this->prepare($sql);
        return $req->execute($params);
    }

    /**
     * Function selecting an upload in database
     *
     * @param string $id this argument is a string, the primary key
     * @return array $result this return is an array with the result of database
     */
    public function selection($id){

        $this->addView($id);

        $sql = 'SELECT * from videos WHERE video_id = :id';
        $params = ['id'=>$id];

        $req = $this->prepare($sql);
        $req->execute($params);

        $result = $req->fetch();
        return $result;
    }

    /**
     * Function adding a view in database
     *
     * @param array $id
     * @return boolean True=> update, False => failed
     */
    private function addView($id){
        $sql = "UPDATE videos SET video_view = video_view + 1 WHERE video_id = :id";
        $params = ['id'=>$id];

        $req = $this->prepare($sql);
        return $req->execute($params);
    }
}