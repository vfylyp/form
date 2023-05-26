jQuery(function ($) {
    $(document).ready(function() {
        var form = $('.register-form');
        var title = $('.header-title');
        form.submit(function(e) {
            e.preventDefault();
           
            var formData = $(this).serialize();
            var messageBox = $('.message');
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
