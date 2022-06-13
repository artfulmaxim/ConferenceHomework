var requestUrl = 'https://raw.githubusercontent.com/David-Haim/CountriesToCitiesJSON/master/countriesToCities.json';
var xhr = new XMLHttpRequest();

xhr.open('GET', requestUrl, true);
xhr.responseType = 'json';
xhr.send()

xhr.onload = function() {
    var countryList = xhr.response;
    countryFunction(countryList);
}

function countryFunction(jsonObj) {
    for (var key in jsonObj){
        var countryName = document.createElement('option');
        countryName.innerHTML = key;
        country.append(countryName);

        country.onchange = function(){

        }
    }
}
