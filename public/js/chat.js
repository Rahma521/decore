//filter users
$('#filter-input').keyup(function () {
    var list = $('.chat-users li');
    if ($(this).val().length >= 2) {
    var noElem = true;
    var val = $.trim(this.value).toLowerCase();
    
    el = list.filter(function () {
    return $(this).find('h3').text().toLowerCase().match(val);
    });
    if (el.length >= 1) {
    noElem = false;
    }
    list.not(el).fadeOut("fast");
    el.fadeIn();
    } else {
    list.fadeIn();
    
    }
    });
    
    //show file names
    $("#img-up").change(function () {
    $(".clear-close").remove();
    var file = $(this)[0].files[0].name;
    $(".ch-att textarea").attr("placeholder", file).attr("disabled", true).text('').val('');
    $(".ch-att").append("<span class='clear-close auto-icon'><i class='fa fa-times'></i></span>")
    });
    
    $(document).on("click", ".clear-close", function () {
    $(".ch-att textarea").attr("placeholder", "").attr("disabled", false);
    $(this).remove();
    
    })
    
    //chat scroll
    $(window).on("load", function () {
    $(".inner-chat-div ").animate({
    scrollTop: $('.inner-chat-div').prop("scrollHeight")
    }, 1000);
    });
    
    
    //users show in responsive
    $(document).on("click", ".users-show", function () {
    $(".chat-content-list").toggleClass("active");
    });
    
    $(document).on("click", ".users-close", function () {
    $(".chat-content-list").removeClass("active");
    });