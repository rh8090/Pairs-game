<!DOCTYPE html>
<html>
  <head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <meta charset="UTF-8" />
  </head>

  <body>
    <h2>Select an avatar below </h2>
    <div class="avatarselection">
      <label>
        <input type="radio" name="test" value="smile.png"/>
        <img
          src="smile.png"
          value="smile.png"
          alt="Smile Avatar"
          class="Smile"
          width="50"
          height="50" /></label
      ><br />
      <label>
        <input type="radio" name="test" value="smileupsidedown.png"/>
        <img
          src="smileupsidedown.png"
          alt="Upside down smile Avatar"
          class="Upside down smile"
          width="50"
          height="50" /></label
      ><br />
      <label
        ><input type="radio" name="test" value="angel.png"/>
        <img
          src="angel.png"
          alt="Angel Avatar"
          class="Angel"
          width="50"
          height="50" /></label
      ><br />
      <label
        ><input type="radio" name="test" value="laughing.png"/>
        <img
          src="laughing.png"
          alt="Laughing Avatar"
          class="Laughing"
          width="50"
          height="50" /></label
      ><br /><br />

      <button class="setAvatar">Save Avatar</button>
      <div class="showavatar"></div>
    </div>
    

    <script>
    $(document).ready(function () {
        $(".setAvatar").click(function () {
          var selectedavatarImg = $("input[type='radio']:checked").val();
          $(".showavatar").html(
            "<img src='" + selectedavatarImg + "' width= '100' height='100'/>"
          );
        });
      });
    	/*
        $(".setAvatar").on("click",displayAvatar);

        var selectedavatarImg = $("input[type='radio']:checked").val(); 
        
        function displayAvatar(){
          $(".showavatar").html("<img src='" + selectedavatarImg + "/>");
        }
        */
       
    </script>
  </body>
</html>
