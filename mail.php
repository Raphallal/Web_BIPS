<?php

  error_reporting(-1);
  header('Content-Type:text/plain; charset=utf-8');

  function mailSend($mailSubject, $mailContent, $mailsArray, $mailsHidden)
  {
    $NL = "\r\n";
    $mailTo = stripslashes(implode(',', $mailsArray));
    $mailFrom = stripslashes('BIPS - Webmaster <webmaster@bips-asso.fr>');
    $mailSubject = stripslashes(urldecode($mailSubject));
    $mailContent = stripslashes(urldecode($mailContent));
    $mailHeaders = 'MIME-Version: 1.0'.$NL.
                   'Content-type: text/html; charset=utf-8'.$NL.
                   'From: '.$mailFrom.$NL.
                   'Reply-To: '.$mailFrom.$NL.
                   ($mailsHidden ? 'BCC: '.$mailTo.$NL : '').
                   'X-Mailer: PHP/'.phpversion().$NL;
    if ($mailsHidden) { $mailResult = mail('', $mailSubject, $mailContent, $mailHeaders); }
    else              { $mailResult = mail($mailTo, $mailSubject, $mailContent, $mailHeaders); }
    return $mailResult;
  }

  $mailsArray = array('adrian.dubuc.caldirac@gmail.com','adrian.dubuc-caldirac@u-psud.fr','vincent.vilcot@u-psud.fr');
  $mailSubject = 'Sujet du mail';
  $mailContent = 'Contenu du mail';
  //$mailSent = mailSend($mailSubject, $mailContent, $mailsArray, true);
  var_dump($mailSent);
  //$mailSent = mailSend($mailSubject, $mailContent, $mailsArray, false);
  var_dump($mailSent);

?>