function cityFinder() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://developers.zomato.com/api/v2.1/cities?q=" + localStorage.city + "&count=20",
        "method": "GET",
        "headers": {
            "user-key": "24373972c90ad4019b26195e2d2b20e4",
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    }

    $.ajax(settings).done(function(response) {

        console.log(response);
        var locations = response.location_suggestions;
        var i;
        locations.forEach(function(item, index) {
            if (item.country_id == 1) {
                i = index;
            }
        });
        var cityId = locations[i].id;
        console.log(cityId);
        return cityId;
    });
}

function restaurantSearch(cityId) {
    var settings2 = {
        "async": true,
        "crossDomain": true,
        "url": "https://developers.zomato.com/api/v2.1/search?entity_id=" + cityId + "&entity_type=city" + "&q=" + "&count=10",
        "method": "GET",
        "headers": {
            "user-key": "24373972c90ad4019b26195e2d2b20e4",
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    }

    $.ajax(settings2).done(function(response) {
        console.log(response);

        var restaurants = response.restaurants;
        var rest, i = 0;
        for (res of restaurants) {

            rest =
                `
                <div class="row">
                <div class="col-xs-3">
                <img src="${res.restaurant.thumb}" alt="">
                </div>
                
            
            <div class="col-xs-9">
            <h3>${res.restaurant.cuisines}</h3>
            <div style="margin-top: 20px;">
                <pre title="location">${res.restaurant.location.address}</pre>
                <span title="Timing">${res.restaurant.timings}</span>
            </div>
            </div>
            
            </div>`;

            $('.my-restaurant').append(rest);
        }
    });
}

$(document).ready(function() {
    var cityId = cityFinder();
    restaurantSearch(cityId);
});