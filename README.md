#Magentochile WebPay
Installation
1 - unzip de module in app/code/Magentochile.zip
2 - unzip de module in lib/libwebpay.zip
3 - enable module: bin/magento module:enable --clear-static-content Magentochile_Webpay
4 - upgrade: bin/magento setup:upgrade
5 - clean cache: bin/magento cache:clean

In order to deactivate the module bin/magento module:disable --clear-static-content Magentochile_Webpay

Important: make sure that php path is correct in bin/magento file
