<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/About.css" />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <title>Portfolio Website</title>
  </head>

  <header class="navbar color">
    <h1 class="navbar_title color">ET</h1>
    <nav class="navbar_links color navbar">
      <a href="index.php">About</a>
      <a href="html/portfolio.php">Portfolio</a>
      <a href="html/projects.php">Projects</a>
    </nav>
  </header>

  <?php 
    $var = "Whats Up Bruv";
      echo $var;

      echo "<br>";

    $value = 2;  
    $value2 = 5;
      echo $value + $value2;

    // $name = array("jim", "jay", "Jane", "jimmy");
    //   echo '<ul>';

    // foreach($name as $name) {
    //   echo <li> 
    // }

    // for ($l = 1; $1 < 5; $1++);
    //   echo "jim";
  ?>

  <body>
    <section class="about">
      <h1 class="about_title" id="title_name">Eric Tello</h1>
    </section>
    <section class="about_content">
      <h2 class="about_header1">Hello World</h2>
      <p class="about_p1">
        My Name is Eric Tello, This is my portfolio website, thank you for
        looking at it.
      </p>
    </section>
  </body>





  <footer>
    <section class="form_contact">
      <h1 class="form_header">Contact Me</h1>
      <form action="" method="get" class="form">
        <label for="Name">Name:</label>
        <input
          type="text"
          name="Name"
          id="name_form"
          placeholder="Name"
          required
        />
        <br />
        <label for="Email">Email:</label>
        <input
          type="email"
          name="email"
          id="email_form"
          placeholder="Email"
          required
        />
        <br />
        <label for="commentsection">Questions?</label> <br />
        <textarea name="comment" id="" cols="30" rows="10"></textarea> <br />
        <button>Submit</button>
      </form>
    </section>
  </footer>
  <script src="/JS/about.js"></script>
</html>

<!--Regex - robust version of verification / identifying a patern. example, email - put in scripts-->
