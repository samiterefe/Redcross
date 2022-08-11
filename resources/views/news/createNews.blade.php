<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ERC | Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="/backend/css/new-news.css" />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <a class="navbrand" href="{{ url('/dashboard') }}">
        <img src="/backend/assets/redcross.png" alt="logo" />
      </a>
      <ul class="nav">
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li><a href="#">Admin</a></li>
        <li><a class="logout" href="{{ url('/logout') }}">Logout</a></li>
      </ul>
      <div class="menu">
        <div class="menu">
          <img src="/backend/assets/menu.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="form-container">
      <div class="form">
        <a class="back" href="{{ url('/dashboard') }}"><i class="fas fa-arrow-left"></i> Go back</a>
        <h1>Create news</h2>
        <form action = "{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" > 

          @csrf

          <div class="form-group">
            <label for="post_title">Title</label>
            <input type="text" id="title" name= 'post_title' placeholder="News title" />
          </div>
          <div class="form-group">
            <label for="post_image">Image</label>
            <input type="file" id="post_image" name="post_image" placeholder="News title" />
          </div>
          <div class="form-group">
            <label for="description" name='post_body' >Description</label>
            <textarea
              name='post_body'
              id="description"
              cols="30"
              rows="3"
              placeholder="Description"
            ></textarea>
          </div>
          <button type="submit">Publish news</button>
        </form>
      </div>
    </div>
    <script>
      const menuBtn = document.querySelector(".menu");
      const menu = document.querySelector("ul.nav");

      menuBtn.addEventListener("click", () => {
        menu.classList.toggle("active");
      });
    </script>
  </body>
</html>
