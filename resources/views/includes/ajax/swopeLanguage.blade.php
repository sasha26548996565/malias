<script>
    jQuery(document).ready(function () {
        jQuery('.language-select').click(function (event) {
            let language = jQuery(this).text();

            jQuery.ajax({
                url: "{{ route('swapLanguage') }}",
                method: "GET",
                data: {
                    "locale": language,
                },
                success: function () {
                    window.location.reload();
                },
            });
        });
    });
</script>
