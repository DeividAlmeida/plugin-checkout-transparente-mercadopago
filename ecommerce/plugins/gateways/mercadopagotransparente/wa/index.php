<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<!-- JavaScript Bundle with Popper -->
  <div class="modal fade" id="mercadopagotransparente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dados de Cobrança </h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <div class="conteiner-fluid" >
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <lable>Primeiro Nome</lable>
                  <input class="form-control auto" placeholder="Primeiro nome" id="nome">
                </div>
                <div class="form-group">
                  <lable>Sobrenome</lable>
                  <input class="form-control auto" placeholder="Sobrenome" id="sobrenome">
                </div>
                <div class="form-group">
                  <label for="">Documento</label>
                  <select class="form-control auto" name="identificationType" id="form-checkout__identificationType"></select>
                </div>
                <div class="form-group">
                  <label for="">Número do Documento</label>
                  <input class="form-control auto"  type="text" name="identificationNumber" id="form-checkout__identificationNumber" value=""/>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control auto" type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" value=""/>
                </div>                
                <div class="form-group">
                  <lable>Estado</lable>                  
                  <select class="form-control auto"  id="estado">
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
                  <input class="form-control auto" id="cidade" placeholder="Cidade">
                </div>
                <div class="form-group">
                  <lable>CEP</lable>
                  <input class="form-control auto" id="cep" placeholder="cep">
                </div>
                <div class="form-group">
                  <lable>Bairro</lable>
                  <input class="form-control auto" id="bairro" placeholder="Bairro">
                </div>
                <div class="form-group">
                  <input class="form-control auto" id="rua" placeholder="Rua">
                </div>
                <div class="form-group">
                  <lable>Número</lable>
                  <input class="form-control auto" id="numero" placeholder="Número do Imovel"> 
                </div>
              </div>
            </div>
            <div class="row mt-5" id="cartao">              
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Número do Cartão</label>
                  <input class="form-control" type="text" name="cardNumber" id="form-checkout__cardNumber" value=""/>
                </div>
                <div class="form-group">
                  <label>Mês de Vencimento</label>
                  <input class="form-control" type="number" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" value="11"/>
                </div>
                <div class="form-group">
                  <label>Ano de Vencimento</label>
                  <input class="form-control" type="number"   name="cardExpirationYear" id="form-checkout__cardExpirationYear" value="25" />
                </div>
                <div class="form-group">
                  <label>Nome do Cartão</label>
                  <input class="form-control" type="text" name="cardholderName" id="form-checkout__cardholderName"value="nome"/>  
                </div>
              </div>
              <div class="col-lg-6">                
                <div class="from-group">
                  <label>Código do Cartão</label>
                  <input class="form-control" type="text" name="securityCode" id="form-checkout__securityCode" value="123"/>
                </div>
                <div class="form-group">
                  <label for="">Bandeira do Cartão</label>
                  <select class="form-control" name="issuer" id="form-checkout__issuer"></select>
                </div>
                <div class="form-group">
                  <label for="">Parecelas</label>
                  <select class="form-control" name="installments" id="form-checkout__installments"></select>
                </div>              
              </div>
            </div>              
            <img width="100" height="100" src="data:image/png;base64, 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"/>
            
            <div class="modal-footer">
              <button  type="button" data-dismiss="modal" class="btn btn-secondary" id="cartCheckout">Continuar</button>                 
            </div>
          </div>
      </div>
    </div>
  </div>
<body>
<script>
function mercadopagotransparente(a) {
  document.getElementById('cartao').style.display= "block"
  document.getElementById('composer').value=a;
  let doc
   if (this.event.target.value != 'cartao') return document.getElementById('cartao').style.display= "none"
  switch (document.getElementById('billing_persontype').value) {
    case '1':
      doc = 'CPF'
      break;
    case '2':
      doc = 'CNPJ'
      break;
 
  }
    let array = document.getElementsByClassName('auto')
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
    array.forEach(elements = (v, element) => {
      array[element].value = auto[element]
    });
  }
  setTimeout(function(){                             
  $.getScript("https://sdk.mercadopago.com/js/v2")
    .then(function(){
        const mp = new MercadoPago('TEST-14b951bd-ee38-47d5-9415-c7606f512bec',{
            locale: 'pt-BR',
          });

        var cardForm = mp.cardForm({
          amount: '465.9',
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
            identificationType: {
              id: "form-checkout__identificationType",
              placeholder: "Tipo de documento",
            },
            identificationNumber: {
              id: "form-checkout__identificationNumber",
              placeholder: "Número do documento",
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
              event.preventDefault();
              const {
                paymentMethodId: payment_method_id,
                issuerId: issuer_id,
                cardholderEmail: email,
                amount,
                token,
                installments,
                identificationNumber,
                identificationType
              } = cardForm.getCardFormData();

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
                console.log(a)
              });
            },
            onFetching: (resource) => {
              console.log("Fetching resource: ", resource);
            },
          },
        });
  })
      }, 10000);
   </script>
</body>