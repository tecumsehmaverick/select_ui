<?php
	
	/**
	 * @package select_ui
	 */
	
	/**
	 * A select box UI replacement that supports AJAX autocompletion.
	 */
	class Extension_Select_UI extends Extension {
		/**
		 * Extension information.
		 */
		public function about() {
			return array(
				'name'			=> 'Select UI',
				'version'		=> '0.1',
				'release-date'	=> '2011-05-05',
				'author'		=> array(
					array(
						'name'			=> 'Rowan Lewis',
						'website'		=> 'http://rowanlewis.com/',
						'email'			=> 'me@rowanlewis.com'
					)
				)
			);
		}
	}

?>