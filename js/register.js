jQuery(document).ready(function(){
    jQuery('#register').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'php/register.php',
            type: 'post',
            data: {
                name : $('#name').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val()
            },
            success: function(response){
                $('#message').html(response);
            }
        });
    });
});