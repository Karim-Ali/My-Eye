function callAPI(c){
    pic(c);
    country(c);
}
function pic(c){
$capital=c.value;
x=fetch("https://pixabay.com/api/?key=11694078-cc4b4bf3f8c695679b113d1ee&q="+$capital)
.then(function(res){
    return res.json()
    // console.log(res.json());
    // alert(s[0].name);
})
.then(data => initialize(data))
function initialize(d){
    const x=d["hits"];
    document.getElementById("sora1").src= x[0].largeImageURL;
	document.getElementById("sora2").src= x[1].largeImageURL;
    document.getElementById("sora3").src= x[2].largeImageURL;
    document.getElementById("sora4").src= x[3].largeImageURL;
    document.getElementById("sora5").src= x[4].largeImageURL;    
//console.log(x[0].largeImageURL);
}
}
function country(c){
$capital=c.value;
x=fetch("https://restcountries.eu/rest/v2/name/"+$capital)
.then(function(res){
    return res.json()
    // console.log(s);
    // alert(s[0].name);
})
.then(data => initialize(data))
function initialize(d){
    const x=d[0];
    document.getElementById("name").innerHTML+= x.name+".";
    document.getElementById("capital").innerHTML+= x.capital+".";
    document.getElementById("language").innerHTML+= x.languages.map(c => c.name )+".";
}
}
