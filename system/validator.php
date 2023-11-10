
                        <?php
                        session_start();
 			
                         require_once("../class/Conn.class.php");
                         try{

                            if(isset($_POST['entrar'])){
                             
                              /*

                                recebe os dados via metodo post  e faz a comparação com os dados no BD, 
                                para posterior realizar uma validação dos dados

                               
                                */
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                              
                                $verificar = false;
                                $sql = $conn->prepare("SELECT * FROM users WHERE email = :email AND  pass = :pass");
                                $sql->bindValue(":email",$email);
                                $sql->bindValue(":pass",$pass);
                                  $sql->execute();
                                $stmt = $sql->fetch();
                      
                                 /*
                                 verifica se os dados de login e senha estão corretos 
                                 e faz o direcionamento de acordo com o $stmt['nivel']
                                 que no caso é o nivel de acesso do usuário
                                
                                  na atual regra é:

                                 1 - adm
                                 2 - cliente

                                 */
                                  if($stmt['email'] == $_POST['email'] && $stmt['pass'] == $_POST['pass'] && $stmt['nivel'] == 2){ 
                                          $verificar = true;                                       
                                        header("Location: ../././panel/panelCustomer/historicoCompra.php?r=/cliente");
      
                                  }elseif( $stmt['email'] == $_POST['email'] && $stmt['pass'] == $_POST['pass'] && $stmt['nivel'] == 1 ){
                                      $verificar = true;    
                                       header('Location: ../panel/panelAdm/paneladm.php');                                           
                                  } else{
                                    $verificar = false; 
                                    header('Location: ../pages/login.php?r=/erro');  
                                  } 
                                  
                                   /*

                                   váriaveis de sessão, a variavel $_SESSION['id']
                                   está com BUG então por favor manter desabilitado 
    

                                   */
                                    if($verificar){
                                      $_SESSION['logado'] = 'SIM';
                                      $_SESSION['usuario'] = $stmt['email'];
                                      $_SESSION['acesso'] = $stmt['nivel'];
                                      $_SESSION['id'] = $stmt['id'];
                                    }else{
                                      $_SESSION['logado'] = 'NÃO';
                                      header("Location: login.php");
                                    }
                             }
                          }catch(Exception $e){
                             echo"Erro |".$e->getMessage()." contate o desenvolvedor";
                          }
                      
                      ?>





                      
                      ?>


