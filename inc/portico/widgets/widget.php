<?php
$activate = array(
	'blog-sidebar' => array(
		'search-1',
		'recent-posts-1',
		'categories-1',
		'recent-comments-1',	
		'archives-1'
	),
	'footer-widget-1' => array(
		'text-1'
	),
	'footer-widget-2' => array(
		'text-2'
	),
	'footer-widget-3' => array(
		'search-2'
	)
);

/* the default titles will appear */
update_option('widget_recent-posts', array(
	1 => array('title' => ''),
	2 => array('title' => '')
));

update_option('widget_categories', array(
	1 => array('title' => '')
));

update_option('widget_recent-comments', array(
	1 => array('title' => '')
));

update_option('widget_archives', array(
	1 => array('title' => '')
));

update_option('widget_text', array(
	1 => array('title' => 'Contact info',
		'text' => '309 E Carroll St<br>Salisbury,Maryland,21804<br><br>
		<i class="fa fa-envelope"></i>&nbsp&nbsp<a href="mailto:info@youremail.com">info@youremail.com</a><br>
		<i class="fa fa-volume-control-phone"></i>&nbsp&nbsp<a href="tel:+(00) 123-456-7891">+(00) 123-456-7891</a></address>
		'),
	2 => array('title' => 'Our Timings',
		'text' => '<table class="table table-responsive visting-hours">
		<tbody>
			<tr>
				<th>Monday</th>
				<td>
					08:00 - 16:00
				</td>
			</tr>
			<tr>
				<th>Tuesday</th>
				<td>
					08:00 - 18:00
				</td>
			</tr>
			<tr>
				<th>Wednesday</th>
				<td>
					09:30 - 12:00
				</td>
			</tr>
			<tr>
				<th>Thursday</th>
				<td>
					08:00 - 18:00
				</td>
			</tr>
			<tr>
				<th>Friday</th>
				<td>
					10:00 - 16:00
				</td>
			</tr>
			<tr>
				<th>Saturday</th>
				<td>
					08:00 - 13:00
				</td>
			</tr>
			<tr>
				<th>Sunday</th>
				<td>
					closed
				</td>
			</tr>	
		</tbody>
	</table>   
		')
));

update_option('widget_search', array(
	1 => array('title' => 'Search'),
	2 => array('title' => 'Search')
));

update_option('sidebars_widgets',  $activate);
