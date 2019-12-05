<head>
  <?php include('include/_imports.php'); ?>
  <?php
    /** Creates a link which toggles a query param */
    function toggleQuery($key) {
      $url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
      $q = strpos($url, '?');
      // no question mark
      if ($q === false) {
        $url = "$url?$key=1";
        // key appears
      } else if (strpos($url, "$key=", $q) !== false) {
        if (strpos($url, '&', $q) !== false) {
          $url = preg_replace("/(\?|&)$key=.*?(&|$)/i", '$1', $url, 1);
        } else {
          $url = preg_replace("/\?$key=.*?$/i", '', $url, 1);
        }
      } else {
        $url = "$url&$key=1";
      }
      return $url;
    }

    /** Returns true if a query parameter is set */
    function set($name) {
      return isset($_GET[$name]);
    }

    /** Returns the current drink color */
    function color() {
      //rgb
      $colors = [0, 0, 0];
      $count = 0;
      if (set('apple')) {
        $count++;
        $colors[1] += 200;
      }
      if (set('carrot')) {
        $count++;
        $colors[0] += 255;
        $colors[1] += 128;
      }
      if (set('lemon')) {
        $count++;
        $colors[0] += 240;
        $colors[1] += 200;
      }
      if (set('pepper')) {
        $count++;
        $colors[1] += 200;
        $colors[2] += 200;
      }
      if ($count === 0) {
        return "rgb(255,255,255)";
      }
      $colors[0] /= $count;
      $colors[1] /= $count;
      $colors[2] /= $count;
      return "rgb($colors[0],$colors[1],$colors[2])";
    }
  ?>
  <script>
    function getSize(index) {
      switch(Number(index)) {
        case 1: return 2;
        case 2: return 4;
        case 3: return 8;
        case 4: return 16;
        case 5: return 32;
        case 6: return 48;
      }
      return 0;
    }

    function updateSlider() {
      var slider = document.getElementById("sizeSlider");
      var text = document.getElementById("sizeText");
      var cup = document.getElementById("cup");

      text.innerHTML = getSize(slider.value) + ' oz';
    }
  </script>
</head>
<html>
	<body>
    <div class="content">
      <div style="height:150px;">
      </div>
      <?php include('include/_top_menu.php'); ?>
      <div class="row">
        <div class="col-3">
          <input type="range" min="1" max="6" value="3" class="slider" id="sizeSlider" orient="vertical" oninput="updateSlider()">
          <p id="sizeText">8 oz</p>
        </div>
        <div class="col-6">
          <div class="cup" id="cup" style="background:<?=color()?>">
          </div>
        </div>
        <div class="col-3 button-sidebar">
          <a class="btn btn-outline-<?=set('apple')?'secondary':'success'?>" href="<?= toggleQuery('apple') ?>">
            <i class="fas fa-apple-alt <?=set('apple')?'fa-crossout':''?>"></i>
            <br/>
            Apple
          </a>
          <a class="btn btn-outline-<?=set('carrot')?'secondary':'danger'?>" href="<?= toggleQuery('carrot') ?>">
            <i class="fas fa-carrot <?=set('carrot')?'fa-crossout':''?>"></i>
            <br/>
            Carrot
          </a>
          <a class="btn btn-outline-<?=set('lemon')?'secondary':'warning'?>" href="<?= toggleQuery('lemon') ?>">
            <i class="fas fa-lemon <?=set('lemon')?'fa-crossout':''?>"></i>
            <br/>
            Lemon
          </a>
          <a class="btn btn-outline-<?=set('pepper')?'secondary':'info'?>" href="<?= toggleQuery('pepper') ?>">
            <i class="fas fa-pepper-hot <?=set('pepper')?'fa-crossout':''?>"></i>
            <br/>
            Pepper
          </a>
        </div>
      </div>
      <?php include('include/_menu.php'); ?>
    </div>
	</body>
</html>
