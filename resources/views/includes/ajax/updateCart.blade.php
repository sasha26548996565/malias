<script>
    jQuery(document).ready(function () {
        jQuery('.update-cart').click(function (event) {
            event.preventDefault();
            let
                productId = jQuery(event.target).data('id'),
                quantity = jQuery('#quantity' + productId).val();

            if (quantity == "")
            {
                quantity = 1;
            }

            jQuery.ajax({
                url: "{{ route('cart.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    productId: productId,
                    quantity: quantity,
                },
                success: function (data) {
                    window.location.reload();
                }
            });
        });
    });
</script>
