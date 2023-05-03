function renderPosts() {
  const contentDiv = document.getElementById("content");
  const row = document.createElement("div");

  let posts = JSON.parse(localStorage.getItem("posts"));

  if (posts) {
    posts.forEach((post) => {
      const img = document.createElement("img");
      const h3 = document.createElement("h3");
      img.setAttribute("src", post.thumb_url);
      h3.innerText = post.title;
      row.append(img, h3);
    });
  } else {
    // inga posts
  }

  contentDiv.appendChild(row);
}
