<script>
    jQuery(document).ready(function () {
        jQuery('.add-cart').click(function (event) {
            event.preventDefault();
            let
                productId = jQuery(event.target).data('id')
                quantity = jQuery('.quantityy').val();

            if (quantity == undefined)
            {
                quantity = 1;
            }
            alert(quantity);

            jQuery.ajax({
                url: "{{ route('cart.add') }}",
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
