var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-1000px";
        y.style.left ="50px";
        z.style.left = "50%";
    }
    function login(){
        x.style.left = "50px"
        y.style.left = "1000px"
        z.style.left = "0px"
    }

    function func(){
        window.location.assign("admin.html")
    }

    function Panal(){
        var AdminId = document.getElementById('adminId').value;
        var AdminPass = document.getElementById('adminPass').value;
        
        if (AdminId == "Admin" && AdminPass == 1234) {
             alert("Login Successful");
             window.open('adminPanal.html') // Use href instead of assign
          } else {
            alert("Invalid Credentials");
          }

        
    }