jQuery(document).ready(function(){
    jQuery('#login').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'php/login.php',
            type: 'post',
            data: {
                email: $('#email').val(),
                password: $('#password').val()
            },
            success: function(response){
                $('#message').html(response);
            }
        });
    });
});

