

const showNavOption = () => {
    const itemElem = document.getElementById("hover-option-one");

    itemElem.classList.remove('display-none');

}

const showNavSecondOption = () => {
  const itemElem = document.getElementById("hover-option-two");

  itemElem.classList.remove("display-none");
};

const showNavThirdOption = () => {
  const itemElem = document.getElementById("hover-option-three");

  itemElem.classList.remove("display-none");
};


const showNavFourthOption = () => {
  const itemElem = document.getElementById("hover-option-four");

  itemElem.classList.remove("display-none");
};

const showNavOptionUser = () => {
  const itemElem = document.getElementById("hover-option-user");

  itemElem.classList.remove("display-none");
};

const hideNavOption = () => {
       const itemElem = document.getElementById("hover-option-one");

       itemElem.classList.add("display-none"); 
}

const hideNavSecondOption = () => {
  const itemElem = document.getElementById("hover-option-two");

  itemElem.classList.add("display-none");
};

const hideNavThirdOption = () => {
  const itemElem = document.getElementById("hover-option-three");

  itemElem.classList.add("display-none");
};

const hideNavFourthOption = () => {
  const itemElem = document.getElementById("hover-option-four");

  itemElem.classList.add("display-none");
};

const hideNavOptionUser = () => {
  const itemElem = document.getElementById("hover-option-user");

  itemElem.classList.add("display-none");
};



function showBurgerNav() {
  const nav = document.querySelector('nav');
  const navList = document.querySelectorAll(".nav-list");
  const hamBurger = document.querySelector(".ham-burger")

  nav.style.height = '100vh';
  nav.style.display = "block";
  hamBurger.classList.add('display-none');

navList.forEach(list => {
    list.style.display = "block"
  });


}