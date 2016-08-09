
window.onload = function() {
    document.querySelector("#nav-icon1")
      .addEventListener("click", function () {
          var mobileNav = document.getElementById("mobile-nav");
          var bodyPosition = document.getElementById("main-body")
          mobileNav.classList.toggle("nav-mobile-open");
          console.log(bodyPosition);
          bodyPosition.classList.toggle("down-main-body");

      	  this.classList.toggle("open");
        });



};
