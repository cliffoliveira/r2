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

                    


                    <h2>Clientes cadastrados</h2>
                    <table id="tabGeral" width="100%">
                        <tr>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Endere&ccedil;o</th>

                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>CEP</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Data do cadastro</th>
                            <th>Op&ccedil;&otilde;es</th>


                        </tr>

                            <?
                            foreach ($get as $row) {

                                ?>

                        <tr>
                            <td><?=$row->tx_nome?></td>
                            <td><?=$row->nm_documento?></td>
                            <td><?=$row->tx_endereco?></td>
                            <td><?=$row->tx_bairro?></td>
                            <td><?=$row->tx_cidade?></td>
                            <td><?=$row->tx_estado?></td>
                            <td><?=$row->nm_cep?></td>
                            <td><?=$row->nm_telefone?></td>
                            <td><?=$row->tx_email?></td>
                            <td><?=$row->dt_cadastro?></td>
                            <td><?php echo anchor("index.php/clientes/update/".$row->id_clientes, "atualizar")." ".anchor("index.php/clientes/delete/".$row->id_clientes, "apagar")?></td>

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