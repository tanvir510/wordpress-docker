(function ($) {
    "use strict";

    function enterNewConvo() {
    $(".create-chat-input").focus();
    }

    function closeModal() {
    $(".modal-frame").removeClass("active");
    $(".modal-frame").addClass("leave");
    }

    $('.modal-popup').click(function(e) {
        e.preventDefault();
        let p = e.currentTarget.parentNode;
        $(this).parent().children('.modal-frame').toggleClass('active');
        $(this).parent().children('.modal-frame').removeClass('leave');
        enterNewConvo();
    })

    $(".modal-overlay").click(function() {
        closeModal();
    });

    $(".close").click(function() {
        closeModal();
    });

    $(document).keyup(function(e) {
    if (e.which === 27) {
        closeModal();
    }
    });

})(jQuery);