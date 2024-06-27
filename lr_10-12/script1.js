function MathClick(){
    let b = -1;
    let a = 1
    let c = -3;
    let y;
    try {
        y = (b+Math.sqrt(b*b+4*a*c))/2*a - Math.pow(a,3)*c+Math.pow(b,-2);
    }
    catch(e){
        alert(e);
    }
    return y
}

function Str(){
    let s1 = "Я люблю Беларусь";
    let s2 = "Я учусь в политехническом колледже";
    console.log("Длина строки s1 - "+s1.length);
    console.log(s1.charCodeAt(10));
    console.log(s1.replace("Беларусь", "Эрика"));
}