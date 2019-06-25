// var stripe = Stripe('pk_test_AFN3XJDjSNxynYX3YwUNqHKE009d7mENJd');
//
// stripe.createToken('bank_account', {
//     country: 'US',
//     currency: 'usd',
//     routing_number: '110000000',
//     account_number: '000123456789',
//     account_holder_name: 'Jenny Rosen',
//     account_holder_type: 'individual',
// }).then(function(result) {
//     // Handle result.error or result.token
// });


var stripe = Stripe('pk_test_AFN3XJDjSNxynYX3YwUNqHKE009d7mENJd');
var $form = $('#checkout-form');

$form.submit(function (event) {
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken"/>').val(response.id));

        //Submit the form:
        $form.get(0).submit();
    }
}


