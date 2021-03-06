<?php

namespace uraankhayayaal\redactor;

use vova07\imperavi\Asset;

class RedactorAsset extends Asset
{
	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@vova07/imperavi/assets';

	/**
	 * @var string Redactor language
	 */
	public $language;

	/**
	 * @var array Redactor plugins array
	 */
	public $plugins = [];

	/**
	 * @inheritdoc
	 */
	public $css = [
		'redactor.css'
	];

	/**
	 * @inheritdoc
	 */
	public $js = [
	    //'redactor.min.js'
	];

	/**
	 * @inheritdoc
	 */
	public $depends = [
		//'yii\web\JqueryAsset',
        'uraankhayayaal\redactor\RedactorFixAsset',
	];

	/**
	 * Register asset bundle language files and plugins.
	 */
	public function registerAssetFiles($view)
	{
		if ($this->language !== null) {
			$this->js[] = 'lang/' . $this->language . '.js';
		}
		if (!empty($this->plugins)) {
			foreach ($this->plugins as $plugin) {
				if ($plugin === 'clips') {
					$this->css[] = 'plugins/' . $plugin . '/' . $plugin . '.css';
				}
				$this->js[] = 'plugins/' . $plugin . '/' . $plugin .'.js';
			}
		}
		parent::registerAssetFiles($view);
	}
}
