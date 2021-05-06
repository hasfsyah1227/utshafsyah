<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $email = "";
    var $nama = "";
    var $lahir = "";
    var $gender = "";
    var $agama = "";
    var $pekerjaan = "";
    var $database = "profile";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
    }


    function register($username,$email,$password,$nama,$lahir,$gender,$agama,$pekerjaan)
    {
        $insert = mysqli_query($this->koneksi,"insert into acc values ('','$username','$email','$password','$nama','$lahir','$gender','$agama','$pekerjaan')");
        return $insert;
    }

    function login($username,$password,$remember)
    {
        $query = mysqli_query($this->koneksi,"select * from acc where username='$username'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password']))
        {

            if($remember)
            {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($username)
    {
        $query = mysqli_query($this->koneksi,"select * from acc where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}


?>
