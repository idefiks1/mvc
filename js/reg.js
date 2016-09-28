$(document).ready(function() 
{
	 function isValidPassword(pass)
    {
        var pattern = new RegExp(/[A-Za-z0-9]{6,}/);
        return pattern.test(pass);
    }
    function isValidLogin(login) 
    {
        var pattern = new RegExp(/[A-Za-z0-9]{2,}/);
        return pattern.test(login);
    }
	$( "#login" ).blur(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: 'POST',
            url: '/user/loginCheck',
            dataType: 'json',
            data: {login: $('#login').val()},
            success: function(data)
            {
                if (data.success == true)
                {
                    $("#Send").prop("disabled", "false"); 
                    var Ulogin = $('#login').val();
                    if(Ulogin != 0)
                    {   
                        if (isValidLogin(Ulogin))
                        {
                            $("#login").closest('.form-group').removeClass('has-error').addClass('has-success');
                            $("#helpBlock1").html("Success!");
                        }
                        else
                        {
                            $("#login").closest('.form-group').removeClass('has-success').addClass('has-error');
                            $("#helpBlock1").html("Login is invalid!");
                        } 
                    } 
                    else 
                    {      
                        $("#login").closest('.form-group').removeClass('has-success').addClass('has-error');
                        $("#helpBlock1").html("Login empty!");
                    }
                }
                if (data.success == false)
                {
                    $("#Send").prop("disabled", "true");
                    $("#login").closest('.form-group').removeClass('has-success').addClass('has-error');
                    $("#helpBlock1").html("This login already use or empty!");
                    
                }
            }
        });
    });
    ///Check email in db
    $( "#email" ).blur(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: 'POST',
            url: '/user/loginCheck',
            dataType: 'json',
            data: {email: $('#email').val()},
            success: function(data)
            {
                 if (data.success1 == false)
                {
                    $("#Send").prop("disabled", "true");
                    $("#email").closest('.form-group').removeClass('has-success').addClass('has-error');
                    $("#helpBlock2").html("This email already use or empty!");
                    
                }
                if (data.success1 == true)
                {

                    $("#Send").prop("disabled", "false");
                    //$("#helpBlock2").html("Success!");
                    $("#email").closest('.form-group').removeClass('has-error').addClass('has-success');
                       
                }
            }
        });
    }); 
    ///Check email in db
    ///Check email for pattern
    $( "#email" ).blur(function(c) 
    {
        c.preventDefault();
        $.ajax(
        {
            type: 'POST',
            url: '/user/loginCheck',
            dataType: 'json',
            data: {email: $('#email').val()},
            success: function(data)
            {
                if (data.success2 == true)
                {
                    
                    $("#email").closest('.form-group').removeClass('has-error').addClass('has-success');
                    //$("#helpBlock3").html("Success!");
                    $("#Send").removeAttr("disabled");
                    
                }
                if (data.success2 == false)
                {
                    //$("#helpBlock3").html("Only as example@email.com!");
                    $("#Send").prop("disabled", "true");
                    //alert("Only as example@email.com!");
                    $("#email").closest('.form-group').removeClass('has-success').addClass('has-error');
                    //$("#helpBlock3").html("Only as example@email.com!");
                    
                }
            }
        });
    });
    ///Check email for pattern

    ///Check password for pattern
    $( "#pass" ).blur(function(d) 
    {
        var Upass = $('#pass').val();
        if(Upass != 0)
        {   
            if (isValidPassword(Upass))
            {
                $("#pass").closest('.form-group').removeClass('has-error').addClass('has-success');
                $("#helpBlock4").html("Success!");
            }
            else 
            {
                $("#pass").closest('.form-group').removeClass('has-success').addClass('has-error');
                $("#helpBlock4").html("Password is invalid! Password contains invalid characters. Use letters and numbers.");
            } 
        } 
        else 
        {      
            $("#pass").closest('.form-group').removeClass('has-success').addClass('has-error');
            $("#helpBlock4").html("Password empty");
        }
    });
    ///Check password for pattern
    
});