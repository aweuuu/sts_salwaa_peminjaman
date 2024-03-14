<?php 

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'sts_salwa');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ("Failed to connect to MySQL:" . mysqli_error ($dbconnect));
function kuery($kueri)
{
    global $dbconnect;
    $result=mysqli_query($dbconnect,$kueri);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[]=$row;
    }
    return $rows;
}

  

    function inputdata($inputdata)
    {
        global $dbconnect;
        $sql=mysqli_query($dbconnect,$inputdata);
        return $sql;
    }

    function editdata($tablename,$id)
          {
            global $dbconnect;
            $hasil=mysqli_query($dbconnect, "select * from $tablename where id = $id");
            return $hasil;
          }

          function updatedata($table,$data,$id)
          {
            global $dbconnect;
            $sql = "UPDATE $table SET nama_barang  = '$data' WHERE id = '$id'";
            $hasil=mysqli_query($dbconnect,$sql);
            return $hasil;
          } 

function Delete($barang,$id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect,"DELETE FROM $barang WHERE id='$id'");
    return $hasil;
}

function checkLogin($username,$password){
    global $dbconnect;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($dbconnect,"SELECT * from user where username='$uname' and password='$upass'");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        return true;
    }
    else {
        return false;
    }
}

?>