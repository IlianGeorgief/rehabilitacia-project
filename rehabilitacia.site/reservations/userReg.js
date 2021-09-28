$("#registracia").click(function (event) {
    event.preventDefault();
});

$('#registracia').click(registracia);  
function registracia() {
    $.ajax({
        url: 'http://rehabilitacia.site/reservations//registration.php',
        type: 'POST',
        data: {
            reg_usName: $('#usName').val(),
            reg_ps_wd: $('#ps_wd').val(),
            reg_ime: $('#name').val(),
            reg_familia: $('#family').val(),
            reg_adres: $('#adres').val(),
            reg_phone: $('#phone').val()            
           
        },
        dataType: 'json'
    }).done(function (data) {
        $('#user').html(data['user']);
        $('#ime').html(data['ime']);
        $('#familia').html(data['familia']);
        $('#adresna').html(data['adres']);
        $('#tel').html(data['telefon']);
        
    }).fail(function (er) {
        //console.log('error');
        $('#userDiv').hide();
        $('#regDiv').show();
        $('#errorLogin').html('Не можете да се логнете, проверете дали данните за вход са верни!');
    });
    

    let usName1 = $('#usName1').val();
    let pswd1 = $('#pswd1').val();
    
    if (!usName1 || !pswd1){
    } else{
        $('#userDiv').show();
        $('#logDiv').hide();
    };
};

