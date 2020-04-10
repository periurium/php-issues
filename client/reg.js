$('#submit_btn').click(function(event){
    var regConst = new Object();
    regConst.type = "reg";
    regConst.email = $("#email").val();
    regConst.password = $("#password").val();
    regConst.ip = '0';
    

    var regString = JSON.stringify(regConst);
    console.log(regString);
    

    $.ajax({
        type: 'POST',
        url: 'http://rest.localhost/user_handle.php',
        data: regString,
        success: function(data) {alert('data: ' + data);},
        contentType: "application/json",
        dataType: 'json'
    });
});
