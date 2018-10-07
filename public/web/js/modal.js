$(document).ready(function(){
    console.log('Ready!!');
    $('.delete').click(function(){
        $('.modal-mask').css('display', 'table');
        $('.cancel').click(function(){
            $('.modal-mask').hide();
        })
    });
})