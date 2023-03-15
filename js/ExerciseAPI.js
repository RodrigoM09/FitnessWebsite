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
    $(".bodyPart").append(`<option value="${bodyPart}">${bodyPart}</option>`);
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
        $("#results").append(
          `<li value="${exercise}">${exercise.bodyPart} <img src="${exercise.gifUrl}"></imgEXTERNAL_FRAGMENT></li>`
        );
      });
    });
  });
});
