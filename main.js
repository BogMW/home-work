$(document).ready(function () {

    $("#progress-form").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url  : 'progression.php',
            data : $("#progress-form").serialize(),
            success : function(data){
                $('#progress-result').html(data);
            }
        });
    });

    $("#registration-form").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url  : 'registration.php',
            data : $("#registration-form").serialize() ,
            success : function(data){
                $('#registration-result').html(data);
            }
        });
    });

    $("#size-form").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url  : 'sort.php',
            data : $("#size-form").serialize() ,
            success : function(data){
                $('#size-result').html(data);
            }
        });
    });

});

