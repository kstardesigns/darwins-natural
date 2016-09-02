//$.post("email.php", { data : $("#currentorder").html() }, function(result){
	  /* handle results */
//	});


$('#orderform').submit(function () {
    var line_items = '';
    $('.line_item').each(function () {
        var sku = $(this).data('sku');
        var qty = $(this).data('qty');
        line_items += ',{ "sku": "{0}", "qty": {1} }'.format(sku, qty);
    });

    var order_json_string = '{ "line_items": [ {0} ] }'.format(line_items.substring(1));
    $('#line_items').val(order_json_string);

    //$('#line_items').val('[ {0} ]'.format(line_items.substring(1)));

    $('#content').val($('#currentorder').html());
});