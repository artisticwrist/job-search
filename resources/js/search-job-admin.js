// SEARCH INPUT

function searchJob() {
  let searchInput = document.querySelector(".search-job").value.toUpperCase();
  let allProduct = document.querySelector(".all-jobs");
  let productGame = document.querySelectorAll(".all-jobs .box");
  let pname = allProduct.getElementsByTagName("h3");

  // SEARCH
  for (var i = 0; i < pname.length; i++) {
    let match = productGame[i].getElementsByTagName("h3")[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML;

      if (textValue.toUpperCase().indexOf(searchInput) > -1) {
        productGame[i].style.display = "";
      } else {
        productGame[i].style.display = "none";
      }
    }
  }
}
