$('#profile-seller-change').click(function(){
    if($(this).text().trim() === 'edit') {
        var company = $('input[name="cname"]').val(),
            phone = $('input[name="phone"]').val(),
            country = $('input[name="country"]').val(),
            city = $('input[name="city"]').val(),
            email = $('input[name="mail"]').val(),
            contacts = $('input[name="contacts"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile_seller1 = {
                company,
                phone,
                country,
                city,
                email,
                contacts
            };
        var jsdata = JSON.stringify(profile_seller1);
        $.ajax({
            type: "POST",
            url: "/web/site/seller-ajax",
            data: {
                profile_seller1: jsdata,
                _csrf: _csrf
            }
        });
    }
});

$('#profile_sller1_changebtn').click(function(){
    if($(this).text().trim() === 'change') {
        var password = $('input[name="password"]').val(),
            _csrf = $('input[name="_csrf"]').val()
        jsdata = JSON.stringify(password);
        $.ajax({
            type: "POST",
            url: "/web/site/seller-ajax",
            data: {
                change: jsdata,
                _csrf: _csrf
            }
        });
    }
});



$('#profile-seller1-2-change').click(function(){
    if($(this).text() === 'Edit') {
        var option = $('select[name="option"]').find('option:checked').text(),
            vtype = $('select[name="vessel-type"]').find('option:checked').text(),
            ovtype = $('select[name="option-vessel-type"]').find('option:checked').text(),
            length = $('input[name="length"]').val(),
            draft = $('input[name="draft"]').val(),
            deadweight = $('input[name="deadweight"]').val(),
            year = $('input[name="year"]').val(),
            flag = $('input[name="flag"]').val(),
            country = $('select[name="country"]').find('option:checked').text(),
            port = $('select[name="port"]').find('option:checked').text(),
            price = $('input[name="price"]').val(),
            currency = $('select[name="currency"]').find('option:checked').text(),
            message = $('textarea[name="message"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile_seller1_2 = {
                option,
                vtype,
                ovtype,
                length,
                draft,
                deadweight,
                year,
                flag,
                country,
                port,
                price,
                currency,
                message
            };
        var jsdata = JSON.stringify(profile_seller1_2);
        $.ajax({
            type: "POST",
            url: "/web/site/ship-ajax",
            data: {
                profile_seller1: jsdata,
                _csrf: _csrf
            }
        });
    }
});


var files;
$('input[type=file]').change(function(){
    files = this.files;

});

