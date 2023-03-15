// $(document).ready(function () {
//     $('.hex-wrap').hover(function() {
//         let $this = $(this);
//         let $content = $this.data('content')
//         $this.append($('.hex-wrap[data-content="$content"]').html($this.data('title')));
//     });
// });

const settings = {
  async: true,
  crossDomain: true,
  url: "https://exercisedb.p.rapidapi.com/exercises/bodyPartList",
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "05acdce9e8msh9d6aa2beaf0652fp19ed74jsnee71378443e2",
    "X-RapidAPI-Host": "exercisedb.p.rapidapi.com",
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
  response.forEach(function (bodyPart) {
    $("#bodyPart").append(`<option value="${bodyPart}">${bodyPart}</option>`);
  });

  $("#bodyPart").change(function () {
    //make api call with dropdown value
    const newSettings = {
      async: true,
      crossDomain: true,
      url: `https://exercisedb.p.rapidapi.com/exercises/bodyPart/${$(
        this
      ).val()}`,
      method: "GET",
      headers: {
        "X-RapidAPI-Key": "05acdce9e8msh9d6aa2beaf0652fp19ed74jsnee71378443e2",
        "X-RapidAPI-Host": "exercisedb.p.rapidapi.com",
      },
    };
    $.ajax(newSettings).done(function (response) {
      console.log(response);
      response.forEach(function (exercise) {
        $("#posts_container").append(`
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
});
