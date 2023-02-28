const sidebar = document.querySelector("aside");
const showSidebarBtn = document.querySelector("#show_sidebar_btn");
const hideSidebarBtn = document.querySelector("#hide_sidebar_btn");

const showSidebar = () => {
  sidebar.style.left = "0";
  showSidebarBtn.style.display = "none";
  hideSidebarBtn.style.display = "inline-block";
};
showSidebarBtn.addEventListener("click", showSidebar);

const hideSidebar = () => {
  sidebar.style.left = "";
  showSidebarBtn.style.display = "inline-block";
  hideSidebarBtn.style.display = "none";
};
hideSidebarBtn.addEventListener("click", hideSidebar);
