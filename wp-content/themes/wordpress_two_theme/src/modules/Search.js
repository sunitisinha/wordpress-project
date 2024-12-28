// function handleClick() {
//   alert("Button Clicked");
// }

// const button = document.getElementById("js-search-trigger");
// if (button) {
//   button.addEventListener("click", handleClick); // Pass the function reference, not a string
// }

// export default handleClick;
class Search {
  constructor() {
    alert("Hello this is search class");
  }
}
export default Search;
//     this.openButton = document.getElementById("js-search-trigger");
//     this.closeButton = $(".search-overlay__close");
//     this.searchOverlay = document.getElementById("search-overlay");
//     this.events();
//     this.isOverlayOpen = false;
//     console.log(this.openButton, this.closeButton, this.searchOverlay);
//   }

//   //2.Events
//   events() {
//     this.openButton.on("click", this.openOverlay.bind(this));
//     this.closeButton.on("click", this.closeOverlay.bind(this));
//   }

//   //3.methods(function,action)

//   openOverlay() {
//     this.searchOverlay.addClass("search-overlay--active");
//     $("body").addClass("body-no-scroll");
//     $(document).on("keydown", this.keyPressDispatcher.bind(this));
//     this.isOverlayOpen = true;
//   }

//   closeOverlay() {
//     this.searchOverlay.removeClass("search-overlay--active");
//     $("body").removeClass("body-no-scroll");
//     this.isOverlayOpen = false;
//   }

//   keyPressDispatcher(e) {
//     console.log(e.keyCode);
//     if (e.keyCode == 83 && !this.isOverlayOpen) {
//       this.openOverlay();
//     }

//     if (e.keyCode == 27 && this.isOverlayOpen) {
//       this.closeOverlay();
//     }
//   }
// }
// export default Search;
