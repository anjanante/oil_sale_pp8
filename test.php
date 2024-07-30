<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="paypal-button-container1"></div>
<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AcisJzfRDB-vV_x1hRkVM0vPzlhFJMOW63DlsVlmvG02xgPD588fjPIu9nMoOiwRGZpAH8FBpstqRFVv&currency=USD&debug=true"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        style: {
            layout: 'horizontal'
        },

        createOrder: function(data, actions) {
            console.log(actions)
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 75 //The amount you want to charge
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details);
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container1');


    window.paypal
        .Buttons({
            style: {
                shape: "rect",
                layout: "vertical",
                color: "gold",
                label: "paypal",
            },
            message: {
                amount: 100,
            },
            async createOrder() {
                try {
                    const response = await fetch("/api/orders", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        // use the "body" param to optionally pass additional order information
                        // like product ids and quantities
                        body: JSON.stringify({
                            cart: [{
                                id: 1,
                                quantity: 4,
                            }, ],
                        }),
                    });
                    console.log("response");
                    console.log(response);
                  return 12;

                    const orderData = await response.json();
                  

                    // if (orderData.id) {
                    //     return orderData.id;
                    // }
                    // const errorDetail = orderData?.details?.[0];
                    // const errorMessage = errorDetail ?
                    //     `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})` :
                    //     JSON.stringify(orderData);

                    // throw new Error(errorMessage);
                } catch (error) {
                    console.log("ERROR createOrder");
                    console.log(error);
                    // resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
                }
            },
            async onApprove(data, actions) {
                try {
                    const response = await fetch(`/api/orders/${data.orderID}/capture`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                    });

                    const orderData = await response.json();
                    // Three cases to handle:
                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    //   (2) Other non-recoverable errors -> Show a failure message
                    //   (3) Successful transaction -> Show confirmation or thank you message

                    const errorDetail = orderData?.details?.[0];

                    if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
                        // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                        // recoverable state, per
                        // https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
                        return actions.restart();
                    } else if (errorDetail) {
                        // (2) Other non-recoverable errors -> Show a failure message
                        throw new Error(`${errorDetail.description} (${orderData.debug_id})`);
                    } else if (!orderData.purchase_units) {
                        throw new Error(JSON.stringify(orderData));
                    } else {
                        // (3) Successful transaction -> Show confirmation or thank you message
                        // Or go to another URL:  actions.redirect('thank_you.html');
                        const transaction =
                            orderData?.purchase_units?.[0]?.payments?.captures?.[0] ||
                            orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];
                        resultMessage(
                            `Transaction ${transaction.status}: ${transaction.id}<br>
          <br>See console for all available details`
                        );
                        console.log(
                            "Capture result",
                            orderData,
                            JSON.stringify(orderData, null, 2)
                        );
                    }
                } catch (error) {
                    console.error(error);
                    resultMessage(
                        `Sorry, your transaction could not be processed...<br><br>${error}`
                    );
                }
            },
        })
        .render("#paypal-button-container");
</script>
</body>
</html>