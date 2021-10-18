<style>
  @media screen and (min-width: 576px) {
    .modal-dialog{
      max-width:100% !important
    }
  }
</style>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="form-checkout">
          <div class="conteiner-fluid">
            <div class="row"   >
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Número do Cartão</label>
                  <input class="form-control" type="text" name="cardNumber" id="form-checkout__cardNumber" value=""/>
                </div>
                <div class="form-group">
                  <label>Mês de Vencimento</label>
                  <input class="form-control" type="number" min="2" max="2" placeholder="01" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" value="11"/>
                </div>
                <div class="form-group">
                  <label>Ano de Vencimento</label>
                  <input class="form-control" type="number" min="2" max="2" placeholder="22" name="cardExpirationYear" id="form-checkout__cardExpirationYear" value="25" />
                </div>
                <div class="form-group">
                  <label>Nome do Cartão</label>
                  <input class="form-control" type="text" name="cardholderName" id="form-checkout__cardholderName"value="nome"/>  
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" value="mr.55davi@gmail.com"/>
                </div>
                <div class="from-group">
                  <label>Código do Cartão</label>
                  <input class="form-control" type="text" name="securityCode" id="form-checkout__securityCode" value="123"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Bandeira do Cartão</label>
                  <select class="form-control" name="issuer" id="form-checkout__issuer"></select>
                </div>
                <div class="form-group">
                  <label for="">Documento</label>
                  <select class="form-control" name="identificationType" id="form-checkout__identificationType"></select>
                </div>
                <div class="form-group">
                  <label for="">Número do Documento</label>
                  <input class="form-control" class="form-control" type="text" name="identificationNumber" id="form-checkout__identificationNumber" value="02276555599"/>
                </div>
                <div class="form-group">
                  <label for="">Parecelas</label>
                  <select class="form-control" name="installments" id="form-checkout__installments"></select>
                </div>              
              </div>
              <img width="100" height="100" src="data:image/png;base64, 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"/>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<body>
<script>
  setTimeout(function(){                      
                     
  $.getScript("https://sdk.mercadopago.com/js/v2").then(function(){
  const mp = new MercadoPago('TEST-14b951bd-ee38-47d5-9415-c7606f512bec',{
      locale: 'pt-BR',
    });

        var cardForm = mp.cardForm({
          amount: "100.5",
          autoMount: true,
          form: {
            id: "form-checkout",
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
            onFormUnmounted: error => {
                if (error) return console.warn('Form Unmounted handling error: ', error)
                console.log('Form unmounted')
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
                identificationType,
              } = cardForm.getCardFormData();

              fetch("process_payment.php", {
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
                  description: "Descrição do produto",
                  payer: {
                    email,
                    identification: {
                      type: identificationType,
                      number: identificationNumber,
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
//5555555555554444
   </script>
</body>