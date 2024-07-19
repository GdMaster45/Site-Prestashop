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

/* __string_template__8236d13e294d679b62153062d705f562 */
class __TwigTemplate_0346b56305f76fa3b29c9700982d8987 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__8236d13e294d679b62153062d705f562"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__8236d13e294d679b62153062d705f562"));

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

<title>Performance • Akimmakako</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
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
    var token = '8f0d9ec86886a04ba5d30f693fbe5414';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '422efe26b5a7a5adb3eec2068deb7499';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM';
    var admin_notification_get_link = '/admin45/index.php/common/notifications?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM';
    var admin_notification_push_link = adminNotificationPushLink = '/admin45/index.php/common/notifications/ack?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  ";
        // line 44
        echo "</script>



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
var changeFormLanguageUrl = \"\\/admin45\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"West African CFA Franc\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</scrip";
        // line 72
        echo "t>
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
      notificationGetUrl: '/admin45/index.php/common/notifications?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM',
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
  class=\"lang-en adminperformance developer-mode\"
  data-base-url=\"/admin45/index.php\"  data-token=\"U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">

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
          <a class=\"dropdown-item quick-row-link \"
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
          <a class=\"dropdown";
        // line 139
        echo "-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php/sell/orders?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"14\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
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
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query";
        // line 179
        echo "\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a";
        // line 193
        echo ">
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
      <a class=\"dropdown-item quick-row-link\"
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
    <div class=\"drop";
        // line 236
        echo "down-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"200\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Performance - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://akimmakako.free.nf/\" target= \"_blank\">
      <i class=\"material-icons\">visibilit";
        // line 280
        echo "y</i>
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
              class=\"nav-link active\"
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
            <p class=\"no-notificatio";
        // line 335
        echo "n\">
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
          </div>
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
  </script>";
        // line 381
        echo "
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin45/index.php/configure/advanced/employees/1/edit?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin45/index.php/configure/advanced/employees/toggle-navigation?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"";
        // line 428
        echo "main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin45/index.php/sell/orders/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/sell/orders/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Orders
       ";
        // line 468
        echo "                         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin45/index.php/sell/orders/invoices/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin45/index.php/sell/orders/credit-slips/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin45/index.php/sell/orders/delivery-slips/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarts&amp;token=42c949";
        // line 499
        echo "3a63cedcc754cc6efcd6fe355b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin45/index.php/sell/catalog/products?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin45/index.php/sell/catalog/products?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin45/index.p";
        // line 532
        echo "hp/sell/catalog/categories?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin45/index.php/sell/catalog/monitoring/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminAttributesGroups&amp;token=71edf79a2e544508fd75cceaade29fcb\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin45/index.php/sell/catalog/brands/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas";
        // line 563
        echo "s=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin45/index.php/sell/attachments/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin45/index.php/sell/stocks/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminMpmSolutions\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminMpmSolutions&amp;token=c32ebfebf27efb3bbeb12cc6c5790974\" class=\"link\"> Product Catalog Import
                                </a>
                              </li>

                                                                              </ul>
                                      ";
        // line 593
        echo "  </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin45/index.php/sell/customers/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/sell/customers/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin45/index.php/sell/addresses/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                  ";
        // line 625
        echo "                                                                  </ul>
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCustomerThreads&amp;token=ad08ae4a010482f60f868d9a226a1bc2\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin45/index.php/sell/customer-service/order-messages/?_token=U";
        // line 654
        echo "_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Order Messages
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
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                   ";
        // line 693
        echo "           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin45/index.php/improve/design/themes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
             ";
        // line 725
        echo "         <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin45/index.php/improve/design/themes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin45/index.php/improve/design/mail_theme/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin45/index.php/improve/design/cms-pages/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Pages
                                </a>
                              </li>

     ";
        // line 757
        echo "                                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin45/index.php/improve/design/modules/positions/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminImages&amp;token=506d7889d64204c4aee726ee22ba08b6\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin45/index.php/modules/link-widget/list?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://akimmakako.free.nf/ad";
        // line 788
        echo "min45/index.php?controller=AdminCarriers&amp;token=f08671754c643c7f7be797d58ebd8692\" class=\"link\">
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin45/index.php/improve/shipping/preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone h";
        // line 820
        echo "as_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin45/index.php/improve/payment/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                    ";
        // line 851
        echo "                                  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin45/index.php/improve/international/localization/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/improve/international/localization/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin45/index.php/improve/international/zones/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
               ";
        // line 881
        echo "               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin45/index.php/improve/international/taxes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin45/index.php/improve/international/translations/settings?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"mater";
        // line 918
        echo "ial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/order-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/product-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
             ";
        // line 948
        echo "                 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/customer-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin45/index.php/configure/shop/contacts/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin45/index.php/configure/shop/seo-urls/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminSearchConf&amp;token=24d8a750ff479b5870b4bf35bae97cc4\" class=\"link\"> Search
                                </a>
                ";
        // line 977
        echo "              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerforma";
        // line 1007
        echo "nce\">
                                <a href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin45/index.php/configure/advanced/administration/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin45/index.php/configure/advanced/emails/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin45/index.php/configure/advanced/import/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                         ";
        // line 1039
        echo "     <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin45/index.php/configure/advanced/employees/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin45/index.php/configure/advanced/sql-requests/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin45/index.php/configure/advanced/logs/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin45/index.php/configure/advanced/webservice-keys/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                              ";
        // line 1068
        echo "                                                                                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin45/index.php/configure/advanced/feature-flags/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin45/index.php/configure/advanced/security/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminBlog\">
                    <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCategoryBlog&amp;token=b1ecaa032cf80ba698704f873cf1fad3\" class=\"link\">
                      <i class=\"material-icons mi-description\">description</i>
                      <span>
                      Functional Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
           ";
        // line 1098
        echo "                                                 </i>
                                            </a>
                                              <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-AdminCategoryBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCategoryBlog&amp;token=b1ecaa032cf80ba698704f873cf1fad3\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"133\" id=\"subtab-AdminPostBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminPostBlog&amp;token=2b3b78bd4afcd188221b2b8cd5f5cb52\" class=\"link\"> Articles
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminCommentsBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCommentsBlog&amp;token=dfefa0e8f3084e96f314c79b12d18560\" class=\"link\"> Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 1128
        echo "veltwo\" data-submenu=\"135\" id=\"subtab-AdminSettingsBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminSettingsBlog&amp;token=d8a1fe0cb99360c5b502e676bde263a9\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin45/index.php/configure/advanced/performance/clear-cache?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"                  title=\"Clear cache\"                                  >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right";
        // line 1179
        echo "-sidebar\"
                   data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.6%2526country%253Den/Help?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/admin45/index.php/configure/advanced/performance/clear-cache?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.6%2526country%253Den/Help?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-succe";
        // line 1228
        echo "ss\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1232
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
        // line 1266
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1232
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1266
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__8236d13e294d679b62153062d705f562";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1517 => 1266,  1448 => 1232,  1413 => 102,  1398 => 1266,  1358 => 1232,  1352 => 1228,  1301 => 1179,  1248 => 1128,  1216 => 1098,  1184 => 1068,  1153 => 1039,  1119 => 1007,  1087 => 977,  1056 => 948,  1024 => 918,  985 => 881,  953 => 851,  920 => 820,  886 => 788,  853 => 757,  819 => 725,  785 => 693,  744 => 654,  713 => 625,  679 => 593,  647 => 563,  614 => 532,  579 => 499,  546 => 468,  504 => 428,  455 => 381,  407 => 335,  350 => 280,  304 => 236,  259 => 193,  243 => 179,  201 => 139,  159 => 102,  127 => 72,  97 => 44,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Performance • Akimmakako</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'US\\';
    var _PS_VERSION_ = \\'8.1.6\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'8f0d9ec86886a04ba5d30f693fbe5414\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'422efe26b5a7a5adb3eec2068deb7499\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\\';
    var admin_notification_get_link = \\'/admin45/index.php/common/notifications?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin45/index.php/common/notifications/ack?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
  ' | raw }}{{ '</script>



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
var baseAdminDir = \"\\\\/admin45\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin45\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"West African CFA Franc\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</scrip' | raw }}{{ 't>
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
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin45/index.php/common/notifications?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminperformance developer-mode\"
  data-base-url=\"/admin45/index.php\"  data-token=\"U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">

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
          <a class=\"dropdown-item quick-row-link \"
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
          <a class=\"dropdown' | raw }}{{ '-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://akimmakako.free.nf/admin45/index.php/sell/orders?token=dad6091dd7a58fcd2c2a05c3d5758c77\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"14\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
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
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query' | raw }}{{ '\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a' | raw }}{{ '>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
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
      <a class=\"dropdown-item quick-row-link\"
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
    <div class=\"drop' | raw }}{{ 'down-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"200\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Performance - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminQuickAccesses&token=b376c0c1f0348409295b2252869bb980\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://akimmakako.free.nf/\" target= \"_blank\">
      <i class=\"material-icons\">visibilit' | raw }}{{ 'y</i>
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
              class=\"nav-link active\"
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
            <p class=\"no-notificatio' | raw }}{{ 'n\">
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
          </div>
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
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>' | raw }}{{ '
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin45/index.php/configure/advanced/employees/1/edit?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin45/index.php/configure/advanced/employees/toggle-navigation?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"' | raw }}{{ 'main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminDashboard&amp;token=bc0a3b5392bd09ad521858c79ff747c9\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin45/index.php/sell/orders/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/sell/orders/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Orders
       ' | raw }}{{ '                         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin45/index.php/sell/orders/invoices/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin45/index.php/sell/orders/credit-slips/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin45/index.php/sell/orders/delivery-slips/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCarts&amp;token=42c949' | raw }}{{ '3a63cedcc754cc6efcd6fe355b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin45/index.php/sell/catalog/products?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin45/index.php/sell/catalog/products?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin45/index.p' | raw }}{{ 'hp/sell/catalog/categories?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin45/index.php/sell/catalog/monitoring/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminAttributesGroups&amp;token=71edf79a2e544508fd75cceaade29fcb\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin45/index.php/sell/catalog/brands/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas' | raw }}{{ 's=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin45/index.php/sell/attachments/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCartRules&amp;token=ee1505b5e7d1455272dcd31b82d44d0e\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin45/index.php/sell/stocks/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminMpmSolutions\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminMpmSolutions&amp;token=c32ebfebf27efb3bbeb12cc6c5790974\" class=\"link\"> Product Catalog Import
                                </a>
                              </li>

                                                                              </ul>
                                      ' | raw }}{{ '  </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin45/index.php/sell/customers/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/sell/customers/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin45/index.php/sell/addresses/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                  ' | raw }}{{ '                                                                  </ul>
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCustomerThreads&amp;token=ad08ae4a010482f60f868d9a226a1bc2\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin45/index.php/sell/customer-service/order-messages/?_token=U' | raw }}{{ '_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Order Messages
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
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                   ' | raw }}{{ '           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin45/index.php/improve/modules/manage?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin45/index.php/improve/design/themes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
             ' | raw }}{{ '         <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin45/index.php/improve/design/themes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin45/index.php/improve/design/mail_theme/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin45/index.php/improve/design/cms-pages/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Pages
                                </a>
                              </li>

     ' | raw }}{{ '                                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin45/index.php/improve/design/modules/positions/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminImages&amp;token=506d7889d64204c4aee726ee22ba08b6\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin45/index.php/modules/link-widget/list?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://akimmakako.free.nf/ad' | raw }}{{ 'min45/index.php?controller=AdminCarriers&amp;token=f08671754c643c7f7be797d58ebd8692\" class=\"link\">
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin45/index.php/improve/shipping/preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone h' | raw }}{{ 'as_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/improve/payment/payment_methods?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin45/index.php/improve/payment/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                    ' | raw }}{{ '                                  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin45/index.php/improve/international/localization/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
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
                                <a href=\"/admin45/index.php/improve/international/localization/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin45/index.php/improve/international/zones/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
               ' | raw }}{{ '               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin45/index.php/improve/international/taxes/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin45/index.php/improve/international/translations/settings?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"mater' | raw }}{{ 'ial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/preferences/preferences?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/order-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/product-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
             ' | raw }}{{ '                 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin45/index.php/configure/shop/customer-preferences/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin45/index.php/configure/shop/contacts/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin45/index.php/configure/shop/seo-urls/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminSearchConf&amp;token=24d8a750ff479b5870b4bf35bae97cc4\" class=\"link\"> Search
                                </a>
                ' | raw }}{{ '              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin45/index.php/configure/advanced/system-information/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerforma' | raw }}{{ 'nce\">
                                <a href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin45/index.php/configure/advanced/administration/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin45/index.php/configure/advanced/emails/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin45/index.php/configure/advanced/import/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                         ' | raw }}{{ '     <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin45/index.php/configure/advanced/employees/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin45/index.php/configure/advanced/sql-requests/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin45/index.php/configure/advanced/logs/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin45/index.php/configure/advanced/webservice-keys/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                              ' | raw }}{{ '                                                                                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin45/index.php/configure/advanced/feature-flags/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin45/index.php/configure/advanced/security/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminBlog\">
                    <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCategoryBlog&amp;token=b1ecaa032cf80ba698704f873cf1fad3\" class=\"link\">
                      <i class=\"material-icons mi-description\">description</i>
                      <span>
                      Functional Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
           ' | raw }}{{ '                                                 </i>
                                            </a>
                                              <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-AdminCategoryBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCategoryBlog&amp;token=b1ecaa032cf80ba698704f873cf1fad3\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"133\" id=\"subtab-AdminPostBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminPostBlog&amp;token=2b3b78bd4afcd188221b2b8cd5f5cb52\" class=\"link\"> Articles
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminCommentsBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminCommentsBlog&amp;token=dfefa0e8f3084e96f314c79b12d18560\" class=\"link\"> Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le' | raw }}{{ 'veltwo\" data-submenu=\"135\" id=\"subtab-AdminSettingsBlog\">
                                <a href=\"http://akimmakako.free.nf/admin45/index.php?controller=AdminSettingsBlog&amp;token=d8a1fe0cb99360c5b502e676bde263a9\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin45/index.php/configure/advanced/performance/?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin45/index.php/configure/advanced/performance/clear-cache?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"                  title=\"Clear cache\"                                  >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right' | raw }}{{ '-sidebar\"
                   data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.6%2526country%253Den/Help?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/admin45/index.php/configure/advanced/performance/clear-cache?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin45/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.6%2526country%253Den/Help?_token=U_OipErwL15hELgxEvWxWdcXbpj08STvjMkro1LmMuM\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-succe' | raw }}{{ 'ss\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

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
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__8236d13e294d679b62153062d705f562", "");
    }
}
