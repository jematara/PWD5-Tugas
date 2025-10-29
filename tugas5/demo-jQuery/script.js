$(document).ready(function(){
    $('#btn1').click(function(){
        var newTask = $('#input').val();
        if(newTask){
            $('#list').append('<li class="item">'+newTask+'<button class="remove">Remove</button></li>');
            $('#input').val('');
        }
    });
    $('#list').on('click', '.remove', function(){
        $(this).parent('.item').remove();
    });
});