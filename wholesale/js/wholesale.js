$(document).ready(function(){

	// credit to danasbakery.com for product counter
	var count = 0;
	var limit = 1000;	

	String.prototype.format = function () {
	    var args = arguments;
	    return this.replace(/\{(\d+)\}/g, function (m, n) { return args[n]; });
	};

	// increase product count
	$('.product .qty .add').click(function(e) {
		// box is full
        if (count >= limit) {
          return;
        }

        // add 1
        var product = $(this).parents('.qty:first');

        var amount = product.find('.amt');
        var newamount = parseInt(amount.html()) + 1;
        amount.html(newamount);

        //jQuery('#bundle-option-' + $product.attr('data-option') + '-' + $product.attr('data-selection')).click();
        //jQuery('#bundle-option-' + $product.attr('data-option') + '-qty-input').val(optionQty).keyup();

        count++;
        updateSummary();
        
	});

	//decrease product count
	$('.product .qty .remove').click(function(e) {
		// count is already at 0
        if (count <= 0) {
          return;
        }

        // add 1
        var product = $(this).parents('.qty:first');

        var amount = product.find('.amt');
        var newamount = parseInt(amount.html()) - 1;

        // individual count is already at 0
        if (newamount < 0) {
          return;
        }

        amount.html(newamount);

        //jQuery('#bundle-option-' + $product.attr('data-option') + '-' + $product.attr('data-selection')).click();
        //jQuery('#bundle-option-' + $product.attr('data-option') + '-qty-input').val(optionQty).keyup();

        count--;
        updateSummary();

	});

	// update order
	var updateSummary = function() {
	    var indTotalSoda = AddLineItems('soda', 'Craft Soda 10mg');
	    var indTotalSoda50 = AddLineItems('soda50', 'Craft Soda 50mg');
	    var indTotalSoda100 = AddLineItems('soda100', 'Craft Soda 100mg');
	    var indTotalMints = AddLineItems('mints', 'Mints');
	    var indTotalTaffy = AddLineItems('taffy', 'Taffy');
	    var indTotalGummies = AddLineItems('gummies', 'Gummies');
	    var indTotalHardCandy = AddLineItems('hardcandy', 'Hard Candy');

	    $('.currentorder .orderTotal').html('Order total: $' + (indTotalSoda + indTotalSoda50 + indTotalSoda100 + indTotalMints + indTotalTaffy + indTotalGummies + indTotalHardCandy));
	};

	function AddLineItems(type, name) {
	    var chosen_item = '';
	    $('.picker .product.{0} .qty'.format(type)).each(function (i, e) {
	        var $this = $(this);
	        var orderAmt = parseInt($this.find('.amt').html());
	        var itemPrice = orderAmt * ($(this).siblings('.wholesale-pricing').children('.priceper').html());
	        var sku = $this.find('.flavor').data('sku');

	        if (orderAmt > 0) {
	            chosen_item += '<li>{0} x {1} {2} - $<span class="newPrice{3} line_item" data-qty="{0}" data-sku="{4}">{5}</span></li>'.format(orderAmt, $this.find('.flavor').html(), name, type, sku, itemPrice);
	        }
	    });
	    $('.currentorder .chosen.{0}'.format(type)).html(chosen_item);

	    var sum = 0;

	    $('.newPrice{0}'.format(type)).each(function () {
	        sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
	    });

	    $('.indTotal{0}'.format(type)).html(sum);
	    return sum;
	}

});
