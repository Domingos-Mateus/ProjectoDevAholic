<!DOCTYPE html>
<html>
<head>
    <title>TERMO DE CIÊNCIA E RESPONSABILIDADE</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            width: 21cm; /* Largura de uma folha A4 */
            margin: 0 auto; /* Centralizar o conteúdo horizontalmente */
            padding: 20px; /* Margens internas para espaçamento */
        }
        p {
            text-align: justify; /* Justificar o texto */
        }

        span{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container"> <!-- Container Bootstrap -->
        <center>
            <h5 class="mt-4 mb-4">TERMO DE CIÊNCIA E RESPONSABILIDADE</h5>
        </center>

        <p>Eu, <span>{{$formulario->nome_encarregado}} {{$formulario->sobrenome_encarregado}}</span>, identificado por <span>{{$formulario->tipo_documento}}</span>, E-mail: <span>{{$formulario->email}}</span>, Telefone: <span>{{$formulario->telefone}}</span>, na data de <span>{{ now()->format('d/m/Y') }}</span>, na cidade de Florianópolis, Estado de Santa Catarina, CEP 88063-700.</p>

        @if($formulario->nome_crianca)
        <p>Em representação do menor <span>{{$formulario->nome_crianca}} {{$formulario->sobrenome_crianca}}</span>, nascido em <span>{{$formulario->data_nascimento_crianca}}</span>.</p>
        @endif

        <p>Declaro que ILHA MARAVILHA LTDA, empresa com sede em Florianópolis, Santa Catarina, notifica expressamente todos os seus clientes e usuários sobre os riscos de impacto e esforço físico, risco de quedas em altura e outras lesões a que estarão expostos em caso de descumprimento das instruções de segurança e das orientações dadas pelos funcionários da ILHA MARAVILHA LTDA. Esses riscos podem resultar em lesões como entorses, ferimentos, fraturas, rupturas, arranhões, luxações, contusões, sem prejuízo de outras lesões ou até mesmo a morte.</p>

        <p>Entendendo o exposto, declaro que me encontro em perfeitas condições físicas para realizar as referidas atividades de alta exigência e assumo qualquer risco associado a não estar em condições ideais.</p>

        <p>Da mesma forma, afirmo que estou plenamente ciente dos riscos inerentes à minha integridade física decorrentes da natureza das atividades recreativas realizadas nos parques de diversões da ILHA MARAVILHA LTDA e, em caso de lesão ou contusões de qualquer tipo, inclusive morte, assumo a total responsabilidade pelos danos, isentando a ILHA MARAVILHA LTDA de qualquer responsabilidade.</p>

        <p>Por meio deste documento, autorizo o estabelecimento a solicitar meu afastamento do parque e a proibir minha permanência em suas instalações no caso de apresentar comportamento que represente risco para mim ou para terceiros. Assumo a integral responsabilidade pela reparação dos danos que eu causar, sejam eles pessoais, materiais ou morais.</p>

        <div class="form-check"> <!-- Checkbox Bootstrap -->
            <input type="checkbox" class="form-check-input" id="check_autorizo_envio_material">
            <label class="form-check-label" for="check_autorizo_envio_material">Também autorizo o envio de material promocional aos meus endereços e telefones.</label>
        </div>

        <p>Declaro que li e compreendi este termo de responsabilidade e concordo com todos os seus termos e condições, assumindo a veracidade das informações fornecidas assumindo civil e penalmente.</p>

        <p class="mt-4">Assinatura</p>
        <p>________________________________</p>

        <p>Data: {{ now()->format('d/m/Y') }}</p>
    </div> <!-- Fechar o container Bootstrap -->
</body>
</html>
