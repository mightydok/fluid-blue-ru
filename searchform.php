<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<input type="text" size="20" name="s" id="s" value="<?php _e('Поиск') ?>..."  onblur="if(this.value=='') this.value='<?php _e('Поиск') ?>...';" onfocus="if(this.value=='<?php _e('Поиск') ?>...') this.value='';"/>
</form>
