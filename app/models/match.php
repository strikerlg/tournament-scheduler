<?php

class Match extends MvcModel {

	var $display_field = 'name';
    var $belongs_to = array('Tournament', "Team");
}

?>