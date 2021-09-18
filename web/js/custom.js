/*
$('#adddataform-viloyat_id').on('change',function (e) {
    e.preventDefault();
    let id = $(this).val();
    $.ajax({
        url: '/site/change-viloyat',
        data: {id: id},
        type: 'POST',
        dataType: 'json',
        success: function (res) {
            if (!res) alert('Ошибка');
            addOptionsTuman(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

function addOptionsTuman(datas) {
   let text = '', id;

   text += '<option value=""></option>';
   for (id in datas){
      text += '<option value="'+ datas[id]['id'] +'">'+ datas[id]['nomi'] +'</option>';
   }
   // console.log(text);
   $('#adddataform-tuman_id').html(text);
}


$('#adddataform-tuman_id').on('change',function (e) {
    e.preventDefault();
    let id = $(this).val();
    $.ajax({
        url: '/site/change-tuman',
        data: {id: id},
        type: 'POST',
        dataType: 'json',
        success: function (res) {
            if (!res) alert('Ошибка');
            addOptionsMfy(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

function addOptionsMfy(datas) {
    let text = '', id;

    text += '<option value=""></option>';
    for (id in datas){
        text += '<option value="'+ datas[id]['id'] +'">'+ datas[id]['nomi'] +'</option>';
    }
    // console.log(text);
    $('#adddataform-mfy_nomi').html(text);
}
*/

$('#viloyat_id').on('change',function (e) {
    e.preventDefault();
    let id = $(this).val();
    let currentUrl = window.location.pathname;
    $.ajax({
        url: '/aholi/change-viloyat',
        data: {id: id},
        type: 'POST',
        dataType: 'json',
        success: function (res) {
            if (!res) alert('Ошибка');
            addOptionsTuman(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

function addOptionsTuman(datas) {
    let text = '', id;

    text += '<option value=""></option>';
    for (id in datas){
        text += '<option value="'+ datas[id]['id'] +'">'+ datas[id]['nomi'] +'</option>';
    }
    // console.log(text);
    $('#tuman_id').html(text);
}

$('#tuman_id').on('change',function (e) {
    e.preventDefault();
    let id = $(this).val();
    $.ajax({
        url: '/aholi/change-tuman',
        data: {id: id},
        type: 'POST',
        dataType: 'json',
        success: function (res) {
            if (!res) alert('Ошибка');
            addOptionsMfy(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

function addOptionsMfy(datas) {
    let text = '', id;

    text += '<option value=""></option>';
    for (id in datas){
        text += '<option value="'+ datas[id]['id'] +'">'+ datas[id]['nomi'] +'</option>';
    }
    // console.log(text);
    $('#mfy_id').html(text);
}