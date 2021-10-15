<?php 
header('Access-Control-Allow-Origin: *');
require_once('../../../../includes/funcoes.php');
require_once('../../../../database/config.database.php');
require_once('../../../../database/config.php');
$read =  DBRead('ecommerce_mercadopago_transparente','*', "WHERE id = '1'")[0];
$mercadopago = DBRead('ecommerce_plugins','*', "WHERE nome = 'mercadopago'")[0];
?>

<div class="card">
    <div class="card-header white">
    <strong>Configurar Meio de Pagamento</strong>
</div>
<div class="card-body">        
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="usuario">Public Key:</label>
                <input type="text" name="token" id="key" class="form-control" placeholder="Coloque o seu Public Key" value="<?php echo $read['publickey']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="usuario">Access Token:</label>
                <input type="text" name="token" id="token" class="form-control" placeholder="Coloque o seu Access Token" value="<?php echo $read['accesstoken']; ?>">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button class="btn btn-primary" type="submit" onclick="mercadopagot()"><i class="icon icon-floppy-o" ></i>Salvar Mudanças</button> 
</div>

<script>
function mercadopagot(){
    fetch('?mercadopagotransparente&publickey='+document.getElementById('key').value+'&accesstoken='+document.getElementById('token').value)
    swal("Informações de pagamento Atualizadas!", "Informações de pagamento atualizadas com sucesso!", "success")

}
</script>