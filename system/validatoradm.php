
<?php
  

                        session_start();
      
                         require_once("../class/Conn.class.php");
                         require_once("../pages/verificador.php");
                         try{

                            if(isset($_POST['entrar'])){
                              //pega os dados do usuário no banco de dados
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                              
                                $verificar = $_SESSION['logado'];
                                $sql = $conn->prepare("SELECT * FROM users WHERE email = :email AND  pass = :pass");
                                $sql->bindValue(":email",$email);
                                $sql->bindValue(":pass",$pass);
                                  $sql->execute();
                                $stmt = $sql->fetch();
 
                                 //verifica se os dados de login e senha estão corretos
                                  if($stmt['email'] == $_POST['email'] && $stmt['pass'] == $_POST['pass'] && $stmt['nivel'] == 1 ){

                                    $verificar = true;
                                    header("Location: ../panel/panelAdm/paneladm.php");
                                  }else{
                                    header('Location: ../pages/loginadm.php?login=erro');
                                  } 
                                  
                                   //váriaveis de sessão
                                    if($verificar){
                                      $_SESSION['logado'] = 'SIM';
                                      $_SESSION['usuario'] = $stmt['email'];
                                      $_SESSION['acesso'] = $stmt['nivel'];
                                      //$_SESSION['id_user'] = $stmt['id'];
                                    }else{
                                      $_SESSION['logado'] = 'NÃO';
                                      header("Location: login.php");
                                    }
                             }
                          }catch(Exception $e){
                             echo"Erro |".$e->getMessage()." contate o desenvolvedor";
                          }
                      
                      ?>


