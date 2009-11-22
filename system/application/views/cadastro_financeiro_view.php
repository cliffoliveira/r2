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

                    <?
                    if ($tipo==1) {

                        echo form_open('index.php/financeiro/inserir');
                        $mybtn = 'Cadastrar';

                    }else {

                        echo form_open('index.php/financeiro/update_ok');
                        $mybtn = 'Atualizar';
                    }
                    ?>

                    <h2>Cadastro - Financeiro</h2>

                    <label>Data:</label>
                    <input name="dt_data" id="dt_data" type="text" class="text-field" value="<?=$dt_data?>" />
                    <input name="id" id="id" type="hidden" value="<?=$id_financeiro?>" />

                    <br />
                    <br />

                    <label>Descri&ccedil;&atilde;o:</label>
                    <input name="tx_descricao" id="tx_descricao" type="text" class="text-field" value="<?=$tx_descricao?>" />

                    <br />
                    <br />

                    <label>Valor:</label>
                    <input name="nm_valor" id="nm_valor" type="text" class="text-field" value="<?=$nm_valor?>" />

                    <br />
                    <br />

                    <label>Vencimento:</label>
                    <input name="dt_vencimento" id="dt_vencimento" type="text" class="text-field" value="<?=$dt_vencimento?>" />

                    <br />
                    <br />

                    <label>Grupo:</label>
                    <select  name="cd_grupo" id="cd_grupo" class="text-field">


                        <?
                        foreach($get as $row) {

                            ?>
                        <option value="<?=$row->id_grupo?>"><?=$row->tx_nome?></option>

                        <? } ?>
                    </select>

                    <br />
                    <br />

                    <label>Subgrupo:</label>
                    <input name="cd_subgrupo" id="cd_subgrupo" type="text" class="text-field" />

                    <br />
                    <br />




                    <div>
                        <input type="hidden" name="posted" id="posted" value="true" />
                        <input type="submit" name="Submit" value="<?=$mybtn?>" class="button" />
                    </div>

                    <?=form_close()?>




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