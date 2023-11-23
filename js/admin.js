function viewFullScreen(button) {
  // Find the parent flex element
  var flexParent = button.closest(".flex");

  // Check if the flex parent is found
  if (flexParent) {
    // Apply styling to the flex parent
    flexParent.classList.add("view-full-screen"); // Change this line to apply your desired styling
  }
}

function minimiseScreen(button) {
  // Find the parent flex element
  var flexParent = button.closest(".flex");

  // Check if the flex parent is found
  if (flexParent) {
    // Apply styling to the flex parent
    flexParent.classList.remove("view-full-screen"); // Change this line to apply your desired styling
  }
}

function showElement(elementClass) {
  const jobAdminPage = document.querySelector(".admin-jobs");
  const AdminDashhboard = document.querySelector(".admin-body");
  const AdminUsers = document.querySelector(".admin-users");
  const createAdmin = document.querySelector(".create-admin-container");

  jobAdminPage.classList.add("display-none");
  AdminDashhboard.classList.add("display-none");
  AdminUsers.classList.add("display-none");
  createAdmin.classList.add("display-none");

  document.querySelector(elementClass).classList.remove("display-none");
}

// VIEW JOBS IN ADMIN PAGE
function showJobs() {
  showElement(".admin-jobs");
}

// VIEW ADMIN DASHBOARD
function showDashboard() {
  showElement(".admin-body");
}

// VIEW USERS
function showUsers() {
  showElement(".admin-users");
}

// CREATE ADMIN
function createAdmin() {
  showElement(".create-admin-container");
}



// function toggleModal(jobId) {
//   const modal = document.getElementById("modal-" + jobId);
//   if (modal) {
//     modal.style.display === "flex"
//       ? (modal.style.display = "none")
//       : (modal.style.display = "flex");
//   }
// }

// function closeModal(userId) {
//   const modal = document.getElementById("modal-" + userId);
//   if (modal) {
//     modal.style.display = "none";
//   }
// }


const modalReq = document.querySelectorAll(".modal-req");

function showModal(imageSrc) {
  var modalImg = document.getElementById("modalImage");

  modalImg.src = imageSrc;
  modalReq.forEach(element => {
     element.style.display = "flex";
  });
 
}

function showModalUserReq(imageSrc) {
  var modalImg = document.getElementById("modalImage");

  modalImg.src = imageSrc;
  modalReq.forEach((element) => {
    element.style.display = "flex";
  });
}






function closeContainer() {
    modalReq.forEach((element) => {
      element.style.display = "none";
    });
}



function openCloseModal(jobId) {
  const modal = document.getElementById("modal-" + jobId);
  if (modal) {
    modal.style.display = "flex";
  }
}

function closeModal(jobId) {
  const modal = document.getElementById("modal-" + jobId);
  if (modal) {
    modal.style.display = "none";
  }
}




function openCloseModalTwo(jobId) {
  const modalTwo = document.getElementById("modaltwo-" + jobId);
  if (modalTwo) {
    modalTwo.style.display = "flex";
  }
}

function closeModalTwo(jobId) {
  const modalTwo = document.getElementById("modaltwo-" + jobId);
  if (modalTwo) {
    modalTwo.style.display = "none";
  }
}


function openCloseModalThree(refferid) {
  
  const modalThree = document.getElementById("modalthree-" + refferid);
  if (modalThree) {
    modalThree.style.display = "flex";
  }
}

function closeModalThree(refferid) {
  const modalThree = document.getElementById("modalthree-" + refferid);
  if (modalThree) {
    modalThree.style.display = "none";
  }
}