<!-- Llamando el header -->
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Pedidos');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">ORDERS</h1>
    <br>
    <div class="row">
        <div class="container">
            <table class="display" id="tabla-pedidos">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>CLIENT</th>
                        <th>STATE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody id="tbody-read">
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Fin contenido -->
<div id="modal-update" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CHANGE STATUS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-update" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-shipping-fast"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="id_pedido" type="hidden" name="id_pedido" required>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="update_estado"
                                    name="update_estado">
                                <label class="custom-control-label" for="update_estado"><i
                                        class="fa fa-check-circle"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary tooltipped"
                            data-tooltip="Modificar">Accept</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modal-detalle" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DETAIL OF THE ORDER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-detalle" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <table class="table" id="tabla-detalle">
                        <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>QUANTITY</th>
                                <th>UNIT PRICE</th>
                                <th>SUBTOTAL</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-read2">
                        </tbody>
                    </table>
                    <div class="row text-center">
                        <h6 class="">TOTAL TO PAY: $</h6>
                        <h6 id="id_pedido2"> </h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Llamando el footer y mandando de parametros el controlador y la tabla de datatable -->
<?php
Dashboard::footerTemplate('pedidos.js', '#tabla-pedidos');
?>