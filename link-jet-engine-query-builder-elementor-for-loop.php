<?php

/**
 * Plugin Name: Link JetEngine Query Builder & Elementor Pro Loop
 * Description: Links JetEngine Query Builder with Elementor Loops using Custom Query ID.
 * Version:     1.0.0
 * Author:      Karel Faille
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
	die();
}

class KF_Query_Builder_Elementor_Loop
{

	public function __construct()
	{
		add_filter('elementor/query/query_args', [$this, 'apply_query_args'], 10, 2);
	}

	/**
	 * Apply Query Builder arguments for EPro Queries
	 *
	 * @param  array  $query_args
	 * @param  object $widget     [description]
	 * @return array
	 */
	public function apply_query_args($query_args, $widget)
	{
		$query = $this->get_widget_query($widget);

		if ($query) {
			$query_args = $this->maybe_add_paged($query->get_query_args());
		}

		return $query_args;
	}

	/**
	 * Try to get Query Builder query for given widget
	 *
	 * @param  object $widget EPro posts widget
	 * @return mixed
	 */
	public function get_widget_query($widget)
	{
		$query_id = $widget->get_settings('post_query_query_id');

		if (! $query_id) {
			return false;
		}

		return \Jet_Engine\Query_Builder\Manager::instance()->get_query_by_id($query_id);
	}

	/**
	 * Check if we need to add a paged argument to the query
	 *
	 * @param  array  $query_args Current query args
	 * @return array
	 */
	public function maybe_add_paged($query_args = [])
	{
		global $wp;

		if (! empty($wp->query_vars['page'])) {
			$query_args['paged'] = absint($wp->query_vars['page']);
		}

		return $query_args;
	}
}

new KF_Query_Builder_Elementor_Loop();
