<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block author_blocks is defined here.
 *
 * @package     block_author_blocks
 * @copyright   2019 iCampus21 <support@icampus21.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_author_blocks extends block_list {

	function init() {
        	$this->title = get_string('pluginname', 'block_author_blocks');
    	}

	function get_content() {

    		if ($this->content !== null) {
      	return $this->content;
   	 }
//capability
if (!has_capability('block/author_blocks:addinstance', $this->context)){
	return $this->content;
	}


$this->content         = new stdClass;
$this->content->items  = array();
$this->content->icons  = array();

$this->content->footer = '<hr>Code created and selected by <br/> <a href="https://icampus21.com" target="_blank"><img src="https://resources.icampus21.com/img/logo-iCampus21-150x75.png"></a>';

$this->content->items[] = html_writer::tag('a', 'Code Blocks', array('href' => 'https://resources.icampus21.com/author_blocks', 'target' => '_blank'));
$this->content->items[] = html_writer::tag('a', 'Templates:', array());
$this->content->items[] = html_writer::tag('a', '<span style="margin-left:10px;">- Basic</span>', array('href' => 'https://resources.icampus21.com/book-templates/basic/basic.html', 'target' => '_blank') );
$this->content->items[] = html_writer::tag('a', '<span style="margin-left:10px;">- Contemporary</span>', array('href' => 'https://resources.icampus21.com/book-templates/contemporary/contemporary.html', 'target' => '_blank') );
$this->content->items[] = html_writer::tag('a', '<span style="margin-left:10px;">- Craft</span>', array('href' => 'https://resources.icampus21.com/book-templates/craft/craft.html', 'target' => '_blank') );



  return $this->content;
}

    function applicable_formats()
    {
        return array(
            'course-view' => true //appears only at course view
        );
    }

}
