$('input:radio[name="radioGroup"]').change(
    function(){
        if ($(this).is(':checked') ) {
            var x = $('input[type=radio][name=radioGroup]:checked').attr('id');
            var y = '#'+x+'1';
            $('.radioCheck').removeClass("radioCheck");
            $(y).addClass("radioCheck");
        }
    }
);