/* Simple Text Change
function displayText(){
         document.getElementById("demo").innerHTML = "You clicked!";
      }

*/

function compare(){
    john = 23;
    mary = 25;
    if (john > mary){
        document.getElementById('javademo').innerHTML = "John is older than Mary.";
    }
    
    if (john === mary){
         document.getElementById('javademo').innerHTML = "John is the same age as Mary.";
    }
    
    else {
         document.getElementById('javademo').innerHTML = "John must be younger than Mary";
    }
}