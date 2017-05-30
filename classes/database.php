<?php 
include('config/config.php');

class Database{

    public function connect(){
        $conn=@mysql_connect(HOST_NAME,DB_USER,DB_PASSWORD) or die('Connection error!');
        mysql_select_db(DB_NAME) or die('Database error!');
        if(!$conn){
            echo "Connection failed";
        }
    }
    
    public function insert($username,$password,$full_name){
       $check=$this->login($username,$password); 
       if(!$check){
       $sql="INSERT INTO ".TBL_USERS."(full_name,user_name,user_password)
            VALUES('".$full_name."','".$username."','".$password."')";
            $query=mysql_query($sql) or die('Failed') ;
            if(!$query){
                return false;
            } 
       }else{
           echo "Sorry user already existed on same information ";
       }
    }
    public function login($username,$password){
      $sql="SELECT * FROM ".TBL_USERS."
            WHERE user_name='".$username."' AND user_password='".$password."'";
            $query=mysql_query($sql) or die('Login failed');
            $record=mysql_fetch_array($query);
            if(mysql_num_rows($query)>0){
                return $record;
            }else{
                return 0;
            } 
    }
    public function get_user($id){
        $sql="SELECT * FROM ".TBL_USERS."
            WHERE id=".$id;
            $query=mysql_query($sql) or die('Login failed');
            $record=mysql_fetch_array($query);
            if(mysql_num_rows($query)>0){
                return $record;
            }else{
                return 0;
            } 
    }

    public function update($full_name,$password,$id){
       if($password!=''){
         $sql= "UPDATE ".TBL_USERS." 
             SET full_name='".$full_name."', 
             user_password='".$password."'
             WHERE id=".$id;    
       
       }else{
          $sql= "UPDATE ".TBL_USERS." 
             SET full_name='".$full_name."' 
             WHERE id=".$id;  
       }
       $query=mysql_query($sql) or die('Updation failed');
       if($query){
           return true;
       }
    }
    public function delete($id){
        $sql= "DELETE FROM ".TBL_USERS." 
               WHERE id=".$id;  
       $query=mysql_query($sql) or die('Deletion failed');
       if($query){
           return true;
       }
    }
}
?>