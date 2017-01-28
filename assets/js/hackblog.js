$(document).ready(function(){

    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });


    $("#hackblog-login").submit(function(event){
        event.preventDefault();
        var email = $("#login-userid").val();
        var password = $("#login-password").val();
        $("#login-userid").parent().removeClass('has-error');
        $("#login-password").parent().removeClass('has-error');
        $("#login-message").html('');


        if( email =='') {
            $('#login-userid').parent().addClass('has-error');
        }
        if(password ==''){
            $('#login-password').parent().addClass('has-error');
        }
        if(email !='' && password !='')
        {

            $.post($("#hackblog-login").attr('action')+'?type=json',{ 'userid': email, 'password':password},
                function(data) {
                console.log(data);
                if(/{"login-blocked: \d"}$/g.test(data)){
                    var myRegexp = /\d/g;
                    var match = myRegexp.exec(data);
                    $('#login-password').parent().addClass('has-error');
                    $('#login-userid').parent().addClass('has-error');
                    $("#login-message").html('Login Blocked for <strong>'+match[0]+'</strong> mins!');
                    }
                else if(data=='{"login-fail"}'){

                        $('#login-password').parent().addClass('has-error');
                        $('#login-userid').parent().addClass('has-error');
                        $("#login-message").html('Login Failed!');

                    } else if(data=='{"login-done"}'){
                        window.location = "./main";

                    }
                });
        }
    });
});