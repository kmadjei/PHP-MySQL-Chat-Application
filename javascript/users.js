const searchBar =  document.querySelector(".search input"),
searchBtn = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}