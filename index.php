<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="navigation">
        <nav id="topmenu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Tutorials</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Newsletter</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <div id="header">
            <section>
                <article>
                  <header>
                    <h1>Just another day</h1>
                    <p>Written by Christina on <time datetime="01-11">11th January</time> </p>
                  </header>
                  <p>This is my second blog entry, and I just wanted to check in on you</p>
                </article>
                <article>
                    <header >
                    <h1>My First Blog Entry</h1>
                    <p>Written by Christina on <time datetime="01-10">10th January</time></p>
                  </header>
                  <p>I'm so happy to write my first blog entry - yay!</p>
                </article>
              </section>
    </div>
             <footer id="footer">&copy;Copyright 2009 Your name</footer>
    </div class="audio">
       <h1>Audio section</h1>
       <p>Xuan da ve ...</p>
       <audio controls autoplay>
        <source src="Xuan-Da-Ve-Minh-Hang.mp3" type="audio/mpeg">
      </audio>
      <h1>Video section</h1>
      <p>Xuan da ve ...</p>
      <video controls="controls">
        <source src="Trần Đức Bo Nhưng Đó Là Auto Tune.mp4" type="video/mp4">
        Your browser does not support the HTML5 video.
      </video>
    </div>
    <div class="table">
        <table border="1">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Savings</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
        </table>
    <form action="action_page.php">
        <fieldset>
        <legend>Details</legend>
        User name:<br>
        <input type="text" name="firstname"><br>
        Password:<br>
        <input type="text" name="lastname"><br>
        <input type="Submit" value="Login">
        </fieldset>
        </form>
        <fieldset>
        <legend>Select and radio</legend>
        <label>Where do you live</label>
        <p>
            <select name="Choose a Country">
        <option value="0">Choose a Country</option>
        <option>Ha Noi</option>
        <option>Da Nang</option>
        <option>HCM</option>
    </select>
         <form>
            <input id="Hn" type="radio" name="from" value="Ha Noi">
            <label for="Hn">HaNoi</label><br>
            <input type="radio" id="hcm" name="from" value="HCM">
            <label for="hcm">HCM</label><br>
            <input id="Dn" type="radio" name="from" value="Da Nang">
            <label for="Dn">DaNang</label><br>
         </form>
        </p>
        </fieldset>
        <fieldset>
            <legend>Check box</legend>
            <label>Where do you want to visit</label>
            <br>
            <form>
                <input type="checkbox" value="Ha Noi" check> Ha Noi<br>
                <input type="checkbox" value="HCM"> HCM<br>
                <input type="checkbox" value="Da Nang" > Da Nang<br>
            </form>
            </fieldset>
        </form>
</body>
</html>
