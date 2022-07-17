<p>決済ページへ移動します。</p>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey='{{ $publicKey }}';
    const stripe = Stripe(publicKey);
    window.onload = function(){
    stripe.redirectToCheckout({
        sessionId:'{{ $session->id }}'
    }).then(function (result)){
            window.location.href = 'http://127.0.0.1:8000/cart';
        });
    }
</script>