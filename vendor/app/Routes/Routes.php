<?php
return(
	array(
		array('GET', '/', 'blog@blog#index' , 'home'),
		array('GET', '/[i:year]/[i:month]/[:post].html', 'blog@blog#viewPost'),
		array('GET', '/[i:year]/[i:month]/', 'blog@blog#viewMonth'),
		array('GET', '/[i:year]/', 'blog@blog#viewYear'),
		array('GET', '/author/[:author]/', 'blog@blog#viewAuthor'),

		array('GET', '/admin/', 'admin@adminLogin#checkLogin' , 'admin'),
		array('GET', '/admin/login', 'admin@adminLogin#loginPage'),
		array('POST', '/admin/login', 'admin@adminLogin#tryLogin'),

        array('GET', '/admin/main', 'admin@adminPages#mainPage'),
        array('GET', '/admin/logout', 'admin@adminPages#logout'),

        array('GET', '/admin/sub/[:action]/[:subaction]', 'admin@adminPages#subPageRouter'),
        array('GET', '/admin/sub/[:action]', 'admin@adminPages#subPageRouter'),
		)
	);
?>