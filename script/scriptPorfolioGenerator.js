const navbar = document.getElementById("navbar");
let stateSelect = document.getElementById("stateSelect");
const red = document.getElementById("red");
const blue = document.getElementById("blue");
const green = document.getElementById("green");
const nav = document.getElementsByTagName("nav");
const footer = document.getElementById("footPage");
const body = document.getElementById("body");

/*
function greenTheme() {
  stateSelect.addEventListener("input", (e) => {
    if (stateSelect.value == "navbarColor") {
      green.addEventListener("click", (e) => {
        navbar.style.backgroundColor = "rgb(0, 54, 36)";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "bgColor") {
      green.addEventListener("click", (e) => {
        document.body.style.background = "linear-gradient(125deg,  rgb(0, 36, 15) 34.7%, rgba(255,255,255,8) 32%, rgba(2,0,36,1) 35%, rgb(9, 121, 52) 35%, rgb(0, 255, 55) 100%) ";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "footerColor") {
      green.addEventListener("click", (e) => {
        footer.style.backgroundColor = "rgb(0, 54, 36)";
        e.stopPropagation();
      });
    }
    e.preventDefault();
  });
}

function blueTheme() {
  stateSelect.addEventListener("input", (e) => {
    if (stateSelect.value == "navbarColor") {
      blue.addEventListener("click", (e) => {
        navbar.style.backgroundColor = " rgb(0, 0, 68)";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "bgColor") {
      blue.addEventListener("click", (e) => {
        document.body.style.background = "linear-gradient(125deg, rgba(2,0,36,1) 34.7%, rgba(255,255,255,1) 32%, rgba(2,0,36,1) 35%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%) ";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "footerColor") {
      blue.addEventListener("click", (e) => {
        footer.style.backgroundColor = " rgb(0, 0, 68)";
        e.stopPropagation();
      });
    }
    e.preventDefault();
  });
}

function redTheme() {
  stateSelect.addEventListener("input", (e) => {
    if (stateSelect.value == "navbarColor") {
      red.addEventListener("click", (e) => {
        navbar.style.backgroundColor = "  rgb(39, 0, 0)";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "bgColor") {
      red.addEventListener("click", (e) => {
        document.body.style.background = "linear-gradient(125deg, rgb(36, 0, 0) 34.7%, rgba(255,255,255,1) 32%, rgb(36, 0, 0) 35%, rgb(121, 9, 9) 35%, rgb(255, 0, 0) 100%)";
        e.stopPropagation();
      });
    } else if (stateSelect.value == "footerColor") {
      red.addEventListener("click", (e) => {
        footer.style.backgroundColor = " rgb(39, 0, 0)";
        e.stopPropagation();
      });
    }
            e.preventDefault();
  });
}


greenTheme();
blueTheme();
redTheme();
*/
/*
let clickedChangeColor;
function navbarColorChange() {
  e.value = 1 || 2;
  if (e.value === 1) {
    stateSelect.addEventListener("input", (e) => {
      if (stateSelect.value == "navbarColor") {
        green.addEventListener("click", (e) => {
          navbar.style.backgroundColor = "rgb(0, 54, 36)";
        });
        e.value = 1;
        blue.addEventListener("click", (e) => {
          navbar.style.backgroundColor = "rgb(0, 0, 68)";
        });
        e.value = 1;
        red.addEventListener("click", (e) => {
          navbar.style.backgroundColor = "rgb(39, 0, 0)";
        });
        e.value = 1;
      }
    });
  }
  if (e.value === 2) {
    stateSelect.addEventListener("input", (e) => {
      if (stateSelect.value == "footerColor") {
        green.addEventListener("click", (e) => {
          footer.style.backgroundColor = "rgb(0, 54, 36)";
        });
        e.value = 2;
        blue.addEventListener("click", (e) => {
          footer.style.backgroundColor = "rgb(0, 0, 68)";
        });
        e.value = 2;
        red.addEventListener("click", (e) => {
          footer.style.backgroundColor = "rgb(39, 0, 0)";
        });
        e.value = 2;
      }
    });
  }
}

navbarColorChange();
*/