<?php
//
//namespace Correct_Assignment1;
//require_once "connect.php";
//
//class USERs extends Model
//{
//    public $id;
//    public $name;
//    public $email;
//    public $password;
//
//    public static $table = "users";
//
//    private $conn;
//
//    /**
//     * USERs constructor.
//     * @param $id
//     * @param $name
//     * @param $email
//     * @param $password
//     * @param $conn
//     */
//    public function __construct($id, $name, $email, $password, $conn)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->email = $email;
//        $this->password = $password;
//        $this->conn = $conn;
//    }
//
//    public static function getTable()
//    {
//        return self::$table;// de goi static dung self ::
//    }
//
//    public function getConn()
//    {
//        if (is_null($this->conn)) {
//            $this->conn = connect();
//        }
//        return $this->conn;
//    }
//
//    public function getUsesr()
//    {
//        $sql = "SELECT * FROM user";
//        $rs = $this->getConn()->query($sql);
//        return toArray($rs);
//    }
//
//    public function save()// la su ket hop của insert và update
//    {
//        $sql_text = "INSERT INTO " . self::getTable() . "(id, name , email, passwosd) VALUES(" . $this->id . " ,' " . $this->name . " ','" . $this->email . ",'" . $this->password . ")
//        ON DUPLICATE KEY UPDATE name = '" . $this->name . "',emall= '" . $this->email . "', password = '" . $this->password . "';";
//        $this->getConn()->query($sql_text);
//        try {
//            $this->getConn()->query($sql_text);
//        }catch (\Exception $e){
//            die($e->getMessage());
//        }
//    }
//    public function find($id){
//        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE id = ".$id;
//        $ary = $this->toArray($this->getConn()->query($sql_text));
//        if(count($ary) > 0){
//            $data = $ary[0];
//            return new User($data["id"],$data["name"],$data["email"],$data["password"]);
//        }
//        return null;
//    }
//}

namespace Correct_Assignment1;

use lib\Connector;
use lib\Model;

require_once "Library\Model.php";

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;

    protected $table = "users";

    public function __construct($id = null, $name = null, $email = null, $password = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM " . $this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function all()
    {
        $sql = "SELECT * FROM " . $this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }


    public function save()// la su ket hop của insert và update
    {
        $sql_text = "INSERT INTO " . self::getTable() . "(id, name , email, passwosd) VALUES(" . $this->id . " ,' " . $this->name . " ','" . $this->email . ",'" . $this->password . ")
        ON DUPLICATE KEY UPDATE name = '" . $this->name . "',emall= '" . $this->email . "', password = '" . $this->password . "';";
        $this->getConn()->query($sql_text);
        try {
            $this->getConn()->query($sql_text);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($id)
    {
        $sql_text = "SELECT * FROM " . $this->getTable() . " WHERE id = " . $id;
        $ary = $this->toArray($this->getConn()->query($sql_text));
        if (count($ary) > 0) {
            $data = $ary[0];
            return new User($data["id"], $data["name"], $data["email"], $data["password"]);
        }
        return null;
    }

    public function delete()
    {
        $sql_text = "DELETE FROM " . $this->getTable() . " WHERE id = " . $this->id;
        $this->getConn()->query($sql_text);
    }
}