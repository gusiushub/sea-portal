// На сервер будет отправлен запрос страницы http://hostname/ajaxtest.php и указаны два параметра.
// После получения ответа от сервера будет вызвана функция onAjaxSuccess, которая выведет
// на экран сообщение с данными, присланными сервером.
// $.post(
//     "/web/site/profile",
//     {
//         param1: "param1",
//         param2: 2
//     },
//     onAjaxSuccess
// );
//
// function onAjaxSuccess(data)
// {
//     // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
//     alert(data);
// }
function InfoChange(btnEvent, elementsToChange, classToBlockSelect, classToBlockInput, buttonTextChange) {
  this.btnEvent = document.querySelector(btnEvent);
    this.elementsToChange = document.querySelectorAll(elementsToChange);

    this.ready = this.btnEvent && this.elementsToChange;

    if(!this.ready) {
      return;
    };

    this.classToBlockInput = classToBlockInput;
    this.classToBlockSelect = classToBlockSelect;
    this.buttonTextChange = buttonTextChange;
    this.currentBtnText = this.btnEvent.textContent;
    var _this = this;

    var buttonAttr = function() {
      _this.btnEvent.setAttribute('data-status', 'unactive');
    };
    buttonAttr();

    var deleteArrows = function() {
      var hiddenArrow = document.querySelectorAll('.select-style__arrow');
      var btnAttr = _this.btnEvent.getAttribute('data-status');
      if(btnAttr  == 'unactive') {
        for(var i = 0; i < hiddenArrow.length; i++) {
            hiddenArrow[i].style.display = 'none';
          }
      } else {
        for(var i = 0; i < hiddenArrow.length; i++) {
          hiddenArrow[i].style.display = 'block';
        }
      }
  }

  deleteArrows();

    this.btnEvent.addEventListener('click', function() {
      var btnAttribute =  _this.btnEvent.getAttribute('data-status');
  
      if (btnAttribute == 'unactive') {
        _this.btnEvent.setAttribute('data-status', 'active');
        _this.btnEvent.textContent = _this.buttonTextChange;
      } else {
        _this.btnEvent.setAttribute('data-status', 'unactive');
        _this.btnEvent.textContent = _this.currentBtnText;
      };

      for (var i = 0; i < _this.elementsToChange.length; i++) {
        if (_this.elementsToChange[i].tagName == 'INPUT' || _this.elementsToChange[i].tagName == 'TEXTAREA') {

          //Change value
          _this.elementsToChange[i].addEventListener('change', function(event) {
              var currentItem = event.target;
              var currentValue = event.target.value;
              currentItem.setAttribute('value', currentValue);

            });

          //Change class
            if(_this.elementsToChange[i].classList.contains(classToBlockInput)) {
              _this.elementsToChange[i].classList.remove(classToBlockInput);
              _this.elementsToChange[i].removeAttribute('disabled');
            } else {
              _this.elementsToChange[i].classList.add(classToBlockInput);
              _this.elementsToChange[i].setAttribute('disabled', '');
            };

        } else if (_this.elementsToChange[i].tagName == 'SELECT') {
          if(_this.elementsToChange[i].classList.contains(classToBlockSelect)) {
              _this.elementsToChange[i].classList.remove(classToBlockSelect);
              _this.elementsToChange[i].removeAttribute('disabled');
              deleteArrows();
            } else {
              _this.elementsToChange[i].classList.add(classToBlockSelect);
              _this.elementsToChange[i].setAttribute('disabled', '');
              deleteArrows();
            };

        } else {
          console.log('error script')
        }
      }
  })
}

var fieldChange = new InfoChange('.button--fields-change', '.field-to-change', 'field-to-change--unactive', 'field-to-change--unactive', 'save');
var passChange = new InfoChange('.button--profile--change-pass', '.textinput-container__input--change-pass ', 'textinput-container__input--change-unactive', 'textinput-container__input--change-unactive', 'save');
var fieldChange2 = new InfoChange('.button--profile-change', '.textinput-container__input--change', 'textinput-container__input--change-unactive', 'textinput-container__input--change-unactive', 'save');
var fromTo = new InfoChange('.button--profile--from-to', '.textinput-container__input--from-to', 'textinput-container__input--change-unactive', 'textinput-container__input--change-unactive', 'save');
var paymentClient = new InfoChange('.button-change-payment-client', '.textinput-container__input--profile', 'textinput-container__input--profile-unactive', 'textinput-container__input--profile-unactive', 'edit');


// No script situation


clickButton = document.querySelector('.button--fields-change');

var changeText = function() {
  var changeLink = document.querySelector('.contract-description__cv-link');
  var buttonsAppeared = document.querySelectorAll('.button--appeared');
  var imagesTextHidden = document.querySelectorAll('.change-image__appeared-text');
  var btnAttr = clickButton.getAttribute('data-status');
  if(btnAttr  == 'unactive') {
    if(changeLink) {
      changeLink.textContent = 'View';
    }
    if(buttonsAppeared) {
      for(var i = 0; i < buttonsAppeared.length; i++) {
       buttonsAppeared[i].style.display = 'none';
      } 
    }
    if(imagesTextHidden) {
      for(var i = 0; i < imagesTextHidden.length; i++) {
       imagesTextHidden[i].style.display = 'none';
      } 
    }
    
  } else {
    if(changeLink) {
      changeLink.textContent = 'Attache';
    }
    if(buttonsAppeared) {
      for(var i = 0; i < buttonsAppeared.length; i++) {
        buttonsAppeared[i].style.display = 'block';
      }
    }
    if(imagesTextHidden) {
      for(var i = 0; i < imagesTextHidden.length; i++) {
       imagesTextHidden[i].style.display = 'block';
      } 
    }
  }
}


clickButton.addEventListener('click', function(){
  changeText();
})