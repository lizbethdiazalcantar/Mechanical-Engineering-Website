var total=0;
var nTry=0;
function doThis()
{
  count(1);
}

function count(n)
{
nTry=nTry+n;
document.getElementById("count").value = nTry;
if (nTry==1)
{
    document.getElementById("name").readOnly=true;

}
if (nTry==5)
{
    alert("sorry you ran out of tries")
    document.getElementById("form1").submit();

}
if(nTry<5)
tell();
}

function tell () 
{
    var dom = document.getElementById("form1");
      for (var index = 0; index < dom.ai.length; index++) {
        if ((dom.ai[index].checked)&&(dom.ai[0].checked)){
            total= parseInt(dom.ai[index].value)+total;
            var aiP=parseInt(dom.ai[index].value);
            }
        }
    for (var index = 0; index < dom.fly.length; index++) {
     if ((dom.fly[index].checked)&&(dom.fly[0].checked)) {
         total= parseInt(dom.fly[index].value)+total;
         var flyP=parseInt(dom.fly[index].value);
            }
        }
    for (var index = 0; index < dom.walk.length;index++) {
    if ((dom.walk[index].checked)&&(dom.walk[0].checked)) {
     total= parseInt(dom.walk[index].value)+total;
     var taskP=parseInt(dom.walk[index].value);
            }
        }
    for (var index = 0; index < dom.int.length;index++) {
    if ((dom.int[index].checked)&&(dom.int[0].checked)) {
     total= parseInt(dom.int[index].value)+total;
     var interactP=parseInt(dom.int[index].value);
             }
         }  
var aiT=25;
var flyT=25;
var taskT=25;
var interactT=25;

aiT=(aiP*0.01)/(0.001225*0.38)+25;
flyT=(flyP*0.01)/(0.001225*0.4)+25;
taskT=(taskP*0.008)/(0.000784*0.5)+25;
interactT=(interactP*0.006)/(0.000484*0.45)+25;

       document.getElementById("aiT").innerHTML = aiT+ " °C";
       
       document.getElementById("aiT").value = aiT+ " °C";
      document.getElementById("flyT").innerHTML = flyT+ " °C";
       document.getElementById("taskT").innerHTML = taskT+ " °C";
        document.getElementById("interactT").innerHTML = interactT+ " °C";



        if (isNaN(flyT)==true)
        alert("You must select your components");
        else if (isNaN(aiT)==true)
        alert("You must select your components");
        else if (isNaN(taskT)==true)
        alert("You must select your components");
        else if (isNaN(interactT)==true)
        alert("You must select your components");
        else{
        if (total>6) 
         alert("You Burnt the Circuit Board! The total power is "+total+"Watts");
      else
         {
             alert("Congrats! No over-heating circuit board. Your total power is "+total+" watts");
             document.getElementById("form1").submit();
         }
         total=0;
        }


}



function grabcoord (ai1,ai,fly1,fly,task1,task,interact1,interact,heatsink1,heatsink) 
{
    aiTop = parseInt(document.getElementById(ai1).style.top);
    aiLeft= parseInt(document.getElementById(ai1).style.left);
    aiWidth=parseInt(document.getElementById(ai).width);
    aiHeight=parseInt(document.getElementById(ai).height);
    aiX=aiLeft+(aiWidth/2);
    aiY=aiTop+(aiHeight/2);
    flyTop=parseInt(document.getElementById(fly1).style.top);
    flyLeft=parseInt(document.getElementById(fly1).style.left);
    flyWidth=parseInt(document.getElementById(fly).width);
    flyHeight=parseInt(document.getElementById(fly).height);
    flyX=flyLeft+(flyWidth/2);
    flyY=flyTop+(flyHeight/2);

    taskTop=parseInt(document.getElementById(task1).style.top);
    taskLeft=parseInt(document.getElementById(task1).style.left);
    taskWidth=parseInt(document.getElementById(task).width);
    taskHeight=parseInt(document.getElementById(task).height);
    taskX=taskLeft+(taskWidth/2);
    taskY=taskTop+(taskHeight/2);

    interactTop=parseInt(document.getElementById(interact1).style.top);
    interactLeft=parseInt(document.getElementById(interact1).style.left);
    interactWidth=parseInt(document.getElementById(interact).width);
    interactHeight=parseInt(document.getElementById(interact).height);
    interactX=interactLeft+(interactWidth/2);
    interactY=interactTop+(interactHeight/2);

    heatsinkTop=parseInt(document.getElementById(heatsink1).style.top);
    heatsinkLeft=parseInt(document.getElementById(heatsink1).style.left);
    heatsinkWidth=parseInt(document.getElementById(heatsink).width);
    heatsinkHeight=parseInt(document.getElementById( heatsink).height);
    heatsinkX= heatsinkLeft+(heatsinkWidth/2);
    heatsinkY= heatsinkTop+(heatsinkHeight/2);
//alert("("+Math.abs(heatsinkX)+","+heatsinkY+")");
    
if ((Math.abs(aiX-flyX) <200)&&(Math.abs(aiY-flyY) <200))
alert("Artificial Intelligence and fly component are too close.");
else if ((Math.abs(aiX-taskX) <200)&&(Math.abs(aiY-taskY) <200))
alert("Artificial Intelligence and task component are too close.");
else if ((Math.abs(aiX-interactX) <150)&&(Math.abs(aiY-interactY) <150))
alert("Artificial Intelligence and task component are too close.");
else if ((Math.abs(flyX-taskX) <150)&&(Math.abs(flyY-taskY) <150))
alert("Fly and task component are too close.");
else if ((Math.abs(flyX-interactX) <160)&&(Math.abs(flyY-interactY) <160))
alert("Fly and interacting component are too close.");
else if ((Math.abs(interactX-taskX) <150)&&(Math.abs(interactY-taskY) <150))
alert("INteracting and task component are too close.");
else if ((Math.abs(heatsinkX-taskX) <100)&&(Math.abs(heatsinkY-taskY) <100))
alert("Heat sink should be close to hot component");
else if ((Math.abs(heatsinkX-aiX) >100)&&(Math.abs(heatsinkY-aiY) >100))
alert("Heatsink is too far from artificial intelligence component");
else if ((Math.abs(heatsinkX-interactX) <100)&&(Math.abs(heatsinkY-interactY) <100))
alert("Heat sink should be close to hot component");
else if ((Math.abs(heatsinkX-flyX) <100)&&(Math.abs(heatsinkY-flyY) <100))
alert("Heat sink should be close to hot component");
else{
alert("You have dissipated heat effectively!");
document.getElementById("pass").value=1;
}
}

