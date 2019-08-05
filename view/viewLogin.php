<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of viewLogin
 *
 * @author felipe.kniess
 */
class viewLogin {

    public function contentLogin() {
        ob_start();
        ?>
        <img src="download.jfif" class="img-logo rounded-circle mx-auto d-block" alt="Cachorrão da nely" > 
        <div class=" campo-login d-flex justify-content-center ">
            <div class="campo-loginint p-3 border align-self-xl-center">
                <form action="login.html" method="POST">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="usuusername">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Senha: </label>
                        <input type="password" class="form-control" id="pwd" name="ususenha">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Relembrar-me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="efetuaLogin()">Entrar</button>
                </form>
            </div>
        </div>
        <?php
        $sHtml = ob_get_contents();
        ob_end_clean();
        return $sHtml;
    }

}
