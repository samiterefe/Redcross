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
    <link rel="stylesheet" href="./backend/css/dashboard.css" />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <a class="navbrand" href="index.html">
        <img src="./assets/redcross.png" alt="logo" />
      </a>
      <ul class="nav">
        <li><a href="{{ url('/newspost') }}">News</a></li>
        <li><a href="dashboard.html">User</a></li>
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li><a href="#">Admin</a></li>
        <li><a class="logout" href="{{ url('/logout') }}">Logout</a></li>
      </ul>
      <div class="menu">
        <img src="./assets/menu.svg" alt="" />
      </div>
    </div>

    <!-- Dashboard -->
    <div class="dashboard">
      <div class="container">
        <div class="overview">
          <div class="card visitor">
            <div class="icon">
              <i class="far fa-eye"></i>
            </div>
            <div class="detail">
              <h2>5K+</h2>
              <p>Visotors</p>
            </div>
          </div>
          <div class="card users">
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="detail">
              <h2>55K+</h2>
              <p>All users</p>
            </div>
          </div>
          <div class="card new_user">
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <div class="detail">
              <h2>200+</h2>
              <p>New users</p>
            </div>
          </div>
          <div class="card news">
            <div class="icon">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="detail">
              <h2>10K+</h2>
              <p>All posts</p>
            </div>
          </div>
          <div class="card events">
            <div class="icon">
              <i class="far fa-calendar"></i>
            </div>
            <div class="detail">
              <h2>50</h2>
              <p>All events</p>
            </div>
          </div>
        </div>
        <div class="actions">
          <a href="{{ url('/posts/create') }}" class="new_news"
            ><i class="fas fa-plus"></i> Post news</a
          >
          <a href="new-user.html" class="new_user"
            ><i class="fas fa-plus"></i> Create user</a
          >
          <a href="#" class="new_event"
            ><i class="fas fa-plus"></i> Create event</a
          >
        </div>
        <div class="recent_news">
          <h1>Recent news</h1>
          <div class="table">
            <table class="table-auto">
              <tr class="t_head">
                <th>Id</th>
                <th>Post title</th>
                <th>Description</th>
                <th>Post Image</th>
                <th>Createdr</th>
                <th>Action</th>
              </tr>
             
              @foreach ($posts as $post )


              <tr>
                  <th scope="row" >{{$post->id}}</th>
                  <td>{{$post->post_title}}</td>
                  <td width="10%">{{ Str::substr($post->post_body, 0, 20)."..." }}</td>
                  <td> <img src="{{  asset($post->post_image) }}" style="width: 70px !important; heigth: 70px;  object-fit: cover" alt=""> </td>
                  <td>
                  @if ($post->created_at == NULL)
                   <span class = "text-danger">No date set</span>
                  @else
                   {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                  @endif
                 </td>
                 <td>
                     <a href="{{ url('/post/edit/'.$post->id) }}" class="btn btn-info">Edit</a>
                     <a href="{{ url('/post/delete/'.$post->id) }}" onclick="return confirm('Are you sure') " class="btn btn-danger">Delete</a>
                 </td>

              </tr>

          @endforeach


            </table>
          </div>
        </div>
        <div class="recent_users">
          <h1>Recently created users</h1>
          <div class="table">
            <table>
              <tr class="t_head">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Date</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Abisiniya Terefe</td>
                <td>abisiniya@gmail.com</td>
                <td>Admin</td>
                <td>15/04/2021</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Samuel Bonsa</td>
                <td>samsung@gmail.com</td>
                <td>Admin</td>
                <td>15/04/2021</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Abdi Urgesa</td>
                <td>adbi@gmail.com</td>
                <td>Suks</td>
                <td>15/04/2021</td>
              </tr>
            </table>
          </div>
        </div>
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

