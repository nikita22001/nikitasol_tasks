//a simple function that triggers alert box
function hello(){
    alert("Welcome to my Website");
}

//a simple function to add 2 numbers
function add(){
    document.write(5+6);

}


//document.getElementById(id)
//display or like echo
//document.write
//window.alert
//innnerHTML
//console.log

//function to change the backgroud color of the page 
function changeColor(where,newColor){
    if (where=="background"){
        document.body.style.backgroundColor=newColor;

    }
}

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}



//crud 
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert ("First name must have atleast 5 character");
        return false;
    }
}
    let lname=(document.form1.lname.value).trim();
    if (lname.length>15){
        alert("Last Name must not be more than 15 characters");
        return false;
    }


    function fnameVal(){
        let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
            alert ("First name must have atleast 5 character");
            return false;
        })
    }