<?php
namespace TYPO3\DisqusCommentsExtbase\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package disqus_comments_extbase
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class DisqusCommentBoxController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * cObj
	 * 
	 * @return 
	 */
	private $cObj;
	
	private $output = '';

	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function showAction() {
		
		$frameworkConfiguration = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);
		$_extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['disqus_comments_extbase']);
		$disqus_shortname = $_extConfig['disqusshortname'];
		if(isset($frameworkConfiguration['shortname']) && !empty($frameworkConfiguration['shortname'])) {
			$disqus_shortname = $frameworkConfiguration['shortname'];
		}
		#$disqus_int3blog  = $_extConfig['disqusint3blog'];
		#$disqus_blogLoad  = $this->conf['t3blogLoad'];
		#if($disqus_blogLoad == 1 && $disqus_int3blog == 0) { return false; }
		if(empty($disqus_shortname)) { $content = 'Please insert your DISQUS shortname in the Extension config.'; }
		else {
		$content = '<div id="disqus_thread"></div>
					<script type="text/javascript">
						var disqus_shortname = "'.$disqus_shortname.'";
						
						(function() {
							var dsq = document.createElement("script"); dsq.type = "text/javascript"; dsq.async = true;
							dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js";
							(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>';
		}
		return $content;
	
	}
	
}
?>