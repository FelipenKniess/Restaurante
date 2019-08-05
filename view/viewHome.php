<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of viewHome
 *
 * @author felipe.kniess
 */
class viewHome {

    public function contentHome() {
        ob_start();
        ?>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-3">
                <p class="text-center">Mesa 1</p>
                <img src="./img/user.png" class="img-logo rounded-circle mx-auto d-block" alt="Cinque Terre" width="200" height="200"> 
                <p class="text-center">Sem Pedido</p>
            </div>
            <div class="col-sm-3">
                <p class="text-center">Mesa 2</p>
                <img src="./img/user.png" class="img-logo rounded-circle mx-auto d-block" alt="Cinque Terre" width="200" height="200"> 
                <p class="text-center">Sem Pedido</p>
            </div>
            <div class="col-sm-3">
                <p class="text-center">Mesa 3</p>
                <img src="./img/user.png" class="img-logo rounded-circle mx-auto d-block" alt="Cinque Terre" width="200" height="200"> 
                <p class="text-center">Sem Pedido</p>
            </div>
            <div class="col-sm-3">
                <p class="text-center">Mesa 4</p>
                <img src="./img/user.png" class="img-logo rounded-circle mx-auto d-block" alt="Cinque Terre" width="200" height="200"> 
                <p class="text-center">Sem Pedido</p>
            </div>
        </div>
        <?php
        $sHtml = ob_get_contents();
        ob_end_clean();
        return $sHtml;
    }

}
