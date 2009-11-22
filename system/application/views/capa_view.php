<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="<?=base_url()?>static/js/jquery-1.2.3.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?=base_url()?>static/js/jquery.kwicks-1.5.1.js"></script>
        <script type="text/javascript">
            $().ready(function() {
                $('.kwicks').kwicks({
                    max : 200,
                    duration: 800,
                    easing: 'easeOutQuint'
                });
            });
        </script>


        <title>Untitled Document</title>
        <style type="text/css">
            <!--
            body  {
                font: 100% Verdana, Arial, Helvetica, sans-serif;
                background: #FFF;
                margin: 0;
                padding: 0;
                text-align: center;
                color: #000000;
            }


            .thrColElsHdr #container {
                width: 52em;
                padding-top:10px;
                background: #FFFFFF;
                margin: 0 auto;
                text-align: left;
            }
            .thrColElsHdr #header {
                background: #FFF;
                padding: 0px 10px;
            }
            .thrColElsHdr #header h1 {
                margin: 0;
                padding: 10px 0;
            }


            .thrColElsHdr #sidebar1 {
                float: left;
                width: 11em;
                background: #FFF;
                padding: 58px 0;
            }
            .thrColElsHdr #sidebar2 {
                float: right;
                width: 11em;
                background: #FFF;
                padding: 55px 0;
            }
            .thrColElsHdr #sidebar1 h3, .thrColElsHdr #sidebar1 p, .thrColElsHdr #sidebar2 p, .thrColElsHdr #sidebar2 h3 {
                margin-left: 10px;
                margin-right: 10px;
            }


            .thrColElsHdr #mainContent {
                margin: 8em 12em 0 12em;
            }
            .thrColElsHdr #footer {
                padding: 0 10px;
                background:#FFF;
            }
            .thrColElsHdr #footer p {
                margin: 0;
                padding: 10px 0;
            }


            .fltrt {
                float: right;
                margin-left: 8px;
            }
            .fltlft {
                float: left;
                margin-right: 8px;
            }
            .clearfloat {
                clear:both;
                height:0;
                font-size: 1px;
                line-height: 0px;
            }



            div.kwicks_container {
                width: 840px;
                margin: 30px auto 0 auto;
            }
            /*-------------------------KWICKS--------------------*/
            .kwicks {
                list-style: none;
                position: relative;
                margin: 0;
                padding: 0;
                width:840px;
                height:50px;
                z-index:2;
            }
            .kwicks li {
                display: block;
                float: left;
                overflow: hidden;
                padding: 0;
                cursor: pointer;
                width: 100px;
                height: 35px;
                z-index:2;
                cursor:pointer;
                border-left-width: 1px;
                border-left-style: solid;
                border-left-color: #DAA520;
            }
            .kwicks li a {
                background-image:url(<?=base_url()?>static/images/menu1.png);
                background-repeat:no-repeat;
                font-family: "Lucida Grande", "Lucida Sans Unicode", Arial;
                font-size: 14px;
                letter-spacing: -0.07em;
                color: #4169E1;
                height: 40px;
                outline:none;
                display:block;
                z-index:100;
                cursor:pointer;
                text-transform: uppercase;
                font-weight: bold;
                margin-top: -3px;
                margin-left: 5px;
                text-decoration: none;
            }
            .kwicks li h3 {
                position: absolute;
                width: 120px;
                font-family: "Lucida Grande", "Lucida Sans Unicode", Arial;
                font-size: 10px;
                color: #8B8878;
                letter-spacing: -0.02em;
                outline:none;
                z-index:0;
                cursor:pointer;
                text-transform: uppercase;
                font-weight: normal;
                margin-left: 5px;
                text-decoration: none;
                left: 0px;
                top: 15px;
                right: 0px;
                bottom: 0px;
            }
            #kwick_1, #kwick_2, #kwick_3, #kwick_4, #kwick_5, #kwick_6, #kwick_7 {
                margin: 0pt;
                overflow: hidden;
                position: absolute;
                display: block;
                width: 120px;
            }
            #kwick_1 {
                left: 0px;
                border: none;
            }
            #kwick_2 {
                left: 120px;
            }
            #kwick_3 {
                left: 240px;
            }
            #kwick_4 {
                left: 360px;
            }
            #kwick_5 {
                left: 480px;
            }
            #kwick_6 {
                left: 600px;
            }
            #kwick_7 {
                right: 0px;
            }
            #kwick_1 a {
                background-position:0px 0px;
            }
            .kwicks a:hover, .kwicks #active {
                color: #3399FF;
            }
            .kwicks li a:hover h3, .kwicks li #active h3 {
                color: #999999;
            }
            #kwick_2 a {
                background-position:0px -50px;
            }
            #kwick_3 a {
                background-position:0px -192px;
            }
            #kwick_4 a {
                background-position:0px -100px;
            }
            #kwick_5 a {
                background-position:0px -150px;
            }
            #kwick_6 a {
                background-position:0px -250px;
            }
            #kwick_7 a {
                background-position:0px -300px;
            }

            -->
        </style>


    </head>

    <body class="thrColElsHdr">

        <div id="container">

            <img style="margin-left:11%" src="<?=base_url()?>static/images/logo3.png" alt="" />


            <div id="header">



                <div class="kwicks_container">
                    <?=$menu?>
                </div>






            </div>
            <div align="left" style="margin-left:3px" id="sidebar1">

                <img src="<?=base_url()?>static/images/lateral_esq.png" alt="" />

            </div>
            <div align="right" style="margin-right:5px" id="sidebar2">

                <img src="<?=base_url()?>static/images/lateral_dir.png" alt="" />

            </div>
            <div id="mainContent">

                <p> O Conselho Diretor da Agência Nacional de Telecomunicações (Anatel) deliberou hoje, em sua 544ª reunião, conceder anuências prévias para a transferência de controle da GVT (Global Village Telecom Ltda) para a Telecomunicações de São Paulo S.A. (Telesp) e para a Vivendi S.A.

                    No caso da Vivendi, não houve necessidade de estabelecer condicionamentos, por se tratar de empresa entrante no mercado brasileiro.

                    O ato de anuência prévia referente à Telesp estabelece condicionamentos a fim de  propiciar competição efetiva e impedir a concentração econômica no mercado, entre os quais:

                <p> * A Telesp e a GVT deverão manter autônomas e independentes as suas estruturas administrativas, operacionais, funcionais e comerciais, bem como manter o nível de emprego, operando de forma separada, contábil e financeiramente, preservada a marca GVT, pelo prazo de 5 (cinco) anos a contar da data de concretização da operação. Decorridos 24 meses, a Telesp e a GVT poderão, fundamentadamente, requerer a reavaliação deste condicionamento.
                    *
                    A Telesp e a GVT deverão apresentar à Anatel, em seis meses, proposta de solução para a eliminação da sobreposição de outorgas do Serviço Telefônico Fixo Comutado (STFC) e para a devolução de Códigos de Seleção de Prestadora (CSP), cuja implementação deverá ocorrer no prazo de 18 (dezoito) meses da concretização da operação. </p>
                *
                A Telesp manterá a neutralidade de sua rede
                * A Telesp deverá realizar, nos próximos dez anos, investimentos em P&D em valores anuais correspondentes a até  100% do total recolhido ao Fundo para o Desenvolvimento Tecnológico das Telecomunicações (FUNTTEL), respeitado o compromisso mínimo de 50% do total, incondicionalmente, ficando os restantes 50% condicionados à liberação proporcional pelo governo.

                Caso a Telesp adquira a GVT, deverá dar ampla divulgação de que ficam mantidas, para os usuários, as mesmas condições de prestação dos serviços estabelecidas com a GVT.

                Os Atos serão enviados para publicação no Diário Oficial da União.</p>


            </div>
            <br class="clearfloat" />
            <div id="footer">



                <!-- end #footer --></div>
            <!-- end #container --></div>
    </body>
</html>
