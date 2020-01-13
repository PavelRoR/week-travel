/*
	
	KPDpopup 1.1
	
*/
var openPopup = $('.open-popup');
var closePopup = $('.close-popup');
// var popupWindow = $('.popup');
var popupBox = $('.popup-wrapper');
var slickSlider = $('.prod-img-wrap.slider');

/* Open KPDpopup */
$(function () {
    openPopup.on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();

        // closePopup();

        var type = $(this).data('type');
        var formName = $(this).data('form');

        if (type == 'content') {

            if (typeof $(this).data('id') !== 'undefined') {
                var id = $(this).data('id');
            } else {
                var id = $(this).attr('href');
            }


            if (id != 'undefined') {
                openPopupContent(id, formName);
            }
        }

        if (type == 'video') {
            var code = $(this).attr('data-code');
            createVideo(code);
        }

        if (slickSlider) {
            slickSlider.slick('reinit');
        }
    });

    closePopup.on('click', function () {

        popupWindow = $(this).closest('.popup');
        popupBox = popupWindow.find('.popup-wrapper.open');

        closePopupWindow();
    });

    // $(document).on('keydown', function (event) {
    //     if (event.which == 27) {
    //         closePopupWindow();
    //     }
    // });
});

/* Open Video */
function createVideo(code) {
    var screen_width = $(window).width();
    var w = screen_width * 0.7;
    var h = w / 1.777777777777778;

    var iframe = '<iframe width="' + w + '" height="' + h + '" src="https://www.youtube.com/embed/' + code + '?rel=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>'
    $('.popup .video').append(iframe);
    openPopupContent('#video');
}

/* Open Content */
function openPopupContent(id, formName) {
    $('body').css({
        'overflow-y': 'hidden'
    });

    var simbol = id.charAt(0);
    if (simbol != '#') {
        id = '#' + id;
    }
    
    var popupWindow = $(id).closest('.popup');
    
    if (formName) {
        var form = popupWindow.find('form');
        form.attr('name', formName);
        form.attr('data-name', formName);
    }

    $(id).show();
    popupWindow.fadeIn(200);
    $(id).addClass('open');
}

/* Close KPDpopup */
function closePopupWindow() {

    popupBox.removeClass('open').hide();
    popupWindow.fadeOut(300);

    $('body').css({
        'overflow-y': 'scroll'
    });

    $('.decbox .video').empty();
}

function destroyPopup() {
    $('.decbox[data-open="1"]').fadeOut(500, function () {
        $(this).remove();
        $('body').css({
            'overflow-x': 'hidden',
            'overflow-y': 'scroll'
        });
    });
}