<body>
    
<!-- Step #2 -->
<form id="form-checkout" >
   <input type="text" name="cardNumber" id="form-checkout__cardNumber" value="5031 4332 1540 6351"/>
   <input type="text" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" value="11"/>
   <input type="text" name="cardExpirationYear" id="form-checkout__cardExpirationYear" value="25" />
   <input type="text" name="cardholderName" id="form-checkout__cardholderName"value="nome"/>
   <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" value="mr.55davi@gmail.com"/>
   <input type="text" name="securityCode" id="form-checkout__securityCode" value="123"/>
   <select name="issuer" id="form-checkout__issuer"></select>
   <select name="identificationType" id="form-checkout__identificationType"></select>
   <input type="text" name="identificationNumber" id="form-checkout__identificationNumber" value="02276555599"/>
   <select name="installments" id="form-checkout__installments"></select>
   <button type="submit" id="form-checkout__submit">Pagar</button>
   <progress value="0" class="progress-bar">Carregando...</progress>
</form>
   <!-- Add step #2 -->
   <script src="https://sdk.mercadopago.com/js/v2"></script>
   <script>
       const mp = new MercadoPago('TEST-14b951bd-ee38-47d5-9415-c7606f512bec');
       // Add step #3
       // Step #3
const cardForm = mp.cardForm({
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

      // Animate progress bar
      const progressBar = document.querySelector(".progress-bar");
      progressBar.removeAttribute("value");

      return () => {
        progressBar.setAttribute("value", "0");
      };
    },
  },
});
   </script>
</body>