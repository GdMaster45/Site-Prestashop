<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.08.15
 * Time: 17:40
 */
require_once(dirname(__FILE__) . '/../../classes/customBlock.php');

class AdminCustomBlockController extends ModuleAdminController
{
  private $_imgDir;
  private $_idShop;
  private $_idLang;
  private $_obj;
  protected $position_identifier = 'id_customblock';

  public function __construct()
  {
    $this->className = 'customBlock';
    $this->table = 'customblock';
    $this->bootstrap = true;
    $this->lang = true;
    $this->edit = true;
    $this->delete = true;
    parent::__construct();
    $this->multishop_context = -1;
    $this->multishop_context_group = true;
    $this->position_identifier = 'id_customblock';
    $this->_defaultOrderBy = 'a!position';
    $this->orderBy = 'position';
    $this->_imgDir = _PS_MODULE_DIR_ . 'mpm_customblock/views/img/';
    $this->_idShop = Context::getContext()->shop->id;
    $this->_idLang = Context::getContext()->language->id;
    $this->_obj = new customBlock();

    $this->bulk_actions = array(
      'delete' => array(
        'text' => $this->l('Delete selected'),
        'icon' => 'icon-trash',
        'confirm' => $this->l('Delete selected items?')
      )
    );

    $this->fields_list = array(
      'id_customblock' => array(
        'title' => $this->l('ID'),
        'search' => true,
        'onclick' => false,
        'filter_key' => 'a!id_customblock',
        'width' => 20
      ),
      'title' => array(
        'title' => $this->l('Title'),
        'filter_key' => 'b!title',
        'search' => true,
        'width' =>100,
        'align' => 'left',
      ),
      'active' => array(
        'title' => $this->l('Displayed'),
        'search' => true,
        'active' => 'status',
        'type' => 'bool',
        'width' => 20,
      ),
      'position' => array(
        'title' => $this->l('Position'),
        'width' => 40,
        'search' => false,
        'filter_key' => 'a!position',
        'align' => 'left',
        'position' => 'position'
      ),
      'date_add' => array(
        'title' => $this->l('Date add'),
        'maxlength' => 190,
        'width' =>100,
        'align' => 'left',
      )
    );
  }

  public function init()
  {
    parent::init();
    if (Shop::getContext() == Shop::CONTEXT_SHOP && Shop::isFeatureActive() && Tools::getValue('viewcustomblock') === false)
      $this->_where = ' AND b.`id_shop` = '.(int)Context::getContext()->shop->id;
  }

  public function initProcess(){
    parent::initProcess();
  }

  public function initContent()
  {
    $settings = Configuration::get('GOMAKOIL_CUSTOM_BLOCK_HOOK');
    $form = $this->getFormGeneralSettings($settings);
    $this->tpl_list_vars['form'] = $form;
    $this->tpl_list_vars['token_admin'] = Tools::getAdminTokenLite('AdminCustomBlock');
    parent::initContent();
  }

  public function renderList()
  {
    $this->addRowAction('edit');
    $this->addRowAction('delete');
    return parent::renderList();
  }