$('imput#files').change(function(){
    var files = this.files; //это массив файлов
    var form = new FormData();
    for(var i=0;i<files.length;i++){
        form.append("file_"+i,files[i]);
        console.log(form);
    }
})
var data = new FormData();
$.each( files, function( key, value ){
    data.append( key, value );
    console.log(data.append( key, value ));
});
console.log(data);
//console.log(files);
$('#profile-seller7-change').click(function(){
    if($(this).text() === 'Edit') {
        // var files;
        // $('input[type=file]').change(function(){
        //     files = this.files;
        //
        // });
        var category = $('select[name="category"]').find('option:checked').text(),
            vtype = $('select[name="vtype"]').find('option:checked').text(),
            option = $('select[name="option"]').find('option:checked').text(),
            length = $('input[name="length"]').val(),
            draft = $('input[name="draft"]').val(),
            dweight = $('input[name="dweight"]').val(),
            year = $('input[name="year"]').val(),
            flag = $('input[name="flag"]').val(),
            country = $('select[name="country"]').find('option:checked').text(),
            port = $('select[name="port"]').find('option:checked').text(),
            price = $('input[name="price"]').val(),
            currency = $('input[name="currency"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
           // files =  $('input[type="file"]').val(),

            profile_seller7 = {
                category,
                vtype,
                option,
                length,
                draft,
                dweight,
                year,
                flag,
                country,
                port,
                price,
                currency

            };
        var jsdata = JSON.stringify(profile_seller7);

            // var json_arr = JSON.stringify(arr);
        $.ajax({
            type: "POST",
            url: "/web/seller/offers",
            // contentType: false,
            data: {
                profile_seller7: jsdata,
                _csrf: _csrf
            },
            dataType: 'json',
        });

        // var attachments = $('.files').;
        //     var data= new FormData();
        //     var arr;
        // console.log(attachments.files.length);
        // for (var i=0; i< attachments.files.length; i++) {
        //      data.append('img', attachments.files[i]);
        //      data.append('_csrf', _csrf);
        //     console.log(attachments.files[i]);
        //
        //     // data.append('headline', headline);
        //     // data.append('article', article);
        //     // data.append('arr', arr);
        //     // data.append('tag', tag);
        // }


        $.ajax({
            url: '/web/seller/offers',
            type: 'POST',
            cache: false,
            dataType: 'json',
            processData: false, // Не обрабатываем файлы (Don't process the files)
            contentType: false, // Так jQuery скажет серверу что это строковой запрос
            data: data,

            success: function( respond, textStatus, jqXHR ){

                // Если все ОК

                if( typeof respond.error === 'undefined' ){
                    // Файлы успешно загружены, делаем что нибудь здесь

                    // выведем пути к загруженным файлам в блок '.ajax-respond'

                    var files_path = respond.files;
                    var html = '';
                    $.each( files_path, function( key, val ){ html += val +'<br>'; } )
                    $('.ajax-respond').html( html );
                }
                else{
                    console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                }
            },
            error: function( jqXHR, textStatus, errorThrown ){
                console.log('ОШИБКИ AJAX запроса: ' + textStatus );
            }
        });

    }
});

$('#profile_personal1').click(function(){
    if($(this).text().trim() === 'edit') {
        // event.stopPropagation(); // Остановка происходящего
        // event.preventDefault();  // Полная остановка происходящего

        // Создадим данные формы и добавим в них данные файлов из files

        var data = new FormData();
        $.each( files, function( key, value ){
            data.append( key, value );
        });


        var fname = $('input[name="fname"]').val(),
            sname = $('input[name="sname"]').val(),
            dbirth = $('input[name="dbirth"]').val(),
            country = $('input[name="country"]').val(),
            city = $('input[name="city"]').val(),
            experience = $('input[name="experience"]').val(),
            salary = $('input[name="salary"]').val(),
            currency = $('input[name="currency"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile_personal1 = {
                fname,
                sname,
                dbirth,
                country,
                city,
                experience,
                salary,
                currency
            };
        var jsdata = JSON.stringify(profile_personal1);
        $.ajax({
            type: "POST",
            url: "/web/site/ajax",
            data: {
                profile_personal1: jsdata,
                _csrf: _csrf,
                data: data,
            },

        });
    }
});

$('#profile_personal1_selectbtn').click(function(){
    if($(this).text().trim() === 'select') {
        var from = $('input[name="from"]').val(),
            to = $('input[name="to"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            d = {
                from,
                to
            };
        var jsdata = JSON.stringify(d);
        $.ajax({
            type: "POST",
            url: "/web/site/ajax",
            data: {
                select: jsdata,
                _csrf: _csrf
            }
        });
    }
});

$('#profile_personal1_changebtn').click(function(){
    if($(this).text().trim() === 'change') {
        var password = $('input[name="password"]').val(),
            _csrf = $('input[name="_csrf"]').val();
        var jsdata = JSON.stringify(password);
        $.ajax({
            type: "POST",
            url: "/web/site/ajax",
            data: {
                change: jsdata,
                _csrf: _csrf
            }
        });
    }
});



$('#profile-change').click(function(){
    if($(this).text().trim() === 'Edit') {
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
            }
        });
    }
});

