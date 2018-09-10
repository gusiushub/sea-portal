var paymentMethods = document.querySelectorAll('.payment-menu__item');
paymentMethods[0].classList.add('payment-menu__item--active');
for(var i = 0; i < paymentMethods.length; i++) {
	paymentMethods[i].addEventListener('click', function() {
		for(var i = 0; i < paymentMethods.length; i++) {
			var hasClass = paymentMethods[i].classList.contains('payment-menu__item--active');
			if(hasClass) {
				paymentMethods[i].classList.remove('payment-menu__item--active');
			}
		}
		this.classList.add('payment-menu__item--active');
	})
}