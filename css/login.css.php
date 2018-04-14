<?php
  header('Content-type: text/css');
  /*
    Hier werden Variablen und ggf.
    Algorithmen festgelegt.
  */
  function get_contents()
  {
      file_get_contents("https://source.unsplash.com/random/featured/?nature");
      return $http_response_header;
  }
  $url = explode(" ",get_contents()[7])[1];
?>
#body-login,
#body-user #header,
#body-settings #header,
#body-public #header {
        background-color: #777 !important;
        background-image: url('<?php echo $url; ?>') !important;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}

#body-login input.primary,
#body-login button.primary,
#body-login #alternative-logins li a {
    background-color: rgba(0, 0, 0, .5) !important;
}

/* Header icons get drop shadow for visibility */
#header .logo.logo-icon,
#appmenu svg,
.notifications .notifications-button img,
#contactsmenu .icon-contacts,
#expand .avatardiv-shown img,
#expand .expandDisplayName {
         /* Modified .icon-shadow with modified $color-box-shadow */
    filter: drop-shadow(0 0 3px rgba(50, 50, 50, .5)) !important;
}

/* Header icons get higher opacity for visibility */
#appmenu li a {
        opacity: .8;
}

.searchbox input[type="search"]:focus,
.searchbox input[type="search"]:active,
.searchbox input[type="search"]:valid {
        background-color: rgba(0, 0, 0, .5) !important;
        border: none !important
}

footer::before{
        position: relative;
        top:30px;
        color: white;
        content: "<a href='<?php echo $url; ?>'>Image on unsplash</a>";
}

