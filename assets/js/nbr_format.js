var $form = $("#form");
var $input = $form.find("input");

$input.on("keyup", function (event) {

    // 1.
    var selection = window.getSelection().toString();
    if (selection !== '') {
        return;
    }

    // 2.
    if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
        return;
    }

    // 1
    var $this = $(this);
    var input = $this.val();

// 2
    var input = input.replace(/[\D\s\._\-]+/g, "");

// 3
    input = input ? parseInt(input, 10) : 0;

// 4
    $this.val(function () {
        return (input === 0) ? "" : input.toLocaleString("en-US");
    });

});