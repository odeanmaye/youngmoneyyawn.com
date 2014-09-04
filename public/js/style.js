 $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 8000
    })
    
    $('#contactModal').appendTo("body").modal('show');
    $('#contactModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();

    //$('#vidModal').toggle(function(){
      //  (this).load('#videoModal')
    //});
});