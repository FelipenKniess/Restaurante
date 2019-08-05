<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of viewMesa
 *
 * @author felipe.kniess
 */
require_once './persistencia/persistenciaMesa.php';
require_once './model/modelMesa.php';

class viewMesa {

    public function contentMesa() {
        $oPersistenciaMesa = new persistenciaMesa();
        ob_start();
        ?>
        <table class="table table-secondary text-dark  table-hover table-bordered">
            <thead>
                <tr class="cabecalho-tabela">
                    <td colspan="6"><h3>Consulta de mesas</h3></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#incluirMesa" style="margin-left: 10px; margin-bottom: 10px;">Incluir</button>                    
                        <button type="button" class="btn btn-warning btn-md " data-toggle="modal" data-target="#" style="margin-left: 10px; margin-bottom: 10px;">Alterar</button>                           
                        <button type="button" class="btn btn-danger btn-md " data-toggle="modal" data-target="#" style="margin-left: 10px; margin-bottom: 10px;">Excluir</button>                           
                        <button type="button" class="btn btn-info btn-md " data-toggle="modal" data-target="#" style="margin-left: 10px; margin-bottom: 10px;">Visualizar</button>                           
                    </td>
                </tr>
                <tr>
                    <th>Código</th>
                    <th>Número Mesa</th>
                    <th>Observação</th>
                    <th>Lugares</th>
                    <th>Oucupação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $aMesas = $oPersistenciaMesa->listaMesas();
                foreach ($aMesas as $mesa) {
                    if ($mesa->getOucupacao() == 0) {
                        $mesa->setOucupacao('Disponível');
                    } else {
                        $mesa->setOucupacao('Indisponível');
                    }   
                    echo '<tr class="linha-mesa">
                        <td>' . $mesa->getCodigo() . '</td>
                        <td>' . $mesa->getIdentificacao() . '</td>
                        <td>' . $mesa->getObservacao() . '</td>
                        <td>' . $mesa->getLugares() . '</td>
                        <td>' . $mesa->getOucupacao() . '</td>
                     </tr>';
                }
                ?>  
            </tbody>
        </table>

        <?php
        echo $this->modalIncluirMesa(); //Model para incluir Mesa
        echo $this->modalEditaMesa();   //Model para Editar Mesa

        $sHtml = ob_get_contents();
        ob_end_clean();
        return $sHtml;
    }

    private function modalIncluirMesa() {
        ob_start();
        ?>
        <form action="index.php" method="POST">
            <div class="modal fade" id="incluirMesa">
                <div class="modal-dialog ">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Incluir Mesa</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <th><label for="numeroMesa">Número da mesa: </label></th>
                                    <td><input class="form-control" type="text" name="numeroMesa" id="numeroMesa"></td>        
                                </tr>
                                <tr>
                                    <th><label for="qtdLguares">Qtd. Lugares: </label></th>
                                    <td><input  class="form-control" type="number" name="qtdLugares" id="qtdLugares"></td>        
                                </tr>
                                <tr>
                                    <th><label for="oucupacao">Situação: </label></th>
                                    <td><select class="form-control" id="oucupacao" name="oucupacao">
                                            <option value="1">Oucupado</option>
                                            <option value="0">Disponível</option>
                                        </select> 
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="observacao">Observação:</label></th>
                                    <td><textarea class="form-control" rows="2" id="observacao" name="observacao"></textarea></td>
                                </tr>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        $sHtml = ob_get_contents();
        ob_end_clean();
        return $sHtml;
    }

    private function modalEditaMesa() {
        ob_start();
        ?>
        <form action="index.php" method="GET">
            <div class="modal" id="editarMesa">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Editar Mesa</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label>Descricao da tarefa:</label>
                            <input type="text" name="descricaoTarefa" id="descricaoTarefa">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        $sHtml = ob_get_contents();
        ob_end_clean();
        return $sHtml;
    }

}
