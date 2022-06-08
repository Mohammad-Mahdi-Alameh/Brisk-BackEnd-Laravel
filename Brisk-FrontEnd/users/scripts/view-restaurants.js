////
window.onload=viewRestaurants;
////

let flex_container=document.getElementById("flex-container");

function viewRestaurants() {
    
    if(getCookie("user_id")==null && getCookie("is_admin")==0){

        window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/users/pages/login.html";

    }
   
    var url = 'http://localhost/myphpprojects/BackEnd-Brisk/apis/get_restaurants.php';

    axios({
   
        method: 'GET',
   
        url: url,
   
   
    })

    .then(function (response) {
   
        let result = response.data;

        console.log(result);
        
        var string="";

        result.forEach(element=>{
                string += '<div id="flex-item"><ul>'+ '<li>' + element.trade_name + '</li>' + '<li>' +
                    element.working_hours + '</li>' +'<li>' + element.dining_room_capacity + '</li>'+'<li>' + element.phone + '</li>' +'<li>' + element.drivethrough_availabilty
                    + '</li>' +'<li>' + element.delivery_availabilty + '</li>' +
                    '<li>' + element.reservation_availabilty + '</li>' +'<li>' + element.address + '</li>' +'<li>' + element.support_all_diets+ '</li>'+'</ul></div>'
    });

flex_container.innerHTML=string; 


});

            
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
  }

      
