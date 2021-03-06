(function($){
	$.fn.extend({
		popConfirm: function(options) {
			var defaults = {
				title: 'Confirmation',
				content: 'Are you really sure?',
				placement: 'right'
			};
			var options =  $.extend(defaults, options);
			
			return this.each(function() {
				var self = $(this);
				var arrayActions = [];
				
				// If there are jquery click events
				if (typeof(jQuery._data(this, "events")) != "undefined" && typeof(jQuery._data(this, "events")['click']) != "undefined") {
					
					// Save all click handlers
					for (var i = 0; i < jQuery._data(this, "events")['click'].length; i++) {
						arrayActions.push(jQuery._data(this, "events")['click'][i].handler);
					}
					
					// unbind it to prevent it firing
					$(self).unbind("click");
				}
				
				// If there are hard onclick attribute
				if(typeof self.attr('onclick') != 'undefined') {
					// Extracting the onclick code to evaluate and bring it into a closure
					var code = self.attr('onclick');
					arrayActions.push(function() {
						eval(code);
					});
					$(self).removeAttr('onclick');
				}
				
				// If there are href link defined
				if(typeof self.attr('href') != 'undefined') {
					// Assume there is a href attribute to redirect to
					arrayActions.push(function() {
						window.location.href = self.attr('href');
					});
				}
				
				// If the button is a submit one
				if(typeof self.attr('type') != 'undefined' && self.attr('type') == 'submit') {
					// Get the form related to this button then store submiting in closure
					var form = $(this).parents('form:first');
					arrayActions.push(function() {
						form.submit();
					});
				}
				
				self.popover({
					trigger: 'manual',
					title: options.title,
					html: true,
					placement: options.placement,
					content: options.content + '\
						<p class="button-group" style="margin-top: 10px; text-align: center;">\
							<button type="button" class="btn btn-small btn-danger confirm-dialog-btn-confirm">Yes</button>\
							<button type="button" class="btn btn-small confirm-dialog-btn-abord">No</button>\
						</p>\
					'
				});
				
				self.bind('click', function(e) {
					e.preventDefault();
					
					self.popover('show');
					
					self.next('.popover').find('.confirm-dialog-btn-confirm').bind('click', function(e) {
						for(var i = 0; i < arrayActions.length; i++) {
							arrayActions[i].apply(self);
						}
						
						self.popover('hide');
					});
					self.next('.popover').find('.confirm-dialog-btn-abord').bind('click', function(e) {
						self.popover('hide');
					});
				});
			});
		}
	});   
})(jQuery);