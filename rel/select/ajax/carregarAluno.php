<?php 

    require_once '../../../config.php';

    $data_criacao = $_POST['data_criacao'];
  
    $sql = "SELECT id, nome, disciplina, curso FROM feedback where data_criacao like '$data_criacao%'" ;

    $result = mysqli_query($conexao_bd,$sql);
    
    $option = "<option required value=''>Selecione um aluno</option>";
    
    foreach ($result as $key => $value) {
        $option .= "<option value=".$value['id'].">".$value['nome']." / Disciplina:".$value['disciplina']."</option>";
    }
    $r['option'] = $option;

    // foreach ($result as $key => $value) {
    //     $r[] = $value;
    // }

    echo json_encode($r);
?>