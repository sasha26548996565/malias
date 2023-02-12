<script>
    jQuery(document).ready(function () {
        jQuery('.add-cart').click(function (event) {
            event.preventDefault();
            let productId = jQuery(event.target).data('id');
            let quantity = jQuery('.quantity').val();
            alert(quantity);

            jQuery.ajax({
                url: "{{ route('cart.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    productId: productId,
                    quantity: 1,
                },
                success: function (data) {
                    window.location.reload();
                }
            });
        });
    });
</script>
