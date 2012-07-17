<h2>PayPlans 2.1.1 (RC Release)</h2>
<p><b>Features Introduced &amp; Tasks<br></b></p>
<ul>
<li>Content Hider App is added.</li><li>Auto Login plugin created.</li><li>Automated Installation Process. (One click Payplans installation)</li><li>Added remove option to delete company logo into Payplans backend configuration screen.</li><li>Added changelog option on backend dashboard(data will come from github),fixes in backend dashboard.</li><li>Now forward users from view of order to subscription in front-end because from this release onwards we display only subscription records.</li><li>If theres no plans avalaible, do not show the group also (using parent child).</li><li>Delete all dummy entries(subscription, invoice, transaction, modifier, payment, order, wallet) when auto dummy delete record is set.</li><li>If administrator delete subscription record then all the related entries with that subscription will also be deleted.</li><li>Encode xml param in both subscription detail and userdetail app and written patch for encoding xml in userdetailApp.</li><li>Added delete option on invoice screen and added a patch to delete dummy invoices.</li></ul><p><br></p><p><b>Bugs and Fixes<br></b></p>

<ul>
<li>Bug fixed in renew. now if plan is not published during renewal then user will not be allowed to renew.</li><li>Bug fixed releated to merge plugins data, now we can render multiple apps optput at one position.</li><li>Fixed content app for dashboard pages.</li><li>Bug fixes related with routing issues.</li><li>Validation is applied when admin does not select any user for creating subscription.</li><li>Bug fixed for "Block Logging" in Expert Config doesn't allow multiple blockings.</li><li>Bug fixed for required class in radio type element.</li><li>Backup prefix will create according to installed payplans version.</li><li>Fix in patch testcase.</li><li>Bug fixed of checkout button.</li><li>Bug fixed when we display payment-app name into invoice and transaction partials (in case of free invoice).</li><li>Fix into renewal app according to changes in Payplans 2.1.</li><li>Display order cancel button from proper template.</li><li>SQL changes in app copy test case and add invoice test case.</li><li>PayNow Button not clickable and added title in change log(css related issue at frontend).</li><li>Bug fixed in renewal app and subscription details app according to PP2.1.</li><li>Created selenium testcase for prodiscount and added logos in acajoom, prodiscount and subscription detail apps.</li><li>Merged columns 'core discount' and 'plans' on discount grid screen and added xml parameters for J1.5+ in social discount plugin.</li><li>Fixed javascript and params conflict issue when edit/save fields in userdetail / subscription detail app.</li><li>Test case is created for merge plguin data.</li><li>Bug fixed for deleting subscription from backend.</li><li>Added option for showing actual consumption in prodiscount and discount app.</li><li>Fixed issue for token writer in subscription detail app.</li><li>Fixed Migration test case.</li><li>Bug fixed in paypalpro and authorizecim, now display proper currency symbol at proper position.</li><li>Select box added in authorize.net for selecting expiration date.</li><li>Bug fixed when asking for registration two times one at jomsocial or joomla registration button and other one at our login/register page.</li><li>Skip login page in comprofiler during direct registration.</li><li>Added patch for User-Detail app in language file.</li><li>Bug fixed related to small font size.</li>

