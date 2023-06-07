jQuery(function ($) {
    $(document).ready(function() {
        var form            = $('.register-form');
        var title           = $('.header-title');
        var password_repeat = $('#form-password-repeat');
        
        form.change(function(e){
            let password = $('#form-password');

            if( password.val() != password_repeat.val() ){
                password_repeat.addClass('bg-warning');
            }else{
                password_repeat.removeClass('bg-warning');
            }

        });

        form.submit(function(e) {
            e.preventDefault();

            var formData    = $(this).serializeArray();
            var messageBox  = $('.message');

            messageBox.hide();
            $.ajax({
                type: 'POST',
                url: 'register.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    title.text(response.message);
                    $('.register-form')[0].reset();
                    form.hide();
                },
                error: function(xhr, status, error) {
                    messageBox.show();
                    messageBox.text(xhr.responseJSON.error);
                    messageBox.addClass('alert alert-warning');
                }
            });
        });
    });
    
});
