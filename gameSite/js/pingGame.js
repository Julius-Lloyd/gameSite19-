var canvas = document.querySelector("#canvas");
var ctx = canvas.getContext('2d');


var x = undefined;
var y = undefined;
var xP = canvas.width/2;
var yP = canvas.height-30;
var pingH = 50;
var pingW = 50;
var pingX = (canvas.width-pingW)/2;
var pingBorder = 0;
var player = {pingW, pingH, pingX , y:750, speedX: 0.0};
var score = 0;
var scoreX = 50;
var scoreY = 50;
var counter = 0;

function randomIntFromRange(min,max) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}

function updateGameArea() { 
    player.pingX += player.speedX;
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.beginPath()
    ctx.drawImage(skat, player.pingX, player.y, player.pingW, player.pingH);
    
    ctx.beginPath()
    ctx.fillStyle = "black";
    ctx.font = "45px Changa one";
    ctx.fillText("Score: "+score, scoreX, scoreY);
    ctx.closePath()
}


window.onkeydown = function(event) {
    event.preventDefault() // stop the arrow keys scrolling the page
    if(event.keyCode == 39) { // right 
        if(player.pingX + player.pingW > canvas.width){
            player.pingX = canvas.width - player.pingW;}
      player.speedX += 10;
    } else if(event.keyCode == 37) { // left
        if (player.pingX < 0){
            player.pingX =  this.pingBorder + 55;
        }  
      player.speedX -= 10;     
    } 
  }
   
  window.onkeyup = function(event) {
    event.preventDefault() // stop the arrow keys scrolling the page
    player.speedX = 0
  }
  
var skat = document.getElementById("skat");
var fisk = document.getElementById("fisk");




// Objects

function Fish(x, y, width, height, color) {
    // object navne
    this.x = x;
    this.y = y-1000;
    this.width = width;
    this.height = height;
    this.color = color;
    this.speedY = 0;
    this.gravity = 0.02;
    this.gravitySpeed = 0;

    // bevægelsen 
    this.update = function(){
        this.gravitySpeed += this.gravity;
        this.y += this.speedY + this.gravitySpeed;        
        this.draw(); 
    };
 
    // det er tegningen af de faldende ting. 
    this.draw = function() {
    ctx.beginPath()
    ctx.rect(this.x, this.y, this.width, this.height)
    ctx.fillStyle = this.color
    ctx.fill()
    ctx.closePath()
    };
}



   // Implementation
   
   var fishArray =[];
   function init() {
    for (var i = 0; i < 3; i++) {
   
        var x = randomIntFromRange(0, canvas.width);
        var y = randomIntFromRange(0,canvas.height);
        var width =  10;
        var height = 30;
        //indsætte new Image i stedet (sinem sender kode) 
        fishArray.push(new Fish(x, y, width, height,'rgba(102, 51, 153, .3)'));
    }
    
    
     console.log(fishArray);
     
    
   }
   // Animation Loop
   function animate() {
    requestAnimationFrame(animate); // Create an animation loop
    updateGameArea() 
    for (var i = 0; i < fishArray.length; i++){
            fishArray[i].update();
            
        }
        if(player.pingX == Fish.y){
            score++;
      }
     }




function spillet(){
setInterval(init, 800);
animate();

}

spillet();