var Tuong = {
    hook: {
        stt : 04,
        dame: 134
    },
    am : {
        stt : 05,
        dame : 156
    },
    ck :{
        stt : 06,
        dame: 200
    },
    boutyhunnter : {
        stt: 07,
        dame: 170
    }
};

var t= Object.keys(Tuong);
console.log(12)
function themtuong(){
    console.log('test');
    document.getElementById('01').innerHTML = t[0];
    document.getElementById('03').innerHTML = t[1];
};
function add() {
   for ( i=0; i< t.length ;i++ )
   {
       document.createElement("tr");
       document.createElement("td").innerHTML = t[i];
       
       console.log(13);
   }
}