<script>
    jQuery(document).ready(function () {
        let
            priceFrom = jQuery('.priceFrom'),
            priceTo = jQuery('.priceTo'),
            property = jQuery('.property');

        property.click(function (event) {
            event.preventDefault();
            let value = jQuery(this).data('value');
            filter(priceFrom.val(), priceTo.val(), value);
        });


        priceFrom.change(function (event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        priceTo.change(function (event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        function filter(priceFrom, priceTo, propertyValue = null)
        {
            jQuery.ajax({
                method: "GET",
                url: "{{ route('category.show', $categorySlug) }}",
                data: {
                    priceFrom: priceFrom,
                    priceTo: priceTo,
                    property: propertyValue,
                },
                success: function (data) {
                    jQuery('.listview').html(data);
                }
            });
        }
    });
</script>
