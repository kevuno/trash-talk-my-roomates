/* CARD REVEAL MODIFIER FOR JOURNAL*/

(function ($) {
    $(document).ready(function () {
        $(document).on('click.card', '.card', function (e) {
            console.log(e);
            if ($(this).find('.card-reveal').length) {
                if ($(e.target).hasClass('journal_activator')){
                    console.log("wadddd");
                    $(this).find('.card-reveal').css({
                        display: 'block'
                    }).velocity("stop", false).velocity({
                        translateY: '-100%'
                    }, {
                        duration: 300,
                        queue: false,
                        easing: 'easeInOutQuad'
                    });
                }
            }
        });
    });
}(jQuery));


// Image preview

$(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image_path").change(function(){
            readURL(this);
        });     
    });