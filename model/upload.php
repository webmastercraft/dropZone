<?php
require_once 'database.php';

class File_uploaded{
    private $index_path; //Root server
    private $storeFolder; //Folder where uloaded files are stored
    private $ds; //Directory separator
    private $file_array; //content of $_FILES['file']
    private $params;
    private $id;

    /**
     * Constructor
     *
     * @param STRING $index_path Index path (dirname(__FILE__)) is passed by controller function.
     * Controller function is called in index
     */
    public function __construct($index_path,$id){
        $this->index_path = $index_path;
        $this->storeFolder = 'uploads';
        $this->ds = DIRECTORY_SEPARATOR;
        $this->id = $id;
        $this->params = 0;

        //Verification of void request
        if(!empty($_FILES)){
           $this->file_array = $_FILES['file']; 
        }
        else
        {
            header("HTTP/1.0 400 Bad Request",$http_response_code = 400);
        }
        
    }

    /**
     * This function builds caracteristics of file for database. UTC date format
     *
     * @return array $params
     */
    private function build_params(){
        $params = [
            'id'=>$this->id,
            'name'=>$this->file_array['name'],
            'view'=>0,
            'date'=>date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR']
        ];

        return $params;
    }

    /**
     * Function moves file from temp folder to storage
     *
     * @return void
     */
    public function filetreatement(){
        
        $tempFile = $this->file_array['tmp_name'];
        $targetFile =  $this->index_path.$this->ds.$this->storeFolder.$this->ds.$this->id.'.mp4';
    
        $test_func = move_uploaded_file($tempFile,$targetFile);

        return $test_func;


        /*if($test_func === false){
            header("Location:");
        }*/
    }

    /**
     * Function add file in database. Called after filetreatment() method in controller.
     *
     * @return boolean True if success, False if fail
     */
    public function addFile(){
        $db = new Database();

        $params = $this->build_params();
        return $db->insertion($params);
    }

    /**
     * cookies()
     * Function set cookie for last upload video
     *
     * @return boolean true
     */
    public function cookies(){
        setcookie('last_upload',$this->id,time()+60*60*24*21); //3Weeks
        return true;
    }
}