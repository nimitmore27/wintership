// we can change style by using .style.property name on an element
// using this method we can change any css property using js
document.getElementById('demo').style.color = 'red';

// this statment will overright the ID of the element
document.getElementById('demo').id = "newid";
// we need id demo so re-setting it to demo
document.getElementById('newid').id = "demo";

// this statment will overright the class of the element
document.getElementById('demo').className = "newclass";

// this is how we can add a new class to an element 
document.getElementById('demo').classList.add('mydemo');

// this is how we can remove a new class from classlist of an element 
document.getElementById('demo').classList.remove('mydemo');

// this method will remove classname if its there or add if it isn't 
document.getElementById('demo').classList.toggle('mydemo');



// we will use id to target the button as well as the paragraph
// we have written an onclick event on button to call the following function
function func1(){
    // using id to access paragraph
    document.getElementById('demo').innerText = "Function 1 Changed my inner Text";

    // OR
    // instead of writing the entire statement again and again we can make variable/ object to access the element
    // const demo = document.getElementById('demo');
    // demo.innerText = "Function 1 Changed my inner Text";

}
function func2(){
    // using id to access paragraph
    // note while using query selector we must use CSS selector for the element i.e. for ID use # for classname use . (period) for type selector use tagname
    document.querySelector('#demo').innerText = 'This is paragraph with ID "demo"';

    // OR
    // instead of writing the entire statement again and again we can make variable/ object to access the element
    // const demo = querySelector('#demo');
    // demo.innerText = 'This is paragraph with ID "demo"';
}
function func3(){
    // getElementsByClassName will return a HTML object collection because we can have multiple elements with same class
    // currently we know we have only one element with the classname mypara, and this collection is like array so to access the first element in this collection we will use index 0
    document.getElementsByClassName('mypara')[0].innerText = "Function 3 Changed my inner text";

    // OR
    // instead of writing the entire statement again and again we can make variable/ object to access the element
    // const demo = getElementsByClassName('mypara');
    // demo[0].innerText = "Function 3 Changed my inner text";
}

function func4(){
    // querySelector for classname will return 1st element of that class
    // querySelectorAll for classname will return nodelist i.e. an array of objects 
    // currently we know we have only one element with the classname mypara, and this collection is like array so to access the first element in this collection we will use index 0

    // note while using query selector we must use CSS selector for the element i.e. for ID use # for classname use . (period) for type selector use tagname
    document.querySelector('.mypara').innerText = 'This is a paragraph with CLASS "mypara"';

    // document.querySelectorAll('.mypara')[0].innerText = 'This is a paragraph with CLASS "mypara"';

    // OR
    // instead of writing the entire statement again and again we can make variable/ object to access the element
    // const demo = querySelector('mypara');
    // demo.innerText = 'This is a paragraph with CLASS "mypara"';
    // const demo = querySelectorAll('mypara');
    // demo[0].innerText = 'This is a paragraph with CLASS "mypara"';
}

// we will store inputbox & myol in a variable as our object
let inpbox = document.getElementById('inptxt');
let myol = document.getElementById('myol');

// we can access inputbox value by .value property
// we will add the li to myol by using append method on an click event

let addli = document.getElementById('addli');

// using lambda function
addli.onclick = function(){
    // accessing data of inputbox 
    let val = inpbox.value;

    // if input is null then dont add
    if(val.length == 0) return

    // we willl create element using following method and access it using variable/object
    let listitem = document.createElement('li');

    // we can use any property innerHTML or innerText, but changing innerText is safer because someone could change innerHTML will cause bugs in issue.

    // changing content of list item
    listitem.innerText = val;

    // appending the list item to the list
    myol.append(listitem);
    // we will clear text from inputbox
    inpbox.value = "";
    inpbox.focus();
}

// We will add event listner on the entire OL and then check for li and then remove it

// the callback function of event listner produces an event argument and we can use that argument to identify the element
// passing that event argument as "e"
myol.addEventListener("click",function(e){
    //  e.target will return an object which will be the target element of the dom where we have clicked
    // check console for the corresponding ouputs
    console.log("e.target : "+e.target);
    // e.target.nodeName will return the string form of the object name
    console.log("e.target.nodeName : "+e.target.nodeName);

    // we will remove element if it is a "LI"
    if(e.target.nodeName == "LI"){
        // we will get confirmation from user to delete it or not by using window object confirm.
        // confirm() method return a boolean output as true or false
        if(confirm("Do You Want To Delete This List Item?")){
            // If user click on "okay" then delete the List item
            // to delete HTML elements we have method remove()
            e.target.remove();
        }
    }

})
