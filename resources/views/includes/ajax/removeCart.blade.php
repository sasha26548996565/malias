<script>
    jQuery(document).ready(function () {
        jQuery('.remove-cart').click(function (event) {
            event.preventDefault();
            let productId = jQuery(event.target).data('id');

            jQuery.ajax({
                url: "{{ route('cart.remove') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    productId: productId,
                    quantity: 1,
                },
                success: function (data) {
                    if (data.countCart <= 0)
                    {
                        window.location.replace("{{ route('index') }}");
                    } else
                    {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
