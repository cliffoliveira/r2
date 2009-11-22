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

                        echo form_open('index.php/clientes/inserir');
                        $mybtn = 'Cadastrar';

                    }else {

                        echo form_open('index.php/clientes/update_ok');
                        $mybtn = 'Atualizar';
                    }
                    ?>


                    <h2>Cadastro de Clientes</h2>

                    <label>Nome:</label>
                    <input name="tx_nome" id="tx_nome" type="text" class="text-field" value="<?=$tx_nome?>"/>
                    <input name="id" id="id" type="hidden" value="<?=$id_clientes?>">
                    <br />
                    <br />

                    <label>CNPJ/CPF:</label>
                    <input name="nm_documento" id="nm_documento" type="text" class="text-field" value="<?=$nm_documento?>" />

                    <br />
                    <br />

                    <label>Endere&ccedil;o:</label>
                    <input name="tx_endereco" id="tx_endereco" type="text" class="text-field" value="<?=$tx_endereco?>" />

                    <br />
                    <br />

                    <label>Bairro:</label>
                    <input name="tx_bairro" id="tx_bairro" type="text" class="text-field" value="<?=$tx_bairro?>" />

                    <br />
                    <br />

                    <label>Cidade:</label>
                    <input name="tx_cidade" id="tx_cidade" type="text" class="text-field" value="<?=$tx_cidade?>" />

                    <br />
                    <br />

                    <label>Estado:</label>
                    <input name="tx_estado" id="tx_estado" type="text" class="text-field" value="<?=$tx_estado?>"/>

                    <br />
                    <br />

                    <label>CEP:</label>
                    <input name="nm_cep" id="nm_cep" type="text" class="text-field" value="<?=$nm_cep?>" />

                    <br />
                    <br />

                    <label>Telefone:</label>
                    <input name="nm_telefone" id="nm_telefone" type="text" class="text-field" value="<?=$nm_telefone?>" />

                    <br />
                    <br />

                    <label>E-mail:</label>
                    <input name="tx_email" id="tx_email" type="text" class="text-field" value="<?=$tx_email?>" />

                    <br />
                    <br />

                    <label>Data do Cadastro:</label>
                    <input name="dt_cadastro" id="dt_cadastro" type="text" class="text-field" value="<?=$dt_cadastro?>"/>

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