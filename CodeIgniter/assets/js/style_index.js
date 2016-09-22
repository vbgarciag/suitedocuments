$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover',
        template: '<div class="popover" role="tooltip" style="width: 400px;"><center><h4 class="popover-content"></center><div class="data-content"></div></div>'
    });
});