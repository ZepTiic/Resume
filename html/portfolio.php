<!DOCTYPE html>
<html lang="en">
<head>
  <script src=""></script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
          crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/portfolio.css">
  <title>Portfolio Website</title>
</head>

<header class="navbar color">
  <h1 class="navbar_title color">ET</h1>
  <nav class="navbar_links color navbar">
    <a href="../index.php">About</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="projects.php">Projects</a>
  </nav>
</header>
<body>
  <div class="portfolio_content">
    <div class="portfolio_menu">
      <div class="portfolio_title" id="Education">Education</div>
      <div class="portfolio_title" id="Experiance">Experiance</div>
      <div class="portfolio_title" id="Skills">Skills</div>
      <div class="portfolio_title" id="Refrences">Refrences</div>
    </div>

    <section class="edu_content">
      <!-- <h2>Education</h2> -->
          <p id="edu_cont">
              Graduated from kearns high school with a 3.8 GPA. Went to Salt lake community 
              college for 2 semester and passed classes.  Now i am currently taking a 
              course for web development.
          </p>
    </section>

    <section class="exp_content">
        <!-- <h2>Experiance</h2> -->
          <p id="exp_cont">
            I have been working at this company called Fastenal fot the last three years 
            woring in 2 different departments, I started out as a picker which i worked 
            as during my time going to high school since it was a more flexible option. 
            During my third year 
            I decided to apply for thier exportation position and got it, now i am 
            in charge of all the product that has to go to canada thorugh my branch.
          </p>
    </section>

    <section class="ski_content">
        <!-- <h2>Skils</h2> -->
            <p>
              <ul>
                <li>Fast Learner</li>
                <li>Hard Worker</li>
              </ul>
            </p>
    </section>
    <section id="table">
      <table class="table table-dark table-borderless">
        <thead>
          <tr>
            <th>#</th>
            <th>First</th>
            <th>Last</th>
            <th>Relation</th>
          </tr>
        </thead>
        <tbody id="tbRefrences">
          
        </tbody>
    </table>
    </section>
</div>
</body>

<footer>
</footer>
<script src="/JS/Portfolio.js"></script>
</html>