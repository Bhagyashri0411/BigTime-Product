$(document).ready(function(){
    $('#type_big').change(function(){
        $('.investloan').hide();
        $('#big_' + this.value).show();
    })
    $('#big_invest').change(function(){
        $('#big_' + this.label).show();
    })
})
