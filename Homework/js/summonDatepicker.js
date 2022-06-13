$(function() {
    $('#calendar').datepicker({
        //
        language: 'en',
        clearButton: true,
        onSelect(formattedDate, date, inst) {
            inst.hide();
        },
    });
});