</ul><p><br></p><p><b>PayPlans 2.1.0.2677(Beta Release)</b></p><p><b>Features Introduced</b></p><ul><li>paybywallet is added as core app(auto-installed) and wallet utilized amount at the time of renew the subscription with added order cancel option in recurring phase</li><li>improve formatter logs, improve logs for content, content acl,email,jsmultiprofile,jspt,error logs</li><li>added order cancel status</li><li>order is marked as cancel when subscription is cancelled</li><li>Create subscription detail app</li><li>utilize wallet balance for recurring subscription</li><li>Added option in backend to apply direct discount on invoices</li><li>Added basic menu for setup rule.</li><li>created payment app for wallet balance utilization</li><li>Created a new discount plugin for improving performance</li><li>ebs payment gateway</li><li>wallet recharging </li><li>Restructured routing.</li><li>display modifiers on invoice screen</li><li>improve template for order's log</li><li>now message will be shown to user if he clicks on Download Invoice link.</li><li>Add a patch to change mexican currency id </li><li>apply upgrades from backend</li><li>Added option in emailer app to send pre expiry mails on every cycle or on last cycle only</li><li>add option in basic tax to choose whether to display plan price included with tax on subscribe page</li><li>zoo element app created</li><li>added submission control in k2 app</li><li>Dompdf library upgraded to version 0.6.0 in pdfinvoice plugin to support more image types</li><li>move formatter code to the respective libs</li><li>bug when applied Extend subscription feature to the subscription having no status</li><li>Acajoom app created</li><li>intro text with subscription link in k2 category app</li><li>save created txn for free plan and added upgrade toolbar string in language file</li><li>Order grid/edit screen hidden.</li><li>invoice can be added on subscription screen.</li><li>display invoice id on transaction grid and edit screen and removed current invoice from these screens</li><li>single page checkout is implemented in 2checkout</li><li>added invoice status help at invoice edit screen</li><li>template changed for front-end invoice screen.</li><li>removed the setup check-list and migration module</li><li>merged order and subscription details on subscription edit screen</li><li>moved upgrade and cancel option on subscription screen and appropriate fixes in upgrade app to work on subscription screen</li><li>a new trigger has been introduced onPayplansPaymentRequest</li><li>Modified pdf layout of invoice in pdfinvoice plugin and added function in invoice helper to get wallet record from invoice &nbsp;</li><li>display subscriptions at front-end dashboard. also select from backend which subscription is to show</li><li>two functions are added for getting dicountable amount and non-taxable amount</li><li>Added multi select for category, section and article in content acl app.</li><li>skip-free-invoice plugin created</li><li>logs created for :- paybywallet,assign plan, user preferences,offline,google analytics,pap,widget,docman,tax,discount,eu vat,renewal,upgrade,userdetail,acymailing,juga,k2,mtree</li><li>refund case handled for wallet-recharge invoice order and subscription is marked as hold on invoice refund</li><li>Added Information and error log tab in backend dashboard</li><li>added functionality to get change logs from github and display it on backend dashboard</li><li>Show clickable warning message on backend dashboard if setup checklist screen is not clean</li><li>Facebook and twitter social discount plugin added</li><li>Added google plus one support for social discount</li><li>css improved for "My Subscriptions" page.</li><li>Added option to see total usage of discount code</li></ul><p><br></p><p><br></p><p><b>Bugs and Fixes<br></b></p><ul><li>issue with image width display on configuration screen</li><li>bug fixed in transaction of bank audi app</li><li>fix into base view to display multiple modules at one position and changes into transaction partial. Now we display payment app and transaction date at front-end rather than transaction message</li><li>bug fixed while displaying payment gateway name on transaction screen when payment record is deleted</li><li>Enable required plugin on installation.</li><li>Clear previous session values(if exist) on system requirement screen.</li><li>Bug fixing in routing.</li><li>fix in patch of remove module</li><li>modified upgrade messages </li><li>bug fixed in recurring subscription and grace period</li><li>orange and orange_dark folders deleted from themes folder and fix in patch</li><li>proper indexing of wallet, transaction and modifier table</li><li>few bug fixes in charts data accuracy</li><li>languge strings of sample data plugin are added in main language file</li><li>subscription view and controller created for front-end</li><li>display proper object on invoice edit screen</li><li>removed new invoice option</li><li>bug fixed in authorizecim for order cancellation.</li><li>removed invoice type menu item and fixed order display template</li><li>removed video link in basic tax app. and proper documentation link is provied</li><li>fixed into function name and joomla version compatibility.</li><li>bug fixed in upgrade app and renewal app, subtotal value is separately set on invoice</li><li>does not search for a username which contains only digits</li><li>euvat - business name doesn't save in admin side</li><li>fix in tos app(id of checkbox mentioned in js is wrong)</li><li>Bug fix in pdfinvoice: when invoice doesn't exist for some transactions</li><li>show proper theme color in themes select-box at backend configuration screen.</li><li>change order and invoice delete concept</li><li>bug fixed in acymailing. now we check if component of acymailing is exists or not.</li><li>bug fixed related to error at user's edit screen of backend. In Joomla 1.5 the name of user component at front-end is com_user and at backend it's name is com_users.</li><li>override file of one language is overwriting the other language file of PayPlans</li><li>ganalytics app is fixed</li><li>removed checkout functionality</li><li>bug fixed in upgrade app(display message while redirecting to invoice confim screen)</li><li>fix in subscription lib..now it will return the currency saved in its order rather than currency saved in cofiguration</li><li>bug fix in alert pay app</li><li>now use language string for app description and for help message and bug related at order screen(front-end) when no payment record is fixed</li><li>bug fixed related to css in rtl template.</li><li>If widget for usertype is created and user isn't login then the dashboard menu link is crashed</li><li>details at invoice confirm screen gets updated only after refresh</li><li>added ignoreType parameter in apps element</li><li>used apps element in wallet recharge request</li><li>PayPlans Installer::Add language string regarding above patches.</li><li>now payplans installation also run when installation exection time is 0</li><li>improve formatters for plan,invoice,order,subscription</li><li>bug fixed in price description on invoice confirm screen</li><li>ignore paybywallet app for wallet recharge methods</li><li>fixed bug in rokfeaturetable app</li><li>If content App (Apply On Login Page) and User detail App is published simultaneously, then it shows warning</li><li>bug fixed in paypal pro app, august in not getting displayed in the month list</li><li>modified addTransaction function in invoice and proper changes in upgrade app</li><li>bug fixed in paypal app, now order is marked as cancel on subscription cancellation</li><li>Order-Confirmed and Invoice-Confirmed status name is changed to Order-Checkout and Invoice-CheckOut</li><li>bug fixed in renewal when plan price is changed</li><li>Patch for wallet utilization and patch entry into log table</li><li>bug fixed in showing regular price in case of recurring invoice</li><li>bug fix on app edit screen due to hidden variable not found</li><li>bug fixed for renewal token</li><li>spell fix into content app</li><li>remove serach button from search module and make it compatible with IE</li><li>Unable to send email on error log when content is encoded</li><li>changes in module access file according to Joomla 2.5.4</li><li>Add a language string of installer and bug fix in patch.php</li><li>renamed xifactory as payplansFactory in content acl app file</li><li>bug fixed in paypalpro for recurring_payment_skipped txn_type</li><li>move the setup checklist option of dashboard in configuration screen</li><li>remove auto complete order and cron secret option from configuration screen</li><li>fixed issue in content acl app</li><li>remove setup and migration module and added sample data and setup checklist in configuration screen</li><li>bug fixed in paypal app,when dispute is filed by customer</li><li>Updating langauge file for social discount.</li><li>DELETE transaction records when user is deleted from backend</li><li>fix in sobipro app, now user can publish/unpublish their entries properly</li><li>bug fixed : when check out button is cliked more than one time</li><li>bug fixed related to small font size.</li><li>fix in subscription details app and at dashboard</li></ul>


