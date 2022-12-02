$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul')
        
        /** Abrir menu com fadeIn | FadeOut
         * if (listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();
         */

        /** Abrir menu com SlideToggle*/

        /** Abrir menu sem animações
         * if (listaMenu.is(':hidden') == true)
            listaMenu.show()
        else
            listaMenu.hide()
         */

        // <i class="fa-solid fa-xmark"></i>
        // fa-solid fa-bars

        if (listaMenu.is(':hidden') == true) {
            $('.botao i').removeClass('fa-solid fa-bars')
            $('.botao i').addClass('fa-solid fa-xmark')
            listaMenu.slideToggle()
        } else {
            $('.botao i').removeClass('fa-solid fa-xmark')
            $('.botao i').addClass('fa-solid fa-bars')
            listaMenu.slideToggle()
        }
        
    })
})