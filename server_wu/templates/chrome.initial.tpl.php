    <div id="wrapper">
      <script>
  $(document).ready(function(){
    $('#feedback-trigger').click(function(event){
      event.preventDefualt
    $(this).next('#feedback-content').slideToggle();
    $(this).toggleClass('active');          
    
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
    });
      </script>
      <nav>
        <ul>
        <li id="feedback">
          <a id="feedback-trigger" href="#">
            Send us feedback! <span>▼</span>
          </a>
        <div id="feedback-content">
        <form>
          <fieldset id="inputs">
            <input id="username" type="email" name="Email" placeholder="Your email adress!" required>   
            <textarea id="textarea" type="text" name="Textfield" placeholder="Your feedback here!" required></textarea>
          </fieldset>
          <fieldset id="actions">
            <input type="submit" id="submit" value="Send">
            <label><input type="checkbox" checked="checked"> Send me a reply!</label>
          </fieldset>
        </form>
      </div>                     
      </li>
      </ul>
      </nav>
      
      <div id="header">
        <div id="userinfo"></div>
        <div class="logo">
          <img src="images/logo.jpg" />
        </div>

        <ul class="menu">

        </ul>

        <form method="post" id="loginForm">
          <p>User: </p><input type="text" name="username" id="username" value=""/>
          <p>Pass: </p><input type="password" name="password" id="password" value=""/>
          <input type="submit" id="login" value="Logga in" />
        </form>
      </div>

      <div id="content">
        
      </div>
    </div>

    <div id="empty"></div>

    <div id="footer">
      <p>&copy Duderinos</p>
    </div>