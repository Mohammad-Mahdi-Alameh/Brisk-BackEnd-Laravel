let add = document.getElementById("add");

add.addEventListener("click", function(event){

    event.preventDefault();

    const trade_name = document.getElementById("trade_name").value;

    const dining_room_capacity = document.getElementById("dining_room_capacity").value;

    const drivethrough_availability = document.getElementById("drivethrough_availability").value;

    const delivery_availability = document.getElementById("delivery_availability").value;

    const reservation_availability = document.getElementById("reservation_availability").value;

    const working_hours = document.getElementById("working_hours").value;
    
    const address = document.getElementById("address").value;
    
    const support_all_diets = document.getElementById("support_all_diets").value;

    const phone = document.getElementById("phone").value;

    let data = new FormData();

    data.append('trade_name', trade_name);

    data.append('dining_room_capacity', dining_room_capacity);

    data.append('drivethrough_availability', drivethrough_availability);

    data.append('delivery_availability', delivery_availability);

    data.append('reservation_availability', reservation_availability);

    data.append('working_hours', working_hours);

    data.append('support_all_diets', support_all_diets);
    
    data.append('address', address);
    
    data.append('phone', phone);

    let url = 'http://localhost/myphpprojects/BackEnd-Brisk/apis/add_restaurant.php';

    axios({
   
        method: 'POST',
   
        url: url,
   
        data:data,
   
    })
   
    .then(function (response) {
        console.log(response.data);

        let result = response.data;
   
        let message = result.success;
   
        if(message === true){
              
            document.getElementById("trade_name").value = "";
   
            document.getElementById("dining_room_capacity").value = "";
   
            document.getElementById("drivethrough_availability").value = "";
   
            document.getElementById("delivery_availability").value = "";
   
            document.getElementById("reservation_availability").value = "";
   
            document.getElementById("working_hours").value = "";
   
            document.getElementById("address").value = "";
   
            document.getElementById("support_all_diets").value = "";
   
            document.getElementById("phone").value = "";

            alert("Restaurant was added successfully!");
           
            window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk/users/pages/view-restaurants.html";   

    }
   
});


});

