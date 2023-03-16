<script>
    jQuery(document).ready(function() {
        let
            priceFrom = jQuery('.priceFrom'),
            priceTo = jQuery('.priceTo'),
            property = jQuery('.property'),
            sort = jQuery('.sortBy');

        sort.click(function(event) {
            event.preventDefault();
            if (sort.val() == "null") {
                return;
            }
            filter(priceFrom.val(), priceTo.val(), null, sort.val());
        });

        property.click(function(event) {
            event.preventDefault();
            let value = jQuery(this).data('value');
            filter(priceFrom.val(), priceTo.val(), value, null);
        });


        priceFrom.change(function(event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        priceTo.change(function(event) {
            event.preventDefault();
            filter(priceFrom.val(), priceTo.val());
        });

        function filter(priceFrom, priceTo, propertyValue = null, sort = null) {
            jQuery.ajax({
                method: "GET",
                url: "{{ route('category.show', $categorySlug) }}",
                data: {
                    priceFrom: priceFrom,
                    priceTo: priceTo,
                    property: propertyValue,
                    sort: sort
                },
                success: function(data) {
                    jQuery('.listview').html(data);
                }
            });
        }
    });
</script>
