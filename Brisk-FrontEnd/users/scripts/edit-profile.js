let done = document.getElementById("done");

done.addEventListener("click", function(event){

    event.preventDefault();

   
    const username = document.getElementById("username").value;

    const password = document.getElementById("password").value;

    const phone = document.getElementById("phone").value;


    let data = new FormData();

    data.append('username', username);

    data.append('password', password);

    data.append('phone', phone);


    let url = 'http://localhost/myphpprojects/BackEnd-Brisk/apis/edit_profile.php';

    axios({
   
        method: 'POST',
   
        url: url,
   
        data:data,
   
    })
   
    .then(function (response) {
   
        let result = response.data;
   
        let message = result.success;
   
        if(message === true){
   
            document.getElementById("username").value = "";
   
            document.getElementById("password").value = "";
   
            document.getElementById("phone").value = "";
   
            window.location.href = "http://localhost/myphpprojects/FrontEnd-Brisk";   

    }
   
});


});

