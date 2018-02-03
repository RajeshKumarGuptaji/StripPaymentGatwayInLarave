<form action="{{URL('/testdata')}}" method="POST">
{{ csrf_field() }}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_kICkFBFwnM3NWymgZxxOPYAX"
    data-amount="999"
    data-name="Demo Site"
    data-description="Widget"
    data-image="/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>