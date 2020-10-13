barba.hooks.afterEnter( ( data ) => {
  // Getting the new page's document object
    const newDoc = parseHTML(newPageRawHTML); 

    // In this case I have to update the whole #masthead div
    const newPageMasthead = newDoc.getElementById('masthead');

    // The inner HTML of the new page's #masthead is injected into the current #masthead
    document.getElementById('masthead').innerHTML = newPageMasthead.innerHTML;
} );

 // do something before the transition starts
    barba.hooks.before(() => {

        document.querySelector('html').classList.add('is-transitioning');
        barba.wrapper.classList.add('is-animating');

    });

    // do something after the transition finishes
    barba.hooks.after(() => {

        document.querySelector('html').classList.remove('is-transitioning');
        barba.wrapper.classList.remove('is-animating');

    });
 barba.init({
        transitions: [{
          name: 'opacity-transition',
          leave(data) {
            return gsap.to(data.current.container, {
              opacity:0
            });
          },
          enter(data) {
            return gsap.from(data.next.container, {
              opacity:0
            });
          }
        }],
        views: [
          {
          namespace: 'restaurant',
            beforeEnter(data) {
             $('header img').fadeOut();
             $('header').css('background-color','transparent');
             $(document).ready(function(){
                $('.gallery').slick({
                  dots: true,
                  arrows: false,
                  infinite: true,
                  speed: 500
                });
              });
              
            }
          },
          {
            namespace: 'mapa',
            beforeEnter(data) {
             $('header img').fadeOut();
             $('header').css('background-color','transparent');
              
            }
          }, {
            namespace: 'home',
            beforeEnter(data) {
              $('header').css('background-color','white');
              $('header img').fadeIn();
              $("#intro-slider").vegas({
                slides: [
                    { src: "./img/intro/intro.png" }
                ]
          });

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
          }
        }
      ]
    });
