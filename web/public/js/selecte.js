var buttonSelecte = document.querySelectorAll('.button--selecte');
for(var i = 0; i < buttonSelecte.length; i++) {
	buttonSelecte[i].addEventListener('click', function() {
		for(var i = 0; i < buttonSelecte.length; i++) {
			if(buttonSelecte[i].classList.contains('button--selecte-active')) {
				buttonSelecte[i].classList.remove('button--selecte-active')
			}

			this.classList.add('button--selecte-active');
		}
	})
}