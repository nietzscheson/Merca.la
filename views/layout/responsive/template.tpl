<!DOCTYPE html>
<html>
  <head>
      <title>Responsive</title>
      <meta charset="UTF-8"/>
      <title>{$titulo|default:"Sin título"}</title>
      <link rel="stylesheet" href="{$_lP.ruta_bootstrap}css/bootstrap.css"/>
      <!--<script src="<?php echo $_layoutParams['ruta_js']?>jQuery.js"></script>-->
      <link rel="stylesheet" href="{$_lP.ruta_css}dashboard.css" />
      <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>
    <div id="wrapper">
      <div id="side-bar">
        <header id="cabezote">
          <a class="navbar-brand" href="{$_lP.root}">{$_lP.configs.app_name}</a>
        </header>
        <nav id="nav">

          {if isset($widgets.sidebar)}
            {foreach item=sidebar from=$widgets.sidebar}
              {$sidebar}
            {/foreach}
          {/if}

          {if isset($widgets.menuH)}
            {foreach item=menuH from=$widgets.menuH}
              {$menuH}
            {/foreach}
          {/if}

        </nav>
        <footer>
            <div id="footer-nav">
                <div class="contenido-footer">
                    Copyright &copy <a href="https://www.artesan.us" target="_blank">{$_lP.configs.app_company}</a>
                </div>
            </div>
        </footer>
      </div>
      <div id=""></div>
      <header id="header-contenido">
        <h1>{if isset($titulo)}{$titulo}{/if}</h1>
      </header>
      <div id="contenido">
        {include file=$_contenido}
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <footer>
          <div id="footer-bottom">
              <div class="contenido-footer">
                  Copyright &copy <a href="https://www.artesan.us" target="_blank">{$_lP.configs.app_company}</a>
              </div>
          </div>
      </footer>
        <script src="{$_lP.root}public/js/jQuery.js"></script>
        <script src="{$_lP.root}public/js/jquery.validate.js"></script>
        <script src="{$_lP.ruta_bootstrap}js/bootstrap.min.js"/></script>
        <script src="{$_lP.ruta_js}funciones.js"></script>
        <script type="text/javascript">
            var _root_ = '{$_lP.root}';
        </script>

        {if isset($_lP.js) && count($_lP.js)}
            {foreach item=js from=$_lP.js}
                <script src="{$js}"></script>
            {/foreach}
        {/if}
    </body>
</html>

<?php ob_end_flush();?>
