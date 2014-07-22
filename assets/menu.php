<?php 
if($lang)
{
echo ("<ul class=\"nav\">
<li><a href=\"/\">".$lang_home."</a></li>
<li><a href=\"?lang=".$lang."&amp;page=about\">".$lang_about."</a></li>
<li><a href=\"?lang=".$lang."&amp;page=contacts\">".$lang_contacts."</a></li>
</ul>");
}
?>