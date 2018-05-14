var Carousel = {
  width: 110,     // Images are forced into a width of this many pixels.
  numVisible: 2,  // The number of images visible at once.
  duration: 600,  // Animation duration in milliseconds.
  padding: 2      // Vertical padding around each image, in pixels.
};

function rotateForward() {
  var carousel = Carousel.carousel,
      children = carousel.children,
      firstChild = children[0],
      lastChild = children[children.length - 1];
  carousel.insertBefore(lastChild, firstChild);
}
function rotateBackward() {
  var carousel = Carousel.carousel,
      children = carousel.children,
      firstChild = children[0],
      lastChild = children[children.length - 1];
  carousel.insertBefore(firstChild, lastChild.nextSibling);
}

function animate(begin, end, finalTask) {
  var wrapper = Carousel.wrapper,
      carousel = Carousel.carousel,
      change = end - begin,
      duration = Carousel.duration,
      startTime = Date.now();
  carousel.style.top = begin + 'px';
  var animateInterval = window.setInterval(function () {
    var t = Date.now() - startTime;
    if (t >= duration) {
      window.clearInterval(animateInterval);
      finalTask();
      return;
    }
    t /= (duration / 2);
    var top = begin + (t < 1 ? change / 2 * Math.pow(t, 3) :
                               change / 2 * (Math.pow(t - 2, 3) + 2));
    carousel.style.top = top + 'px';
  }, 1000 / 60);
}
