<?php
//color
$res="\033[0m";
$res="\033[0m";
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$white= "\033[1;37m";
$syan="\033[1;36m";
$blue="\033[1;94m";
$tim="\033[0;95m";
$fe="\033[1;94m|\033[1;31m🌸\033[1;94m|\033[1;91m● \033[1;32m";
$banner="\r
                $syan ██╗  ██╗ █████╗ ██╗
                 ██║  ██║██╔══██╗██║
                $white ███████║███████║██║
                 ██╔══██║██╔══██║██║
                $tim ██║  ██║██║  ██║██║
                 ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝ \033[0;105m\033[1;93m●\033[1;96mTDS.v1 \033[1;93m●\033[0m 
$yellow <===================================================>
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;92m● \033[1;95mMy Name's: \033[1;97mĐào Trọng Hải ✓
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;92m● \033[1;95mZalo:      \033[1;97m0399315354.
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;92m● \033[1;95mYoutube:   \033[1;97mHải Handsome ✓  
‹—•—•—•—•—•—🌸—•—•—•—•—•—›
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;91m● \033[1;92mTool:       \033[1;97mTrao Đổi Sub.
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;91m● \033[1;92mTrạng Thái: \033[1;97mHoạt Động.
\033[1;94m[\033[1;31m\033[1;92m🌟\033[1;94m]\033[1;91m● \033[1;92mNhiệm Vụ:   \033[1;97mRamdom.         
$yellow <===================================================>\n";
 //sever
 $lock=file_get_contents('');
$keylock=md5(htmlspecialchars($lock));
echo $res;
if (md5('') != $keylock) {
	
	echo $red."Server Đã Ngừng Hoạt Động !!!\n".$red;
exit($red."Vui Lòng Tải Phiên Bản Mới Nhất Tại Kênh Hải Handsome. Hoặc Truy Cập Box: https://zalo.me/g/ttahjt568      !!!\n".$red);

@system('clear');	
}
	else{
		echo $yellow."Server Hoạt Động$res";
echo "\n";
}
 //config  
@system('clear');
echo $banner;
echo"
\033[1;97m╭══════════════════════.🌟.═══════════════════════════════╮
                       \033[1;96m•Login Tool•
\033[1;97m╰═══════════════════════════════.⚡.══════════════════════╯";
	echo"\n";
echo $fe."Tài Khoản TDS : $yellow";
$_SESSION["username"]=trim(fgets(STDIN));
echo $fe."Mật Khẩu TDS : $yellow";
$_SESSION['password']=trim(fgets(STDIN));
echo $fe."Cookie Facebook : $yellow";
$cookie=trim(fgets(STDIN));
echo"$res";
$key=array('key' => 'dcfcd07e645d245babe887e5e2daa016');
$ua='Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36';
//login tds
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
$not1=explode('{"', $source);
$not=explode('"', $not1[1]);
curl_close($ch);

if($not[0]=='success'){
@system('clear');

echo $banner;
echo"
\033[1;97m╭══════════════════════.🌟.═══════════════════════════════╮
                     \033[1;96mCài Đặt Nhiệm Vụ.
\033[1;97m╰═══════════════════════════════.⚡.══════════════════════╯";
	echo $green."                              Login Success\n";
echo "\033[1;37m————————————————————————————————————————————————————————— \n";
echo "\033[1;37m~\033[1;31m[".$syan."1\033[1;31m]\033[1;37m => \033[1;33mChế Độ Auto ".$blue."FOLLOW\n";
echo "\033[1;37m~\033[1;31m[".$syan."2\033[1;31m]\033[1;37m => \033[1;33mChế Độ Auto ".$blue."LIKE\n";
echo "\033[1;37m~\033[1;31m[".$syan."3\033[1;31m]\033[1;37m => \033[1;33mChế Độ Auto ".$blue."PAGE\n";
echo " $fe Chế Độ Của Bạn Là : \033[1;32m";
$chedo = trim(fgets(STDIN));
echo" $fe Nhập Time Delay : \033[1;32m";
$time = trim(fgets(STDIN));
echo" $fe Nhập Số Lần Chạy : \033[1;32m";
$_SESSION['i']=trim(fgets(STDIN));
if($_SESSION['i'] < 0)
{exit($red."Rồi Mày Vô Tool Làm Gì ?\n");}
}
else{exit($red."Đăng Nhập Thất Bại.\n $res");}
//login fb
@system('clear');
echo $banner;
echo"
\033[1;97m╭══════════════════════.🌟.═══════════════════════════════╮
                     \033[1;96mBắt Đầu Chạy
\033[1;97m╰═══════════════════════════════.⚡.══════════════════════╯";
echo"\n";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
curl_exec($ch);
curl_close($ch);

if ($chedo == '2') {
    while (true) {
// get id
$i=0;
while ($i <= $_SESSION['i'] - 0 ){
$i++;
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/like/load.php');
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_POST, count($key));
curl_setopt($ch, CURLOPT_POSTFIELDS, $key);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'TDS.txt');
$tid=curl_exec($ch);
$id1=explode('id="', $tid);
$id=explode('"', $id1[4]);
curl_close($ch);
//follow fb
$url  = "https://mbasic.facebook.com/" . $id[0];
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;36mCooKie Die !!!!\n";
        system("rm TDS.txt");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/like.php?", $data);
        $two  = explode('"', $one[1]);
        
        
        $url = "https://mbasic.facebook.com/a/like.php?" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }

//addxu
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/like/nhantien.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$tdsxu=array('id' => $id[0]);
curl_setopt($ch, CURLOPT_POST,count($tdsxu));
curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$xu=curl_exec($ch);
curl_close($ch);


//checkxu
$url = "https://traodoisub.com/";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TDS.txt"
));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
$stt = $stt + 1;
if($xu=='2') {echo"\033[1;37m♪\033[1;31m[\033[1;32m$stt\033[1;31m]\033[1;91m●\033[1;31m[\033[1;32mLike\033[1;31m]\033[1;37m-››\033[1;32m".$id[0]." \033[1;31m| \033[1;32m+200 \033[1;31m| \033[1;36m$sodu \033[1;32mXu 🌸 \n";
for ($hk=$time;$hk>-1;$hk--){

    echo "\033[1;33m●=>\033[1;31m◉\033[1;33m‿\033[1;31m◉    \033[1;33m-    \033[1;32m Wait  \033[1;33m$hk \033[1;32mgiây.... \033[1;33m!!! "."\r";

    sleep(1);

}
} else {
if($xu=='1') echo"\033[1;37m~\033[1;31m[\033[1;33mLỗi\033[1;31m]$red Thất Bại Job "."\r";}

}

               
                }
} elseif ($chedo == '1') {
    while (true) {
// getid
$i=0;
while ($i <= $_SESSION['i'] - 0 ){
$i++;
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/follow/load.php');
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_POST, count($key));
curl_setopt($ch, CURLOPT_POSTFIELDS, $key);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'TDS.txt');
$tid=curl_exec($ch);
$id1=explode('id="', $tid);
$id=explode('"', $id1[4]);
curl_close($ch);
//follow fb
   $url  = "https://mbasic.facebook.com/" . $id[0];
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;36m© Coppyright PVT\033[1;33m] \033[1;37m=> \033[1;31mPhiên Bản Cookie Hết Hạn !!!!\n";
        system("rm TDS.txt");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/subscribe.php?", $data);
        $two  = explode('"', $one[1]);
    
  //followw
        $url = "https://mbasic.facebook.com/a/subscribe.php?" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }
//addxu
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/follow/nhantien.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$tdsxu=array('id' => $id[0]);
curl_setopt($ch, CURLOPT_POST,count($tdsxu));
curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$xu=curl_exec($ch);
curl_close($ch);

//checkxu
$url = "https://traodoisub.com/";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TDS.txt"
));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
$stt = $stt + 1;
if($xu=='2') {echo"\033[1;37m♪\033[1;31m[\033[1;32m$stt\033[1;31m]\033[1;91m●\033[1;31m[\033[1;32mFollow\033[1;31m]\033[1;37m-››\033[1;32m".$id[0]." \033[1;31m| \033[1;32m+600 \033[1;31m| \033[1;36m$sodu \033[1;32mXu 🌸 \n";
for ($hk=$time;$hk>-1;$hk--){

    echo "\033[1;33m●=>\033[1;31m◉\033[1;33m‿\033[1;31m◉    \033[1;33m-    \033[1;32m Wait  \033[1;33m$hk \033[1;32mgiây.... \033[1;33m!!! "."\r";

    sleep(1);

}
} else {
if($xu=='1') echo"\033[1;37m~\033[1;31m[\033[1;33mLỗi\033[1;31m]$red Thất Bại Job "."\r";}
}
}

} elseif ($chedo == '3') {
    while (true) {
    	// getid
$i=0;
while ($i <= $_SESSION['i'] - 0 ){
$i++;
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/fanpage/load.php');
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_POST, count($key));
curl_setopt($ch, CURLOPT_POSTFIELDS, $key);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'TDS.txt');
$tid=curl_exec($ch);
$id1=explode('id="', $tid);
$id=explode('"', $id1[4]);
curl_close($ch);
//follow fb1
   $url  = "https://mbasic.facebook.com/" . $id[0];
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;36m© Coppyright PVT\033[1;33m] \033[1;37m=> \033[1;31mPhiên Bản Cookie Hết Hạn !!!!\n";
        system("rm TDS.txt");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/profile.php?", $data);
        $two  = explode('"', $one[1]);
        
        $url = "https://mbasic.facebook.com/a/profile.php?" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }

//addxu2
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/ex/fanpage/nhantien.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$tdsxu=array('id' => $id[0]);
curl_setopt($ch, CURLOPT_POST,count($tdsxu));
curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$xu=curl_exec($ch);
curl_close($ch);
//checkxu
$url = "https://traodoisub.com/";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TDS.txt"
));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
$stt = $stt + 1;
if($xu=='2') {echo"\033[1;37m♪\033[1;31m[\033[1;32m$stt\033[1;31m]\033[1;91m●\033[1;31m[\033[1;32mLikePage\033[1;31m]\033[1;37m -›› \033[1;32m".$id[0]." \033[1;31m| \033[1;32m+600 Xu \033[1;31m| \033[1;36m$sodu \033[1;32mXu\033[1;37m 🌸\n";
for ($hk=$time;$hk>-1;$hk--){

    echo "\033[1;33m●=>\033[1;31m◉\033[1;33m‿\033[1;31m◉    \033[1;33m-    \033[1;32m Wait  \033[1;33m$hk \033[1;32mgiây.... \033[1;33m!!! "."\r";

    sleep(1);

}
} else {
if($xu=='1') echo"\033[1;37m~\033[1;31m[\033[1;33mLỗi\033[1;31m]$red Thất Bại Job "."\r";}
}
}
}

?>