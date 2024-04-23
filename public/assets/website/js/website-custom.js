$(function(){
    $('#submit-form').click(function(e){
        e.preventDefault();
        $(this).closest('form').submit();
        $(this).prop('disabled', 'disabled')
    })
});