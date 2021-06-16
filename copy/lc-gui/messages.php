<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="messages"; include_once("_include/modules/config.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head profile="http://gmpg.org/xfn/11">
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $page_encoding; ?>" />
	<meta name="keywords" content="<?php echo $site_keywords; ?>" />
	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="copyright" content="<?php echo $copy; ?>" />
    <link rel="shortcut icon" href="<?php echo $img_dir; ?>/icons/favicon.ico" type="image/x-icon" />
    <link rel="image_src" href="<?php echo $img_dir; ?>/misc/sitethumb.jpg" />
	<?php include("_include/modules/css-js.php"); ?>
    <?php include("_include/modules/google-analytics.php"); ?>

</head>
<body>

<div class="foundation-top">

     <?php include("_include/modules/top.php"); ?>

     <div class="container container_12 box-shadow clearfix">

        <div class="container-top clearfix">
            <h1>Messages</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Your Current Messages</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th><input type="checkbox" name="all" /></th>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th class="center">Date</th>
                                        <th class="center">Last Activity</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>2134</td>
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>4331</td>
                                        <td><a href="#">Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>41232</td>
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>1224</td>
                                        <td><a href="#">Rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>41232</td>
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><input type="checkbox" name="sel" /></td>
                                        <td>1224</td>
                                        <td><a href="#">Rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center last">
                                            <a href="#" class="action reply">Reply</a>
                                            <a href="#" class="action delete">Delete</a>
                                        </td>
                                    </tr>                                    
                                </table>
                                <div class="actions clearfix">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>New Message</span></a>
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Delete Selected</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                 <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>