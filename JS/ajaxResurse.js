$(document).ready(function () {
    $('#model').change(function () {
        var modelValue = $(this).val();
        var url = 'actionResurse.php';
        $.post(
            url,
            "model=" + modelValue,

            function (resultRes) {

                if (resultRes.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    $(resultRes.printer).each(function() {
                        console.log(resultRes)
                         a1= parseFloat($(this).attr('1'));
                         a2 = parseFloat($(this).attr('2'));
                         a3 = parseFloat($(this).attr('3'));
                         a4 = parseFloat($(this).attr('4'));
                         a5 = parseFloat($(this).attr('5'));
                         a6 = parseFloat($(this).attr('6'));
                         a7 = parseFloat($(this).attr('7'));
                         a8 = parseFloat($(this).attr('8'));
                         a9 = parseFloat($(this).attr('9'));
                         a10 = parseFloat($(this).attr('10'));
                         a11 = parseFloat($(this).attr('11'));
                         a12 = parseFloat($(this).attr('12'));
                    });

                }
            },
            "json"
        );
       
    });
})
