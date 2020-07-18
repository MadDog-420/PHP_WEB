    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; <?php echo say_year(); ?> Copyright. All rights reserved.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="./index.php">Inicio</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

      <!-- Essential JavaScript Libraries
    ==============================================-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript">

      $("#fileInput").change(function () {
        filePreview(this);
      });

      function filePreview(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.readAsDataURL(input.files[0]);
          reader.onload = function (e) {
            $('#upload + img').remove();
            $('#upload').after('<img src="'+e.target.result+'" class="photo"/>');
          }
        }
      }

    </script>
    
  </body>
</html>