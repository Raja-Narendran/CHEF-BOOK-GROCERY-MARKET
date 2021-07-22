$(document).ready(function(){
    $('.modal').modal();
    $('select').formSelect();
    $(document).on('click','#addDishSubmit',function(){
        var dishName = $('#dishname').val();
        var category = $('#category').val();
        var cooktime = $('#cooktime').val();
        var ingredients = $('#ingredients').val();
        var directions = $('#directions').val();
        var parameter = {
            dishName : dishName,
            category : category,
            cooktime : cooktime,
            ingredients : ingredients,
            directions : directions
        };
        if(validate(parameter)) {
            alert('going to savepage');
        }
    });
});
function validate(parameter) {
    var errormsg='please provide ';
    var errorflag = false;
    if(parameter.dishName == '') {
        if(errorflag){
            errormsg += '';
        }
        errorflag= true;
        errormsg += 'dishname ';
    }
    if(parameter.category== '') {
        if(errorflag){
            errormsg += ',';
        }
        errorflag= true;
        errormsg += 'category ';
    }
    if(parameter.cooktime== '') {
        if(errorflag){
            errormsg += ',';
        }
        errorflag= true;
        errormsg += 'cooking time ';
    }
    if(parameter.ingredients== '') {
        if(errorflag){
            errormsg += ',';
        }
        errorflag= true;
        errormsg += 'ingredients ';
    }
    if(parameter.directions== '') {
        if(errorflag){
            errormsg += ',';
        }
        errorflag= true;
        errormsg += 'process';
    }
    if(errorflag){
        alert(errormsg);
        return false;
    }
    return true;
}
