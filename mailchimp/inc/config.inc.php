<?php
    //API Key - see http://admin.mailchimp.com/account/api
    $apikey = '5988a8c6c8cd416975585fbc1360e3ab-us6';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = 'be5c56b245';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILCHIMP CAMPAIGN ID - see campaigns() method';

    //some email addresses used in the examples:
    $my_email = 'INVALID@example.org';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
