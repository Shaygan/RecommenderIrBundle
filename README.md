ShayganRecommenderIrBundle
===================

A symfony2 wrapper bundle for  [Recommender.ir](http://recommender.ir).

## Install

Via Composer

``` bash
$ composer require shaygan/recommender-ir-bundle @dev
```

Edit your app/AppKernel.php to register the bundle in the registerBundles() method as above:


```php
class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            // ...
            // register the bundle here
            new \Shaygan\RecommenderIrBundle\ShayganRecommenderIrBundle()
        );
    }
}
```

## Configure the bundle

This bundle was designed to just work out of the box.

```yaml
# app/config/config.yml

shaygan_recommender:
    base_uri: http://example.com
    #user_agent: shaygan-recommender-ir (https://github.com/shaygan/recommenderir) 
    #connect_timeout: 30
    #timeout: 30
```
## Usage


Wherever you have access to the service container :
```php
<?php
    // get the api as a service
    $api = $this->container->get('shaygan.recommender');

    // test the API by calling getMe method
    $user = $api->getMe();

?>
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
