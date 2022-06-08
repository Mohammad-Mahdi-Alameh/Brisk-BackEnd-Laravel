let add_restaurant = document.getElementById("add_restaurant");

let monitor_reviews = document.getElementById("monitor_reviews");

let display_users = document.getElementById("display_users");


add_restaurant.addEventListener("click", function(event){

    event.preventDefault();

    window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/admin/pages/add_restaurant.html";  

});

monitor_reviews.addEventListener("click", function(event){

    event.preventDefault();

    window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/admin/pages/monitor_reviews.html";  

});

display_users.addEventListener("click", function(event){

    event.preventDefault();

    window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/admin/pages/display_users.html";  

});