<?php 
    require_once '../../config.php';
    $data_hoje = date("Y-m-d");

	$sql = "SELECT id, nome, disciplina, curso FROM feedback where data_criacao like '$data_criacao%'" ;

	$result = mysqli_query($conexao_bd,$sql);

    foreach ($result as $key => $value) {
        $reg[] = $value;
        $option .= "<option value=".$value['id'].">".$value['nome']." / Disciplina: ".$value['disciplina']."</option>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="../../style.css">
    <title>Rel. por aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body style="overflow: hidden;">
    <div class="container">
        <h1 style="font-size: 24px" >Relatório de frequência</h1>  
        <form action="../rel-aluno.php" method="post" style="width:70%;">        
            <input type="date" name="data" value="<?= $data_hoje ?>" >
            <br>
            <br>
            
            <select class="js-aluno" name="feedback_id" style="width:100%;">                            
                <option value="" required>Selecione um aluno</option>
                <?php echo $option;  ?>
            </select>
            <br>
            <br>
            <div style="display: flex; justify-content: flex-end;">
                <button id="pesquisar" type="submit">Pesquisar</button>
            </div>
            
        </form>
        
        
        <script>
            // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
                $('.js-aluno').select2();
                // $('.js-disciplina').select2();

                $('input[name="data"]').on("change", function (resp) {
                    // alert('teste');
                    $(".js-aluno").html('<option value="">Carregando</option>');                       
                    carregarAluno();
                    
                });


                function carregarAluno() {
                    var data_criacao = $('input[name="data"]').val();
                    $.ajax({
                        type: "post",
                        url: "ajax/carregarAluno.php",
                        data: {data_criacao: data_criacao},
                        dataType: "json",
                        async: true,
                        success: function (response) {
                            // data = JSON.parse(response);
                            $(".js-aluno").html(response.option);
                            // carregarDisciplina();                        
                        }
                    });
                }

                $("#pesquisar").on("click", function (e) {
                    e.preventDefault();                
                    if ($('.js-aluno').val() === ''){
                        alert("Selecione um aluno!");
                    } else {
                        $('form').submit();
                    }
                });
            
            });
        </script>     
    </div>
</body>
</html>

