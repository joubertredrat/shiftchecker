/*!
 * ShiftChecker for jQuery v1.2                  
 *
 * Copyright (c) 2012 Joubert "RedRat" <joubert@redrat.com.br>
 * Licensed under GPL version 2
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * Usage: Add a class tag in yours checkboxs as you like to enable the ShiftChecker.
 * Into your jQuery or document ready function, add a shiftChecker in class that you selected.
 * Example: $(".all").shiftChecker();
 * Enjoy and be happy.	
 */
jQuery.fn.shiftChecker = function() {
	var all_elements = {};
	var last_clicked = 0;
	var count = 0;
	var initial_element = null;
	var final_element = null;
	this.each(function() {
		if($(this).attr("type") == "checkbox")
		{
			var element_value = count;
			all_elements[count] = $(this);
			$(this).click(function(event){
				if(event.shiftKey)
				{
					initial_element = element_value > last_clicked ? last_clicked : element_value;
					final_element = element_value > last_clicked ? element_value : last_clicked;
					while(initial_element <= final_element)
						all_elements[initial_element++].attr("checked", true);
				}
				last_clicked = element_value;
			});
			count++;
		}
	});
}