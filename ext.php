<?php
/**
*
* @package phpBB Extension - Fa Fa roll effect.
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net and martin - http://www.martins.homelinux.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\fafarolleffect;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	 * Enable extension if phpBB version requirement is met
	 *
	 * @return bool
	 * @access public
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '3.2.0-a1', '>=');
	}
}