$('#profile1_change').click(function(){
    if($(this).text().trim() === 'change') {
        var password = $('input[name="password"]').val();
        var _csrf = $('input[name="_csrf"]').val();
        var jsdata = JSON.stringify(password);
        $.ajax({
            type: "POST",
            url: "/web/site/ajax",
            data: {
                change: jsdata,
                _csrf: _csrf
            }
        });
    }
});


$('#personal4_1').click(function(){
    if($(this).text().trim() === 'save') {
        var category = $('select[name="category"]').val(),
            faculty = $('select[name="faculty"]').val(),
            name = $('input[name="name"]').val(),
            levelofeng = $('select[name="levelofeng"]').val(),
            country = $('select[name="country"]').val(),
            port = $('select[name="port"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile_personal4_1 = {
                category,
                faculty,
                levelofeng,
                country,
                port,
                name
            };
        var jsdata = JSON.stringify(profile_personal4_1);
        $.ajax({
            type: "POST",
            url: "/web/site/cv-ajax",
            data: {
                profile_personal4_1: jsdata,
                _csrf: _csrf
            }
        });
    }
});


// $('#personal4_1').click(function(){
//     if($(this).text() === 'Edit') {
//         var category = $('select[name="category"]').val(),
//             faculty = $('select[name="faculty"]').val(),
//             levelofeng = $('select[name="levelofeng"]').val(),
//             country = $('select[name="country"]').val(),
//             port = $('select[name="port"]').val(),
//             _csrf = $('input[name="_csrf"]').val(),
//             profile_personal4_1 = {
//                 category,
//                 faculty,
//                 levelofeng,
//                 country,
//                 port
//             };
//         var jsdata = JSON.stringify(profile_personal4_1);
//         $.ajax({
//             type: "POST",
//             url: "/web/site/cv-ajax",
//             data: {
//                 profile_personal4_1: jsdata,
//                 _csrf: _csrf
//             }
//         });
//     }
// });



$('#personal4_1_job').click(function(){
    if($(this).text() === 'save') {
        var category = $('select[name="category"]').val(),
            position = $('select[name="position"]').val(),
            levelofeng = $('select[name="levelofeng"]').val(),
            salary_min = $('input[name="salary_min"]').val(),
            salary_max = $('input[name="salary_max"]').val(),
            currency = $('select[name="currency"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile_personal4_1_job = {
                category,
                position,
                levelofeng,
                salary_min,
                salary_max,
                currency
            };
        var jsdata = JSON.stringify(profile_personal4_1_job);
        $.ajax({
            type: "POST",
            url: "/web/site/cv-ajax",
            data: {
                profile_personal4_1_job: jsdata,
                _csrf: _csrf
            }
        });
    }
});



// $('#personal4_1_job').click(function(){
//     if($(this).text() === 'Edit') {
//         var category = $('select[name="category"]').val(),
//             position = $('select[name="position"]').val(),
//             levelofeng = $('select[name="levelofeng"]').val(),
//             salary_min = $('input[name="salary_min"]').val(),
//             salary_max = $('input[name="salary_max"]').val(),
//             currency = $('select[name="currency"]').val(),
//             _csrf = $('input[name="_csrf"]').val(),
//             profile_personal4_1_job = {
//                 category,
//                 position,
//                 levelofeng,
//                 salary_min,
//                 salary_max,
//                 currency
//             };
//         var jsdata = JSON.stringify(profile_personal4_1_job);
//         $.ajax({
//             type: "POST",
//             url: "/web/site/cv-ajax",
//             data: {
//                 profile_personal4_1_job: jsdata,
//                 _csrf: _csrf
//             }
//         });
//     }
// });

$('#profile4-1_edit').click(function(){
    if($(this).text() === 'edit') {
        console.log('123');
        // var jsdata = JSON.stringify(profile_personal4_1_job);
        // $.ajax({
        //     type: "POST",
        //     url: "/web/site/ajax-contracts",
        //     data: {
        //     	profile4_1: jsdata,
        //     	_csrf: _csrf
        //     }
        //   });
    }
});