function popup(work) {
    var background = document.getElementById('back');
    background.style.display = "block";
}

function closePop() {
    var background = document.getElementById('back');
    background.style.display = "none";
}


function getElementY(eID) {
    var element = document.getElementById(eID);
    var y = element.offsetTop;
    var curr = element;
    while (curr.offsetParent && curr.offsetParent != document.body) {
        curr = curr.offsetParent;
        y += curr.offsetTop;
    } return y;
}

function smoothScroll(element) {
    var elementY = getElementY(element);
    var duration = 500;
    var startingY = window.pageYOffset;
    var diff = elementY - startingY;
    var start;
    var lastPercent = 0;
    var grad = 1;
    window.requestAnimationFrame(function step(timestamp) {
      if (!start) start = timestamp
        var time = timestamp - start;
      var percent = Math.min(time / duration, 1);
      if (lastPercent > percent) {
        time = 590;
        duration = 600;
      }
      window.scrollTo(0, startingY + diff * percent)

      if (time < duration) {
        window.requestAnimationFrame(step);
        if (time > 400) {
          duration = duration*1.02069;
        }
      }
      lastPercent=percent;
    }
    )
}
function navFunct() {
    var x = document.getElementById("navBar");
    if (x.className === "nav") {
        x.className = "responsive";
    } else {
        x.className = "nav";
    }
}
