// SEARCH INPUT

function searchs() {
  let searchInput = document.querySelector(".search-input").value.toUpperCase();
  let allProduct = document.querySelector(".all-product");
  let head = document.querySelectorAll(".available");
  let productGame = document.querySelectorAll(".all-product .job-box");
  let pname = allProduct.getElementsByTagName("h5");

  // SEARCH
  
  for (var i = 0; i < pname.length; i++) {
    let match = productGame[i].getElementsByTagName("h5")[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML;

      if (textValue.toUpperCase().indexOf(searchInput) > -1) {
        productGame[i].style.display = "";
      } else {
        productGame[i].style.display = "none";
      }
    }
  }

  // CHECKS IF INPUT BOX IS EMPTY
  if (!searchInput == "" || !searchInput == null) {
    head.forEach(element => {
      element.classList.add("display-none"); 
    });

  } else {
    head.forEach((element) => {
      element.classList.remove("display-none");
    });
  }
}
