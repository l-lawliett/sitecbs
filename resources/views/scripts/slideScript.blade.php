<script src="assets/js/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
        $(function() {
            $(document).on('hidden.bs.modal', '#dialog', function (event) {
                $(this).removeData('bs.modal');
                $(this).find('.modal-content').html('<p style="text-align: center; margin-top: 2em;">' +
                    '<img src="/assets/img/loading.gif" alt="Please wait. Loading..." />' +
                    '<br /        >Please wait a moment. Loading...</p>');
            });
        });
</script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="assets/js/jquery.vaccordion.js"></script>
        <script type="text/javascript">
            $(function() {
                    $('#va-accordion').vaccordion({
                        expandedHeight  : 400,
                        animSpeed       : 500,
                        accordionH      : 300,
                        visibleSlices   : 2,
                        accordionW      : '100%',
                        animEasing      : 'easeInOutBack',
                        animOpacity     : 0.4
                    });
            });
        </script>