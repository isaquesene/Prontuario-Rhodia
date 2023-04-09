<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estyle.css">
    <title>Document</title>
</head>
<body> 
    <div class="container">
        <div class="title">Prontuario Simples</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Data Registro</span>
                    <input class="input" type="date" name="data_regis">
                </div>
                <div class="input-box">
                    <span class="details">Nome Completo</span>
                    <input class="input" type="text" placeholder="Nome Completo" name="nome">
                </div>
                <div class="input-box">
                    <span class="details">Idade</span>
                    <input class="input" type="text" placeholder="Idade" name="idade">
                </div>
                <div class="input-box">
                    <span class="details">Data nascimento</span>
                    <input class="input" type="date" name="datanasc">
                </div>
                <div class="input-box">
                    <span class="details">Endereço</span>
                    <input class="input" type="text" placeholder="Av, Rua logradouro" name="end">
                </div>
                <div class="input-box">
                    <span class="details">Bairro</span>
                    <input class="input" type="text" placeholder="Bairro" name="bairro">
                </div>
                <div class="input-box">
                    <span class="details">Tel / Cel</span>
                    <input class="input" type="text" placeholder="(**) ****-****" name="phone">
                </div>
                <div class="input-box">
                    <span class="details">Sexo</span>
                    <select class="input" name="sexo" id="">
                        <option value="">Selecione...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
            </div>

            <div class="user-details_clinica">

                <div class="title">Dados Clinicos</div>
                <!--DADOS CLINICOS-->
                <div class="input-box">
                    <span class="details">1-Qual a sua maior necessidade de saúde hoje?</span>
                    <input class="input" type="text" placeholder="Anote..." name="necessidade_saude">
                </div>
                <div class="input-box">
                    <span class="details">2-Quando foi a última consulta?</span>
                    <input class="input" type="text" placeholder="Anote..." name="ultima_consulta">
                </div>
                <div class="input-box">
                    <span class="details">3-Está gravida?</span>
                    <label class="radio">
                            <input type="radio" name="gravidas" onclick="javascript:algomais();" id="noCheck" value="0" checked>
                            NÃO
                        </label>
                        <label class="radio">
                            <input type="radio" name="gravidas" onclick="javascript:algomais();" id="yesCheck" value="1">
                            SIM
                        </label>
                        <div id="ifYes">
                            <label for="">Há quanto tempo? Está amamentando?</label>
                            <br>
                            <textarea name="gravida" placeholder="Anote..." maxlength="955"></textarea>
                        </div>
                </div>
                <div class="input-box">
                    <span class="details">4-Toma algum tipo de medicamento? Quais?</span>
                        <label class="radio">
                            <input type="radio" name="medica" onclick="javascript:remedio();" id="noCheckMedica" value="0" checked>
                            NÃO
                        </label>
                        <label class="radio">
                            <input type="radio" name="medica" onclick="javascript:remedio();" id="yesCheckMedica" value="1">
                            SIM
                        </label>
                        <div id="ifYesMedica">
                            <label for="">Descreva o medicamento:</label>
                            <br>
                            <textarea name="medicamento" placeholder="Anote..." maxlength="955"></textarea>
                        </div>
                </div>
                <div class="input-box">
                    <span class="details">5-Sente dor ou desconforto no corpo?</span>
                    <label class="radio">
                            <input type="radio" name="dor" onclick="javascript:dores_corpo();" id="noCheckDores" value="0" checked>
                            NÃO
                        </label>
                        <label class="radio">
                            <input type="radio" name="dor" onclick="javascript:dores_corpo();" id="yesCheckDores" value="1">
                            SIM
                        </label>
                        <div id="ifYesDores">
                            <label for="">Descreva local da dor:</label>
                            <br>
                            <textarea name="dores" placeholder="Anote..." maxlength="955"></textarea>
                        </div>
                </div>
                <div class="input-box">
                    <span class="details">6-Algum familiar seu tem alguma doença como: Diabete, problema no coração, no pulmão, na cabeça?</span>
                    <label class="radio">
                            <input type="radio" name="doencas" onclick="javascript:doenca();" id="noCheckDoenca" value="0" checked>
                            NÃO
                        </label>
                        <label class="radio">
                            <input type="radio" name="doencas" onclick="javascript:doenca();" id="yesCheckDoenca" value="1">
                            SIM
                        </label>
                        <div id="ifYesDoenca">
                            <label for="">Se sim, qual?</label>
                            <br>
                            <textarea name="doenca_qual" placeholder="Anote..." maxlength="955"></textarea>
                        </div>
                </div>
            </div>
            
            <!--<div class="gender-details">
                <span class="gender-title">Sexo</span>
                <div class="categry">
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Masculino</span>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Feminino</span>
                    </label>
                </div>
            </div>-->
            <div class="button">
                <input type="submit" name="send" value="Salvar">
            </div>
        </form>
    </div>
    
    <!--GRAVIDA-->
    <script type="text/javascript">
        function algomais() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.display = 'block';
            } else document.getElementById('ifYes').style.display = 'none';

        }
    </script>

    <!--MEDICAMENTO-->
    <script type="text/javascript">
        function remedio() {
            if (document.getElementById('yesCheckMedica').checked) {
                document.getElementById('ifYesMedica').style.display = 'block';
            } else document.getElementById('ifYesMedica').style.display = 'none';

        }
    </script>

    <!--DORES-->
    <script type="text/javascript">
        function dores_corpo() {
            if (document.getElementById('yesCheckDores').checked) {
                document.getElementById('ifYesDores').style.display = 'block';
            } else document.getElementById('ifYesDores').style.display = 'none';

        }
    </script>

    <!--DOENCA-->
    <script type="text/javascript">
        function doenca() {
            if (document.getElementById('yesCheckDoenca').checked) {
                document.getElementById('ifYesDoenca').style.display = 'block';
            } else document.getElementById('ifYesDoenca').style.display = 'none';

        }
    </script>
</body>
</html>