<?php
/**
 * Discord Integration
 * Copyright (C) Robin van Nunen (robin@vnunen.nl) for Discord modification
 * Copyright (C) Karim Ratib (karim@meedan.com) for original source
 *
 * Discord Integration is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * Discord Integration is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Discord Integration; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 * or see http://www.gnu.org/licenses/.
 */

form_security_validate('plugin_Discord_config');
access_ensure_global_level(config_get('manage_plugin_threshold'));
/**
 * Sets plugin config option if value is different from current/default
 *
 * @param string $p_name option name
 * @param string $p_value value to set
 *
 * @return void
 */
function config_set_if_needed($p_name, $p_value)
{
	if($p_value != plugin_config_get($p_name))
	{
		plugin_config_set($p_name, $p_value);
	}
}

$t_redirect_url = plugin_page('config_page', true);
layout_page_header(null, $t_redirect_url);
layout_page_begin();

config_set_if_needed('url_webhook', gpc_get_string('url_webhook'));
config_set_if_needed('skip_bulk', gpc_get_bool('skip_bulk'));
config_set_if_needed('link_names', gpc_get_bool('link_names'));

form_security_purge('plugin_Discord_config');

html_operation_successful($t_redirect_url);
layout_page_end();
