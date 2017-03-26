$(document).ready(function(){
    $('form.jsform').on('submit', function(form){
        form.preventDefault();
        $.post('http://localhost/hobdit/index.php/validation/regControll', $('form.jsform').serialize(), function(data){
            $('div.valError').html(data);
        });
    });
});
