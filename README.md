#Core by [LogicSpot]

This is the Core module dependency for all other LogicSpot modules for [Magento]
It also contains number of small fixes present in Magento

##Features
- Fix for New Relic Javascript problem occurring on Magento Admin sites when trying to load template in Transactional Emails template screen.
- Fix for merging css with background images error
- Allows to disable the Magento homepage (useful for Magento subfolder installation)
- Fixes the possible timeout in Core Magento Configurable swatches for Mediafallback helper

##Installation
There are 3 ways of installing Core module:

- use [modman] script - run modman clone https://github.com/LogicSpot/Magento_Core
- use [magento-composer-installer] composer wrapper for Magento modules

    Add the "logicspot/magento_core" to your project requirements, and run composer update

- Download module files and unpack them into your Magento install root directory

After installing module, logout and login into admin and clear Magento cache.

##Usage
For disabling the homepage access the Magento admin side go to System -> Configuration -> Web tab -> Default Pages section and
change the "Default Web Url" field to "disable_home"

##License
This module is distributed under GNU General Public License v3.0. Full text of the License can be found in LICENSE.txt file


[LogicSpot]:http://www.logicspot.com/
[Magento]:http://magento.com/
[modman]:https://github.com/colinmollenhour/modman
[magento-composer-installer]:https://github.com/Cotya/magento-composer-installer
