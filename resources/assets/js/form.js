$(document).ready(function(){
    console.log('Ready!!');
    var buttonSave = $(".-save");
    var buttonEdit = $( ".-edit" );
    var input = $('input');
    buttonEdit.click(function() {
        input.removeAttr( "readonly" )
        buttonSave.show();
        buttonEdit.hide();
        console.log('edit!!');
    })
})