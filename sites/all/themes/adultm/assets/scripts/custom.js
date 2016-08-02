(function($) {
    "use strict";
    $(document).ready(function() {
        //Tooltip
        $(".dtooltip").tooltip();
        
        
    });$(window).load(function(){
            $("#myModal").modal({backdrop: 'static', keyboard: false});
        });
})(this.jQuery);

 window.onbeforeunload = function(){
            alert("Esta por cerrar!");
           //AQUI LA LLAMADA AL PHP QUE TE CIERRA LA SESSION
        }