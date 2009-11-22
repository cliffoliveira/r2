<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<fieldset>
    <legend>&Aacute;rea Restrita</legend>
    <form action="<?=base_url()?>login/autentica" method="POST" class="form">
        <label for="username">Login</label>
        <div class="div_texbox">
            <input name="username" type="text" class="username" id="username" value="Login" />
        </div>
        <label for="password">Senha</label>
        <div class="div_texbox">
            <input name="password" type="password" class="password" id="password" value="password" />
        </div>
        <div class="button_div">
            <input name="Submit" type="Submit" value="Entrar" class="buttons" />
        </div>
    </form>
    <div class="clear"></div>
</fieldset>
<hr size="1">