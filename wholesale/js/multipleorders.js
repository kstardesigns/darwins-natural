$(document).ready(function(){

	    var counter = 2;
		
	    $("#addButton").click(function () {
				
			if(counter>6){
		        alert("Only 6 orders allowed online");
		        return false;
		    }   
			
			var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
                newTextBoxDiv.html('<div class="row"> Order '+ counter + '' +
				'<section class="col col-5"><label class="input"><input type="text" placeholder="Customer Name" name="name' + counter + 
				'" id="name' + counter + '" value="" ></label></section>'+
				'<section class="col col-3"><label class="input"><input type="text" placeholder="Product ID" name="order' + counter + 
				'" id="order' + counter + '" value="" ></label></section>'+
				'<section class="col col-3"><label class="input"><input type="text" placeholder="Quantity" name="quantity' + counter + 
				'" id="quantity' + counter + '" value="" size="5"></label></section></div>');
            
			newTextBoxDiv.appendTo("#TextBoxesGroup");
				
		    counter++;
	    });

	    $("#removeButton").click(function () {
		    if(counter==1){
		        alert("No more orders to remove");
		        return false;
		    }   
	        counter--;
			
	        $("#TextBoxDiv" + counter).remove();
		});
		
		$("#getButtonValue").click(function () {
		
			var msg = '';
			for(i=1; i<counter; i++){
				msg += "\n " + $('#order' + i).val();
                msg += $('#quantity' + i).val();
			}
		   	alert(msg);
		});
		
  });