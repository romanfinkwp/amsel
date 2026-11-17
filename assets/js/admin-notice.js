jQuery(document).ready(function($) {
    $('#amsel-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'amsel_dismiss_notice',
                nonce: amselNotice.nonce
            }
        });
    });
});
