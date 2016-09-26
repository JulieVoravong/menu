<nav>
	<ul>
    	<li><a href="Page_1.php" <?php if ($curpage == 'Page_1.php') { echo ' class="active"'; } ?> >Page 1</a></li>
        <li><a href="Page_2.php" <?php if ($curpage == 'Page_2.php') { echo ' class="active"'; } ?>>Page 2</a></li>
        <li><a href="Page_3.php" <?php if ($curpage == 'Page_3.php') { echo ' class="active"'; } ?>>Page 3</a></li>
        <li><a href="Page_4.php" <?php if ($curpage == 'Page_4.php') { echo ' class="active"'; } ?>>Page 4</a></li>
        
    </ul>
    
</nav>