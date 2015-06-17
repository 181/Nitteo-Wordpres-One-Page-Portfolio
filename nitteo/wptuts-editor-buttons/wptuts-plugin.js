(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton( 'my_mce_button', {
			text: '',
			icon: 'emoticons',
			type: 'menubutton',
			menu: [			
                                {
					text: 'Video',		
					onclick: function() {
                                            editor.windowManager.open( {
									title: 'Video',
									body: [
										{
                                                                                        type: 'textbox',
                                                                                        name: 'Category',
                                                                                        label: 'Set Category',
                                                                                        value: 'Default'
										},{
                                                                                        type: 'textbox',
                                                                                        name: 'url',
                                                                                        label: 'Set URL',
                                                                                        value: '#'
										}
										
									],
									onsubmit: function( e ) {
										editor.insertContent( '[vid category="' + e.data.Category + '" url="' + e.data.url + '"]...image without ahref...[/vid]');
									}
								});
							}
				},{
					text: 'Image',		
					onclick: function() {
                                            editor.windowManager.open( {
									title: 'Image',
									body: [
										{
                                                                                        type: 'textbox',
                                                                                        name: 'Category',
                                                                                        label: 'Set Category',
                                                                                        value: 'Default'
										}
										
									],
									onsubmit: function( e ) {
										editor.insertContent( '[img category="' + e.data.Category + '"]...image with ahref...[/img]');
									}
								});
							}
				}									
			]
		});
	});
})();