<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequência / Avaliação da Aula</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Frequência / Avaliação da Aula</h1>
        <!-- <p>Have any questions or suggestions? Drop us a message</p> -->
        <form action="salvar.php" method="post">
            <div class="row">
                <div class="column">
                    <label for="name">Matrícula</label>
                    <input type="text" name="matricula" id="name" placeholder="" required>
                </div>
                <div class="column">
                    <label for="name">Nome completo</label>
                    <input type="text" name="nome" id="name" placeholder="" required>
                </div>               
            </div>
            
            <div class="row">
                <div class="column">
                    <label for="subject">Curso</label>
                    <br>
                    <select id="subject"  name="curso" id="" required class="select">                        
                        <option value="">Selecione um curso</option>
                        <option value="direito">Direito</option>
                        <option value="Psicologia">Psicologia</option>
                        <option value="Pedagogia">Pedagogia</option>
                        <option value="fisioterapia">Fisioterapia</option>
                        <option value="servico_social">Serviço Social</option>
                        <option value="adm">Administração</option>
                        <option value="educacao_fisica">Educação Física</option>
                        <option value="fonoaudiologia">Fonoaudiologia</option>
                        <option value="ciencias_contabeis">Ciências Contábeis</option>
                        <option value="sistemas">Sistemas de Informação</option>
                    </select>
                    
                    
                </div>
                <div class="column">
                    <label for="name">Disciplina</label>
                    <input type="text" name="disciplina"  placeholder="" required>
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
                        <input type="radio"  name="pergunta1" required>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio">
                        NÃO
                        <input type="radio" name="pergunta1" >
                        <span class="checkmark"></span>
                    </label>
                    
                </div>
            </div>
            
            <div class="row">
                <div class="column">
                    <label for="issue">DESTAQUE OS PONTOS PRINCIPAIS COMPREENDIDOS POR VOCÊ NA AULA DE HOJE. *</label>
                    <label class="container-radio">
                        SIM
                        <input type="radio"  name="pergunta2" required>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio">
                        NÃO
                        <input type="radio" name="pergunta2" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">O DIÁLOGO RELACIONADO AO DESAFIO PROPOSTO PARA A AULA LHE INSERIU JUNTO AO CONTEÚDO 
                    PROPOSTO DE FORMA SIGNIFICATIVA? *</label>
                    <textarea name="pergunta3"  id="issue" required placeholder="Sua resposta" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">O OBJETIVO (APRESENTAÇÃO) APRESENTADO PELO PROFESSOR NA AULA FOI ALCANÇADO? *</label>
                    <label class="container-radio">
                        SIM
                        <input type="radio"  name="pergunta4"  required>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio">
                        NÃO
                        <input type="radio" name="pergunta4" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>            
            <div class="row">
                <div class="column">
                    <label for="issue">A METODOLOGIA UTILIZADA NA AULA DE HOJE FOI SATISFATÓRIA PARA COMPREENDER, APROFUNDAR E APLICAR O CONTEÚDO? *</label>
                    <label class="container-radio">
                        SIM
                        <input type="radio"  name="pergunta5"  required>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio">
                        NÃO
                        <input type="radio" name="pergunta5" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">COMO VOCÊ AVALIA A AULA DE HOJE? *</label>
                    <label class="container-radio">
                        SATISFATÓRIA
                        <input type="radio"  name="pergunta6"  required>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio">
                        NÃO SATISFATÓRIA
                        <input type="radio" name="pergunta6" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">O PROFESSOR LANÇOU O DESAFIO PARA A AULA SEGUINTE? SE A RESPOSTA FOR SIM, QUAL FOI O DESAFIO? *</label>
                    <textarea name="pergunta7"  id="issue" required placeholder="Sua resposta" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">DESTAQUE OS PONTOS PRINCIPAIS COMPREENDIDOS POR VOCÊ NA AULA DE HOJE. *</label>
                    <textarea name="pergunta8" id="issue" required placeholder="Sua resposta" rows="3"></textarea>
                </div>
            </div>
            <button style="cursor: pointer;">Enviar</button>
        </form>
    </div>
</body>
</html>