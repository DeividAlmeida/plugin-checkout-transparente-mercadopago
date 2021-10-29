<?php 
    $mpt =  DBRead('ecommerce_mercadopago_transparente','*')[0];
  ?>
  <style>
    @media screen and (min-width: 576px) {
      .modal-dialog{
        max-width:100% !important
      }
      .modal::-webkit-scrollbar {
        display: none;
      }
      .modal {
        -ms-overflow-style: none;  
        scrollbar-width: none; 
      }
    }
  </style>

  <template >
    <div class="col-lg-6" id="mptdyn">
      <div class="form-group">
        <lable>Primeiro Nome</lable>
        <input class="form-control auto" placeholder="Primeiro nome" name="nome" id="nome" required>
      </div>
      <div class="form-group">
        <lable>Sobrenome</lable>
        <input class="form-control auto" placeholder="Sobrenome" name="sobrenome" id="sobrenome" required>
      </div>
      <div class="form-group" >
        <label for="">Documento</label>
        <select class="form-control auto" name="identificationType" id="form-checkout__identificationType" required>
          <option value="CPF">CPF</option>
          <option value="CNPJ">CNPJ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Número do Documento</label>
        <input class="form-control auto"  type="number" name="identificationNumber" id="form-checkout__identificationNumber" required/>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input class="form-control auto" type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" required/>
      </div>                
      <div class="form-group">
        <lable>Estado</lable>                  
        <select class="form-control auto"  id="estado" name="estado" required>
          <option value="">Selecione uma opção…</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </div>
      <div class="form-group">
        <lable>Cidade</lable>
        <input class="form-control auto" id="cidade" name="cidade" placeholder="Cidade" required>
      </div>
      <div class="form-group">
        <lable>CEP</lable>
        <input class="form-control auto" id="cep" name="cep" placeholder="cep" required>
      </div>
      <div class="form-group">
        <lable>Bairro</lable>
        <input class="form-control auto" id="bairro" name="bairro" placeholder="Bairro" required>
      </div>
    </div>              
    <div class="col-lg-6">
      <div class="form-group">
      <lable>Rua</lable>
        <input class="form-control auto" id="rua" placeholder="Rua" required>
      </div>
      <div class="form-group">
        <lable>Número</lable>
        <input class="form-control auto" id="numero" placeholder="Número do Imovel" required> 
      </div>
      <div class="form-group">
        <label>Número do Cartão</label>
        <input class="form-control" type="number" name="cardNumber" id="form-checkout__cardNumber" value="" required/>
        <!-- 5031433215406351 -->
      </div>
      <div class="form-group">
        <label>Mês de Vencimento</label>
        <input class="form-control" type="number" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" value="" required/>
        <!-- 11 -->
      </div>
      <div class="form-group">
        <label>Ano de Vencimento</label>
        <input class="form-control" type="number"   name="cardExpirationYear" id="form-checkout__cardExpirationYear" value="" required/>
      <!-- 25 -->
      </div>
      <div class="form-group">
        <label>Nome do Cartão</label>
        <input class="form-control" type="text" name="cardholderName" id="form-checkout__cardholderName"value="" required/>  
      </div>               
      <div class="from-group">
        <label>Código do Cartão</label>
        <input class="form-control" type="text" name="securityCode" id="form-checkout__securityCode" value="" required/>
        <!-- 123 -->
      </div>
      <div class="form-group">
        <label for="">Bandeira do Cartão</label>
        <select class="form-control" name="issuer" id="form-checkout__issuer" required></select>
      </div>
      <div class="form-group">
        <label for="">Parecelas</label>
        <select class="form-control" name="installments" id="form-checkout__installments" required></select>
      </div>              
    </div>
  </template>
  <template >
    <div class="col-lg-6" id="mptdyn">
      <div class="form-group">
        <lable>Primeiro Nome</lable>
        <input class="form-control auto" placeholder="Primeiro nome" name="nome" id="nome" required>
      </div>
      <div class="form-group">
        <lable>Sobrenome</lable>
        <input class="form-control auto" placeholder="Sobrenome" name="sobrenome" id="sobrenome" required>
      </div>
      <div class="form-group">
        <label for="">Documento</label>
        <select class="form-control auto" name="identificationType" id="form-checkout__identificationType" required>
          <option value="CPF">CPF</option>
          <option value="CNPJ">CNPJ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Número do Documento</label>
        <input class="form-control auto"  type="number" name="identificationNumber" id="form-checkout__identificationNumber" required/>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input class="form-control auto" type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" required/>
      </div>                
      <div class="form-group">
        <lable>Estado</lable>                  
        <select class="form-control auto"  id="estado" name="estado" required>
          <option value="">Selecione uma opção…</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </div>
    </div>              
    <div class="col-lg-6">
      <div class="form-group">
        <lable>Cidade</lable>
        <input class="form-control auto" id="cidade" name="cidade" placeholder="Cidade" required>
      </div>
      <div class="form-group">
        <lable>CEP</lable>
        <input class="form-control auto" id="cep" name="cep" placeholder="Cep" required>
      </div>
      <div class="form-group">
        <lable>Bairro</lable>
        <input class="form-control auto" id="bairro" name="bairro" placeholder="Bairro" required>
      </div>
      <div class="form-group">
      <lable>Rua</lable>
        <input class="form-control auto" id="rua" name="rua" placeholder="Rua" required>
      </div>
      <div class="form-group">
        <lable>Número</lable>
        <input class="form-control auto" id="numero" id="numero" placeholder="Número do Imovel" required> 
      </div>                          
    </div>
  </template>
  <div class="modal fade" id="mercadopagotransparente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog  modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dados de Cobrança </h5>
          <button type="button" class="btn-close" id="mpt-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <div class="conteiner-fluid" >
            <div class="row" id="mpt-form">
              
            </div>            
            <div class="modal-footer">
              <span id="finalizar">
                <button  type="submit" style="color:#fff"  class="btn text-white" id="cartCheckout" >Finalizar Compra</button>
              </span>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script>
    let mptform = document.getElementById('mpt-form')
    let doc, mpt, mptid
    let origem = '<?=RemoveHttpS(ConfigPainel('base_url'))?>'
    var temp = document.getElementsByTagName("template");  
    function closeOneModal(modalId) {
    // get modal
    const modal = document.getElementById(modalId);

    // change state like in hidden modal
    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
    modal.setAttribute('style', 'display: none');
    document.getElementsByClassName('modal-open')[0].setAttribute('class','')

    // get modal backdrop
    const modalBackdrops = document.getElementsByClassName('modal-backdrop');

    // remove opened modal backdrop
      document.body.removeChild(modalBackdrops[0]);
    } 
    function listener(event) {      
      window.onload = function(){ window.getEventListeners(document.getElementById('fcheckout')).submit.forEach(function(c) {
          document.getElementById('fcheckout').removeEventListener('submit', window.getEventListeners(document.getElementById('fcheckout')).submit[0].listener)
        })
      }
    }
    function Resposta(a) {                        
      console.log(a);          
      switch (a.status_detail) {
        case 'accredited':
          resolveAfter2Seconds().then((res)=>{
            sessionStorage.setItem("vfrete", document.getElementById("f_valor").innerHTML);
            sessionStorage.setItem("frete", document.getElementById("tipo_entrega").value);
            sessionStorage.setItem("ttl", document.getElementById("total").innerHTML);
            var adata = $('#fcheckout').serializeArray();
            Swal.fire({
              confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
              title:'Sucesso!!',
              text:'Pagamento aprovado!!!', 
              icon:'success'
            })           
            $.ajax({
              data: adata,
              type:    "POST",
              cache:   false,
              url:     UrlPainel+'wa/ecommerce/checkout/composer.php?transparente',
              success: function (adata) {
                $.ajax({
                    type:    "GET",
                    cache:   false,
                    url:     UrlPainel+'wa/ecommerce/checkout/detalhes.php',
                    success: function (data) {                                                            
                      jQuery('#EcommerceCheckout').html(data)
                    },
                })
                .then(function(){
                  let template = [
                    "<style>",
                        "#EcommerceCheckout>.card>.container>.card-body>.col-md-6{ ",
                        " display: grid; grid-template-columns:12% 50%;  }",
                    "</style>",
                  ]
                  document.querySelector('#EcommerceCheckout')
                  .querySelector('.card')
                  .innerHTML= template.join('')
                })
              }, 
            });           
          })
          break;
        case 'pending_waiting_payment':
          resolveAfter2Seconds().then((res)=>{
            sessionStorage.setItem("vfrete", document.getElementById("f_valor").innerHTML);
            sessionStorage.setItem("frete", document.getElementById("tipo_entrega").value);
            sessionStorage.setItem("ttl", document.getElementById("total").innerHTML);
            var adata = $('#fcheckout').serializeArray();                     
            $.ajax({
              data: adata,
              type:    "POST",
              cache:   false,
              url:     UrlPainel+'wa/ecommerce/checkout/composer.php?transparente',
              success: function (adata) {
                $.ajax({
                    type:    "GET",
                    cache:   false,
                    url:     UrlPainel+'wa/ecommerce/checkout/detalhes.php',
                    success: function (data) {                                                            
                      jQuery('#EcommerceCheckout').html(data)
                    },
                })
                .then(function(){
                  let template = [
                    "<style>",
                        "#EcommerceCheckout>.card>.container>.card-body>.col-md-6{ ",
                        " display: grid; grid-template-columns:12% 50%;  }",
                        "#boleto{",
                          "display:flex;",
                          "justify-content:center;",
                       " }",
                      " .fa-file-pdf-o{",
                        "font-size:300%;",
                        "color:#000",
                       "}",
                    "</style>",
                      "<div class='container'>",
                        "<h2 class='font-weight-bold text-center' style=' font-size:35px;'>Acesse seu boleto Bancário </h2>",
                        "<div class='row '>",
                          "<br>",
                          "<div id='boleto' class='col-md-12'>",
                            "<a href='"+a.transaction_details.external_resource_url+"'>",
                              "<i  class='fa fa-file-pdf-o' aria-hidden='true'></i>",
                            "</a>",
                          "</div>",
                        "</div>",
                      "</div>",
                  ]
                 new mpstatus(a.id, '<?=$mpt['accesstoken'] ?>','<?php echo $config['carrinho_cor_btn_finalizar']; ?>')
                  document.querySelector('#EcommerceCheckout')
                  .querySelector('.card')
                  .innerHTML= template.join('')

                })
              }, 
            });           
          })
          break
        case 'pending_waiting_transfer':
          resolveAfter2Seconds().then((res)=>{
            sessionStorage.setItem("vfrete", document.getElementById("f_valor").innerHTML);
            sessionStorage.setItem("frete", document.getElementById("tipo_entrega").value);
            sessionStorage.setItem("ttl", document.getElementById("total").innerHTML);
            var adata = $('#fcheckout').serializeArray();
                     
            $.ajax({
              data: adata,
              type:    "POST",
              cache:   false,
              url:     UrlPainel+'wa/ecommerce/checkout/composer.php?transparente',
              success: function (adata) {
                $.ajax({
                    type:    "GET",
                    cache:   false,
                    url:     UrlPainel+'wa/ecommerce/checkout/detalhes.php',
                    success: function (data) {                                                            
                      jQuery('#EcommerceCheckout').html(data)
                    },
                })
                .then(function(){
                  let template = [
                    "<style>",
                        "#EcommerceCheckout>.card>.container>.card-body>.col-md-6{ ",
                        " display: grid; grid-template-columns:12% 50%;  }",
                        "#qr{",
                          "display:flex;",
                          "justify-content:center;",
                       " }",
                       "#codeinput{",
                          "text-overflow: ellipsis;",
                          "width: 100%;",
                          "border: 0;",
                      " }",
                    "</style>",
                    "<div class='container'>",
                        "<h2 class='font-weight-bold text-center' style=' font-size:35px;'>Capture o código QR ou copie o código de cobrança  </h2>",
                        "<div class='row '>",
                          "<br>",
                          "<div id='qr' class='col-md-12'>",
                            "<img  width='200' height='200' src='data:image/png;base64, "+a.point_of_interaction.transaction_data.qr_code_base64+"' />",                              
                            "<br>",
                          "</div>",
                        "</div>",
                        "<br>",
                        "<div class='row'>",
                          "<div id='qr' class='col-12'>",
                            "<div class='input-group' style='display:flex;width:350px'>",
                                "<div type='text' class='form-control' style='height:60px'><b>Cód. de pagamento</b><br><input id='codeinput' value='"+a.point_of_interaction.transaction_data.qr_code+"'/></div>",
                                "<button id='cartCheckout'  type='button' style='color:#fff' class='btn input-group-text'>",
                                    "<i class='fa fa-files-o'></i>",
                                "<b id='copiado' > Copiar</b></button>",
                           " </div>",
                          "</div>",
                        "</div>",
                      "</div>",                                    
                  ]
                 new mpstatus(a.id, '<?=$mpt['accesstoken'] ?>','<?php echo $config['carrinho_cor_btn_finalizar']; ?>')
                  document.querySelector('#EcommerceCheckout')
                  .querySelector('.card')
                  .innerHTML= template.join('')
                  document.querySelector('#cartCheckout').addEventListener('click', async event => {                         
                    try {
                      await navigator.clipboard.writeText(a.point_of_interaction.transaction_data.qr_code)
                      event.target.innerHTML = ' <b>Copiado</b>'
                    } catch (err) {
                      console.error('Failed to copy! '+err)
                    }
                  })
                  
                })
              }, 
            });           
          })
          break;
        case 'pending_contingency':
          resolveAfter2Seconds().then((res)=>{
            sessionStorage.setItem("vfrete", document.getElementById("f_valor").innerHTML);
            sessionStorage.setItem("frete", document.getElementById("tipo_entrega").value);
            sessionStorage.setItem("ttl", document.getElementById("total").innerHTML);
            var adata = $('#fcheckout').serializeArray();                     
            $.ajax({
              data: adata,
              type:    "POST",
              cache:   false,
              url:     UrlPainel+'wa/ecommerce/checkout/composer.php?transparente',
              success: function (adata) {
                $.ajax({
                    type:    "GET",
                    cache:   false,
                    url:     UrlPainel+'wa/ecommerce/checkout/detalhes.php',
                    success: function (data) {                                                            
                      jQuery('#EcommerceCheckout').html(data)
                    },
                })
                .then(function(){
                  let template = [
                    "<style>",
                        "#EcommerceCheckout>.card>.container>.card-body>.col-md-6{ ",
                        " display: grid; grid-template-columns:12% 50%;  }",
                    "</style>",
                  ]
                  document.querySelector('#EcommerceCheckout')
                  .querySelector('.card')
                  .innerHTML= template.join('')
                })
              }, 
            });           
          })         
          break;
        case 'cc_rejected_other_reason':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por erro geral', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;
        case 'cc_rejected_call_for_authorize':
          
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado com validação para autorizar', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;
        case 'cc_rejected_insufficient_amount':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por quantia insuficiente', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;
        case 'cc_rejected_bad_filled_security_code':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por código de segurança inválido', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;
        case 'cc_rejected_bad_filled_date':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por problema com a data de vencimento', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;
        case 'cc_rejected_bad_filled_other':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por erro no formulário', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;  
          case 'cc_rejected_bad_filled_card_number':
          Swal.fire({
            confirmButtonColor: '<?php echo $config['carrinho_cor_btn_finalizar']; ?>',
            title:'Erro',
            text:'Recusado por erro no cartão', 
            icon:'error'})
            .then(recarrega =>{
              window.location.reload(true)
            })
          break;        
      }
    }
    function mercadopagotransparente(uri) {
      new listener()
      mptform.innerHTML=''
      switch (document.getElementById('billing_persontype').value) {
        case '1':
          doc = 'CPF'
          break;
        case '2':
          doc = 'CNPJ'
          break;
      }
      let auto = [
        document.getElementById('billing_first_name').value,
        document.getElementById('billing_last_name').value,
        doc, 
        document.getElementById('billing_cpf').value,
        document.getElementById('billing_email').value,
        document.getElementById('billing_state').value,
        document.getElementById('billing_city').value,
        document.getElementById('cepdestino').value,
        document.getElementById('billing_neighborhood').value,
        document.getElementById('billing_address_1').value,
        document.getElementById('billing_number').value
        ]     
      
      mpt = this.event.target.value
      document.getElementById('composer').value=uri;
      //if(getEventListeners(document.getElementById('fcheckout')).submit != undefined){ alert(0)}
        if (mpt != 'cartão'){        
          $.getScript("https://sdk.mercadopago.com/js/v2")
          switch (mpt) {
            case 'boleto':
              mptid = 'bolbradesco'
              break;
            case 'pix':
              mptid = 'pix'
              break;            
          }
          mptform.appendChild(temp[1].content.cloneNode(true));
          //document.getElementById('fcheckout').removeEventListener('submit', listener, false)
          $('#fcheckout').submit(function(e) {
            new closeOneModal('mercadopagotransparente') 
            fetch(origem+'ecommerce/plugins/gateways/mercadopagotransparente/wa/process_payment.php', {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({                
                payment_method_id:mptid,
                transaction_amount: Number(document.getElementById('valor').value),
                description: "<?= $produto['nome']; ?>",
                first_name:document.getElementById('nome').value,
                last_name:document.getElementById('sobrenome').value,
                access:'<?=$mpt['accesstoken'] ?>',
                payer: {
                  email:document.getElementById('form-checkout__cardholderEmail').value,
                  identification: {
                    type: document.getElementById('form-checkout__identificationType').value,
                    number: document.getElementById('form-checkout__identificationNumber').value,
                  },
                  address:{
                    zip_code:document.getElementById('cep').value,
                    street_name:document.getElementById('rua').value,
                    street_number:document.getElementById('numero').value,
                    neighborhood:document.getElementById('bairro').value,
                    city:document.getElementById('cidade').value,
                    federal_unit:document.getElementById('estado').value,
                  },
                },
              }),
            }).then(a=>a.json()).then(a=>{
             if(origem != null && a.status_detail != null){new Resposta(a,mpt); origem = null }                     
            });
          })          
        }else{
          mptform.appendChild(temp[0].content.cloneNode(true));
          $.getScript("https://sdk.mercadopago.com/js/v2")
          .then(function(){
            var mp = new MercadoPago('<?=$mpt['publickey'] ?>',{
                locale: 'pt-BR',
              });

            var cardForm = mp.cardForm({
              amount: document.getElementById('valor').value,
              autoMount: true,
              form: {
                id: "fcheckout",
                cardholderName: {
                  id: "form-checkout__cardholderName",
                  placeholder: "Titular do cartão",
                },
                cardholderEmail: {
                  id: "form-checkout__cardholderEmail",
                  placeholder: "E-mail",
                },
                cardNumber: {
                  id: "form-checkout__cardNumber",
                  placeholder: "Número do cartão",
                },
                cardExpirationMonth: {
                  id: "form-checkout__cardExpirationMonth",
                  placeholder: "Mês de vencimento",
                },
                cardExpirationYear: {
                  id: "form-checkout__cardExpirationYear",
                  placeholder: "Ano de vencimento",
                },
                securityCode: {
                  id: "form-checkout__securityCode",
                  placeholder: "Código de segurança",
                },
                installments: {
                  id: "form-checkout__installments",
                  placeholder: "Parcelas",
                },                
                identificationNumber: {
                  id: "form-checkout__identificationNumber",
                  placeholder: "Número do documento",
                },
                identificationType: {
                  id:'form-checkout__identificationType',
                  value:'CNPJ',
                },
                issuer: {
                  id: "form-checkout__issuer",
                  placeholder: "Banco emissor",
                },
              },
              callbacks: {
                onFormMounted: error => {
                  if (error) return console.warn("Form Mounted handling error: ", error);
                  console.log("Form mounted");
                },            
                onSubmit: event => {
                  new closeOneModal('mercadopagotransparente') 
                    event.preventDefault();                   
                  let {
                    paymentMethodId: payment_method_id,
                    issuerId: issuer_id,
                    cardholderEmail: email,
                    amount,
                    token,
                    installments,
                    identificationNumber,
                    identificationType
                  } = cardForm.getCardFormData();  
                  if(document.getElementById('payment_method_mercadopagotransparente1').checked){
                    fetch("<?=RemoveHttpS(ConfigPainel('base_url')).'ecommerce/plugins/gateways/mercadopagotransparente/wa/process_payment.php'?>", {
                      method: "POST",
                      headers: {
                        "Content-Type": "application/json",
                      },
                      body: JSON.stringify({
                        token,
                        issuer_id,
                        payment_method_id,
                        transaction_amount: Number(amount),
                        installments: Number(installments),
                        description: "<?= $produto['nome']; ?>",
                        first_name:document.getElementById('nome').value,
                        last_name:document.getElementById('sobrenome').value,
                        access:'<?=$mpt['accesstoken'] ?>',
                        payer: {
                          email,
                          identification: {
                            type: identificationType,
                            number: identificationNumber,
                          },
                          address:{
                            zip_code:document.getElementById('cep').value,
                            street_name:document.getElementById('rua').value,
                            street_number:document.getElementById('numero').value,
                            neighborhood:document.getElementById('bairro').value,
                            city:document.getElementById('cidade').value,
                            federal_unit:document.getElementById('estado').value,
                          },
                        },
                      }),
                    }).then(a=>a.json()).then(a=>{
                      new Resposta(a)                      
                    });
                  }                
                },
                onFetching: (resource) => {
                  console.log("Fetching resource: ", resource);
                },
              },
            });            
          })          
        }        
      let array = document.getElementsByClassName('auto')
      array.forEach(elements = (v, element) => {
        array[element].value = auto[element]
      });
    }
  </script>

