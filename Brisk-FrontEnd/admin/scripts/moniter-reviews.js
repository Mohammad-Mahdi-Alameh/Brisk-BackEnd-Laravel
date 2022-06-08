///
window.onload=displayReviews;
////

function displayReviews() {
   
    let reviews=document.getElementById("reviews");

    var url = 'http://localhost/myphpprojects/BackEnd-Brisk/apis/get_reviews_rates.php';

    axios({
   
        method: 'GET',
   
        url: url,
   
   
    })

    .then(function (response) {
   
        let result = response.data;

        console.log(result);
        
        var string="";

        result.forEach(element=>{
                string += '<div class="center"><ul><li>Review Text: '+element.review_text+'</li><li>Rating:'+element.	rating_value+'</li><li>Aprroved Status: '+element.	is_approved+'</li><li>User: '+element.users_id+'</li><li>Restaurant: '+element.restaurants_restaurant_id+'</li></ul><button class="btn btn-green" class="approve">Approve</button></div>'
    });

    reviews.innerHTML=string; 


});

            
}