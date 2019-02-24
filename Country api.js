$capital="egypt";
x=fetch("https://restcountries.eu/rest/v2/name/"+$capital)
.then(function(res){
    return res.json()
    // console.log(s);
    // alert(s[0].name);
})
.then(data => initialize(data))
function initialize(d){
    const x=d[0];
    document.getElementById("name").innerHTML= x.name;
    document.getElementById("capital").innerHTML= x.capital;
    document.getElementById("language").innerHTML= x.languages.map(c => c.name );
}