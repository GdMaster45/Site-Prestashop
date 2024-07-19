<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__888482427ae6de7d00569e9d569cc503 */
class __TwigTemplate_f1d1a5407b0258bfa55702c6981dac96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Module manager • Akimmakako</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.1.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '3de35aaf94ab83a50c88d069e7bda16a';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '422efe26b5a7a5adb3eec2068deb7499';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin45/index.php/improve/modules/manage?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw';
    var admin_notification_get_link = '/admin45/index.php/common/notifications?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw';
    var admin_notification_push_link = adminNotificationPushLink = '/admin45/index.php/common/notifications/ack?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a produ";
        // line 43
        echo "ct';
  </script>



<link
      rel=\"preload\"
      href=\"/admin45/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin45/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin45/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin45/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/mpm_solutions/views/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin45\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin45\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"West African CFA Franc\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";";
        // line 71
        echo "
</script>
<script type=\"text/javascript\" src=\"/admin45/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin45/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin45/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin45/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"https://myprestamodules.com/modules/relatedmodules/js/modules.js?v=2024.07.18\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin45/index.php/common/notifications?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulesmanage\"
  data-base-url=\"/admin45/index.php\"  data-token=\"F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\"></a>
      <span id=\"shop_version\">8.1.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e46758ab9e8f0d209a78e56aa6b9344b\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://akimmakako.free.nf/admin45/index.php/improve/modules/manage?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php/sell/catalog/categories/new?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://akimmakako.free.nf/admin45/index.php/sell/catalog/products-v2/create?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item ";
        // line 139
        echo "quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php/sell/orders?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"122\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin45/index.php?controller=AdminSearch&amp;token=11112484d729607737b6bcc1845bf59c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" na";
        // line 180
        echo "me=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i";
        // line 194
        echo "> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e46758ab9e8f0d209a78e56aa6b9344b\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://akimmakako.free.nf/admin45/index.php/improve/modules/manage?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://akimmakako.free.nf/admin45/index.php/sell/catalog/categories/new?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://akimmakako.free.nf/admin45/index.php/sell/catalog/products-v2/create?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://akimmakako.free.nf/admin45/index.php/sell/orders?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
             data-item=\"Orders\"
    >Orders</a>
 ";
        // line 237
        echo "   <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"153\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://akimmakako.free.nf/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"";
        // line 285
        echo "
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=42c9493a63cedcc754cc6efcd6fe355b\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </di";
        // line 336
        echo "v>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://akimmakako.free.nf/img/pr/default.jpg\" alt=\"Gédéon Alex\" /></span>
        <span class=\"employee_profile\">Welcome back Gédéon Alex</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin45/index.php/configure/advanced/employe";
        // line 385
        echo "es/1/edit?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminLogin&amp;logout=1&amp;token=a325aa97d4f51ef9c2d6851fe594316f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin45/index.php/configure/advanced/employees/toggle-navigation?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
       ";
        // line 439
        echo "                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin45/index.php/sell/orders/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin45/index.php/sell/orders/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin45/index.php/sell/orders/invoices/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 470
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin45/index.php/sell/orders/credit-slips/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin45/index.php/sell/orders/delivery-slips/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarts&amp;token=42c9493a63cedcc754cc6efcd6fe355b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin45/index.php/sell/catalog/products?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
   ";
        // line 502
        echo "                   Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin45/index.php/sell/catalog/products?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin45/index.php/sell/catalog/categories?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin45/index.php/sell/catalog/monitoring/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                             ";
        // line 533
        echo "                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminAttributesGroups&amp;token=71edf79a2e544508fd75cceaade29fcb\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin45/index.php/sell/catalog/brands/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin45/index.php/sell/attachments/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\" class=\"";
        // line 561
        echo "link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin45/index.php/sell/stocks/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin45/index.php/sell/customers/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin45/index.php/sell/customers/?_tok";
        // line 594
        echo "en=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin45/index.php/sell/addresses/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCustomerThreads&amp;token=ad08ae4a010482f60f868d9a226a1bc2\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link";
        // line 626
        echo "-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCustomerThreads&amp;token=ad08ae4a010482f60f868d9a226a1bc2\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin45/index.php/sell/customer-service/order-messages/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminReturn&amp;token=e03f164dd9503a4bcf8d69d9b5e8360c\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminStats&amp;token=e46758ab9e8f0d209a78e56aa6b9344b\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                  ";
        // line 656
        echo "    <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin45/index.php/improve/modules/manage?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=";
        // line 693
        echo "\"/admin45/index.php/improve/modules/manage?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin45/index.php/improve/design/themes/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin45/index.php/improve/design/themes/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data";
        // line 725
        echo "-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin45/index.php/improve/design/mail_theme/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin45/index.php/improve/design/cms-pages/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin45/index.php/improve/design/modules/positions/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminImages&amp;token=506d7889d64204c4aee726ee22ba08b6\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                ";
        // line 756
        echo "                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin45/index.php/modules/link-widget/list?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarriers&amp;token=f08671754c643c7f7be797d58ebd8692\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarriers&amp;token=f08671754c643c7f7be797d58ebd8692\" class=\"link\"> Carriers
                                </a>
                              </li>

                              ";
        // line 787
        echo "                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin45/index.php/improve/shipping/preferences/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Payment Methods
              ";
        // line 817
        echo "                  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin45/index.php/improve/payment/preferences?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin45/index.php/improve/international/localization/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin45/index.php/improve";
        // line 849
        echo "/international/localization/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin45/index.php/improve/international/zones/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin45/index.php/improve/international/taxes/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin45/index.php/improve/international/translations/settings?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
       ";
        // line 883
        echo "             
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/order-prefere";
        // line 916
        echo "nces/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/product-preferences/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/customer-preferences/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin45/index.php/configure/shop/contacts/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 947
        echo "86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin45/index.php/configure/shop/seo-urls/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminSearchConf&amp;token=24d8a750ff479b5870b4bf35bae97cc4\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
     ";
        // line 978
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin45/index.php/configure/advanced/performance/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin45/index.php/configure/advanced/administration/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin45/index.php/configure/advanced/emails/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> E-mail
                                </a>
                              ";
        // line 1007
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin45/index.php/configure/advanced/import/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin45/index.php/configure/advanced/employees/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin45/index.php/configure/advanced/sql-requests/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin45/index.php/configure/advanced/logs/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Logs
           ";
        // line 1038
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin45/index.php/configure/advanced/webservice-keys/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin45/index.php/configure/advanced/feature-flags/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin45/index.php/configure/advanced/security/?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
          ";
        // line 1069
        echo "        </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin45/index.php/improve/modules/manage?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.6%2526country%253Den/Help?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-";
        // line 1127
        echo "pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin45/index.php/improve/modules/manage?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin45/index.php/improve/modules/alerts?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin45/index.php/improve/modules/updates?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
         ";
        // line 1148
        echo "               <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-to";
        // line 1171
        echo "ggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.6%2526country%253Den/Help?_token=F_1Zdspa7vAf8EC5qUhNuRcUQrGklbuMdnEU8b9fPkw\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1194
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1228
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1194
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1228
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__888482427ae6de7d00569e9d569cc503";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1393 => 1228,  1372 => 1194,  1361 => 102,  1352 => 1228,  1312 => 1194,  1287 => 1171,  1262 => 1148,  1239 => 1127,  1179 => 1069,  1146 => 1038,  1113 => 1007,  1082 => 978,  1049 => 947,  1016 => 916,  981 => 883,  945 => 849,  911 => 817,  879 => 787,  846 => 756,  813 => 725,  779 => 693,  740 => 656,  708 => 626,  674 => 594,  639 => 561,  609 => 533,  576 => 502,  542 => 470,  509 => 439,  453 => 385,  402 => 336,  349 => 285,  299 => 237,  254 => 194,  238 => 180,  195 => 139,  153 => 102,  120 => 71,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__888482427ae6de7d00569e9d569cc503", "");
    }
}
