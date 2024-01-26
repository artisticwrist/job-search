

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

  const reviewJobForm = document.getElementById("review-job-form");

function stepOne() {
  const createJobForm = document.getElementById("create-job-form-fill");


  createJobForm.classList.remove('display-none')

  reviewJobForm.classList.add("display-none")

}

function stepTwo() {
  const createJobForm = document.getElementById("create-job-form-fill");


  const inputTitle = document.querySelector(".input-title").value;
  const inputCompany = document.querySelector(".input-company").value;
  const inputJobType = document.querySelector(".input-job-type").value;
  const inputCategoory = document.querySelector(".input-category").value;
  const inputLocation = document.querySelector(".input-location").value;
  const inputSpecification = document.querySelector(".input-specification").value;
  const inputSalary = document.querySelector(".input-salary").value;
  const inputRequirements = document.querySelector(".input-requirements").value;
  const inputResponsibility = document.querySelector(".input-responsibility").value;
  const inputExpLevel = document.querySelector(".input-exp-level").value;
  const inputQualification = document.querySelector(".input-qualification").value;
  const inputYearsExp = document.querySelector(".input-years-exp").value;
  const inputSummary = document.querySelector(".input-summary").value;
  const inputApply = document.querySelector(".input-apply").value;


  const showTitle = document.getElementById("job-name");//
  const showCompany = document.getElementById("company-name");//
  const showJobType = document.getElementById("job-type");//
  const showCategory = document.getElementById("category");//
  const showSalary = document.getElementById("salary");//
  const showLocation = document.getElementById("location");//
  const showSummary = document.getElementById("summary");//
  const showApply = document.getElementById("apply");//
  const showRes = document.getElementById("responsibility");//
  const showExpLevel = document.getElementById("exp-level");
  const showYearsExp = document.getElementById("years-exp");
  const showQual = document.getElementById("qualification");
  const showSpecification = document.getElementById("specification");
  const showReq = document.getElementById("requirement");//


  showTitle.innerText = inputTitle;
  showCompany.innerText = inputCompany;
  showJobType.innerText = inputJobType;
  showSalary.innerText = inputSalary;
  showLocation.innerText = inputLocation;
  showSummary.innerText = inputSummary;
  showApply.innerText = inputApply;
  showRes.innerText = inputResponsibility;
  showExpLevel.innerText = inputExpLevel;
  showYearsExp.innerText = inputYearsExp;
  showQual.innerText = inputQualification;
  showSpecification.innerText = inputSpecification;
  showReq.innerText = inputRequirements;
  showCategory.innerText = inputCategoory;


  


  const btnNext = document.querySelector(".btn-next");
  const btnSubmit = document.querySelector(".btn-submit");


  createJobForm.classList.add("display-none");

  btnNext.classList.add("display-none");

  btnSubmit.classList.remove("display-none");

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

//copy referral code

    function copyReferralCode() {
        // Select the input field
        var inputField = document.querySelector('input[name="referral_code"]');
        
        // Check if the input field exists
        if (inputField) {
            // Select the text in the input field
            inputField.select();
            
            // Execute the copy command
            document.execCommand('copy');
            
            // Deselect the input field
            window.getSelection().removeAllRanges();

            // Optionally, provide feedback to the user (you can use a tooltip, alert, or any other method)
            alert('Referral code copied!');
        }
    }

