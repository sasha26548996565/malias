<script>
    jQuery(document).ready(function () {
        jQuery('.update-quantity-cart').click(function (event) {
            event.preventDefault();
            let productId = jQuery(event.target).data('id');
            let quantity = jQuery('.quantity').val();
            alert(quantity);

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
