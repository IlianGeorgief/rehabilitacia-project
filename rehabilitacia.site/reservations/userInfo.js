$("#loginForm").click(function (event) {
    event.preventDefault();
});

$('#loginForm').click(loginForm);  
function loginForm() {
    $.ajax({
        url: 'http://rehabilitacia.site/reservations//login.php',
        type: 'POST',
        data: {
            usName1: $('#usName1').val(),
            pswd1: $('#pswd1').val()
        },
        dataType: 'json'
    }).done(function (data) {
        $('#user').html(data['user']);
        $('#ime').html(data['ime']);
        $('#familia').html(data['familia']);
        $('#adresna').html(data['adres']);
        $('#tel').html(data['telefon']);
        $('#headInfo').html('Потребителски профил');
        
    }).fail(function (er) {
        //console.log('error');
        $('#userDiv').hide();
        $('#logDiv').show();
        $('#errorLogin').html('Невалиден вход, проверете дали данните за вход са верни!');
        $('#headInfo').html('Вход');
    });
    

    let usName1 = $('#usName1').val();
    let pswd1 = $('#pswd1').val();
    
    if (!usName1 || !pswd1){
    } else{
        $('#userDiv').show();
        $('#logDiv').hide();
    };
};

