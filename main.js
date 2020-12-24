// Sound Effect
// var bleep = new Audio();
// bleep.src = 'button.mp3';
// var correct = new Audio();
// correct.src = 'correct.mp3';
// var wrong = new Audio();
// wrong.src = 'wrong.mp3';

// mute button
var bleep, correct, wrong, mutebtn, seek_bar;
function initAudioPlayer(){
bleep = new Audio();
bleep.src = 'button.mp3';
correct = new Audio();
correct.src = 'correct.mp3';
wrong = new Audio();
wrong.src = 'wrong.mp3';
    // Set object references
    mutebtn = document.getElementById("mutebtn");
    // Add Event Handling
    mutebtn.addEventListener("click", mute);
    // Functions
    function mute(){
        if(bleep.muted || correct.muted || wrong.muted){
            bleep.muted = false;
            correct.muted = false;
            wrong.muted = false;
        } else {
            bleep.muted = true;
            wrong.muted = true;
            correct.muted = true;
        }
    }
}
window.addEventListener("load", initAudioPlayer);

// Chane image for mute button
var image_tracker = 's';
function change(){
    var image = document.getElementById('sound');
    if(image_tracker == 's'){
        image.src = 'mute.png';
        image_tracker = 'm';
    }
    else{
        image.src = 'speaker.png';
        image_tracker = 's';
    }
}

// Change image pause & play
var image_tracker_P = 'p';
function changePic(){
    var image = document.getElementById('play&pause');
    if(image_tracker == 'p'){
        image.src = 'play.png';
        image_tracker = 'o';
        stopwatch.stop();
    }
    else{
        image.src = 'pause.png';
        image_tracker = 'p';
        stopwatch.start();
    }
}
// Slide
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// Timer
class Stopwatch {
    constructor(display, results) {
        this.running = false;
        this.display = display;
        this.results = results;
        this.laps = [];
        this.reset();
        this.print(this.times);
        this.start();
    }
    
    reset() {
        this.times = [ 0, 0, 0 ];
    }
    
    start() {
        if (!this.time) this.time = performance.now();
        if (!this.running) {
            this.running = true;
            requestAnimationFrame(this.step.bind(this));
        }
    }
    
    lap() {
        let times = this.times;
        let li = document.createElement('li');
        li.innerText = this.format(times);
        this.results.appendChild(li);
    }
    
    stop() {
        this.running = false;
        this.time = null;
    }

    restart() {
        if (!this.time) this.time = performance.now();
        if (!this.running) {
            this.running = true;
            requestAnimationFrame(this.step.bind(this));
        }
        this.reset();
        // this.running = false;
        // this.time = null;
    }
    
    clear() {
        clearChildren(this.results);
    }
    
    step(timestamp) {
        if (!this.running) return;
        this.calculate(timestamp);
        this.time = timestamp;
        this.print();
        requestAnimationFrame(this.step.bind(this));
    }
    
    calculate(timestamp) {
        var diff = timestamp - this.time;
        // Hundredths of a second are 100 ms
        this.times[2] += diff / 10;
        // Seconds are 100 hundredths of a second
        if (this.times[2] >= 100) {
            this.times[1] += 1;
            this.times[2] -= 100;
        }
        // Minutes are 60 seconds
        if (this.times[1] >= 60) {
            this.times[0] += 1;
            this.times[1] -= 60;
        }
    }
    
    print() {
        this.display.innerText = this.format(this.times);
        //document.getElementById("timetaken").innerHTML = this.format(this.times);
        document.getElementById("input3").value = this.format(this.times);
    }
    
    format(times) {
        return `\
${pad0(times[0], 2)}:\
${pad0(times[1], 2)}`;
    }
}

function pad0(value, count) {
    var result = value.toString();
    for (; result.length < count; --count)
        result = '0' + result;
    return result;
}

function clearChildren(node) {
    while (node.lastChild)
        node.removeChild(node.lastChild);
}

let stopwatch = new Stopwatch(
    document.querySelector('.stopwatch'),
    document.querySelector('.results'));

// Pop Up to show score
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

function show(){
    stopwatch.stop();
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
     stopwatch.start();
  modal.style.display = "none";

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Calculate score
var out = document.getElementById("out");
var score = document.getElementById("score");

//create a counter variable
var points = 0;
var s = 0;

function plus(){
    this.points +=100;
    //document.getElementById("demo").innerHTML = this.points;
    document.getElementById("input2").value = this.points;
    s = points;
    showPoints();
}

function minus(){
    this.points-=0;
    //document.getElementById("demo").innerHTML = this.points;
    document.getElementById("input2").value = this.points;
    showPoints();
}

function showPoints() {
    s = points;
  out.innerHTML = this.points;
}

function showScore() {
  score.innerHTML = this.points;
}
// function getPoints(){
//     return s;
// }

// window.onload = function saveScore(){
//     var currentDate = new Date().toLocaleDateString();
// var currentTime =  new Date().toLocaleTimeString();
// document.getElementById("input2").value = this.points;
// document.getElementById("input3").value = this.format(this.times);
// document.getElementById("username");
// document.getElementById("input4").value = "Easy"
// document.getElementById("input7").value = "Medium"
// document.getElementById("input8").value = "Hard"
// document.getElementById("input5").value = currentTime;
// document.getElementById("input6").value = currentDate;
// }

// function printInputOne(){
// this.display.innerText = this.points;
// }
// function printInputTwo(){
// this.display.innerText = this.format(this.times);
// }
//document.getElementById("demo").innerHTML = this.points;
//document.getElementById("timetaken").innerHTML = stopwatch.format.times;
var currentDate = new Date().toLocaleDateString();
var currentTime =  new Date().toLocaleTimeString();
document.getElementById("input5").value = currentTime;
document.getElementById("input6").value = currentDate;
document.getElementById("input2").value = this.points;
document.getElementById("username").value = "MYHo";
