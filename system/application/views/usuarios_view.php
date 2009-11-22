<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <title>R2 Internet - Sistema</title>

        <meta name="robots" content="index,follow" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        <link href="<?=base_url()?>static/css/layout.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div id="backgroundsub">
            <div id="backgroundpatternsub">



                <div id="container">
                    <div id="header">
                        <div id="userbuttons"> <a href="sign-up.html" class="buttonsignupsml" ></a> <a href="log-in.html" class="buttonloginsml" ></a> </div>
                        <div id="nav">

                            <?=$menu_superior ?>
                        </div>

                        <div id="logo">
                            <h1>dialogix</h1>
                        </div>
                    </div>
                    <div id="subline">
                        <h1>Sistema R2 Internet</h1>
                    </div>

                    <h2>Usu&aacute;rios</h2>
                    <table id="tabGeral" width="100%">
                        <tr>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Email</th>


                        </tr>

                        <?
                        foreach ($get as $row) {

                            ?>

                        <tr>
                            <th><a href='http://localhost/r2internet/index.php/usuarios/deletar/<?=$row->id_usuario?>'><?=$row->tx_nome?></a></th>
                            <th><?=$row->tx_login?></th>
                            <th><?=$row->tx_email?></th>

                        </tr>
                        <? } ?>
                    </table>



                    <!-- End Content -->
                    <!-- End Sidebar Content -->
                </div>
                <div id="break"></div>
            </div>

        </div>
        <div id="footerlow">

            Desenvolvido pela TRIBODEIDEIAS


        </div>

    </body>

</html>