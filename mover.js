      var diffX, diffY, theElement;
      function draw() {
 
  var dom0 = document.getElementById("border");
  var dom = document.getElementById("ai");
  var dom2 = document.getElementById("fly");
  var dom3 = document.getElementById("task");
  var dom4 = document.getElementById("interact");

  if (dom3.getContext) {
    var context = dom3.getContext('2d');
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(0, 100);
    context.lineTo(100, 100);
    context.lineTo(100, 0);
    context.lineTo(0, 0);
    context.stroke();
    context.fill();
  }
  event.stopPropagation();
  event.preventDefault();

  if (dom0.getContext) {
    var context = dom0.getContext('2d');
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(100, 100);
    context.lineTo(200, 100);
    context.lineTo(150, 150);
    context.lineTo(50, 150);
    context.stroke();
  }
  event.stopPropagation();
  event.preventDefault();

 if (dom2.getContext) {
    var context = dom2.getContext('2d');
    context.beginPath();
    context.moveTo(0, 80);
    context.lineTo(80, 160);
    context.lineTo(160,80);
    context.lineTo(80,0);
    context.lineTo(0, 80);
    context.fill();
    context.stroke();
  }
  event.stopPropagation();
  event.preventDefault();

  if (dom4.getContext) {
    var context = dom4.getContext('2d');
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(0, 100);
    context.lineTo(100, 100);

    context.fill();
  }
  event.stopPropagation();
  event.preventDefault();

    if (dom.getContext) {
      var context = dom.getContext('2d');
      context.beginPath(0,20);
      context.lineTo(0, 100);
      context.lineTo(50,120);
      context.lineTo(100, 100);
      context.lineTo(100, 20);
      context.lineTo(50, 0);
      context.lineTo(0, 20);
      context.stroke();
      context.fill();
        }  
  event.stopPropagation();
  event.preventDefault();
}

function grabber(event) {

  theElement = event.currentTarget;
  var posX = parseInt(theElement.style.left);
  var posY = parseInt(theElement.style.top);

  diffX = event.clientX - posX;
  diffY = event.clientY - posY;
  document.addEventListener("mousemove", mover, true);
  document.addEventListener("mouseup", dropper, true);
  event.stopPropagation();
  event.preventDefault();
}  

function mover(event) {
x=event.clientX;
  {theElement.style.left = (event.clientX-diffX) + "px";}
  theElement.style.top = (event.clientY-diffY ) + "px";
  event.stopPropagation();
} 

function dropper(event) {
    document.removeEventListener("mouseup", dropper, true);
  document.removeEventListener("mousemove", mover, true);
  event.stopPropagation();
} 


