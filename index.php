<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wagonex Email Signatures</title>
  </head>
  <body>
    <?php
    $json = file_get_contents('data.json');
    $obj = json_decode( $json );
    //var_dump($obj);
    ?>
<style media="screen">
  span {
    color: #ccc;
  }
 .grid-container {
  display: grid;
  grid-template-columns: auto auto;
  }
  .grid-container > div {

  }
</style>
    <?php foreach($obj as $member): ?>
      <span style="display: block; margin: 20px 0;">copy from here</span>
      <div style="font-family:-apple-system, BlinkMacSystemFont, “Segoe UI”, Roboto, Helvetica, Arial, sans-serif;">
        <table border="0" cellspacing="0">
          <tr>
            <td style="padding-top: 5px;">
              <p style="color: #2D2E34; margin: 0px; padding-bottom: 2px; font-size: 16px!important; font-weight: 700; font-weight: bold;">
                <?php if(!empty($member->linkedin)): ?>
                <a style="color: #2A9FF4; text-decoration: none;" href="<?php echo $member->linkedin;?>"><?php echo $member->name; ?></a>
                <?php else: ?>
                  <?php echo $member->name; ?>
                <?php endif; ?>
              </p>
              <?php if(!empty($member->position)): ?><p style="margin: 0px; padding-bottom: 2px; font-size: 14px; color: #2D2E34;font-weight: 700; font-weight: bold;"><?php echo $member->position; ?></p><?php endif; ?>
              <div class="grid-container">
                <div class="item1">
                  <a href="https://wagonex.com/" target="_blank"><img src="https://wagonex.com/images/logo_blue.svg" height="30" style="padding: 38px 0"></a>
                </div>
                <div class="item2" style="padding: 10px 0; font-size: 14px; line-height: 22px;">
                  <?php if(!empty($member->mobile)): ?>
                    <p style="margin: 0; padding: 0; color: #2D2E34;">
                      <a style="color: #2D2E34; text-decoration: none;" href="tel:+44<?php echo $member->mobile; ?>">+44
                    <?php
                    $data_zero = substr($member->mobile, 0, 1);
                    $data_left = substr($member->mobile, 1, 4);
                    $data_right = substr($member->mobile, 5, 9);
                    echo '('.$data_zero.') '.$data_left.' '.$data_right;
                    ?>
                    </a></p><?php endif; ?>
                  <p style="margin: 0; padding: 0; color: #2D2E34;">
                    <a style="color: #2D2E34; text-decoration: none;" href="tel:+4402030020976">+44 (0) 20 3002 0976 </a>
                  <p style="color: #BEC9D6; margin: 0;">
                    <a href="https://www.linkedin.com/company/wagonex" target="_blank" style="color: #2D2E34; text-decoration: none;">LinkedIn</a> |
                    <a href="https://www.instagram.com/wagonex" target="_blank" style="color: #2D2E34; text-decoration: none;">Instagram</a> |
                    <a href="https://www.facebook.com/wagonex" target="_blank" style="color: #2D2E34; text-decoration: none;">Facebook</a> |
                    <a href="https://twitter.com/DriveWAGONEX" target="_blank" style="color: #2D2E34; text-decoration: none;">Twitter</a>
                  </p>
                  <p style="color: #BEC9D6; margin: 0;">
                    <a style="color: #2A9FF4; text-decoration: none; font-weight: bold;" href="https://wagonex.com" target="_blank">wagonex.com</a>
                  </p>
                </div>
              </div>
              <p style="font-size: 10px; color: #95A2BA; width: 420px; text-align: justify">This email is for the designated recipient only and may contain privileged, proprietary, or otherwise confidential information. If you have received it in error, please notify the sender immediately and delete the original. Any other use of the e-mail by you is prohibited. We take reasonable care to ensure that our emails are not infected by any virus or other malicious software, but we do not guarantee this. Wagonex Limited Company is registered under number 10312289.
              </p>                
            </td>
          </tr>
        </table>
      </div>
      <span style="display: block; margin: 20px 0;">to here</span>
    <?php endforeach; ?>
  </body>
</html>
