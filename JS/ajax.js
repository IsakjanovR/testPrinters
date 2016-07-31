$(document).ready(function () {
    $('#vendorValue').change(function () {
        var vendorValue = $(this).val();
        if (vendorValue == '0') {
            $('#model').html('<option>- выберите город -</option>');
            $('#model').attr('disabled', true);
            return(false);
        }
        $('#model').attr('disabled', true);
        $('#model').html('<option>загрузка...</option>');
        var vendor = $('select[id="vendorValue"]').val();

        var url = 'action.php';
        $.post(
            url,
            "vendor=" + vendorValue,

            function (result) {

                if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
                    var options = '';
                    $(result.model).each(function() {
                        options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('name') + '</option>';
                        console.log(result)
                    });

                    $('#model').html(''+options);
                    $('#model').attr('disabled', false);
                }
            },
            "json"
        );


});
})