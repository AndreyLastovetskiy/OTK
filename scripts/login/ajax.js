$(document).ready(function() {
    $('#logform').submit(function(e) {
        e.preventDefault();
        var identcode = $("#identcode").val().trim();
        var phone = $("#phone").val().trim();

        if(identcode == "" && phone == "") {
            $('#errorMes').text("Заполните Форму!");
            return false;
        } else if(phone == ""){
            $('#errorMes').text("Введите Номер телефона!");
            return false;
        } else if(identcode == "") {
            $('#errorMes').text("Введите Индивидуальный код!");
            return false;
        }
        $.ajax({
            type: "POST",
            url: 'vendor/accept-phone.php',
            data: $(this).serialize(),
            success: function(data)
            {
                console.log(data);
            }
       });
     });
});