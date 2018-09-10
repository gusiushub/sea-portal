function Tab(tabButtons, tabContainers, classOfActiveTab) {
	this.tabButtons = document.querySelectorAll(tabButtons);
	this.tabContainers = document.querySelectorAll(tabContainers);
	this.classOfActiveTab = classOfActiveTab;
	
	var _self = this;

	this.ready = this.tabButtons && this.tabContainers;
	if(!this.ready) {
		return;
	}


	function clearTabs() {
		for (var i = 0; i < _self.tabContainers.length; i++) {
      		_self.tabContainers[i].style.display = 'none';
      		if(_self.tabButtons[i].classList.contains(_self.classOfActiveTab)) {
      			_self.tabButtons[i].classList.remove(_self.classOfActiveTab);
      		}
    	}
	}
  
  clearTabs();


  _self.tabContainers[0].style.display = 'block';
  _self.tabButtons[0].classList.add(_self.classOfActiveTab);

	for(var i = 0; i < _self.tabButtons.length; i++) {
		_self.tabButtons[i].addEventListener('click', function() {
			var buttonAttribute = this.getAttribute('data-tab-number');
        	clearTabs();
        	this.classList.add(_self.classOfActiveTab);
        	for(var i = 0; i < _self.tabContainers.length; i++) {
        	  var tabContainerAttribute = _self.tabContainers[i].getAttribute('data-tab-container-number');
        	   if (tabContainerAttribute == buttonAttribute) {
        	     _self.tabContainers[i].style.display = 'block';
        	   }
        	}
		})
	}

}

var tabPay = new Tab('.payment-menu__item', '.pay-now', 'payment-menu__item--active'); 
var tabFullPay = new Tab('.payment-menu__item', '.full-payment', 'payment-menu__item--active'); 


