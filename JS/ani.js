var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

ctx.lineWidth = 18;
  
ctx.beginPath();
ctx.moveTo(20, 20);
ctx.lineTo(20, 200);
ctx.lineTo(50, 200);
ctx.lineTo(50, 120);
ctx.lineTo(80, 200);
ctx.lineTo(110, 188);
ctx.lineTo(80,120);
ctx.lineTo(110,120);
ctx.lineTo(110,20);
ctx.lineTo(20,20);

ctx.moveTo(50, 50);
ctx.lineTo(50, 90);
ctx.lineTo(80, 90);
ctx.lineTo(80, 50);
ctx.lineTo(50, 50);

ctx.moveTo(150, 150);
ctx.lineTo(150, 180);
ctx.lineTo(180, 180);
ctx.lineTo(180, 320);
ctx.lineTo(210, 320);
ctx.lineTo(210, 180);
ctx.lineTo(240, 180);
ctx.lineTo(240, 150);
ctx.lineTo(150, 150);

ctx.moveTo(260, 270);
ctx.lineTo(260, 440);
ctx.lineTo(290, 440);
ctx.lineTo(290, 360);
ctx.lineTo(320, 440);
ctx.lineTo(350, 440);
ctx.lineTo(350, 270);
ctx.lineTo(320, 270);
ctx.lineTo(320, 360);
ctx.lineTo(290, 270);
ctx.lineTo(260, 270);

ctx.stroke();

setTimeout(function() {
    window.location.replace("home.php")
   ;},5000);
  
