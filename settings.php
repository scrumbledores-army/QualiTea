<html>
	<head>
    <?php include('include/_imports.php'); ?>
		<meta charset="utf-8">
		<title>Qualitea</title>
	</head>

	<body>
    <?php include('include/_top_menu.php'); ?>
    <div class="content">
      <div class="scrollable">
        <header>
          <h1>Settings</h1>
        </header>

        <nav>
          <ul>
            <li><a href="#FAQ">FAQ</a></li>
            <li><a href="#Issues">Known Issues</a></li>
            <li><a href="#Versions">Version History</a></li>
            <li><a href="#Theme">Themes</a></li>
          </ul>
        </nav>

        <!-- Page's main content -->
        <main>

          <!-- FAQ -->
        <div>
          <h2 id="FAQ">Frequently Asked Questions</h2>
          <table>
            <p>Q: How do I make a drink?</p>
            <p>A: This isn't the app for that. Get a different one</p>
            <p>.</p>
            <p>Q: Qualitea?</p>
            <p>A: Yes</p>
        </div>
        
        <table id="Versions" border="1" style="border-collapse:collapse">
        <caption>Version History</caption>
        <thead><tr>
            <th style="border:2px black solid" colspan="1">Version</th>
            <th style="border:2px black solid" colspan="1">Date Released</th>
            <th style="border:2px black solid" colspan="1">Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0.1</td>
            <td>12/3/19</td>
            <td>Mockup</td>
          </tr>
          <tr>
            <td>0.0.1</td>
            <td>8/30/19</td>
            <td>Idea formed</td>
          </tr>
        </tbody>
        <tfoot>
          
            <p>Enjoying the app? Please leave us a review!</p>
            <tr> </tr>
            <tr> </tr>
        </tfoot>
        </table>
        </main>
        <div id="Issues">
        <h3>Known Issues</h3>
          <p>We know some of the drink pages don't work.
	  We know there are only 4 ingredients.
	  </p>
        </div>
        
        <div id="Theme">
        <h4>Themes</h4>
		<p>Dark</p>
		<p>Light</p>
		<p>Gray</p>
        </div>
        <footer>
          <p>©Copyright 2420 by me, myself, and I. All rights around and reversed.</p>
        </footer>
      </div>
    </div>
    <?php include('include/_bottom_menu.php'); ?>
	</body>
</html>



