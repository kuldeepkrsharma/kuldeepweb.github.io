// Get the div element by its id
var myDiv = document.getElementById('pointer');

// Function to update the mouse coordinates
function updateCoordinates(event) {
    var x = event.clientX + window.scrollX;
    var y = event.clientY + window.scrollY;
    // Set the top and left properties
    setTimeout(()=>{
        myDiv.style.top = y + 'px';
        myDiv.style.left = x + 'px';
        // console.log("x",x)
        // console.log("y",y)
    }, 100);
    
}

// Attach the event listener to the document
document.addEventListener('mousemove', updateCoordinates);

function scrolltop()
{
    window.scrollTo(0, 0);
    console.log("scrolled")
}