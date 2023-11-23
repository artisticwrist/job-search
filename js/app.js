

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
  const body = document.querySelector('body');
  const nav = document.querySelector('nav');
  const navList = document.querySelectorAll(".nav-list");
  const hamBurger = document.querySelector(".ham-burger")


  body.style.height = "100vh";
  body.style.overflowY = "hidden";
  nav.style.height = '100vh';
  nav.style.display = "block";
  hamBurger.classList.add('display-none');


navList.forEach(list => {
  list.style.display = "flex";
  list.style.flexWrap = "wrap";
  
  });

}

  function showAdminNav() {
    const adminNav = document.querySelector(".admin-nav-mobile");
    
    adminNav.style.display = "block";
    adminNav.style.width = "max-content";
    adminNav.style.height = "100vh";
    adminNav.style.position = "absolute";
  }


function showAllUsersAdmin() {
  console.log('hello world');
  const adminNav = document.querySelector(".admin-nav-mobile");
  const containerAllUsers = document.getElementById("all-users-admin");
  const containerAllRequest = document.getElementById("all-request-admin");
  const containerAllFeedback = document.getElementById("all-feedback-admin");

  adminNav.style.display = "none";
  containerAllUsers.classList.remove("display-none");
  containerAllRequest.classList.add("display-none");
  containerAllFeedback.classList.add("display-none");
  }


  function showAllRequestAdmin() {
    const adminNav = document.querySelector(".admin-nav-mobile");
    const containerAllUsers = document.getElementById("all-users-admin");
    const containerAllRequest = document.getElementById("all-request-admin");
    const containerAllFeedback = document.getElementById("all-feedback-admin");

    adminNav.style.display = "none";
    containerAllUsers.classList.add("display-none");
    containerAllRequest.classList.remove("display-none");
    containerAllFeedback.classList.add("display-none");
  }

    function showAllFeedbackAdmin() {
      const adminNav = document.querySelector(".admin-nav-mobile");
      const containerAllUsers = document.getElementById("all-users-admin");
      const containerAllRequest = document.getElementById("all-request-admin");
      const containerAllFeedback = document.getElementById("all-feedback-admin");

      adminNav.style.display = "none";
      containerAllUsers.classList.add("display-none");
      containerAllRequest.classList.add("display-none");
      containerAllFeedback.classList.remove('display-none');
    }


    function closeAdminNav() {
      const adminNav = document.querySelector(".admin-nav-mobile");
      adminNav.style.display = "none";
    }



function stepOne() {
  const createJobForm = document.getElementById("create-job-form-fill");
  const reviewJobForm = document.getElementById("reveiw-job-form");


  createJobForm.classList.remove('display-none')

  reviewJobForm.classList.add("display-none")

}

function stepTwo() {
  const createJobForm = document.getElementById("create-job-form-fill");
  const reviewJobForm = document.getElementById("review-job-form");

  createJobForm.classList.add("display-none");

  reviewJobForm.classList.remove("display-none");
}

function closeProfileHead() {
  const profileHead = document.querySelector(".welcome-user");


  profileHead.classList.add("display-none");
}

const navUser = document.querySelector(".side-user-nav");

function showNavUser() {
  navUser.classList.remove('display-none');
  navUser.style.display = 'flex';
}

function closeNavUser() {
  navUser.classList.add("display-none");
}