function renderPosts() {
  const contentDiv = document.getElementById("content");

  let posts = JSON.parse(localStorage.getItem("posts"));

  if (posts) {
    posts.forEach((post) => {
      const row = document.createElement("div");
      const img = document.createElement("img");
      const link = document.createElement("a");
      const h3 = document.createElement("h3");
      img.setAttribute("src", post.thumb_url);
      h3.innerText = post.title;
      link.setAttribute("href", post.permalink);
      link.appendChild(h3);
      row.append(img, link);
      contentDiv.appendChild(row);
    });
  } else {
    // inga posts
  }
}

function renderProducts() {
  const contentDiv = document.getElementById("content-products");

  let products = JSON.parse(localStorage.getItem("products"));

  if (products) {
    products.forEach((product) => {
      const category_div = document.createElement("div");
      category_div.classList.add("category-div");

      const categories = product.category;
      categories.forEach((category) => {
        let category_link = document.createElement("a");
        let category_h3 = document.createElement("h3");
        category_h3.innerText = category.name + " ";

        category_link.setAttribute(
          "href",
          "http://localhost:8888/ehandel-grupp2/product-category/" +
            category.slug
        );
        category_link.appendChild(category_h3);
        category_div.appendChild(category_link);
      });
      const row = document.createElement("div");

      const img_div = document.createElement("div");
      img_div.classList.add("img-div");
      const title_div = document.createElement("div");
      title_div.classList.add("title-div");
      const price_div = document.createElement("div");
      price_div.classList.add("price-div");

      const img = document.createElement("img");
      const title_link = document.createElement("a");
      const title = document.createElement("h3");
      title.setAttribute("class", "product-title");
      const price = document.createElement("h3");
      img.setAttribute("src", product.thumb_url);
      title.innerText = product.title;
      price.innerText = product.price + " kr";
      title_link.setAttribute("href", product.permalink);

      title_link.appendChild(title);

      img_div.append(img);
      title_div.append(title_link);
      price_div.append(price);

      row.append(img_div, title_div, category_div, price_div);
      contentDiv.appendChild(row);
    });
  } else {
    // inga posts
  }
}

function renderOrders() {
  const contentDiv = document.getElementById("content-orders");

  let orders = JSON.parse(localStorage.getItem("orders"));

  if (orders) {
    orders.forEach((order) => {
      const row = document.createElement("div");

      const orderId_div = document.createElement("div");
      orderId_div.classList.add("orderId-div");
      const status_div = document.createElement("div");
      status_div.classList.add("status-div");
      const totalPrice_div = document.createElement("div");
      totalPrice_div.classList.add("totalPrice-div");
      const date_div = document.createElement("div");
      date_div.classList.add("date-div");

      const orderId = document.createElement("h3");
      const status = document.createElement("button");
      status.setAttribute("class", "order-status");
      const totalPrice = document.createElement("h3");
      const date = document.createElement("h3");

      const datedate = new Date(order.date);
      const options = { day: "numeric", month: "short", year: "numeric" };
      const formattedDate = datedate.toLocaleDateString("en-GB", options);

      orderId.innerText = order.id;
      status.innerText = order.status;
      totalPrice.innerText = order.amount + " kr";
      date.innerText = formattedDate;

      switch (order.status) {
        case "completed":
          status.style.backgroundColor = "green";
          status.style.color = "white";
          break;
        case "cancelled":
          status.style.backgroundColor = "red";
          status.style.color = "white";
          break;
        case "processing":
          status.style.backgroundColor = "yellow";
          break;
        default:
          status.style.backgroundColor = "black";
      }

      orderId_div.appendChild(orderId);
      status_div.append(status);
      totalPrice_div.append(totalPrice);
      date_div.append(date);

      row.append(orderId_div, status_div, totalPrice_div, date_div);
      contentDiv.appendChild(row);
    });
  } else {
    // inga posts
  }
}

function renderMedia() {
  const contentDiv = document.getElementById("content-media");

  let medias = JSON.parse(localStorage.getItem("media"));

  if (medias) {
    medias.forEach((media) => {
      const img_link = document.createElement("a");
      img_link.setAttribute("href", media.full_url);

      const img = document.createElement("img");
      img.setAttribute("src", media.thumb_url);

      img_link.appendChild(img);
      contentDiv.appendChild(img_link);
    });
  } else {
    // inga posts
  }
}
