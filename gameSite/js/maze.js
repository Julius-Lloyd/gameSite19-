
let canvas = document.querySelector("#canvas"); 
let ctx = canvas.getContext('2d');

let maze = [
    [1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1],
    [1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1],
    [1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 5, 1, 0, 1],
    [1, 0, 1, 5, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1],
    [1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1],
    [1, 0, 0, 1, 6, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1],
    [1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1],
    [1, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 6, 1],
    [1, 0, 0, 0, 1, 1, 1, 1, 1, 6, 1, 0, 1, 0, 1],
    [1, 0, 1, 1, 1, 6, 1, 0, 0, 0, 1, 0, 1, 0, 1],
    [1, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1],
    [1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 4, 1],
    [1, 6, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 0, 0, 0, 3],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

let y = 0;
let x = 0;
let tileSize = 40;
let point = 0;
let score = 1;
let key = 0;


// væg
let wall = new Image();
wall.src ='../../img/ice-block.png';

// dræber fisk
let badFishy = new Image();
badFishy.src ='../../img/fishy.png'; 

// snebolde  (ekstra point)
let balls = new Image();
balls.src = '../../img/balls.png';

// fisk
let fishy = new Image();
fishy.src ='../../img/fishy.png';

// PLAYER
let playerImg = new Image();
playerImg.src = '../../img/pingvin.png';

// EXIT
let exit = new Image();
exit.src ='../../img/nest.png';

//variabler til det sted i din HTML som viser dine points og keys !!!!!!!!!!!!!
let pointdisplay = document.getElementById('pointdisplay');
let fishdisplay = document.getElementById('fishdisplay');

// FUNCTIONS FOR lyd(audio)
function wallSound(){
    let wallSound = new Audio('../../audio/block.mp3');
    wallSound.play();
}
function trap(){
    let trap = new Audio('../../audio/roar.mp3');
    trap.play();
}
function walk(){
    let walk = new Audio('../../audio/step.mp3');
    walk.play();
}
function tada(){
    let tada = new Audio('../../audio/taDa.mp3');
    tada.play();
}

//I vores grid function giver vi vores maze dens udseende
function grid(){
    for(let y = 0; y < maze.length; y++) {
        for(x = 0; x < maze[y].length; x++) {
            // FLOOR = 0
            if(maze[y][x] == 0){
                ctx.fillStyle = "#dcf3ff";
                ctx.fillRect(x*tileSize,y*tileSize,tileSize,tileSize);
            } 
            // WALL = 1
            else if(maze[y][x] == 1){
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(wall, x*tileSize,y*tileSize,tileSize,tileSize);
            } 
            // PLAYER = 2
            else if(maze[y][x] == 2){
                // koordinater for player
                player = {y,x};
                console.log(player.y + " " + player.x);
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(playerImg, x*tileSize,y*tileSize,tileSize,tileSize);
            } 
            // exit = 3
            else if(maze[y][x] == 3){
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(exit, x*tileSize,y*tileSize,tileSize,tileSize);
            } 
            //  trap TILE = 4
            else if(maze[y][x] == 4){
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(badFishy, x*tileSize,y*tileSize,tileSize,tileSize);
            } 
           
            // FISHY = 5
            else if(maze[y][x] == 5){
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(fishy, x*tileSize,y*tileSize,tileSize,tileSize);
            }
            // Snowballs
            else if(maze[y][x] == 6){
                ctx.fillRect(x * tileSize,y * tileSize,tileSize,tileSize);
                ctx.drawImage(balls, x*tileSize,y*tileSize,tileSize,tileSize);
            }
        }
    }
}

// Function for hvor mange snebolde man har samlet
function pointScore(){
    point += score;
    pointdisplay.innerHTML = point; 
}
// Hvor mange fisk man har samlet ind på vejen.
function keyScore(){
    key += score;
    fishdisplay.innerHTML = key; 
}
//Hvad side viser når spillet er slut
function endGame(){
    if(maze && key == 3){
        canvas.style.display = "none";
        document.getElementById("congrats").style.display = "block";
        document.getElementById("description").style.display = "none";
    }
}
//Arrow key functions 
function up(){
    // FLOOR
    // det er -1 fordi man bevæger sig up ad y aksen. 
    if(maze[player.y-1][player.x] == 0){
        // Der hvor der står 0 skal der nu stå -1, den nye position
        maze[player.y-1][player.x] = 2;
        // Der hvor player stod før skal der nu stå 0, den gamle position
        maze[player.y][player.x] = 0;
        walk();
    }
    // WINNER TILE
    else if(maze[player.y-1][player.x] == 3){
        tada();
        endGame();   
    }
    // dræber fisk
    else if(maze[player.y-1][player.x] == 4){
        trap();
        setTimeout(function(){
            this.location.reload();
        },1000);
    }
    // fishys
    else if(maze[player.y-1][player.x] == 5){
        maze[player.y-1][player.x] = 2;
        maze[player.y][player.x] = 0;
        keyScore();
    }
    //POINT
    else if(maze[player.y-1][player.x] == 6){
        maze[player.y-1][player.x] = 2;
        maze[player.y][player.x] = 0;
        pointScore();
    }
    //WALL
    else{
        wallSound();
    }
    grid();
}
function down(){
    // FLOOR
    if(maze[player.y+1][player.x] == 0){
        maze[player.y+1][player.x] = 2;
        maze[player.y][player.x] = 0;
        walk();
    }
    //WINNER TILE
    else if(maze[player.y+1][player.x] == 3){
        tada();
        endGame();   
    }
    // dræber fisk
    else if(maze[player.y+1][player.x] == 4){
        trap();
        setTimeout(function(){
            this.location.reload();
        },1000);
    }
    // fishy
    else if(maze[player.y+1][player.x] == 5){
        maze[player.y+1][player.x] = 2;
        maze[player.y][player.x] = 0;
        keyScore();
    }
    // POINT
    else if(maze[player.y+1][player.x] == 6){
        maze[player.y+1][player.x] = 2;
        maze[player.y][player.x] = 0;
        pointScore();
    }
    //WALL
    else{
        wallSound();
    }
    grid();
}
function left(){
    // FLOOR
    if(maze[player.y][player.x-1] == 0){
        // Der hvor der stÃ¥r 0 skal der nu stÃ¥ -1, den nye position
        maze[player.y][player.x-1] = 2;
        // Der hvor player stod fÃ¸r skal der nu stÃ¥ 0, den gamle position
        maze[player.y][player.x] = 0;
        walk(); 
    }
    // WINNER TILE
    else if(maze[player.y][player.x-1] == 3){
        tada();
        endGame();
    }

    // dræber fisk
    else if(maze[player.y][player.x-1] == 4){
        trap();
        setTimeout(function(){
            this.location.reload();
        },1000);
    }
    // KEY
    else if(maze[player.y][player.x-1] == 5){
        maze[player.y][player.x-1] = 2;
        maze[player.y][player.x] = 0;
        keyScore();
    }
    // POINT
    else if(maze[player.y][player.x-1] == 6){
        maze[player.y][player.x-1] = 2;
        maze[player.y][player.x] = 0;
        pointScore();
    }
    //WALL 
    else{
        wallSound();
    }
    grid();
}
function right(){
    // FLOOR
    if(maze[player.y][player.x+1] == 0){
        // Der hvor der stÃ¥r 0 skal der nu stÃ¥ -1, den nye position
        maze[player.y][player.x+1] = 2;
        // Der hvor player stod fÃ¸r skal der nu stÃ¥ 0, den gamle position
        maze[player.y][player.x] = 0;
        walk();
    }
    // WINNER TILE
    else if(maze[player.y][player.x+1] == 3){
        tada();
        endGame();
    }
    // dræber fisk
    else if(maze[player.y][player.x+1] == 4){
        trap();
        setTimeout(function(){
            this.location.reload();
        },1000);
    }
    // KEY
    else if(maze[player.y][player.x+1] == 5){
        maze[player.y][player.x+1] = 2;
        maze[player.y][player.x] = 0;
        keyScore();
    }
    // POINT
    else if(maze[player.y][player.x+1] == 6){
        maze[player.y][player.x+1] = 2;
        maze[player.y][player.x] = 0;
        pointScore();
    }
    //WALL
    else{
        wallSound();
    }
    grid();
}

// A function that calls a function named "callback function"
window.addEventListener('keydown', function(event){
    console.log(event.keyCode);

    switch (event.keyCode) {
        // LEFT KEY
        case 37:
            
            left();
            break;

        // UP KEY
        case 38:
            up();
            break;

        // RIGHT KEY
        case 39:
            right();
            break;

        // DOWN KEY
        case 40:
            down();
            break;
         default:
            break;
    }
    //stop scroll når brugeren trykker up eller down
    event.preventDefault()
})

//Load spillet
window.addEventListener("load", grid);
