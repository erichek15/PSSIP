function DoWhileClick(){
    let x = 0
    do{
        x+=1;
        if (x == 5){
            continue
        }
        console.log(x);
    }
    while(x!=10)
}

function IfClick(id){
    let element = document.getElementById(id);
    console.log(element.innerHTML);
    if(element.innerHTML == "вкл"){
        element.innerHTML = "выкл";
    }
    else{
        element.innerHTML = "вкл";
    }
}

function ForClick(){
    let x = 5;
    console.log('Таблица умножения 5:');
    for(let i = 1; i<=10;i++){
        console.log(x*i)
    }
}

function SwitchClick(id){
    let element = document.getElementById(id);
    let data = element.innerHTML;

    switch (data) {
        case 'Switch':
            console.log('Switch');
            element.innerHTML = 'tata';
            break;
        case 'tata':
            console.log('tata');
            element.innerHTML = 'fof';
            break;
        case 'fof':
            console.log('fof');
            element.innerHTML = 'End';
            break;
        default:
            element.innerHTML = 'Switch';
    }
}
function ForPromt(){
    return 'what is your name?'
}