  public function getFormGeneralSettings($settings){

    $hook = array(
      array(
        'id' => 'displayHomeContent1',
        'val' => 'displayHomeContent1',
        'name' => $this->l('displayHomeContent1')
      ),
      array(
        'id' => 'displayHomeContent2',
        'val' => 'displayHomeContent2',
        'name' => $this->l('displayHomeContent2')
      ),
      array(
        'id' => 'displayHomeContent3',
        'val' => 'displayHomeContent3',
        'name' => $this->l('displayHomeContent3')
      ),
      array(
        'id' => 'displayHomeContent4',
        'val' => 'displayHomeContent4',
        'name' => $this->l('displayHomeContent4')
      ),
      array(
        'id' => 'displayHomeContent5',
        'val' => 'displayHomeContent5',
        'name' => $this->l('displayHomeContent5')
      ),
    );

    $this->fields_form = array(
      'legend' => array(
        'title' => $this->l('Settings'),
        'icon' => 'icon-cogs'
      ),
      'input' => array(
        array(
          'type' => 'select',
          'label' => $this->l('Hook'),
          'name' => 'hook',
          'class' => '',
          'options' => array(
            'query' => $hook,
            'id' => 'id',
            'name' => 'name'
          )
        ),
        array(
          'type' => 'hidden',
          'name' => 'idLang',
        ),
        array(
          'type' => 'hidden',
          'name' => 'idShop',
        ),
        array(
          'type' => 'hidden',
          'name' => 'token_slider',
        ),
      ),
      'buttons' => array(
        'save' => array(
          'title' => $this->l('Save'),
          'name' => 'submitCustomBlock',
          'type' => 'submit',
          'class' => 'btn btn-default pull-right submitCustomBlock',
          'icon' => 'process-icon-save'
        ),
      ),
    );

    $this->fields_value['hook'] = $settings;
    $this->fields_value['idLang'] = $this->_idLang;
    $this->fields_value['idShop'] = $this->_idShop;
    $this->fields_value['token_slider'] = Tools::getAdminTokenLite('AdminCustomBlock');
    $this->tpl_form_vars['PS_ALLOW_ACCENTED_CHARS_URL'] = (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL');

    return parent::renderForm();
  }

  public function renderForm()
  {
    $ext = 'png';
    $obj = $this->loadObject(true);
    $image = $this->_imgDir.$obj->id.'.'.$ext;
    $image_url = ImageManager::thumbnail($image, $this->table.'_'.(int)$obj->id.'.'.$ext, 350, $ext, true, true);
    $image_size = file_exists($image) ? filesize($image) / 1000 : false;

    $this->fields_form = array(
      'tinymce' => true,
      'input' => array(
        array(
          'type' => 'switch',
          'label' => $this->l('Active'),
          'name' => 'active',
          'is_bool' => true,
          'values' => array(
            array(
              'id' => 'active_on',
              'value' => 1,
              'label' => $this->l('Yes')),
            array(
              'id' => 'active_off',
              'value' => 0,
              'label' => $this->l('No')),
          ),
        ),
        array(
          'type'              => 'file',
          'label'             => $this->l('Select a file'),
          'form_group_class'  => 'uploadImagesForm',
          'image'             => $image_url ? $image_url : false,
          'name'              => 'image',
          'size'              => $image_size,
          'delete_url'        => self::$currentIndex.'&'.$this->identifier.'='.(int)$obj->id.'&token='.$this->token.'&deleteImage=1',
        ),
        array(
          'type' => 'text',
          'label' => $this->l('Title'),
          'name' => 'title',
          'lang' => true,
        ),
        array(
          'type' => 'textarea',
          'label' => $this->l('Description'),
          'name' => 'description',
          'lang' => true,
          'autoload_rte' => true,
          'rows' => 10,
          'cols' => 100,
          'hint' => $this->l('Invalid characters:').' <>;=#{}'
        ),
      ),
      'submit' => array(
        'title' => $this->l('Save'),
      ),
      'buttons' => array(
        'save-and-stay' => array(
          'title' => $this->l('Save and stay'),
          'name' => 'submitAdd'.$this->table.'AndStay',
          'type' => 'submit',
          'class' => 'btn btn-default pull-right',
          'icon' => 'process-icon-save'
        ),
      ),
    );

    $this->tpl_form_vars['lang_def'] = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
    $this->tpl_form_vars['save_error'] = !empty($this->errors);
    $this->tpl_form_vars['idLang'] = $this->_idLang;
    $this->tpl_form_vars['idShop'] = $this->_idShop;
    $this->tpl_form_vars['PS_ALLOW_ACCENTED_CHARS_URL'] = (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL');

    return parent::renderForm();
  }


  protected function postImage($id)
  {
    $res = $this->uploadImage($id, 'image', $this->_imgDir, 'png', null, null);
    return $res;
  }

  protected function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
  {

    if (isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name']))
    {
      // Check image validity
      $max_size = isset($this->maxImageSize) ? $this->maxImageSize : 0;
      if (ImageManager::validateUpload($_FILES[$name], Tools::getMaxUploadSize($max_size))){

      }
      elseif (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES[$name]['tmp_name'], $tmpName)){
        return false;
      }
      else
      {
        $_FILES[$name]['tmp_name'] = $tmpName;
        // Copy new image
        if (!ImageManager::resize($tmpName, $dir.$id.'.'.$ext, (int)$width, (int)$height, $ext)){
          return false;
        }
         unlink($tmpName);
      }
    }

    return true;
  }

  public function ajaxProcessUpdatePositions()
  {
    $product_info = Tools::getValue('customblock');
    foreach($product_info as $key => $value){
      $value = explode('_', $value);
      Db::getInstance()->update('customblock', array('position' => (int)$key), 'id_customblock='.(int)$value[2]);
    }

  }

  public function postProcess()
  {
    if( Tools::getValue('deleteImage') ){

      if (Validate::isLoadedObject($object = $this->loadObject())){
        $object->deleteImage();
        unlink($this->_imgDir.$object->id.'.png');
      }
    }
    return parent::postProcess();
  }


  public function displayAjax()
  {
    $json = array();
    try{
      if (Tools::getValue('action') == 'saveCustom'){
        Configuration::updateValue('GOMAKOIL_CUSTOM_BLOCK_HOOK', Tools::getValue('hook'));
        $json['success'] = Module::getInstanceByName('mpm_customblock')->l("Successfully saved!") ;
      }
      die( json_encode($json) );
    }
    catch(Exception $e){
      $json['error'] = $e->getMessage();
      if( $e->getCode() == 10 ){
        $json['error_message'] = $e->getMessage();
      }
    }
    die( json_encode($json) );
  }


}