const Brazil = require("flatpickr/dist/l10n/pt.js").default.pt;
flatpickr.localize(Brazil);

$(function(){
    $(".dateTimePicker").flatpickr({
        enableTime: true,
        dateFormat: "d/m/Y H:i"
    });

    $(".datePicker").flatpickr({
        dateFormat: "d/m/Y"
    });

    $(".timePicker").flatpickr({
        enableTime: true,
        noCalendar: true,
        time_24hr: true,
        dateFormat: "H:i",
    });
});
