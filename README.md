# Magento2 ShowAddressFields

Show Address Fields in Customer Registration Form.

## Compatibility

Magento CE(EE) 2.0.x, 2.1.x, 2.2.x, 2.3.x

<img alt="Magento2 ShowAddressFields" src="https://karliuka.github.io/m2/showaddressfields/register.png" style="width:100%"/>

## Install with Composer as you go

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/module-customer-create-address
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento setup:upgrade
    php bin/magento setup:static-content:deploy
    php bin/magento setup:static-content:deploy  (optional)
    ```
