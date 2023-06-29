<?php

namespace Answer\DcatRegion;

use Answer\DcatRegion\Form\Distpicker;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class RegionPickerServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
        'js/select2.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
        // 相当于 Admin::requireAssets()
        //https://cdn-static.coldyun.net/vendor/dcat-admin/dcat/plugins/select/select2.full.min.js?v2.2.2-beta
        admin_require_assets(['@select2']);
		parent::init();
        Form::extend('regionPicker', Distpicker::class);
        $this->publishable();
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
