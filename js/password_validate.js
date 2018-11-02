$("#submit" ).click(function() {
  var password = $("#password").val();
        var confirmPassword = $("#retype_password").val();
        if (password != confirmPassword) {
            $('#myModal').modal('show');
            return false;
        }       
    return true;
});