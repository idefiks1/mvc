<?phpini_set('error_reporting', E_ALL);ini_set('display_errors', 1);ini_set('display_startup_errors', 1);include 'PHPMailer-master/PHPMailerAutoload.php';    class UserController    {        public function login()        {            if(!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['email']))            {                $usersModel = new UsersModel();                $user = $usersModel->checkLogin($_POST['login'], $_POST['pass'], $_POST['email']);                     if(!empty($user))                {                    header("Location: /");                }            }            include_once(APP_PATH.'/views/pages/user/login.php');        }        public function loginCheck()        {            if(!empty($_POST['login']))            {                $loginCheck = new UsersModel();                $num = $loginCheck->checkLoginDb($_POST['login']);                if (!empty($num))                {                    $json['success'] = false;                }                else                {                    $json['success'] = true;                }            }            else             {                $json['success'] = false;               }            if (empty($_POST['email']))            {                $json['success2'] = false;            }            else            {                $json['success2'] = true;                                if (!preg_match("/[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $_POST['email']))                 {                    $json['success2'] = false;                }                $emailCheck = new UsersModel();                $numEmail = $emailCheck->CheckEmailDb($_POST['email']);                if (!empty($numEmail))                {                    $json['success2'] = false;                    $json['success1'] = false;                  }                else                {                    $json['success2'] = true;                }               }            echo json_encode($json);        }        public function reg()        {            if(!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['email']))            {                $usersModel = new UsersModel();                $username=$_POST['login'];                $email = $_POST['email'];                $hash = md5(rand(0,1000));                $user = $usersModel->addUser($_POST['login'], $_POST['pass'], $_POST['email'],$hash);                $usrId = new UsersModel();                $id = $usrId->getLastId();                $imgPathSave = '/data/img/'.strval($id).'.jpg';                $img = new UsersModel();                $imgPath = $img->addImgUsr($imgPathSave,$id);                $nameLogin =  $_POST['login'];                move_uploaded_file($_FILES['photo']['tmp_name'], APP_PATH."$imgPathSave");                $link = $_SERVER['SERVER_NAME'];                $mail = new PHPMailer;                $mail->isSMTP();                                      // Set mailer to use SMTP                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers                $mail->SMTPAuth = true;                               // Enable SMTP authentication                $mail->Username = 'idefiks1@gmail.com';                 // SMTP username                $mail->Password = 'nrkrM9DvX7737483I';                           // SMTP password                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted                $mail->Port = 587;                                    // TCP port to connect to                $mail->setFrom('dev@vagrant.dev', 'Mailer');                $mail->addAddress($email, $username);                $mail->isHTML(true);                                  // Set email format to HTML                $mail->Subject = 'Signup | Verification';                $mail->Body    = '                                 Thanks for signing up!                Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.                <br>                 <br>------------------------                <br>Username: '.$username.'                <br>Password: '.$_POST['pass'].'                <br>------------------------                <br>Please click this link to activate your account:                <br><a href="http://'.$link.'/user/verify?email='.$email.'&hash='.$hash.'">http://'.$link.'/user/verify?email='                .$email.'&hash='.$hash.'</a>'.'';?>                <?php $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';                if(!$mail->send())                 {                    echo 'Message could not be sent.';                    echo 'Mailer Error: ' . $mail->ErrorInfo;                } else                 {                    echo 'Message has been sent';                }                header("Location: /");            }            include_once(APP_PATH.'/views/pages/user/reg.php');        }        public function addComment()        {            $img = new UsersModel();            $imgId = $img->getIduser($_SESSION['id']);            $imgUrl = $img->getImage($imgId);            if(!empty($_POST['textComment']))            {                $usersModel = new UsersModel();                $date = date("Y-m-d H:i:s");                $idUser = $usersModel->getIduser($_SESSION['id']);                $user = $usersModel->addComment($_POST['textComment'],$idUser, $date);                                if(!empty($user)){                    header("Location: /");                }            }            include_once(APP_PATH.'/views/pages/user/addComment.php');        }        public function editComment()        {            $img = new UsersModel();            $imgId = $img->getIduser($_SESSION['id']);            $imgUrl = $img->getImage($imgId);            if(!empty($_GET['id']))            {                $idComment = $_GET['id'];                $usersModel = new UsersModel();                $textComment = $usersModel->editComment($idComment);                 if(isset($_POST['submit']))                {                    $usersModel = new CommentModel();                    $save = $usersModel->saveComment($_POST['textComment'], $_GET['id']);                    header("Location: /");                }            }            else            {                header("Location: /");            }        include_once(APP_PATH.'/views/pages/user/editComment.php');        }        public function verify()        {            if(empty($_GET['email']) or empty($_GET['hash']))            {                                echo "Error! Maybe you verification is done. Please ";?>                <a href = /user/login >Login!</a>                <?php                 echo "<br> Or input data are wrong!. Please, register!";?>                <a href = /user/reg >Register!</a>                <?php                die();            }            $email = $_GET['email'];            $hash = $_GET['hash'];                        if (!empty($_GET['email']) && !empty($_GET['hash']))            {                $activecheck = new UsersModel();                $emailArray = $activecheck->checkActive($email,$hash);                //var_dump($emailArray);                //die();                $Email = $emailArray['email'];                $Hash = $emailArray['hash'];                $Active = $emailArray['active'];                if ( (!empty($Email)) && (!empty($Hash)) &&  ($Active == '0'))                {                    $active = new UsersModel();                    $emailArray = $active->Active($email,$hash);                    $link = "/user/login";                    $message = "You account was activate. Thank you for activation.Please ";                    $msgLink = "Login!";                          }                else                {                    $message = "Link is not active! Please ";                    $link = "/user/reg";                    $msgLink = "Register!";                }            }        include_once(APP_PATH.'/views/pages/user/verify.php');        }        public function logout()        {            unset($_SESSION['id']);            header("Location: /");        }     }?>