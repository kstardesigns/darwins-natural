$(document).ready(function(){

	// credit to danasbakery.com for product counter
	var count = 0;
	var limit = 1000;	

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
	      	var chosenSoda = '';
	      	var chosenSoda50 = '';
	      	var chosenSoda100 = '';
	      	var chosenMints = '';
	      	var chosenTaffy = '';
	      	var chosenGummies = '';
	      	var chosenHardCandy = '';
		  
	      	$('.picker .product.soda .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());


		        if (orderAmt > 0) {
		          chosenSoda += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Craft Soda 10mg - $' + '<span class="newPriceSoda">' + itemPrice + '</span></li>';
		        }
		    });
		        $('.currentorder .chosen.soda').html(chosenSoda);

		        var sodaSum = 0;

		        $('.newPriceSoda').each(function(){
				    sodaSum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
				}); 

				$('.indTotalSoda').html(sodaSum);

	     	

	     	$('.picker .product.soda50 .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		       

		        if (orderAmt > 0) {
		          chosenSoda50 += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Craft Soda 50mg - $' + '<span class="newPriceSoda50">' + itemPrice + '</span></li>';
		        }
		    });
		        $('.currentorder .chosen.soda50').html(chosenSoda50);

		        var soda50Sum = 0;

		        $('.newPriceSoda50').each(function(){
				    soda50Sum += parseFloat($(this).text());  
				}); 

				$('.indTotalSoda50').html(soda50Sum);

	     	

	     	$('.picker .product.soda100 .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		        

		        if (orderAmt > 0) {
		          chosenSoda100 += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Craft Soda 100mg - $' + '<span class="newPriceSoda100">' + itemPrice + '</span></li>';
		        }
		    });
		        $('.currentorder .chosen.soda100').html(chosenSoda100);

		        var soda100Sum = 0;

		        $('.newPriceSoda100').each(function(){
				    soda100Sum += parseFloat($(this).text()); 
				}); 

				$('.indTotalSoda100').html(soda100Sum);

	     	

	     	$('.picker .product.mints .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		 

		        if (orderAmt > 0) {
		          chosenMints += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Mints - $' + '<span class="newPriceMints">' + itemPrice + '</span></li>';
		        }
		    });
		        $('.currentorder .chosen.mints').html(chosenMints);

		        var mintsSum = 0;

		        $('.newPriceMints').each(function(){
				    mintsSum += parseFloat($(this).text());  
				}); 

				$('.indTotalMints').html(mintsSum);

	     	

	     	$('.picker .product.taffy .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		       

		        if (orderAmt > 0) {
		          chosenTaffy += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Taffy - $' + '<span class="newPriceTaffy">' + itemPrice + '</span></li>';
		        }
		    });

		        $('.currentorder .chosen.taffy').html(chosenTaffy);

		        var taffySum = 0;

		        $('.newPriceTaffy').each(function(){
				    taffySum += parseFloat($(this).text());  
				}); 

				$('.indTotalTaffy').html(taffySum);

	     	

	     	$('.picker .product.gummies .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		        

		        if (orderAmt > 0) {
		          chosenGummies += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Gummies - $' + '<span class="newPriceGummies">' + itemPrice + '</span></li>';
		        }
		    });

		        $('.currentorder .chosen.gummies').html(chosenGummies);

		        var gummiesSum = 0;

		        $('.newPriceGummies').each(function(){
				    gummiesSum += parseFloat($(this).text());  
				}); 

				$('.indTotalGummies').html(gummiesSum);

	     	

	     	$('.picker .product.hardcandy .qty').each(function(i, e) {
		        var $this = $(this);
		        var orderAmt = parseInt($this.find('.amt').html());
		        var itemPrice = orderAmt*($(this).siblings('.wholesale-pricing').children('.priceper').html());
		        

		        if (orderAmt > 0) {
		          chosenHardCandy += '<li>' + orderAmt + ' x ' + $this.find('.flavor').html() + ' Hard Candy - $' + '<span class="newPriceHardCandy">' + itemPrice + '</span></li>';
		        }
		    });
		        $('.currentorder .chosen.hardcandy').html(chosenHardCandy);
		        
		        var hardCandySum = 0;

				$('.newPriceHardCandy').each(function(){
				    hardCandySum += parseFloat($(this).text());
				});    

				$('.indTotalHardCandy').html(hardCandySum);
	     	

	     	//Get totals of each type, then add them up
	     	var indTotalSoda = parseInt($('.indTotalSoda').html());
	     	var indTotalSoda50 = parseInt($('.indTotalSoda50').html());
	     	var indTotalSoda100 = parseInt($('.indTotalSoda100').html());
	     	var indTotalMints = parseInt($('.indTotalMints').html());
	     	var indTotalTaffy = parseInt($('.indTotalTaffy').html());
	     	var indTotalGummies = parseInt($('.indTotalGummies').html());
	     	var indTotalHardCandy = parseInt($('.indTotalHardCandy').html());



	     	$('.currentorder .orderTotal').html('Order total: $' + (indTotalSoda + indTotalSoda50 + indTotalSoda100 + indTotalMints + indTotalTaffy + indTotalGummies + indTotalHardCandy));
	};

	
});


