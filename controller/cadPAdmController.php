<?php
require_once '../dto/profissionalDTO.php';
require_once '../dao/profissionalDAO.php';

// recuperei os dados do formulario
$perfil=$_POST["perfil"];
$nomeP = $_POST["nomeP"];
$emailP = $_POST["emailP"];
$celularP = $_POST["celularP"];
$cpfP = $_POST["cpfP"];
$cepP = $_POST["cepP"];
$enderecoP = $_POST["enderecoP"];
$complementoP = $_POST["complementoP"];
$numeroP = $_POST["numeroP"];
$bairroP = $_POST["bairroP"];
$cidadeP = $_POST["cidadeP"];
$estadoP = $_POST["estadoP"];
$usuarioP = $_POST["usuarioP"];
$senhaP = md5($_POST["senhaP"]);


$profissionalDTO = new ProfissionalDTO();
$profissionalDTO->setPerfil_idPerfil($perfil);
$profissionalDTO->setNomeP($nomeP);
$profissionalDTO->setEmailP($emailP);
$profissionalDTO->setCelularP($celularP);
$profissionalDTO->setCpfP($cpfP);
$profissionalDTO->setCepP($cepP);
$profissionalDTO->setEnderecoP($enderecoP);
$profissionalDTO->setComplementoP($complementoP);
$profissionalDTO->setNumeroP($numeroP);
$profissionalDTO->setBairroP($bairroP);
$profissionalDTO->setCidadeP($cidadeP);
$profissionalDTO->setEstadoP($estadoP);
$profissionalDTO->setUsuario($usuarioP);
$profissionalDTO->setSenha($senhaP);
/*echo "<pre>";
var_dump($profissionalDTO);
echo '</pre>';*/
$profissionalDAO = new ProfissionalDAO();
$sucesso = $profissionalDAO->salvarProfissional($profissionalDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/listarAllProfissional.php?msg={$msg}';";
   echo "</script> ";
}
?>

