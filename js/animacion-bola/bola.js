Number.prototype.reverse = function() {
  return this > 0 ? -this : Math.abs(this);
}

const container = document.querySelector('body');
const box = document.querySelector('.circle.boton');
const pos = { x: 0, y: 0 };
let xAxis = 1;
let yAxis = 1;

setInterval(drawFrame, 5);

function drawFrame() {
  let c = getSize(container);
  let b = getSize(box);
  
  if(pos.x + b.w >= c.w && xAxis || pos.x < 0) {
    xAxis = xAxis.reverse();

  }
  
  if(pos.y + b.h >= c.h || pos.y < 0) {
    yAxis = yAxis.reverse()
  }
  
  pos.x = pos.x + xAxis;
  pos.y = pos.y + yAxis;
  
  box.style.left = pos.x + 'px';
  box.style.top = pos.y + 'px';
}

function getSize(el) {
  return {
    h: el.clientHeight,
    w: el.clientWidth
  }
}

function getRandomColor() {
  return 'hsl(' + getRandomInt(0, 360) + ', 50%, 50%)'
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}