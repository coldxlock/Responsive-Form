<?php 
require_once '../config.php';

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;


$sql = "SELECT * FROM feedback where id = ".$_POST['feedback_id'] ;

$result = mysqli_query($conexao_bd,$sql);

foreach ($result as $key => $value) {
    $reg = $value;
    // echo "<br>".$value['nome'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequência / Avaliação da Aula</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        /* input, select, textarea {

            border:0 !important;

        } */
    </style>
</head>
<body>
    <div class="container">
        <div class="section-container">        
            <h1 style="font-size:24px">Relatório de Frenquência por Aluno</h1>  
            <p >Aluno: <?= $reg['nome'] ?></p>      
            <div>
                <a style="display: flex;    
                    justify-content: flex-end;" href="select/sel-aluno.php"  >Voltar</a>     
            </div>
            
            <form action="salvar.php" method="post">
                <div class="row">
                    <div class="column">
                        <label for="name">Matrícula</label>
                        <input type="text" name="matricula"  placeholder="" value="<?= $reg['matricula'] ?>" required>
                    </div>
                    <div class="column">
                        <label for="name">Nome completo</label>
                        <input type="text" name="nome"  placeholder=""  value="<?= $reg['nome'] ?>" required>
                    </div>               
                </div>
                
                <div class="row">
                    <div class="column">
                        <label for="subject">Curso</label>
                        <br>
                        <select id="subject"  name="curso" id="" required class="select">                        
                            
                            <option <?php echo $selected = ($reg['curso'] == "direito")?"selected":"" ?>     value="direito">Direito</option>
                            <option <?php echo $selected = ($reg['curso'] == "Psicologia")?"selected":"" ?>     value="Psicologia">Psicologia</option>
                            <option <?php echo $selected = ($reg['curso'] == "Pedagogia")?"selected":"" ?>     value="Pedagogia">Pedagogia</option>
                            <option <?php echo $selected = ($reg['curso'] == "fisioterapia")?"selected":"" ?>     value="fisioterapia">Fisioterapia</option>
                            <option <?php echo $selected = ($reg['curso'] == "servico_social")?"selected":"" ?>     value="servico_social">Serviço Social</option>
                            <option <?php echo $selected = ($reg['curso'] == "adm")?"selected":"" ?>     value="adm">Administração</option>
                            <option <?php echo $selected = ($reg['curso'] == "educacao_fisica")?"selected":"" ?>     value="educacao_fisica">Educação Física</option>
                            <option <?php echo $selected = ($reg['curso'] == "fonoaudiologia")?"selected":"" ?>     value="fonoaudiologia">Fonoaudiologia</option>
                            <option <?php echo $selected = ($reg['curso'] == "ciencias_contabeis")?"selected":"" ?>     value="ciencias_contabeis">Ciências Contábeis</option>
                            <option <?php echo $selected = ($reg['curso'] == "sistemas")?"selected":"" ?>     value="sistemas">Sistemas de Informação</option>
                        </select>
                        
                        
                    </div>
                    <div class="column">
                        <label for="name">Disciplina</label>
                        <input type="text" name="disciplina" value="<?= $reg['disciplina'] ?>" placeholder="" required>
                    </div>  
                </div>
                <h3 style="
                    margin-bottom: 10px;            
                    padding-top: 42px;">AVALIAÇÃO DA DISCIPLINA</h3>
                <style>
                    .row > .column label {
                        margin-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="column">
                        <label for="issue">O DESAFIO PROPOSTO PELO PROFESSOR PARA A AULA TEVE RELAÇÃO 
                        COM O CONTEÚDO MINISTRADO? *</label>                    
                        <label class="container-radio">
                            SIM
                            <input type="radio"  id="teste1" <?php echo $checked = ($reg['pergunta1']=="sim")?"checked":""  ?> name="pergunta1" required value="sim">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">
                            NÃO
                            <input type="radio" id="teste2" <?php echo $checked = ($reg['pergunta1']=="nao")?"checked":""  ?> name="pergunta1" value="nao">
                            <span class="checkmark"></span>
                        </label>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">DESTAQUE OS PONTOS PRINCIPAIS COMPREENDIDOS POR VOCÊ NA AULA DE HOJE. *</label>
                        <label class="container-radio">
                            SIM
                            <input type="radio"  name="pergunta2" <?php echo $checked = ($reg['pergunta2']=="sim")?"checked":""  ?> required value="sim">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">
                            NÃO
                            <input type="radio" name="pergunta2" <?php echo $checked = ($reg['pergunta2']=="nao")?"checked":""  ?> value="nao">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">O DIÁLOGO RELACIONADO AO DESAFIO PROPOSTO PARA A AULA LHE INSERIU JUNTO AO CONTEÚDO 
                        PROPOSTO DE FORMA SIGNIFICATIVA? *</label>
                        <textarea name="pergunta3"  id="issue" required placeholder="Sua resposta" rows="5"><?= $reg['pergunta3'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">O OBJETIVO (APRESENTAÇÃO) APRESENTADO PELO PROFESSOR NA AULA FOI ALCANÇADO? *</label>
                        <label class="container-radio">
                            SIM
                            <input type="radio"  name="pergunta4" <?php echo $checked = ($reg['pergunta4']=="sim")?"checked":""?>  required value="sim">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">
                            NÃO
                            <input type="radio" name="pergunta4" <?php echo $checked = ($reg['pergunta4']=="sim")?"checked":""?> value="nao">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>            
                <div class="row">
                    <div class="column">
                        <label for="issue">A METODOLOGIA UTILIZADA NA AULA DE HOJE FOI SATISFATÓRIA PARA COMPREENDER, APROFUNDAR E APLICAR O CONTEÚDO? *</label>
                        <label class="container-radio">
                            SIM
                            <input type="radio"  name="pergunta5" <?php echo $checked = ($reg['pergunta5']=="sim")?"checked":""?>  required value="sim">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">
                            NÃO
                            <input type="radio" name="pergunta5" <?php echo $checked = ($reg['pergunta5']=="nao")?"checked":""?>  value="nao">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">COMO VOCÊ AVALIA A AULA DE HOJE? *</label>
                        <label class="container-radio">
                            SATISFATÓRIA
                            <input type="radio"  name="pergunta6" <?php echo $checked = ($reg['pergunta6']=="satisfatorio")?"checked":""?>  required value="satisfatorio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">
                            NÃO SATISFATÓRIA
                            <input type="radio" name="pergunta6" <?php echo $checked = ($reg['pergunta6']=="nao-satisfatorio")?"checked":""?>  value="nao-satisfatorio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">O PROFESSOR LANÇOU O DESAFIO PARA A AULA SEGUINTE? SE A RESPOSTA FOR SIM, QUAL FOI O DESAFIO? *</label>
                        <textarea name="pergunta7"  id="issue" required placeholder="Sua resposta" rows="5"><?= $reg['pergunta7'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">DESTAQUE OS PONTOS PRINCIPAIS COMPREENDIDOS POR VOCÊ NA AULA DE HOJE. *</label>
                        <textarea name="pergunta8" id="issue" required placeholder="Sua resposta" rows="5"><?= $reg['pergunta8'] ?></textarea>
                    </div>
                </div> 
                <!-- <button style="cursor: pointer;">Enviar</button> -->
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('input').attr('disabled',"true");
            $('select').attr('disabled',"true");
            $('textarea').attr('disabled',"true");
            

            
        });

    </script>
</body>
</html>