$capital="egypt";
x=fetch("https://pixabay.com/api/?key=11694078-cc4b4bf3f8c695679b113d1ee&q="+$capital)
.then(function(res){
    return res.json()
    // console.log(res.json());
    // alert(s[0].name);
})
.then(data => initialize(data))
function initialize(d){
    const x=d["hits"];
    document.getElementById("sora").src= x[0].largeImageURL;
    //console.log(x[0].largeImageURL);
}