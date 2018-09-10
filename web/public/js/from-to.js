var fromToBlock = document.querySelector('.from-to');
fromToBlock.style.display = 'none';
var fromToCheckbox = document.querySelector('.checkbox-style__input--from-to');
var fromToBtn = document.querySelector('.button--profile--from-to');


fromToBtn.addEventListener('click', function() {
	fromToCheckbox.checked = true;
	fromToBlock.style.display = 'flex';

});



fromToCheckbox.addEventListener('change', function() {
	if(fromToCheckbox.checked) {
		fromToBlock.style.display = 'flex';

	} else {
		fromToBlock.style.display = 'none';
       
	}
});