<h2>PayPlans 2.1.0 (Beta Release)</h2>


<ul><li>Paybywallet is added</li><li>Create subscription detail app</li><li>Added option in backend to apply direct discount on invoices</li><li>prodiscount app created, a new discount plugin for improving performance</li><li>Ebs payment gateway</li><li>Restructured routing.</li><li>Wallet recharging </li><li>Display modifiers on invoice screen</li><li>Apply upgrades from backend</li><li>Added option in emailer app to send pre expiry mails on every cycle or on last cycle only</li><li>Zoo element access control app created</li><li>Add option in basic tax to choose whether to display plan price included with tax on subscribe page</li><li>Acajoom app created</li><li>Single page checkout is implemented in 2checkout</li><li>Merged order and subscription details on subscription edit screen</li><li>Two functions are added for getting discountable amount and non-taxable amount</li><li>Added multi select for category, section and article in content acl app.</li><li>Added functionality to get change logs from github and display it on backend dashboard</li><li>Facebook, Google plus and twitter social discount plugin added</li><li>Added option to see total usage of discount code</li><li>paybywallet is added as core app(auto-installed) and wallet utilized amount at the time of renew the subscription with added order cancel option in recurring phase</li><li>improve formatter logs, improve logs for content, content acl,email,jsmultiprofile,jspt,error logs</li><li>added order cancel status</li><li>order is marked as cancel when subscription is cancelled</li><li>Create subscription detail app</li><li>utilize wallet balance for recurring subscription</li><li>Added option in backend to apply direct discount on invoices</li><li>Added basic menu for setup rule.</li><li>created payment app for wallet balance utilization</li><li>Created a new discount plugin for improving performance</li><li>ebs payment gateway</li><li>wallet recharging </li><li>Restructured routing.</li><li>display modifiers on invoice screen</li><li>improve template for order's log</li><li>now message will be shown to user if he clicks on Download Invoice link.</li><li>Add a patch to change mexican currency id </li><li>apply upgrades from backend</li><li>Added option in emailer app to send pre expiry mails on every cycle or on last cycle only</li><li>add option in basic tax to choose whether to display plan price included with tax on subscribe page</li><li>zoo element app created</li><li>added submission control in k2 app</li><li>Dompdf library upgraded to version 0.6.0 in pdfinvoice plugin to support more image types</li><li>move formatter code to the respective libs</li><li>bug when applied Extend subscription feature to the subscription having no status</li><li>Acajoom app created</li><li>intro text with subscription link in k2 category app</li><li>save created txn for free plan and added upgrade toolbar string in language file</li><li>New subscription can be created from subscription screen.</li><li>Order grid/edit screen hidden.</li><li>invoice can be added on subscription screen.</li><li>display invoice id on transaction grid and edit screen and removed current invoice from these screens</li><li>single page checkout is implemented in 2checkout</li><li>added invoice status help at invoice edit screen</li><li>template changed for front-end invoice screen.</li><li>removed the setup check-list and migration module</li><li>merged order and subscription details on subscription edit screen</li><li>display upgrade parameter on subscription screen</li><li>moved upgrade and cancel option on subscription screen and appropriate fixes in upgrade app to work on subscription screen</li><li>a new trigger has been introduced onPayplansPaymentRequest</li><li>Modified pdf layout of invoice in pdfinvoice plugin and added function in invoice helper to get wallet record from invoice  </li><li>display subscriptions at front-end dashboard. also select from backend which subscription is to show</li><li>two functions are added for getting discountable amount and non-taxable amount</li><li>Added multi select for category, section and article in content acl app.</li><li>skip-free-invoice plugin created</li><li>prodiscount app created    </li><li>UI fixes in prodiscount app and in app's core details </li><li>logs created for :- paybywallet,assign plan, user preferences,offline,google analytics,pap,widget,docman,tax,discount,eu-vat,renewal,upgrade,userdetail,acymailing,juga,k2,mtree</li><li>refund case handled for wallet-recharge invoice order and subscription is marked as hold on invoice refund</li><li>Added Information and error log tab in backend dashboard</li><li>css related issues fix and made changes in look of frontend dashboard</li><li>added functionality to get change logs from github and display it on backend dashboard</li><li>Show clickable warning message on backend dashboard if setup checklist screen is not clean</li><li>Facebook and twitter social discount plugin added</li><li>Added google plus one support for social discount</li><li>css improved for My Orders page.</li><li>some fixes in css of dsahboard and icons added for some buttons</li><li>New subscription can be created from subscription screen.</li><li>Order grid/edit screen hidden.</li><li>invoice can be added on subscription screen.</li><li>display subscriptions at front-end dashboard. also select from backend which subscription is to show</li><li>two functions are added for getting dicountable amount and non-taxable amount</li><li>Added option to see total usage of discount code</li><li>issue with image width display on configuration screen</li><li>bug fixed in transaction of bank audi app</li><li>fix into base view to display multiple modules at one position and changes into transaction partial. Now we display payment app and transaction date at front-end rather than transaction message</li><li>bug fixed while displaying payment gateway name on transaction screen when payment record is deleted</li><li>Enable required plugin on installation.</li><li>Clear previous session values(if exist) on system requirement screen.</li><li>Bug fixing in routing.</li><li>fix in patch of remove module</li><li>modified upgrade messages </li><li>bug fixed in recurring subscription and grace period</li><li>orange and orange_dark folders deleted from themes folder and fix in patch</li><li>proper indexing of wallet, transaction and modifier table</li><li>few bug fixes in charts data accuracy</li><li>languge strings of sample data plugin are added in main language file</li><li>subscription view and controller created for front-end</li><li>display proper object on invoice edit screen</li><li>removed new invoice option</li><li>bug fixed in authorizecim for order cancellation.</li><li>removed invoice type menu item and fixed order display template</li><li>removed video link in basic tax app. and proper documentation link is provied</li><li>fixed into function name and joomla version compatibility.</li><li>bug fixed in upgrade app and renewal app, subtotal value is separately set on invoice</li><li>bug fixed in subscription module.</li><li>does not search for a username which contains only digits</li><li>euvat - business name doesn't save in admin side</li><li>fix in tos app(id of checkbox mentioned in js is wrong)</li><li>Bug fix in pdfinvoice: when invoice doesn't exist for some transactions</li><li>show proper theme color in themes select-box at backend configuration screen.</li><li>change order and invoice delete concept</li><li>bug fixed in acymailing. now we check if component of acymailing is exists or not.</li><li>bug fixed related to error at user's edit screen of backend. In Joomla 1.5 the name of user component at front-end is com_user and at backend it's name is com_users.</li><li>override file of one language is overwriting the other language file of PayPlans</li><li>ganalytics app is fixed</li><li>removed checkout functionality</li><li>bug fixed in upgrade app(display message while redirecting to invoice confim screen)</li><li>fix in subscription lib..now it will return the currency saved in its order rather than currency saved in cofiguration</li><li>bug fix in alert pay app</li><li>now use language string for app description and for help message and bug related at order screen(front-end) when no payment record is fixed</li><li>bug fixed related to css in rtl template.</li><li>If widget for usertype is created and user isn't login then the dashboard menu link is crashed</li><li>details at invoice confirm screen gets updated only after refresh</li><li>added ignoreType parameter in apps element</li><li>used apps element in wallet recharge request</li><li>PayPlans Installer::Add language string regarding above patches.</li><li>now payplans installation also run when installation exection time is 0</li><li>improve formatters for plan,invoice,order,subscription</li><li>bug fixed in price description on invoice confirm screen</li><li>ignore paybywallet app for wallet recharge methods</li><li>fixed bug in rokfeaturetable app</li><li>If content App (Apply On Login Page) and User detail App is published simultaneously, then it shows warning</li><li>bug fixed in paypal pro app, august in not getting displayed in the month list</li><li>modified addTransaction function in invoice and proper changes in upgrade app</li><li>bug fixed in paypal app, now order is marked as cancel on subscription cancellation</li><li>Order-Confirmed and Invoice-Confirmed status name is changed to Order-Checkout and Invoice-CheckOut</li><li>bug fixed in renewal when plan price is changed</li><li>Patch for wallet utilization and patch entry into log table</li><li>bug fixed in showing regular price in case of recurring invoice</li><li>bug fix on app edit screen due to hidden variable not found</li><li>bug fixed for renewal token</li><li>spell fix into content app</li><li>remove serach button from search module and make it compatible with IE</li><li>Unable to send email on error log when content is encoded</li><li>changes in module access file according to Joomla 2.5.4</li><li>Add a language string of installer and bug fix in patch.php</li><li>renamed xifactory as payplansFactory in content acl app file</li><li>bug fixed in paypalpro for recurring_payment_skipped txn_type</li><li>move the setup checklist option of dashboard in configuration screen</li><li>remove auto complete order and cron secret option from configuration screen</li><li>fixed issue in content acl app</li><li>remove setup and migration module and added sample data and setup checklist in configuration screen</li><li>bug fixed in paypal app,when dispute is filed by customer</li><li>Updating langauge file for social discount.</li><li>DELETE transaction records when user is deleted from backend</li><li>fix in sobipro app, now user can publish/unpublish their entries properly</li><li>bug fixed : when check out button is cliked more than one time</li><li>bug fixed related to small font size.</li><li>fix in subscription details app and at dashboard</li></ul>
