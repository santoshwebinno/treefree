@extends('shopify-app::layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link
      rel="stylesheet"
      href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body>
 <div class="loader"></div>

  <div class="Polaris-Page" style="max-width: none;">
    <div class="Polaris-Page-Header Polaris-Page-Header--hasNavigation Polaris-Page-Header--hasActionMenu Polaris-Page-Header--mobileView">
      <div class="Polaris-Page-Header__MainContent">

fghfgh fgh fg hfgh fgh fghfg hfgh
</div>
 </div>
 </div>
</body>
</html>


@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);

    </script>

    <script type="text/javascript">
      $(window).load(function() {
          $(".loader").fadeOut("slow");
      });
    </script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('images/5.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
</style>
@endsection



