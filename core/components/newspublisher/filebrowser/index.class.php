<?php
/**
* Loads the newspublisher filebrowser manager page
* Revo 2.20 and above
*
* @package modx
* @subpackage newspublisher
*/

class FilebrowserManagerController extends modManagerController {
    public $ctx;
    public $loadBaseJavascript = true;
    public $loadHeader = false;
    public $loadFooter = false;

	public function initialize() {
		$this->gteRevo_2_3 = (boolean)version_compare($modx->version['full_version'],'2.3.0-rc1','');
	}

    /**
     * Check for any permissions or requirements to load page
     * @return bool
     */
    public function checkPermissions() {

        // only allow access if the browser was launched from within the newspublisher page
        return $this->modx->hasPermission('file_manager') && isset($_SESSION['newspublisher']['filebrowser'][$_GET['field']]);
    }

    /**
     * Register custom CSS/JS for the page
     * @return void
     */
    public function loadCustomCssJs() {
		$ver = $this->gteRevo_2_3 ? '' : '-2.0-2.2';
        $this->modx->regClientStartupScript(
			$this->modx->getOption('np.assets_url', null, MODX_ASSETS_URL . 'components/newspublisher/').
			'js/widgets/modx.np.browser'.$ver.'.js'
		);
    }

    /**
     * Custom logic code here for setting placeholders, etc
     * @param array $scriptProperties
     * @return mixed
     */
    public function process(array $scriptProperties = array()) {
        return $_SESSION['newspublisher']['filebrowser'][$_GET['field']];
    }

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('modx_resource_browser');
    }

    /**
     * Return the location of the template file
     * @return string
     */
    public function getTemplateFile() {
        $ver = $this->gteRevo_2_3 ? '' : '_2.2';
        return $this->modx->getOption('core_path').'components/newspublisher/filebrowser/index'.$ver.'.tpl';
    }

    /**
     * Specify the language topics to load
     * @return array
     */
    public function getLanguageTopics() {
        return array('file');
    }
}

