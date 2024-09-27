function init(){
      console.log("in init");
      var toggleLink = document.getElementById("toggleMenu");
      toggleLink.addEventListener('click', toggleMenu, false);
      toggleLink.addEventListener('touchend', toggleMenu, false);



    }

    function toggleMenu(e) {
      var navMenu = document.getElementById("mainNav");
      var toggleButton = document.getElementById("toggleMenu");
      e.preventDefault();
      navMenu.classList.toggle("menu-open");
      toggleButton.classList.toggle("is-active");
    }
