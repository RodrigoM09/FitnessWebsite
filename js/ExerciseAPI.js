const searchBar = document.getElementById("search_bar_container");

// const settings = {
//   async: true,
//   crossDomain: true,
//   url: "https://exercisedb.p.rapidapi.com/exercises/bodyPartList",
//   method: "GET",
//   headers: {
//     "X-RapidAPI-Key": "05acdce9e8msh9d6aa2beaf0652fp19ed74jsnee71378443e2",
//     "X-RapidAPI-Host": "exercisedb.p.rapidapi.com",
//   },
// };

// $.ajax(settings).done(function (response) {
//   console.log(response);
//   response.forEach(function (bodyPart) {
//     $("#bodyPart").append(`<option value="${bodyPart}">${bodyPart}</option>`);
//   });

searchBar.addEventListener("submit", function (e) {
  //make api call with dropdown value
  e.preventDefault();
  searchBarVal = document.querySelector("#searchBar").value;
  const newSettings = {
    async: true,
    crossDomain: true,
    url: `https://exercisedb.p.rapidapi.com/exercises/bodyPart/${searchBarVal}`,
    method: "GET",
    headers: {
      "X-RapidAPI-Key": "05acdce9e8msh9d6aa2beaf0652fp19ed74jsnee71378443e2",
      "X-RapidAPI-Host": "exercisedb.p.rapidapi.com",
    },
  };

  $.ajax(newSettings).done(function (response) {
    console.log(response);
    response.forEach(function (exercise) {
      $("#post_container").append(`
        <article class="post">
            <div class="post_thumbnail">
              <img class="exerciseGif" src="${exercise.gifUrl}" alt=""></imgEXTERNAL_FRAGMENT>
            </div>
                <div class="post_info">
                  <a href="" class="category_button bodyPart" value="${exercise}">${exercise.bodyPart}</a>
                  <h3 class="post_title">
                  <a href="post.html">${exercise.name}</a>
                  </h3>
                  <p class="post_body">
                    ${exercise.equipment}
                  </p>
                  <div class="post_author">
                    <div class="post_author_avatar">
                    <img src="/images/avatar3.png" alt="">
                  </div>
                  <div class="post_author_info">
                    <h5>By: Jane Doe</h5>
                    <small>February 26, 2023 - 5:15</small>
                  </div>
                </div>
              </div>
          </article>
                `);
    });
  });
});
const numberPerPage = 6;
var pageNumber = 1;
var numberOfPages = 30;

const prev = document.querySelector(".previous");
prev.addEventListener("click", (e) => {
  e.preventDefault();
  if (pageNumber > 1) {
    pageNumber--;
    fetchPosts(pageNumber);
  }
});

const next = document.querySelector(".next");
next.addEventListener("click", (e) => {
    e.preventDefault();
    if (pageNumber < numberOfPages) {
        pageNumber++;
        fetchPosts(pageNumber);
    }
});