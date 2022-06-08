let login = document.getElementById("login");


login.addEventListener("click", function(event){

    event.preventDefault();

    const username = document.getElementById("username").value;

    const password = document.getElementById("password").value;

    let data = new FormData();

    data.append('username', username);

    data.append('password', password);

    let url = 'http://127.0.0.1:8000/api/login';

    fetch(url,{

            method:'POST',

            body: data,
        })
        
    .then(function (response) {
   
        let result = response.data;
   
        let message = result.succeed;
   
        if(message === "User logged in successfuly"){

            let user_id= result.user_id;

            setCookie("user_id",user_id,1);

            document.getElementById("username").value = "";
   
            document.getElementById("password").value = "";
    
            let is_admin= result.is_admin;

            setCookie("is_admin",is_admin,1);
            
            if(is_admin === 0 )

            window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/";
     
            else
                   
            window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/admin";
        
        }
        
        else

            alert("Wrong Username or Password ! ");

    });

});

function setCookie(cname,cvalue,exdays) {
    
    const d = new Date();
    
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    
    let expires = "expires=" + d.toUTCString();
    
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    
  }