<script>
    jQuery(document).ready(function () {
        let
            priceFrom = jQuery('.priceFrom'),
            priceTo = jQuery('.priceTo');

        priceFrom.change(function (event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        priceTo.change(function (event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        function filter(priceFrom, priceTo)
        {
            jQuery.ajax({
                method: "GET",
                url: "{{ route('category.show', $categorySlug) }}",
                data: {
                    priceFrom: priceFrom,
                    priceTo: priceTo,
                    categorySlug: "{{ $categorySlug }}",
                },
                success: function () {
                    window.location.reload();
                }
            });
        }
    });
</script>
