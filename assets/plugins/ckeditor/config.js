/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// Define changes to default configuration here. For example:
    config.language = 'en';
    // config.uiColor = '#AADC6E'; 
    config.toolbarGroups = [
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'links'},
        {name: 'insert'},
        {name: 'allMedias'},
        {name: 'tools'},
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        {name: 'styles'},
        {name: 'colors'}
//		{ name: 'about' }
    ];
    //config.extraPlugins = 'allmedias';
    config.format_span = {element:"span", name: "span"};
	config.format_tags = 'p;h1;h2;h3;h4;h5;h6;span;pre;address;div';
    config.allowedContent = true;
    config.fillEmptyBlocks = false;
    config.tabSpaces = 0;
    config.enterMode = CKEDITOR.ENTER_BR;

    config.filebrowserBrowseUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = 'http://' + self.location.host + '/template_2/assets/kcfinder/upload.php?type=flash';

};