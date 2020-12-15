$(document).ready( function() {
    $('select[name="action2"]').on('change', function() {
        $('select[name="action"]').val(this.value)
    });

    $('select[name="action"]').on('change', function() {
        $('select[name="action2"]').val(this.value)
    });
});
