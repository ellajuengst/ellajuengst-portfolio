console.log("it works");

$(document).ready(function() {
    $('.submit').click(function (event) {

        var name = $('.name').val();
        var email = $('.email').val();
        var message = $('.message').val();
        var status = $('.status');
        status.empty();

        if(name.length <= 1) {
            status.append('<div><h2>name is not valid</h2></div>');
            event.preventDefault();
        }

        if(email.length > 5 && email.includes('@') && email.includes('.')) {
        } else {
            status.append('<div><h2>email is not valid</h2></div>');
            event.preventDefault();
        }
    
        
    
    })

})
