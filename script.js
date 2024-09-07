//MY CALCULATOR PROGRAM

const display = document.getElementById("display");

function appendToDisplay(input){
    display.value += input;
}

function clearDisplay(){
    display.value = "";
}

function calculate(){
    try {
        display.value = eval(display.value);
    }
    catch(error){
    display.value = "Error";
    }
}
function clearOneByOne(){
    let currentDisplay = document.getElementById('display').value;
    display.value = currentDisplay.slice(0, -1);
}