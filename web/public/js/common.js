//menu

var menuBtn = document.querySelector('.adaptive-menu__button');
menuBtn.onclick = function() {
    var list = document.querySelector('.adaptive-menu__navigation');
    list.classList.toggle('adaptive-menu__navigation--active');
}

//menu-gear

var gear = document.querySelector('.settings__icon--3');
gear.addEventListener('mouseenter', function() {
    var menu = document.querySelector('.settings__hidden-menu');
    menu.style.display = 'block';
    var timeClose = setTimeout(function() {
        menu.style.display = 'none';
    }, 4000);
    menu.addEventListener('mouseenter', function() {
        clearTimeout(timeClose);
    });
    menu.addEventListener('mouseleave', function() {
        menu.style.display = 'none';
    });
})


//popup's


var popups = document.querySelectorAll('.slider-advertising__slide');

for(var i = 0; i < popups.length; i++) {
    popups[i].addEventListener('click', function() {
        var attr = this.getAttribute('data-number');
        var modals = document.querySelectorAll('.slider-advertising__modal');
        var backs = document.querySelectorAll('.slider-advertising__back');
        var slideCount = 0;
        document.body.style.overflow = 'hidden';
        for(var j = 0; j < modals.length; j++) {
            var attrModal = modals[j].getAttribute('data-number');
            if (attr == attrModal && slideCount == 0) {
                console.log(attrModal+' '+attr);
                slideCount += 1;
                modals[j].style.display = 'block';
                var thisItem = modals[j];
            }
            var attrBack = backs[j].getAttribute('data-number');
            if (attr == attrBack) {
                backs[j].addEventListener('click', function() {
                    thisItem.style.display = 'none';
                    document.body.style.overflow = 'auto';
                })
            }
        }
    })
}

//Hover adver

var advertising = document.querySelectorAll('.slider-advertising__available');

for (var k = 0; k < advertising.length; k++) {
    advertising[k].addEventListener('mouseover', function() {
        if(this.classList.contains('slider-advertising__available--selected')) {
            return;
        } else {
            this.classList.add('slider-advertising__available--active');
            this.textContent = 'select';
        }
    })
    advertising[k].addEventListener('mouseout', function() {
        if(this.classList.contains('slider-advertising__available--selected')) {
            return;
        } else {
            this.classList.remove('slider-advertising__available--active');
            this.textContent = 'available';
        }
    })
    advertising[k].addEventListener('click', function() {
        this.classList.toggle('slider-advertising__available--selected');
        if (this.classList.contains('slider-advertising__available--selected')) {
            this.textContent = 'selected';
        } else {
            this.textContent = 'available';
        }
    })
}

$('#profile-change').click(function(){
    if($(this)[0].innerHTML === 'save') {
        var company = $('input[name="company"]').val(),
            phone = $('input[name="phone"]').val(),
            country = $('input[name="country"]').val(),
            city = $('input[name="city"]').val(),
            website = $('input[name="website"]').val(),
            email = $('input[name="email"]').val(),
            contacts = $('input[name="contacts"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile1 = {
                company,
                phone,
                country,
                city,
                website,
                email,
                contacts
            };
        var jsdata = JSON.stringify(profile1);
        $.ajax({
            type: "POST",
            url: "/web/site/ajax",
            data: {
                profile1: jsdata,
                _csrf: _csrf
            },
            success: function(r) {
                console.log(r);
            }
        });
    }
});
