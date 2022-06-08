///
window.onload=displayUsers;
////

function displayUsers() {
   
    let users=document.getElementById("users");

    var url = 'http://localhost/myphpprojects/BackEnd-Brisk/apis/get_users.php';

    axios({
   
        method: 'GET',
   
        url: url,
   
   
    })

    .then(function (response) {
   
        let result = response.data;

        console.log(result);
        
        var string="";

        result.forEach(element=>{
                string += '<div class="center"><ul><li>First Name: '+element.first_name+'</li><li>Last Name:'+element.last_name+'</li><li>Username: '+element.username+'</li></ul></div>'
    });

users.innerHTML=string; 


});

            
}